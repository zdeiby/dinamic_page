<?php
namespace App\Controllers;
use App\Models\m_multimedia;
use App\Models\M_menu;

class c_pages_multimedia extends BaseController
{    
    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function show($slug)
    {
        $model=new m_multimedia();  //modelo
        $multimedia=$model->findAll();   //get BD enviar a la vista
        $datosValidar=$model->findAll();  //get DB validacion
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datosNav=['datosNav'=>$this->session->get(),
                            "nav"=>$send ];
       foreach($datosValidar as $datos){
        if($datos['slug']==$slug){
            $data=[
                "multimedia"=>$datos,
                "noti"=>$multimedia,
            ];
            return  view('estructura/nav',$datosNav).view('page_multimedia_videos', $data).view('estructura/footer');
        }
       }
    }
}
