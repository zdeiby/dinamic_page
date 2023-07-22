<?php 

namespace App\Controllers;
use App\Models\M_menu;
use App\Models\M_submenu;
use App\Models\M_textos;

class c_nav extends BaseController{
    protected $helpers = ['url'];
    protected $session;

    public function __construct()
    {   $this->session = \Config\Services::session();
        helper(['url','form']);
        $this->uri = service('uri');
       
    }

    public function nav(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0]; 
       // $datos=$this->session->get();
        return view('estructura/nav');
}
    public function navE(){
        $menu= $this->request->getVar('menu');
        $tipo = $this->request->getVar('opcion');
        $cadena1 = strval( $tipo);

        $modelNav=new M_menu();
        $submenu=new M_submenu();
        $textos=new M_textos();
        $textoSinEspacios = str_replace(' ', '-', $menu);
        if($menu != ''){
            $ultimoInsertado=$modelNav->insert(['nombre'=> $menu]);
            $ultimoSubmenu=$submenu->insert(['submenu' => $menu, 'created_by' => $ultimoInsertado, 'slug' => $textoSinEspacios , 'opcion'=>$cadena1]);
            $textos->insert(['titulo'=>'Ingrese un titulo','texto'=>'Ingrese un texto','text_by'=>$ultimoSubmenu,'url'=>'https://static.vecteezy.com/system/resources/thumbnails/002/282/910/small/elegant-white-background-free-vector.jpg']);
            clearstatcache();
        };
      
        
        // Insertar en la tabla M_submenu
      //  
  
      
    }

    public function navsub(){
        $menu= $this->request->getVar('menusub');
        $idopcion = $this->request->getVar('idopcion');
        $opcion = $this->request->getVar('opcion');
        $cadena1 = strval($opcion);

        $modelNav=new M_menu();
        $submenu=new M_submenu();
        $textos=new M_textos();
        $textoSinEspacios = str_replace(' ', '-', $menu);
        if($menu != 'Selecciona un menú'){
           // $ultimoInsertado=$modelNav->insert(['nombre'=> $menu]); No se inserta por que ya existe
            $ultimoSubmenu=$submenu->insert(['submenu' => $menu, 'created_by' => $idopcion, 'slug' => $textoSinEspacios , 'opcion'=>$cadena1]);
            $textos->insert(['titulo'=>'Ingrese un titulo','texto'=>'Ingrese un texto','text_by'=>$ultimoSubmenu,'url'=>'https://static.vecteezy.com/system/resources/thumbnails/002/282/910/small/elegant-white-background-free-vector.jpg']);
            clearstatcache();
        };
      
    }

    public function destroySession(){
        $confirm= $this->request->getVar('session');
        $this->session->destroy();
    }
    }

   // SELECT B.titulo, B.texto, B.url, A.submenu FROM submenu A RIGHT JOIN textos B ON A.id_sub=B.text_by;