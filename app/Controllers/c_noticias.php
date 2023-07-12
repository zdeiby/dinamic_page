<?php 

namespace App\Controllers;
use App\Models\m_noticias;
use App\Models\M_menu;

class c_noticias extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function notice(){
        $segmentos = $this->uri->getSegments();
        $model=new m_noticias();
        $datos['noticias']=$model->findAll();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datosNav=['datosNav'=>$this->session->get(),
                            "nav"=>$send ];

        $data['url']=$segmentos[0];
        return view('estructura/nav',$datosNav).view('noticias',$datos).view('estructura/footer');
}
    }
    