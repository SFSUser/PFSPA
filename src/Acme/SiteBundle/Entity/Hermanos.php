<?php

namespace Acme\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hermanos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Hermanos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Fraternidad")
     * @ORM\JoinColumn(name="fraternidad", referencedColumnName="id")
     */
    public $reffraternidad;
	
	public function __construct(){
		$this->clave = mt_rand(100000,999999); 
	}
    
    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=20, unique=true)
     */
    private $nick;
    public function getNick(){
        return $this->nick;
    }
    public function setNick($n){
        $this->nick = $n;
        return $this;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=200)
     */
    private $apellidos;
    
    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=200)
     */
    private $correo;
    
    
    public function getCorreo(){ return $this->clave;}
    public function setCorreo($c){$this->correo = $c; return $this->correo; }
    
    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=200)
     */
    private $clave;
    
    public function getClave(){ return $this->clave;}
    public function setClave($c){$this->clave = $c; return $this->clave; }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nacimiento", type="date")
     */
    private $nacimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fallecido", type="date", nullable=true)
     */
    private $fallecido;

    /**
     * @var string
     *
     * @ORM\Column(name="biografia", type="text")
     */
    private $biografia;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200)
     */
    private $telefono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vsimples", type="date", nullable=true)
     */
    private $vsimples;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vsolemnes", type="date", nullable=true)
     */
    private $vsolemnes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ordenacion", type="date", nullable=true)
     */
    private $ordenacion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=300)
     */
    private $lugar;

    /**
     * @var integer
     *
     * @ORM\Column(name="fraternidad", type="integer")
     */
    private $fraternidad;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=600)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=400)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="cargoprov", type="string", length=400)
     */
    private $cargoprov;


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
     * @return Hermanos
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Hermanos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nacimiento
     *
     * @param \DateTime $nacimiento
     * @return Hermanos
     */
    public function setNacimiento($nacimiento)
    {
        $this->nacimiento = $nacimiento;
    
        return $this;
    }

    /**
     * Get nacimiento
     *
     * @return \DateTime 
     */
    public function getNacimiento()
    {
        return $this->nacimiento;
    }

    /**
     * Set fallecido
     *
     * @param \DateTime $fallecido
     * @return Hermanos
     */
    public function setFallecido($fallecido)
    {
        $this->fallecido = $fallecido;
    
        return $this;
    }

    /**
     * Get fallecido
     *
     * @return \DateTime 
     */
    public function getFallecido()
    {
        return $this->fallecido;
    }

    /**
     * Set biografia
     *
     * @param string $biografia
     * @return Hermanos
     */
    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;
    
        return $this;
    }

    /**
     * Get biografia
     *
     * @return string 
     */
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Hermanos
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

    /**
     * Set vsimples
     *
     * @param \DateTime $vsimples
     * @return Hermanos
     */
    public function setVsimples($vsimples)
    {
        $this->vsimples = $vsimples;
    
        return $this;
    }

    /**
     * Get vsimples
     *
     * @return \DateTime 
     */
    public function getVsimples()
    {
        return $this->vsimples;
    }

    /**
     * Set vsolemnes
     *
     * @param \DateTime $vsolemnes
     * @return Hermanos
     */
    public function setVsolemnes($vsolemnes)
    {
        $this->vsolemnes = $vsolemnes;
    
        return $this;
    }

    /**
     * Get vsolemnes
     *
     * @return \DateTime 
     */
    public function getVsolemnes()
    {
        return $this->vsolemnes;
    }

    /**
     * Set ordenacion
     *
     * @param \DateTime $ordenacion
     * @return Hermanos
     */
    public function setOrdenacion($ordenacion)
    {
        $this->ordenacion = $ordenacion;
    
        return $this;
    }

    /**
     * Get ordenacion
     *
     * @return \DateTime 
     */
    public function getOrdenacion()
    {
        return $this->ordenacion;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return Hermanos
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    
        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set fraternidad
     *
     * @param integer $fraternidad
     * @return Hermanos
     */
    public function setFraternidad($fraternidad)
    {
        $this->fraternidad = $fraternidad;
    
        return $this;
    }

    /**
     * Get fraternidad
     *
     * @return integer 
     */
    public function getFraternidad()
    {
        return $this->fraternidad;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Hermanos
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return Hermanos
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    
        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set cargoprov
     *
     * @param string $cargoprov
     * @return Hermanos
     */
    public function setCargoprov($cargoprov)
    {
        $this->cargoprov = $cargoprov;
    
        return $this;
    }

    /**
     * Get cargoprov
     *
     * @return string 
     */
    public function getCargoprov()
    {
        return $this->cargoprov;
    }
}
