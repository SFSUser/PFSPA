<?php

namespace Acme\SFSBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * SFSUsers
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SFSAccounts implements AdvancedUserInterface, EquatableInterface, \Serializable {

    public function __toString() {
        return $this->getUsername();
    }

    /**
     * Basicamente sirve para alternar los segundos parametros y asi poder
     * cambiar la jerarquia...
     */
    public static function elementORarray($user, $bundle, $entity, $e) {

        if (is_array($e)) {
            if (!empty($e))
                $p["p_explicit"] = true;
            return $e;
        }
        if (method_exists($e, "getPermisions")) {
            $p = $e->getPermisions();
            $p = is_array($p) ? $p : array();
            if (!empty($p))
                $p["p_element"] = true;
            return $p;
        }
        if ($e === "admin") {
            if (self::granted($user, "ROLE_ADMIN")) {
                return array(
                    "p_admin" => true,
                    "lectura" => true,
                    "escritura" => true,
                    "crear" => true,
                    "modificar" => true,
                    "eliminar" => true
                );
            }
        }
        if ($e === "roles") {
            return array(
                "p_roles" => true,
                "lectura" => self::entityGranted($user, $bundle, $entity, array("LECTURA")),
                "escritura" => self::entityGranted($user, $bundle, $entity, array("ESCRITURA")),
                "crear" => self::entityGranted($user, $bundle, $entity, array("CREAR")),
                "modificar" => self::entityGranted($user, $bundle, $entity, array("MODIFICAR")),
                "eliminar" => self::entityGranted($user, $bundle, $entity, array("ELIMINAR"))
            );
        }
        return array();
    }

    /**
     * Obtiene los permisions para una [clase-entidad] a partir de un objeto usuario.
     * Obtiene los permisos segun unos permisos definidos como principales.
     * Obtiene los permisos procesados segun los valores de un elemento.
     *
     * JERARQUIA:
     *
     * 1. Permisos declarados explícitamente en esta funcion.
     * 2. Permisos segun rango administrador.
     * 3. Permisos segun datos del elemento. (Llamando al metodo 'getPermisions' del objeto)
     * 4. Permisos declarados al usuario
     *
     * @param type $user
     * @param type $bundle
     * @param type $entity
     * @param type $rewrite_roles
     * @param type $element
     * @return type
     *
     * roles, element, admin, explicit
     */
    public static function getCurrentPermisions($user, $bundle, $entity, $jerarquia = array("roles", "admin")) {
        //Obtiene los permisos declarados en la tabla SFSRoles correspondiente al usuario actual.
        $permisions = array();

        $count = 0;
        foreach ($jerarquia as $j) {
            ++$count;
            $arr = self::elementORarray($user, $bundle, $entity, $j);
            if (empty($j))
                continue;

            foreach ($arr as $k => $v) {
                $permisions[$k] = $v;
            }
        }

        //Aplica jerarquia de permisos despues de los cambios aplicados.
        if (!$permisions["lectura"]) {
            $permisions["escritura"] = false;
        }
        if (!$permisions["escritura"]) {
            $permisions["crear"] = $permisions["modificar"] = $permisions["eliminar"] = false;
        }
        $permisions["check"] = "$bundle-$entity";
        //if(self::granted($user, "ROLE_ADMIN")){
        //    unset($permisions["list"]);
        //}
        return $permisions;
    }

    /**
     * Regresa TRUE si la entidad especificada y el usuario cumplen con los roles tipo [bundle-entidad] requeridos.
     *
     * @param type $user
     * @param type $bundle
     * @param type $entity
     * @param type $roles
     * @param type $single_roles
     * @return type
     */
    public static function entityGranted($user, $bundle, $entity, $roles, $single_roles = array()) {
        $roles = is_array($roles) ? $roles : array($roles);
        $single_roles = is_array($single_roles) ? $single_roles : array($single_roles);

        $check = false;
        $is_deny = $is_allow = false;
        //$is_admin = self::

        foreach ($single_roles as $role) {
            $sing_role = self::getRole($role);
            $check = $check || self::granted($user, $sing_role);
        }
        foreach ($roles as $role) {
            $allow_role = self::getRole($bundle, $entity, $role);
            $is_allow = $is_allow || self::granted($user, $allow_role);
            $deny_role = self::getRole($bundle, $entity, "NOT_$role");
            $is_deny = $is_deny || self::granted($user, $deny_role);
        }
        if($is_deny && !empty($roles) ) return false;
        ///if(!($is_deny || $is_allow)) return $check;

        return $check || ($is_allow && !empty($roles));
        /*if(empty($roles) && empty($sing_roles)){ return false; }
        if(empty($roles) && !empty($sing_roles)){
            return $is_sing;
        }
        if(!empty($roles) && empty($sing_roles)){
            return ($is_allow && !$is_deny);
        }*/
        //return $is_sing && ($is_allow && !$is_deny);
    }

    /**
     * Verifica si el usuario actual cumple con los roles especificados.
     * Regresa TRUE si tiene permisos.
     *
     * @param type $user
     * @param type $roles
     * @return boolean
     */
    public static function granted($user, $roles) {
        $roles = is_array($roles) ? $roles : array($roles);
        if ($user === null || !method_exists($user, "getRoles")) {
            return false;
        }

        $u_roles = $user->getRoles();
        //$role_admin = in_array("ROLE_ADMIN", $u_roles);

        foreach ($roles as $role) {
            //echo var_dump($roles);
            if (in_array($role, $u_roles)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @ORM\ManyToMany(targetEntity="SFSRoles")
     * @ORM\JoinTable(name="join_AccountRoles",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id")}
     *      )
     * */
    public $rolings;

    public function hasRole($role) {
        return (in_array($role, $this->getRoles()));
    }

    public function __construct() {
        $this->rolings = new \Doctrine\Common\Collections\ArrayCollection();
        $this->created = new \DateTime();
        $this->expiration = new \DateTime();
        $this->lastAccess = new \DateTime();
        $this->accountStatus = 1;
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=500)
     */
    private $avatar;

    public function getAvatar() {
        return $this->avatar;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=100, unique=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password = "";

    /**
     * @ORM\Column(name="roling", type="string", length=200)
     */
    //private $roling;

    /**
     * @ORM\Column(name="salt", type="string", length=40)
     */
    //private $salt;


    /**
     * @var integer
     *
     * @ORM\Column(name="access_level", type="integer")
     */
    //private $accessLevel;

    /**
     * @var integer
     *
     * @ORM\Column(name="account_status", type="integer")
     */
    private $accountStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="confirm_key", type="string", length=100)
     */
    //private $confirmKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_access", type="datetime")
     */
    private $lastAccess;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration", type="date")
     */
    private $expiration;

    function getExpiration() {
        return $this->expiration;
    }

    function setExpiration($expiration) {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="confirmed", type="datetime")
     */
    //private $confirmed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="date")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="session_token", type="string", length=100)
     */
    //private $sessionToken;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return SFSUsers
     */
    public function setUser($user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return SFSUsers
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return SFSUsers
     */
    public function setPassword($password) {
        if ($password !== "*****") {
            $this->password = $password;
        }

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /*     * ************** */
    /*
      public function getSalt()
      {
      return $this->salt;
      }

      public function setSalt($salt)
      {
      $this->salt = $salt;
      return $this;
      }
     * */
    /*     * ************** */

    /*     * ************************** */

    /**
     * Set accessLevel
     *
     * @param integer $accessLevel
     * @return SFSUsers
     */
//    public function setAccessLevel($accessLevel)
//    {
//        $this->accessLevel = $accessLevel;
//
//        return $this;
//    }

    /**
     * Get accessLevel
     *
     * @return integer
     */
//    public function getAccessLevel()
//    {
//        return $this->accessLevel;
//    }

    /**
     * Set accountStatus
     *
     * @param integer $accountStatus
     * @return SFSUsers
     */
    public function setAccountStatus($accountStatus) {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Get accountStatus
     *
     * @return integer
     */
    public function getAccountStatus() {
        return $this->accountStatus;
    }

    /**
     * Set confirmKey
     *
     * @param string $confirmKey
     * @return SFSUsers
     */
//    public function setConfirmKey($confirmKey)
//    {
//        $this->confirmKey = $confirmKey;
//
//        return $this;
//    }

    /**
     * Get confirmKey
     *
     * @return string
     */
//    public function getConfirmKey()
//    {
//        return $this->confirmKey;
//    }

    /**
     * Set lastAccess
     *
     * @param \DateTime $lastAccess
     * @return SFSUsers
     */
    public function setLastAccess($lastAccess) {
        $this->lastAccess = $lastAccess;
        return $this;
    }

    /**
     * Get lastAccess
     *
     * @return \DateTime
     */
    public function getLastAccess() {
        return $this->lastAccess;
    }

    /**
     * Set confirmed
     *
     * @param \DateTime $confirmed
     * @return SFSUsers
     */
//    public function setConfirmed($confirmed)
//    {
//        $this->confirmed = $confirmed;
//
//        return $this;
//    }

    /**
     * Get confirmed
     *
     * @return \DateTime
     */
//    public function getConfirmed()
//    {
//        return $this->confirmed;
//    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return SFSUsers
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set sessionToken
     *
     * @param string $sessionToken
     * @return SFSUsers
     */
//    public function setSessionToken($sessionToken)
//    {
//        $this->sessionToken = $sessionToken;
//
//        return $this;
//    }

    /**
     * Get sessionToken
     *
     * @return string
     */
//    public function getSessionToken()
//    {
//        return $this->sessionToken;
//    }

    public function eraseCredentials() {

    }

    public static function getRole($bundle, $entity = "", $plus = "") {
        $role = "ROLE_$bundle";
        IF ($entity !== "") {
            $role .= "_$entity";
        }
        if ($plus !== "") {
            $role .= "_$plus";
        }
        return $role;
    }

    public function getRoles() {
        $roles = array();

        foreach ($this->rolings as $x) {

            $identifier = $x->getIdentificador();
            //$identifier = preg_replace('/\s+/', '', $identifier);
            $id_parts = preg_split("/ (,|;) /", $identifier);
            foreach ($id_parts as $rol) {
                $rol = trim($rol);
                $roles[] = self::getRole($rol); //"ROLE_" . $x->getIdentificador();
            }


            foreach ($x->refSFSTableRoles as $y) {
                $table = $y->getTabla();

                $table = explode(":", $table);
                $bundle = $table[0];
                $entity = $table[1];

                //$table = str_replace(":", "_", $table);

                $roles[] = self::getRole($bundle, $entity); // "ROLE_" . $table;
                $LECT = $y->getLectura();
                $ESCR = $LECT ? $y->getEscritura() : $LECT;

                $CREA = $ESCR ? $y->getCrear() : $ESCR;
                $MODI = $ESCR ? $y->getModificar() : $ESCR;
                $ELIM = $ESCR ? $y->getEliminar() : $ESCR;

                if ($LECT) {
                    $roles[] = self::getRole($bundle, $entity, "LECTURA"); // "ROLE_" . $table . "_LECTURA";
                } else {
                    $roles[] = self::getRole($bundle, $entity, "NOT_LECTURA"); // "ROLE_" . $table . "_NOT_LECTURA";
                }
                if ($ESCR) {
                    $roles[] = self::getRole($bundle, $entity, "ESCRITURA"); // "ROLE_" . $table . "_ESCRITURA";
                } else {
                    $roles[] = self::getRole($bundle, $entity, "NOT_ESCRITURA"); // "ROLE_" . $table . "_NOT_ESCRITURA";
                }
                if ($CREA) {
                    $roles[] = self::getRole($bundle, $entity, "CREAR"); // "ROLE_" . $table . "_CREAR";
                } else {
                    $roles[] = self::getRole($bundle, $entity, "NOT_CREAR"); // "ROLE_" . $table . "_NOT_CREAR";
                }
                if ($MODI) {
                    $roles[] = self::getRole($bundle, $entity, "MODIFICAR"); // "ROLE_" . $table . "_MODIFICAR";
                } else {
                    $roles[] = self::getRole($bundle, $entity, "NOT_MODIFICAR"); // "ROLE_" . $table . "_NOT_MODIFICAR";
                }
                if ($ELIM) {
                    $roles[] = self::getRole($bundle, $entity, "ELIMINAR"); // "ROLE_" . $table . "_ELIMINAR";
                } else {
                    $roles[] = self::getRole($bundle, $entity, "NOT_ELIMINAR"); // "ROLE_" . $table . "_NOT_ELIMINAR";
                }
            }
        }
        return $roles;
        //return explode(",", $this->roling);
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        return $this->user;
    }

    public function isEqualTo(UserInterface $user) {
        if (true)
            return false;

        if ($this->password !== $user->getPassword()) {
            return false;
        }
        /*
          if ($this->salt !== $user->getSalt()) {
          return false;
          } */

        if ($this->user !== $user->getUsername()) {
            return false;
        }

        return true;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->user,
            $this->password,
            $this->avatar,
            $this->accountStatus,
            $this->email,
            $this->created,
            $this->lastAccess,
            $this->expiration
                // see section on salt below
                // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->user,
                $this->password,
                $this->avatar,
                $this->accountStatus,
                $this->email,
                $this->created,
                $this->lastAccess,
                $this->expiration
                // see section on salt below
                // $this->salt
                ) = unserialize($serialized);
    }

    public function isAccountNonExpired() {
        $now = new \DateTime();
        if ($this->getExpiration() < $now && ($this->getExpiration() > $this->getCreated())) {
            //echo "<h1 style='margin-top:200px'>Ha expirado</h1>";
            return false;
        }

        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->accountStatus == 1;
    }

}
