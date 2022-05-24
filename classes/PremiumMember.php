<?php

class PremiumMember extends Member{
    //instance variables
    private $_indoorInterests;
    private $_outdoorInterests;

    public function __construct($_indoorInterests, $_outdoorInterests) {
    }

    /**
     * @return mixed
     */
    public function getIndoorInterests() {
        return $this->_indoorInterests;
    }

    /**
     * @param mixed $indoorInterests
     */
    public function setIndoorInterests($indoorInterests) {
        $this->_indoorInterests = $indoorInterests;
    }

    /**
     * @return mixed
     */
    public function getOutdoorInterests() {
        return $this->_outdoorInterests;
    }

    /**
     * @param mixed $outdoorInterests
     */
    public function setOutdoorInterests($outdoorInterests) {
        $this->_outdoorInterests = $outdoorInterests;
    }

}