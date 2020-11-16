<?php
ob_start();
session_start();

require_once '../connect/connect.php';

    if (!isset($_SESSION['admin'])) //$admin = $_SESSION['admin'](islem.php'de bulunmaktadır)
    {
       return header('Location: login.php');
   }
   else
   {
       if ($_SESSION['admin'] != '1')
           return header('Location: login.php');
   }
   ?>


   <!doctype html>
   <html lang="en">

   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
       <!-- Blog eklemek için editör-->
       <script src="https://cdn.tiny.cloud/1/1v5n72fb3mh2vz8j83uq6df4b8acvm9m8kjmu6dvu4stfjku/tinymce/5/tinymce.min.js"
               referrerpolicy="origin">
       </script>
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <a href="profil.php" tabindex="0" class="dropdown-item">
                                                    Profil
                                                </a>
                                                <h6 tabindex="-1" class="dropdown-header">
                                                    Header
                                                </h6>
                                                <button type="button" tabindex="0" class="dropdown-item">
                                                    Actions
                                                </button>
                                                <div tabindex="-1" class="dropdown-divider">
                                                </div>
                                                <a href="login.php?logout" tabindex="0" class="dropdown-item">
                                                    Çıkış
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                            <?php echo $_SESSION['name']; ?>
                                        </div>
                                        <div class="widget-subheading">
                                            <?php
                                            echo date('d-m-Y H:i', strtotime($_SESSION['date']));
                                            ?>
                                            <!--VP People Manager-->
                                        </div>
                                    </div>
                                    <div class="widget-content-right header-user-info ml-3">
                                        <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                            <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
                <div class="app-main">
                    <div class="app-sidebar sidebar-shadow">
                        <div class="app-header__logo">
                            <div class="logo-src"></div>
                            <div class="header__pane ml-auto">
                                <div>
                                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                        <span class="hamburger-box">
                                            <span class="hamburger-inner"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="app-header__mobile-menu">
                            <div>
                                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                        </div>    <div class="scrollbar-sidebar">
                            <div class="app-sidebar__inner">
                                <ul class="vertical-nav-menu">
                                    <li class="app-sidebar__heading">Menü</li>
                                    <li>
                                        <a href="index.php" class="mm-active">
                                            <i class="metismenu-icon pe-7s-home"></i>
                                            Anasayfa
                                        </a>
                                    </li>
                            <li class="mm-active">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Üyeler
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                    <li>
                                        <a href="users.php">
                                            <i class="metismenu-icon">
                                            </i>Üyeler Listesi
                                        </a>
                                    </li>
                                        <li>
                                            <a href="edit.php">
                                                <i class="metismenu-icon">
                                                </i>Profil Düzenle
                                            </a>
                                        </li>
                                </ul>
                            </li>
                                    <li class="mm-active">
                                        <a href="#">
                                            <i class="metismenu-icon pe-7s-menu icon-gradient bg-ripe-malin"></i>
                                            Bloglar
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul class="mm-show">
                                            <li>
                                                <a href="blogs.php">
                                                    <i class="metismenu-icon">
                                                    </i>Bloglar Listesi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-ekle.php">
                                                    <i class="metismenu-icon">
                                                    </i>Blog Ekle
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                        </ul>
                    </div>
                </div>
            </div>