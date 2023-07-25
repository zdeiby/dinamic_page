<?php 

namespace App\Controllers;


class C_guardarImg extends BaseController{
    protected $helpers = ['url'];

    public function __construct()
    {
        helper('url');
        $this->uri = service('uri');
    }

    public function guardarImg(){
        $segmentos = $this->uri->getSegments();
        $data['url']=$segmentos[0];
        return view('estructura/nav',$data).view('guardarImg').view('estructura/footer');
}
public function guardarImg2()
{
    $file = $this->request->getFile('formData');
    $slug = $this->request->getVar('slug');

    echo $slug;
    if ($file->isValid()) {
        $newName =$slug;
        $destination = ROOTPATH . 'uploads/' . $newName;
    
        // Verificar si ya existe una imagen con el mismo nombre
        if (file_exists($destination)) {
            // Eliminar la imagen anterior
            unlink($destination);
        }  
        
        // Mover el nuevo archivo
        $file->move(ROOTPATH . 'uploads', $newName);

        // Construir la URL del archivo
        $url = base_url('uploads/' . $newName);
        clearstatcache();
        clearstatcache();
        // Devolver la URL como respuesta
        return $this->response->setJSON(['url' => $url]);
    } else {
        return $this->response->setStatusCode(400)->setJSON(['error' => 'No se pudo subir el archivo.']);
    }
}
    }
    