<?php require 'inc/header_view.php'; ?>


<h1>Database MySQL Table View</h1>
<div class="container">
	<div class="row">
        <!-- <form method="post" action="<?php //echo site_url('crud/insert'); ?>" class="form-horizontal col-md-10 col-md-offset-2" id="form-table"> -->
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
        <?php echo form_open('crud/insert','class="form-horizontal col-md-10 col-md-offset-2"'); ?>	

           <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">First Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname"  class="form-control" id="input1" value="" placeholder="First Name" />
                </div>
            </div>

            <div class="form-group">
                <label for="input2" class="col-sm-2 control-label">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" name="lname"  class="form-control" id="input2" value="" placeholder="Last Name" />
                </div>
            </div>
            <div class="form-group">
                <label for="input3" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-10">
                    <input type="text" name="gender"  class="form-control" id="input3" value="" placeholder="Gender" />
                </div>
            </div>
            <div class="form-group">
                <label for="input4" class="col-sm-2 control-label">Age</label>
                <div class="col-sm-10">
                    <input type="text" name="age"  class="form-control" id="input4" value="" placeholder="Age" />
                </div>
            </div>

            <div class="form-group">
                <label for="input5" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control" id="input5" value="" placeholder="E-Mail" />
                </div>
            </div>
            <div class="form-group">
                <label for="input6" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control" id="input6" value="<?php //echo $row['last_name']; ?>" placeholder="Phone" />
                </div>
            </div>
            <div class="form-group">
                <label for="input7" class="col-sm-2 control-label">Education</label>
                <div class="col-sm-10">
                    <input type="text" name="education"  class="form-control" id="input7" value="<?php //echo $row['last_name']; ?>" placeholder="Education" />
                </div>
            </div>
            <div class="form-group" id="create">
                <button type="submit" name="create" class="btn btn-primary btn-md col-md-2 col-md-offset-2">Create</button>
            </div>
        <?php echo form_close(); ?> 
    </div>
</div>

<table class="table table-hover">

        <thead>
        <?php
            if (($this->session->flashdata('delete'))){ ?>
                <div id="alert_info" style="width:1000px;margin:auto;" class="alert alert-info">
               <?php echo  $this->session->flashdata('delete'); ?>  
                </div>
             <?php   
            }
            ?>
                <tr class="active"> 
                    <th>#</th> 
                    <th>First Name</th> 
                    <th>Last Name</th> 
                    <th>Gender</th> 
                    <th>Age</th> 
                    <th>E-mail</th> 
                    <th>Phone</th>
                    <th>Education</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr> 
        </thead>
        
      <tbody>
      <?php foreach ($data as $item) { ?>      
      <tr>
          <td><?php echo $item->id; ?></td>
          <td><?php echo $item->first_name; ?></td>
          <td><?php echo $item->last_name; ?></td> 
          <td><?php echo $item->gender; ?></td>
          <td><?php echo $item->age; ?></td> 
          <td><?php echo $item->email; ?></td>
          <td><?php echo $item->phone; ?></td>
          <td><?php echo $item->education; ?></td>

          <td>
                <?php echo form_open('crud/update/'.$item->id); ?>
                    <button class="btn btn-info">Update</button>
                <?php echo form_close(); ?> 
            </td>
            <td>
                <?php echo form_open('crud/delete/'.$item->id); ?>
                    <button class="btn btn-danger" id="delete" onclick="focusNoScrollMethod()">Delete</button>
                <?php echo form_close(); ?> 
            </td>
            
      </tr>
      <?php } ?>

      
          <tr>
            <td><?php //print_r($data); ?></td>
         </tr>
      </tbody>
</table>
            

<?php //require 'inc/footer_view.php'; ?>

<script src="<?php echo base_url('node_modules/jquery/dist/jquery.js');?>"></script>
<script src="<?php echo base_url('node_modules/jquery/dist/jquery.min.js');?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js');?>"></script>

<script src="<?php echo base_url('node_modules/jquery.scrollto/jquery.scrollTo.min.js');?>"></script>
<script src="<?php echo base_url('node_modules/jquery.scrollto/jquery.scrollTo.js');?>"></script>


<script type="text/javascript" src="<?php echo base_url('public/js/init.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('public/js/script.js');?>"></script>



<script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 4000);

//     $(document).ready(function() {
//     window.scrollTo(700,750);
// });
    //    $(window).click(function(){
    //         $(window).scrollTo(document.getElementById('delete'), 800);

    //    });

    // function focusNoScrollMethod(e){
    //     e.preventDefault();
    //    // document.write('treghjksh');
       
    // }
    // focusNoScrollMethod();


    // function focusNoScrollMethod(e){
    //     e.preventDefault();
    //     document.querySelector('button.btn.btn-danger').alignToTop(false) ;
    // }
    // function focusNoScrollMethod(e){
    //     e.preventDefault();
    //     document.querySelector('button.btn.btn-danger').focus({preventScroll:false});
    // };
    // document.querySelector('button.btn.btn-danger').addEventListener('click',function(event){
    // event.stopPropagation();
    // document.querySelector('button.btn.btn-danger').scrollIntoView({behavior: "smooth",block: "end", inline: "nearest"});
    
    // })
    // document.querySelector('btn btn-primary btn-md col-md-2 col-md-offset-2').scrollIntoView({behavior: "smooth",block: "end"});

    // document.querySelector('button.btn.btn-danger').scrollIntoView({behavior: "smooth",block: "end", inline: "nearest"});
    // event.preventDefault()
</script>

<footer>
    <p>Codeigniter Project 2019 | Self-made by CM cosminmus@productsandservices.eu.com</p>
</footer>

</body>
</html>

