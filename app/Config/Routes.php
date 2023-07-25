<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('contactenos','c_contactenos::contactar');
$routes->get('ufm','C_ufm::ufmedellin');
$routes->get('login','c_loginadm::login');
$routes->get('noticias','c_noticias::notice');
$routes->get('galeria','c_galeria::galerie');
$routes->get('galeria-videos','c_galeria_videos::galeria_videos');
$routes->get('mas-noticias','c_mas_noticias::masNoticias');
$routes->get('agg-noticia','c_agg_noticia::aggNoticia');
$routes->get('videos-agg','c_addVideo::aggVideos');
$routes->get('editar-inicio','c_editar_inicio::editar');
$routes->get('config','C_config::editarNav');
$routes->get('nav','c_nav::nav');
$routes->get('add','C_guardarImg::guardarImg');
$routes->get('nuevapagina','C_admin_page::adminPage');




$routes->post('mi-controlador/mi-metodo', 'c_mas_noticias::miMetodo'); // para recibir la peticion del ajax en C_noticias
$routes->post('mi-controlador/aprobar', 'c_nav::navE'); // para recibir la peticion del ajax en NAV para contenido editable
$routes->post('submenu', 'c_nav::navsub'); //add submenu
$routes->post('subeliminar', 'c_nav::naveliminarsub'); //eliminar submenu
$routes->post('menueliminar', 'c_nav::naveliminarmenu');   //eliminar menu
$routes->post('addfooter', 'C_footer::eliminarmodulo');  //eliminar o agregar modulos en footer

$routes->post('addm1', 'C_footer::agregarm1');
$routes->post('addm2', 'C_footer::agregarm2');
$routes->post('addm3', 'C_footer::agregarm3');


$routes->post('add-img','C_guardarImg::guardarImg2'); //guardar imagenes
$routes->post('editar','Home::fc_textos');  //editar texto index
$routes->post('ufmedit','C_ufm::ufm');  //editar textos UFM
$routes->post('adminedit','C_admin_page::fc_admin');   //editar textos nueva pagina
$routes->post('contactenosdelete','c_contactenos::cDelete');  //borrar direcciones en contactenos
$routes->post('sendinfo','c_loginadm::info'); //datos de login a controlador
$routes->post('destroy','c_nav::destroySession');

$routes->get('1/(:any)', 'C_dinamic1::show/$1'); // pagina dinamica

$routes->get('2/(:any)','C_dinamic2::show/$1'); // pagina dinamica

$routes->get('uploads/(:any)', 'UploadsController::show/$1');  //carga de imagenes







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
