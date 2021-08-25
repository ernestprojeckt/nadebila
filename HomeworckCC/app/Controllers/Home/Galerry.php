<?php
namespace App\Controllers\Home;


use App\Controllers\AbstractController;
use App\Model\Galerry as ModelAbout;

class Galerry extends AbstractController

{
    public function index()
    {

        $indexmodelclass = new ModelAbout();
        $list = $indexmodelclass->list();

        $this->gener('Galerry', $list);
    }

    public function keyone()
    {
        $funget = new ModelAbout();
        $aboutfun = $funget->getGalerryByTitle("keyone");

        $this->gener('Model',$aboutfun);
    }

}