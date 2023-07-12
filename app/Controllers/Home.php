<?php

namespace App\Controllers;
use App\Models\userModel;
use App\Models\M_textos;
use App\Models\M_menu;

class Home extends BaseController
{   
    protected $session;
    public $modelHome;
    public $form;
    protected $helpers = ['url'];

    public function __construct()
    {    $this->session = \Config\Services::session();
        helper('url');
        $this->uri = service('uri');
    }

    public function index()
    {   
        
      $segmentos = $this->uri->getSegments();
      $modelNav=new M_menu();
      $send=$modelNav->findAll();
      $datos=['datosNav'=>$this->session->get(),
                          "nav"=>$send ];
      $model=new M_textos();
      
      $home=$model->findAll();
      $datosView=[
                  "tof"=>"true",
                  "home"=>$home
                 ];


    
      return view('estructura/nav',$datos).view('welcome_message',$datosView). view('estructura/footer');
    }
    public function fc_textos(){
      $titulo = $this->request->getVar('titulo');
      $texto = $this->request->getVar('texto');
      $data=['id'=>1,
            'titulo'=>$titulo,
            'texto'=>$texto];
      $model=new M_textos();
      $model->save($data);
      echo $titulo.$texto;
    }
}