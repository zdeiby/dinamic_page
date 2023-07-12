<?php 

namespace App\Controllers;
use App\Models\M_menu;

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
        $menu1= $this->request->getVar('navCompleto');
        $modelNav=new M_menu();
        $m1=$menu1['m1'];
        $m2=$menu1['m2'];
        $m3=$menu1['m3'];
        $m4=$menu1['m4'];
        $m5=$menu1['m52']; //menu

        $menu=$menu1['menu']; //agregar valor

        $sm1=$menu1['sm1'];
       //$sm2=$menu1['sm2'];
        $sm3=$menu1['sm3'];
        $sm4=$menu1['sm4'];
        $sm5=$menu1['sm5'];
        $sm6=$menu1['sm6'];
        $sm7=$menu1['sm7'];
        $sm8=$menu1['sm8'];
        $sm9=$menu1['sm9'];
        $sm10=$menu1['sm10'];
        
      
       if($m5 ==''){
        $modelNav->save(['id'=>7,'nombre'=>$menu]);
        $modelNav->save(['id'=>17,'nombre'=>$menu]);
       }
       if($m5 !==''){
        $modelNav->save(['id'=>3,'nombre'=>$m1]);
        $modelNav->save(['id'=>4,'nombre'=>$m2]);
        $modelNav->save(['id'=>5,'nombre'=>$m3]);
        $modelNav->save(['id'=>6,'nombre'=>$m4]);
        $modelNav->save(['id'=>8,'nombre'=>$sm1]);
        $modelNav->save(['id'=>10,'nombre'=>$sm3]);
        $modelNav->save(['id'=>11,'nombre'=>$sm4]);
        $modelNav->save(['id'=>12,'nombre'=>$sm5]);
        $modelNav->save(['id'=>13,'nombre'=>$sm6]);
        $modelNav->save(['id'=>14,'nombre'=>$sm7]);
        $modelNav->save(['id'=>15,'nombre'=>$sm8]);
        $modelNav->save(['id'=>16,'nombre'=>$sm9]);

       }




       // $send=$modelNav->save();
        
     echo $newM5;
    }

    public function destroySession(){
        $confirm= $this->request->getVar('session');
        $this->session->destroy();
    }
    }
    