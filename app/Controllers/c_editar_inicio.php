<?php 

namespace App\Controllers;
use App\Models\M_menu;


class c_editar_inicio extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function editar(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        $datosNav=['datosNav'=>$this->session->get(),
        "nav"=>$send ];
        return view('estructura/nav',$datosNav).view('editar_inicio').view('estructura/footer');
}
    }
    