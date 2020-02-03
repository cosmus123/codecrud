<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css');?>">

        <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>">

       
        <title>Code_First</title>
    </head>
<body>
  
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CRUD@CodeIgniter3</a>
    </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url('index.php/home/home_page');?>">Table view<span class="sr-only"></span></a></li>
                  <li>
                    <li><a href="<?php echo base_url('index.php/read');?>">Table-Read from database<span class="sr-only"></span></a></li> 
                  </li>
            </li>
            <li>
                <li><a href="<?php echo base_url('index.php/table_data');?>">Table-Database-Create/Update/Delete</a></li>
            </li> 
          </ul>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $this->session->userdata('name'); ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('index.php/home/user');?>">User <?php echo $this->session->userdata('name'); ?></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url('index.php/home/user_logout');?>">Log Out</a></li>
              </ul>
            </li>
        </ul>
        </div>
        
        <!-- -->

        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 

</header>
