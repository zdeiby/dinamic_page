<?php 

namespace App\Controllers;
use App\Models\M_menu;


class C_config extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function editarNav(){
        $segmentos = $this->uri->getSegments();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datosNav=['datosNav'=>$this->session->get(),
                            "nav"=>$send ];
        $data['url']=$segmentos[0];
        return view('estructura/nav',$datosNav).view('config').view('estructura/footer');
}
    }
    