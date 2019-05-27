<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap.css">
</head>
<body>

	<div class = "container">
		<h3><center>Data Cicil</center></h3>
		<table class="table table-hover">
  	<thead>
					<tr>
						<th>Id</th>
						<th>Tenor</th>
						<th>Bunga</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						
						foreach($tenor as $key)
						{
						 ?>
						 
						 <td><?php echo $key->id_cicil ?></td>
						 <td><?php echo $key->tenor ?></td>
						 <td><?php echo $key->bunga ?></td>
						</tr>
						<?php 
						
						} ?>
						
</tbody>
</table>
</div>


</body>
</html>