<?php


namespace App\Model;



class Galerry extends AbstractModel
{

    public $title =
        [
            "keyone" => 'Pepsi',
            "keytwo" => '1488',
            "keytree" => 'Cat'
        ];

    public function getGalerryByTitle($title)
    {

        if (array_key_exists($title, $this->title)) {
            return $this->title[$title];
        } else {
            return false;
        }

    }

    public function list()
    {
        return $this->title;
    }
}