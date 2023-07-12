<?php 

namespace App\Controllers;
use App\Models\m_multimedia;
use App\Models\M_menu;

class c_galeria_videos extends BaseController{
 
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function galeria_videos(){
        $segmentos = $this->uri->getSegments();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datosNav=['datosNav'=>$this->session->get(),
                            "nav"=>$send ];
        $data['url']=$segmentos[0];
        $model = new m_multimedia();
        $datos['multimedia'] = $model->findAll();
        return view('estructura/nav', $datosNav).view('galeria_videos',$datos).view('estructura/footer');
}
    }
    