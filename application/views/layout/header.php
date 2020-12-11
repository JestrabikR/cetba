<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid bg-dark"> <!-- Start fluid container for nav-->                
        <div class="sticky-top"> <!-- Start NAV -->
            <div class="d-flex justify-content-lg-center justify-content-md-center justify-content-sm-between w-100">
                <nav id="main-navbar" class="navbar bg-dark navbar-expand-lg w-100">
                    <button class="navbar-toggler navbar-toggler-left pl-0" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="navbar-toggler-icon text-white mb-2"><i class="fas fa-bars fa-2x"></i></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar-collapse">
                        <a class="navbar-brand text-white" href="<?php echo base_url('');?>">Domů</a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="<?php echo base_url('auth/create_user');?>">Registrace - level 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="<?php echo base_url('auth/login');?>">Registrace - level 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="<?php echo base_url('auth/login');?>">Registrace - level 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="<?php echo base_url('auth/login');?>">Přihlásit se</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="<?php echo base_url('auth/logout');?>">Odhlásit se</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div> <!-- End NAV -->
    </div> <!-- end fluid container -->
</div> <!-- end fluid container --><!-- End NAV -->
