<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head.php',$data);
        echo view('front/principal.php');
        echo view('front/footer.php');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head.php',$data);
        echo view('front/login.php');
        echo view('front/footer.php');
    }

    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head.php',$data);
        echo view('front/registro.php');
        echo view('front/footer.php');
    }

    public function quienes_somos()
    {
        $data['titulo']='quienes_somos';
        echo view('front/head.php',$data);
        echo view('front/quienes_somos.php');
        echo view('front/footer.php');
    }
}
