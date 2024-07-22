<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/miestilo.css');?>" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity=" " crossorigin=" ">
    <link rel="stylesheet" href="assets/css/miestilo.css">
    
</head>

<header>
    <h1>GOFIX SERVICIO TECNICO CELULARES</h1>

    <?php
    $session = session();
    $nombre= $session->get('nombre');
    $perfil=$session->get('perfil_id');
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="principal">
                <img src="assets/img/logo.jpeg" alt="Logo" width="75" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if(session()->perfil_id == 1): ?>
                <div class="btn btn-secondary active btnUser btn-sm">
                    <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
            
                </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link me-3" aria-current="page" href="principal">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="quienes_somos">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="registro">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" aria-disabled="true" href="login">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <?php endif;?>
            </div>
            <?php if(session()->perfil_id == 2): ?>
                <div class="btn btn-secondary active btnUser btn-sm">
                    <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
            
                </div>
            <!-- NAVBAR PARA CLIENTES -->
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link me-3" aria-current="page" href="principal">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="quienes_somos">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>
                    </ul>
                </div>
                <?php else:?>
            
            <!-- NAVBAR PARA CLIENTES NO LOGUEADOS-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link me-3" aria-current="page" href="principal">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="quienes_somos">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="registro">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" aria-disabled="true" href="login">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <?php endif;?>
            </div>
        </div>
    </nav>
    </header>