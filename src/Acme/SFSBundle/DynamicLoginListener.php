<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\SFSBundle;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Connection;
use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Creates a Doctrine connection from attributes in the Request
 */
class DynamicLoginListener {

    private $request;
    //private $defaultConnection;
    private $doctrine;

    public function __construct(Request $request, Registry $doctrine) {
        $this->request = $request;
        $this->doctrine = $doctrine;
    }

    public function onSecurityInteractiveLogin(\Symfony\Component\Security\Http\Event\InteractiveLoginEvent $event) {
        $user = $event->getAuthenticationToken()->getUser();

        $manager = $this->doctrine->getManager();
        $event = new \Acme\SFSBundle\Entity\SFSSchemaEvent();
        $event->setEntity("AcmeSFSBundle:SFSAccounts");
        $event->setAccount($user->getUsername());
        $event->setEvent("login");
        $event->setIdentifier(0);

        if ($user instanceof Entity\SFSAccounts) {
            $event->setIdentifier($user->getId());
            if ($this->request->hasSession()) {
                $user->setLastAccess(new \DateTime('now'));
                $manager->persist($user);
            }
        }
        $manager->persist($event);
        $manager->flush();
    }

}
