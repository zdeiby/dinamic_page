<?php 

namespace App\Controllers;
use App\Models\M_menu;

class c_galeria extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function galerie(){
        $segmentos = $this->uri->getSegments();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datosNav=['datosNav'=>$this->session->get(),
                            "nav"=>$send ];
        $data['url']=$segmentos[0];
        return view('estructura/nav', $datosNav).view('galeria').view('estructura/footer');
}
    }
    