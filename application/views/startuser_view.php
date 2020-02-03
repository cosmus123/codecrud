<?php require 'inc/header_view.php'; ?>


<div>
    <img class="img-responsive center-block" src="<?php echo base_url('public/images/baloons.png');?>" alt="">
</div>
<div class="text-center">
    <h1>Welcome <?php echo $this->session->userdata('name'); ?></h1>
    <h3>This is your page for testing and viewing CRUD Codeigniter 3 from MySQL Database</h3>
</div>

<?php 
// if (isset($_SESSION['name'])){
//     echo "Name exists no problem";

// }else {
//     echo "Name does not exist";
// }

?>


<?php require 'inc/footer_view.php' ?>