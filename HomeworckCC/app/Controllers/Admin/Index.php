<?php
namespace App\Controllers\Admin;


use App\Controllers\AbstractController;
use App\Model\index as ModelAbout;

class Index extends AbstractController

{
    public function index()
    {

        $indexmodelclass = new ModelAbout();
        $list = $indexmodelclass->list();

        $this->gener('index', $list);
    }

    public function keyone()
    {
        $funget = new ModelAbout();
        $aboutfun = $funget->getindexByTitle("keyone");

        $this->gener('Model',$aboutfun);
    }

}