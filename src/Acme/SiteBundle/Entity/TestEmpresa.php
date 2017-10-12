<?php

namespace Acme\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestEmpresa
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TestEmpresa
{
    //cascade={"remove"}, orphanRemoval=true
    
    /**
     * @ORM\ManyToMany(targetEntity="TestUser")
     * @ORM\JoinTable(name="join_EmpresaUser_pred",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    public $pred_usuarios;
    
    /**
     * @ORM\ManyToMany(targetEntity="TestUser")
     * @ORM\JoinTable(name="join_EmpresaUser",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    public $usuarios;
    

    public function __construct()
    {
        $this->pred_usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->usuarios->;
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
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $telefono;
    
    /**
     *
     * @ORM\OneToOne(targetEntity="TestTelefonos")
     * @ORM\JoinColumn(name="telefono", referencedColumnName="id")
     */
    //public $testtelefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=255)
     */
    private $nit;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TestEmpresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return TestEmpresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return TestEmpresa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
