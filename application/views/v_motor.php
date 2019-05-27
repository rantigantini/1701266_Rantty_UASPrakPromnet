<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap.css">
</head>
<body>

	<div class = "container">
		<h3><center>Data Motor</center></h3>
		<table class="table table-hover">
  	<thead>
					<tr>
						<th>Id</th>
						<th>Tipe</th>
						<th>Harga</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						
						foreach($motor as $key)
						{
						 ?>
						 
						 <td><?php echo $key->id_motor ?></td>
						 <td><?php echo $key->tipe_motor ?></td>
						 <td><?php echo $key->harga_motor ?></td>
						</tr>
						<?php 
						
						} ?>
						
</tbody>
</table>
</div>


</body>
</html>