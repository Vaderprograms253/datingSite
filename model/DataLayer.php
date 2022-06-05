<?php
/*
 * Author: Xavier Denson
 * Date: 6/04/2022
 * DataLayer.php
 * data for interests
 */
class DataLayer
{
    /*
     * Indoor interests
     */
    static function getIndoor(){
        return array("tv", "video games", "cooking", "reading", "decorating", "none" );
    }

    /*
     * Outdoor interests
     */
    static function getOutdoor(){
        return array("hiking", "running", "exploring", "eating out", "bar", "none");

    }

}