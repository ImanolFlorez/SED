<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registros con Función PHPn</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:98%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Eliminar Registros con Función PHP </h1>
<br><br>

<?php
//	include("function.php");
?>
<table border="1" width="100%">
	<tr>
		<th width="9%">Codigo</th>
		<th width="9%">Nombres</th>
        <th width="9%">Apellidos</th>
        <th width="9%">Documento</th>
        <th width="9%">Correo</th>
        <th width="9%">Oficina</th>
        <th width="9">Opciones</th>
	</tr>
<?php 
	/*$sql = "select * from tabla_demo";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	*/?>
	<tr>
		<td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
		<td>
            <a class="btn btn-warning" href=""><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
            <a class="btn btn-danger" href=""><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php //} ?>
</table>
</div>
</body>
</html>