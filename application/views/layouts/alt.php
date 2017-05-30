<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://use.fontawesome.com/421c1aa365.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse"  >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">TAXI SLUŽBA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> Domov</a></li>
                <?php if($this->session->userdata('logged_in')): ?>
                    <li><a href="<?php echo base_url(); ?>projectss"> <i class="fa fa-user" aria-hidden="true"></i> Zamestnanci</a></li>
                    <li><a href="<?php echo base_url(); ?>projects"> <i class="fa fa-cab" aria-hidden="true"></i> Autá</a></li>
                    <li><a href="<?php echo base_url(); ?>taskss"> <i class="fa fa-road" aria-hidden="true"></i> Jazdy</a></li>
                    <li><a href="<?php echo base_url(); ?>projectsss"> <i class="fa fa-info" aria-hidden="true"></i> Detaily pracovných zmien</a></li>
                    <li><a href="<?php echo base_url(); ?>tasks"> <i class="fa fa-vcard" aria-hidden="true"></i> Pracovné zmeny</a></li>

                <?php endif; ?>
                <?php if(!$this->session->userdata('logged_in')): ?>
                    <li><a href="<?php echo base_url(); ?>users/register">Registrácia <span class="sr-only">(current)</span></a></li>
                <?php endif; ?>
                <!--<li><a href="#">Link</a></li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>-->
            </ul>
            <!--<form class="navbar-form navbar-left"> //vyhľadávanie
                <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search">
                     </div>
                <button type="submit" class="btn btn-default">Submit</button>
                </form> -->
            <?php if($this->session->userdata('logged_in')): ?>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Odhlásiť sa</a></li>


                <?php endif; ?>

                <!--<li class="dropdown"> //linky
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>-->
            </ul>
            </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">

    <div class="col-xs-2">






    </div>

    <div class="col-xs-10">

        <?php $this->load->view($main_view); ?>


    </div>




</div>





</body>
</html>


