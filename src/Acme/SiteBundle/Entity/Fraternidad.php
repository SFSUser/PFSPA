<?php

namespace Acme\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraternidad
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Fraternidad
{
        /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Hermanos", mappedBy="reffraternidad")
     */
    public $hermanos;
    // ...

    public function __construct() {
        $this->hermanos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString() {
        return $this->nombre . " - " . $this->ubicacion;
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;


    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=300)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=400)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="funcion", type="string", length=100)
     */
    private $funcion;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=300)
     */
    private $correo;  
    
    /**
     * @var string
     *
     * @ORM\Column(name="mapa", type="string", length=300)
     */
    private $mapa;
    
    public function getMapa(){
        return $this->mapa;
    }
    public function setMapa($m){
        $this->mapa = $m;
        return $this;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="imagenes", type="text")
     */
    private $imagenes;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="contenido", type="text")
     */
    private $contenido;


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
     * @return Fraternidad
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Fraternidad
     */
    public function setContenido($descripcion)
    {
        $this->contenido = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Fraternidad
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    
        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Fraternidad
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
     * Set direccion
     *
     * @param string $direccion
     * @return Fraternidad
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set funcion
     *
     * @param string $funcion
     * @return Fraternidad
     */
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;
    
        return $this;
    }

    /**
     * Get funcion
     *
     * @return string 
     */
    public function getFuncion()
    {
        return $this->funcion;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Fraternidad
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    
        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set imagenes
     *
     * @param string $imagenes
     * @return Fraternidad
     */
    public function setImagenes($imagenes)
    {
        $this->imagenes = $imagenes;
    
        return $this;
    }

    /**
     * Get imagenes
     *
     * @return string 
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }
}
