<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title?></title>
</head>
<body>
<h3>Welcome to my world</h3>

<?php 
foreach($results as $row){
	echo $row->id;
	echo $row->name;
	echo "<br>";
	
}
print_r($results);



?>


</body>
</html>