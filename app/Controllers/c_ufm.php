<?php 

namespace App\Controllers;
use App\Models\M_textos;
use App\Models\M_menu;

class C_ufm extends BaseController{
    protected $helpers = ['url'];
    protected $session;
    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function ufmedellin(){
        $this->session = \Config\Services::session();
        $datos=$this->session->get();
        $segmentos = $this->uri->getSegments();
        $model=new M_textos();
        $home=$model->findAll();
        $modelNav=new M_menu();
        $send=$modelNav->findAll();
        $datosView=["tof"=>"true",
                    "home"=>$home,
                "datosNav"=>$datos,
                "nav"=>$send];
       
        return view('estructura/nav', $datosView).view('ufm').view('estructura/footer');
}
public function ufm(){
    $titulo1 = $this->request->getVar('titulo1');
    $texto1 = $this->request->getVar('texto1');
    $titulo2 = $this->request->getVar('titulo2');
    $texto2 = $this->request->getVar('texto2');
    $titulo3 = $this->request->getVar('titulo3');
    $texto3 = $this->request->getVar('texto3');

    $data1=['id'=>3,
    'titulo'=>$titulo1,
    'texto'=>$texto1
    ];
    $data2=['id'=>4,
    'titulo'=>$titulo2,
    'texto'=>$texto2,
    ];
    $data3=['id'=>5,
    'titulo'=>$titulo3,
    'texto'=>$texto3,
    ];


 
    $model=new M_textos();
    $model->save($data1);
    $model->save($data2);
    $model->save($data3);
   
}
    }
    