<?php

//src/Acme/SearchBundle/EventListener/SearchIndexerSubscriber.php

namespace Acme\SFSBundle;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
// for Doctrine 2.4: Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Acme\SiteBundle\Entity\FacturacionElemento;
use Acme\SiteBundle\Entity\FacturacionFactura;

class DinamicEntityListener implements EventSubscriber {
    var $doctrine = null;
    public function __construct(\Doctrine\Bundle\DoctrineBundle\Registry $doctrine) {
        $this->doctrine = $doctrine;
    }
    
    public function getSubscribedEvents() {
        return array(
            'postPersist',
            'postUpdate',
            'postRemove',
            'prePersist',
            'preUpdate',
            'preRemove'
        );
    }

    public function postUpdate(LifecycleEventArgs $args) {
        $this->index($args, "update");
    }

    public function postPersist(LifecycleEventArgs $args) {
        $this->index($args, "create");
    }

    public function postRemove(LifecycleEventArgs $args) {
        $this->index($args, "remove");
    }
    
    public function preUpdate(LifecycleEventArgs $args) {
        $this->index($args, "pre_update");
    }

    public function prePersist(LifecycleEventArgs $args) {
        $this->index($args, "pre_create");
    }

    public function preRemove(LifecycleEventArgs $args) {
        $this->index($args, "pre_remove");
    }

    public function index(LifecycleEventArgs $args, $action) {
        $entity = $args->getEntity();
        //$args->get
        //$entityManager = $args->getEntityManager();

        if(method_exists($entity, "lifecycleEvent")){
            $entity->lifecycleEvent($entity, $action, $this->doctrine, $args);
        }
        
        /*
        if ($entity instanceof FacturacionElemento && ) {
        }

        if ($entity instanceof \Acme\SiteBundle\Entity\MovimientoInventarioInsumo) {
        }
        
        if ($entity instanceof FacturacionFactura) {
        }

        if ($entity instanceof \Acme\SiteBundle\Entity\SGIProceso) {
        }
        */
    }
}
