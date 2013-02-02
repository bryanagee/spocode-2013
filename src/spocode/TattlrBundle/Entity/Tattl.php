<?php

namespace spocode\TattlrBundle\Entity;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Tattl
{

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\timestamp
     */
    protected $dateTime;

    /**
     * @MongoDB\file
     */
    protected $image;

    /**
     * @MongoDB\float
     */
    protected $geoLattitude;

    /**
     * @MongoDB\float
     */
    protected $geoLongitude;

    /**
     * @MongoDB\string
     */
    protected $comments;

    /**
     * @MongoDB\string
     */
    protected $deviceId;


}