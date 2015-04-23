<?php

/*
 * Copyright CloseToMe 2011/2012
 */

namespace Geocoder\Query;

/**
 * Description of Bias
 *
 * @author jfb
 */
class BoundingBox
{

    protected $minLatitude;
    protected $minLongitude;
    protected $maxLatitude;
    protected $maxLongitude;
    
    public function __construct($minLatitude, $minLongitude, $maxLatitude, $maxLongitude)
    {
        $this->minLatitude = $minLatitude;
        $this->minLongitude = $minLongitude;
        $this->maxLatitude = $maxLatitude;
        $this->maxLongitude = $maxLongitude;
    }

    public function getMinLatitude()
    {
        return $this->minLatitude;
    }

    public function getMinLongitude()
    {
        return $this->minLongitude;
    }

    public function getMaxLatitude()
    {
        return $this->maxLatitude;
    }

    public function getMaxLongitude()
    {
        return $this->maxLongitude;
    }
}
