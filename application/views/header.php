<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag

    SIDEBAR-->
    <br>
    <br>
    <div class="card card-profile">
        <div class="card-avatar">
            <a href="#pablo">
                <img class="img" src="<?php echo base_url();?>assets/img/faces/marc.jpg" />
            </a>
        </div>
          <div class="card-body">
            <h6 class="card-category text-gray">10516652</h6>
            <h4 class="card-title">Meissa Eka W</h4>
            <p class="card-description">
                    Sistem Informasi 2016</p>
            <button type="submit" class="btn btn-primary pull-right" href="">Edit Profile</button>
          </div>
    </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active  ">
        <a class="nav-link" href="<?php echo base_url();?>home/index"> <!-- blm dirubah-->
          <i class="material-icons"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>home/index">
          <i class="material-icons"></i>
          <p>Timeline</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
          <i class="material-icons"></i>
          <p>Kerjaan Ku</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>home/user_logout">
          <p>Logout</p>
        </a>
      </li>
      <li class="nav-item "><a  class="nav-link" href="<?php echo base_url();?>home/user_login">
        <p>Login</p>
      </a></li>
    </ul>
  </div>
</div>
<div class="main-panel">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">Dashboard</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Mike John responded to your email</a>
              <a class="dropdown-item" href="#">You have 5 new tasks</a>
              <a class="dropdown-item" href="#">You're now friend with Andrew</a>
              <a class="dropdown-item" href="#">Another Notification</a>
              <a class="dropdown-item" href="#">Another One</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pablo">
              <i class="material-icons">message</i>
              <p class="d-lg-none d-md-block">
                Account
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
