
<?php require 'inc/header_view.php'; ?>



<div>
    <img class="img-responsive center-block" src="<?php echo base_url('public/images/humans.png');?>" alt="">
</div>
<div class="text-center">
    <h1>So here you are <?php echo $this->session->userdata('name'); ?></h1>
    <h3>You can check my CRUD Application by testing it ! </h3>
    
    <div class="">
        <blockquote>
            <p>Please see 3 things :</p>
            <p>Table View - using the view from the framework Codeigniter 3</p>
            <p>Table Read - displaying all the information about users in a table from database MySQL</p>
            <p>Table-Database - Create/Update/Delete for table users </p>
        </blockquote>
    </div>
</div>

<?php require 'inc/footer_view.php' ?>