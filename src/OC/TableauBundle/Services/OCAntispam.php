<?php
/**
 * Created by PhpStorm.
 * User: julie
 * Date: 16/12/2016
 * Time: 09:18
 */

// src/OC/PlatformBundle/Services/OCAntispam.php

namespace OC\TableauBundle\Services;

class OCAntispam extends \Twig_Extension

{

    private $maxLength;

    public function __construct( $maxLength)
    {
        $this->maxLength = (int) $maxLength;
    }

    public function isSpam($text)
    {
        return strlen($text) < $this->maxLength;
    }


    public function getFunctions()
    {
        return array(
            'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam')
        );
    }

    public function getAnti()
    {
        return 'OCAntispam';
    }
}