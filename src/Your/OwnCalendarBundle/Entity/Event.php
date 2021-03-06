<?php
// src/Acme/UserBundle/Entity/User.php

namespace Your\OwnCalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BladeTester\CalendarBundle\Entity\Event as BaseEvent;


/**
 * @ORM\Entity(repositoryClass="BladeTester\CalendarBundle\Repository\EventRepository")
 * @ORM\Table(name="evenement")
 */
class Event extends BaseEvent {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    public function getId() {
        return $this->id;
    }

}