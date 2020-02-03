<?php require 'inc/header_view.php'; ?>

<h1>Table-Update from database</h1>
<?php
// if (isset($_SESSION['first_name'])){
//     echo "Name exists no problem";

// }else {
//     echo "Name does not exist";
// }

  //print_r($datas) ;
 ?>

<div class="container">
	<div class="row">
        <?php
        if ($this->session->flashdata('errors')){
            echo '<div class="alert alert-danger">';
            echo $this->session->flashdata('errors');
            echo "</div>";
        }else if (($this->session->flashdata('success'))){
            echo '<div class="alert alert-success">';
            echo  $this->session->flashdata('success');
            echo "</div>";
        }
        ?>
        <form method="post" action="<?php echo site_url('crud/update_data/'.$datas[0]['id']); ?>" class="form-horizontal col-md-10 col-md-offset-2" id="form-table"> 
        <?php //echo form_open('crud/insert','class="form-horizontal col-md-10 col-md-offset-2"'); ?>	
        <?php  ?>
           <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname"  class="form-control" id="input1" value="<?php echo $datas[0]['first_name'] ; ?>" placeholder="First Name">
                </div>
            </div>

            <div class="form-group">
                <label for="input2" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="lname"  class="form-control" id="input2" value="<?php echo $datas[0]['last_name']; ?>" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <input type="text" name="gender"  class="form-control" id="input3" value="<?php echo $datas[0]['gender']; ?>" placeholder="Gender">
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <input type="text" name="age"  class="form-control" id="input4" value="<?php echo $datas[0]['age']; ?>" placeholder="Age">
                </div>
            </div>

            <div class="form-group">
                <label for="input5" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control" id="input5" value="<?php echo $datas[0]['email']; ?>" placeholder="E-Mail">
                </div>
            </div>
            <div class="form-group">
                <label for="input6" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control" id="input6" value="<?php echo $datas[0]['phone']; ?>" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label for="input7" class="col-sm-2 control-label">Education</label>
                <div class="col-sm-10">
                    <input type="text" name="education"  class="form-control" id="input7" value="<?php echo $datas[0]['education']; ?>" placeholder="Education">
                </div>
            </div>
            <div class="form-group" id="create">
                <button type="submit" name="create" class="btn btn-primary btn-md col-md-2 col-md-offset-2">Update</button>
                <a type="submit" href="<?php echo base_url('index.php/table_data');?>" name="create" class="btn btn-primary btn-md col-md-2 col-md-offset-1">Return</a>

            </div>
        <?php echo form_close(); ?> 
        <?php //} ?>
    </div>
</div>

<script>
    window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);
</script>
<?php require 'inc/footer_view.php' ?>
