<?php

namespace Acme\SFSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SFSSchemaEvent
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SFSSchemaEvent
{
    public function __construct() {
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("Utils");
        $this->ip = \Utils::getRealRemoteIP();
        
        $this->fecha = new \DateTime();
        $this->fecha->setTimezone(new \DateTimeZone('America/Bogota'));
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
     * @ORM\Column(name="ip", type="string", length=25)
     */
    private $ip;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
    
    function getIp() {
        return $this->ip;
    }

    function setIp($ip) {
        $this->ip = $ip;
        return $this;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="entity", type="string", length=255)
     */
    private $entity;

    /**
     * @var string
     *
     * @ORM\Column(name="event", type="string", length=50)
     */
    private $event;
    
    /**
     * @var string
     *
     * @ORM\Column(name="account", type="string", length=50)
     */
    private $account;
    function getAccount() {
        return $this->account;
    }

    function setAccount($account) {
        $this->account = $account;
        return $this;
    }

        /**
     * @var integer
     *
     * @ORM\Column(name="identifier", type="integer")
     */
    private $identifier;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SFSSchemaEvent
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set entity
     *
     * @param string $entity
     * @return SFSSchemaEvent
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    
        return $this;
    }

    /**
     * Get entity
     *
     * @return string 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set event
     *
     * @param string $event
     * @return SFSSchemaEvent
     */
    public function setEvent($event)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set identifier
     *
     * @param integer $identifier
     * @return SFSSchemaEvent
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    
        return $this;
    }

    /**
     * Get identifier
     *
     * @return integer 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
}
