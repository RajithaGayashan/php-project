<?php include 'includes/header.php';  ?>



<table class="table table-bordered">

<thead>
    <tr>
        <th>Movie Name</th>
        <th>Time</th> 
        <th>Catagory</th>
    </tr>
</thead>

<tbody>

<?php foreach ($data as $item){ ?>
    <tr>
        <td><?php echo $item->film; ?></td>
        <td><?php echo $item->time; ?></td> 
        <td><?php echo $item->cata; ?></td>
    </tr>

<?php } ?>
</tbody>
  
 
</table>

<hr>

<a class="btn btn-primary" href="<? php echo base_url('index.php/Admin/edit/'.$item->id)?>">edit </a>

<a class="btn btn-primary" href="<? php echo base_url('index.php/Admin/delete/'.$item->id)?>">delete </a>









<?php include 'includes/footer.php';  ?>