<?php


namespace App\Model;



use Common\Database\DbConnector;

class index extends AbstractModel
{
    public function __construct()
    {
        $connector = new DbConnector();
        $this->dbConnect = $connector->connect();
    }

    public $title =
        [
            "keyone" => 'indextext',
            "keytwo" => '101232322',
            "keytree" => 'dog'
        ];

    public function getindexByTitle($title)
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