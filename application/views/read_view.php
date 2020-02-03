<h1>Table-Read from database</h1>

<table class="table table-hover">

      <thead>
				<tr class="active"> 
					<th>#</th> 
          <th>First Name</th> 
          <th>Last Name</th> 
					<th>Gender</th> 
					<th>Age</th> 
					<th>E-mail</th> 
					<th>Phone</th>
					<th>Education</th>
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

      
      </tr>

      <?php } ?>
          <tr>
            <td><?php //print_r($data); ?></td>
         </tr>
      </tbody>
        
</table>

