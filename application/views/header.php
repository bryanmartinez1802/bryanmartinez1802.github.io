<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Fedex</title>
  <!--Importacion de jquey-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!--Importacion de validate-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- importacion de tostr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrsdwYvTuKxgkmkZjme4WXEYTW1wRdEVI&callback=initMap" ></script>
   <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg">FEDEX</div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <h1 align="center" style="color:white">FEDEX</h1>

        </form>

      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo site_url(); ?>">FEDEX</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo site_url(); ?>">FX</a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Secciones</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Clientes</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo site_url("/clientes/nuevo"); ?>">Ingreso de nuevo cliente</a></li>
                <li><a class="nav-link" href="<?php echo site_url("/clientes/listado"); ?>">Listados de clientes</a></li>
                <li><a class="nav-link" href="<?php echo site_url("/clientes/reporte"); ?>">Reportes de clientes</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Sucursales</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo site_url("/sucursales/nuevo"); ?>">Ingreso de nueva Sucursales</a></li>
                <li><a class="nav-link" href="<?php echo site_url("/sucursales/listado"); ?>">Listados de surcursales</a></li>
                <li><a class="nav-link" href="<?php echo site_url("/sucursales/reporte"); ?>">Reportes de surcursales</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pedidos</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo site_url("/pedidos/index"); ?>">Ingreso de nuevo pedido</a></li>
                <li><a class="nav-link" href="<?php echo site_url("/pedidos/listado"); ?>">Listados de pedidos</a></li>
                <li><a class="nav-link" href="<?php echo site_url("/pedidos/reporte"); ?>">Reportes de pedidos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Reportes</span></a>
              <ul class="dropdown-menu">

                <li><a class="nav-link" href="<?php echo site_url("/reportesg/reporte"); ?>">Reportes general</a></li>
              </ul>
            </li>





          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://www.fedex.com/" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Contactos
            </a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
