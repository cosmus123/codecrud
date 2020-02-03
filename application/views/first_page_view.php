<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css');?>">

        <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>">

        <script src="<?php echo base_url('public/node_modules/jquery/dist/jquery.js');?>"></script>
        <script src="<?php echo base_url('public/node_modules/jquery/dist/jquery.min.js');?>"></script>

        <script src="<?php echo base_url('public/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('public/js/script.js');?>"></script>
        <title>Code_First</title>
    </head>
<body>

<div>
    <img class="img-responsive center-block" src="<?php echo base_url('public/images/codeigniter_1.png');?>" alt="">
</div>
    <?php echo form_open('home/welcome_user','class="form-inline col-md-4 col-md-offset-4"'); ?>	
        <div class="form-group">
            <label for="exampleInputName2">Enter Name</label>
            <input type="text" class="form-control" name="name" value = "<?php ?>" id="exampleInputName2" placeholder="Your Name" required>
        </div>
        <button type="submit" class="btn btn-success">Log In</button>
    <?php echo form_close(); ?> 
</div>   


</body>
</html>