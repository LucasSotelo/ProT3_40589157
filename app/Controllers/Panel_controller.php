<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id');

            $data['perfil_id']=$perfil;

        $dato['titulo']='panel de usuario';
        echo view('front/head.php',$dato);
        echo view('front/head.php');
        echo view ('back/usuario/usuario_logueado',$data);
        echo view('front/footer.php');
    }
}