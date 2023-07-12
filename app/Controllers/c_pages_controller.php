<?php
namespace App\Controllers;
use App\Models\m_noticias;
use App\Models\M_menu;

class c_pages_controller extends BaseController
{
    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function show($slug)
    {
        $model=new m_noticias();
        $noticias=$model->findAll();
        $datosValidar=$model->findAll();
        $modelNav=new M_menu();
     $send=$modelNav->findAll();
     $datosNav=['datosNav'=>$this->session->get(),
                         "nav"=>$send ];
       foreach($datosValidar as $datos){
        if($datos['slug']==$slug){
            $data=[
                "noticias"=>$datos,
                "noti"=>$noticias,
            ];
            return  view('estructura/nav',$datosNav).view('page', $data).view('estructura/footer');
        }
       }
    }
}
