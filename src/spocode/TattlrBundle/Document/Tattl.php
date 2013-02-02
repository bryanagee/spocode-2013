<?php
namespace spocode\TattlrBundle\Document;

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
     * @MongoDB\Timestamp
     */
    protected $dateTime;

    /**
     * @MongoDB\File
     */
    protected $image;

    /**
     * @MongoDB\Float
     */
    protected $geoLattitude;

    /**
     * @MongoDB\Float
     */
    protected $geoLongitude;

    /**
     * @MongoDB\String
     */
    protected $comments;

    /**
     * @MongoDB\string
     */
    protected $deviceId;



    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateTime
     *
     * @param timestamp $dateTime
     * @return \Tattl
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return timestamp $dateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set image
     *
     * @param file $image
     * @return \Tattl
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return file $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set geoLattitude
     *
     * @param float $geoLattitude
     * @return \Tattl
     */
    public function setGeoLattitude($geoLattitude)
    {
        $this->geoLattitude = $geoLattitude;
        return $this;
    }

    /**
     * Get geoLattitude
     *
     * @return float $geoLattitude
     */
    public function getGeoLattitude()
    {
        return $this->geoLattitude;
    }

    /**
     * Set geoLongitude
     *
     * @param float $geoLongitude
     * @return \Tattl
     */
    public function setGeoLongitude($geoLongitude)
    {
        $this->geoLongitude = $geoLongitude;
        return $this;
    }

    /**
     * Get geoLongitude
     *
     * @return float $geoLongitude
     */
    public function getGeoLongitude()
    {
        return $this->geoLongitude;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return \Tattl
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return string $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set deviceId
     *
     * @param string $deviceId
     * @return \Tattl
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * Get deviceId
     *
     * @return string $deviceId
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }
}
