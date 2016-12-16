<?php
/**
 * Created by PhpStorm.
 * User: julie
 * Date: 14/12/2016
 * Time: 11:07
 */

namespace OC\TableauBundle\Entity;

class Article {
    protected $id;
    protected $content;
    protected $title;

    protected $tableau;

    function __construct()
    {
        $this->tableau = array(
            array('titre' => 'article1', 'content' =>'contenu'),array('titre' => 'article2', 'content' =>'contenu2'),array('titre' => 'article3', 'content' =>'contenu3')
        );
    }
    public function getAll()
    {
        return $this->tableau;
    }
}