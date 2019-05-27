<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap.css">
</head>
<body>

	<div class = "container">
		<h3><center>Data User</center></h3>
		<table class="table table-hover">
	<tbody>
  	<tr class="table-outline-primary">
      <td>NIM</td>
      <td>:</td>
      <td>
      	<label><?php echo $user->data->NIM; ?></label>
      </td>
    </tr>

    <tr class="table-outline-primary">
      <td>Nama</td>
      <td>:</td>
      <td>
      	<label><?php echo $user->data->Nama; ?></label>
      </td>
    </tr>
</tbody>
</table>
</div>


</body>
</html>