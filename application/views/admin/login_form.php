<!doctype html>
<html>
<head>
<title><?php echo $title?></title>
</head>
<body>
<?php echo '<h1>'.$title.'</h1>'; 
$url=base_url('admin/check_admin');

?>
<form action="<?php echo $url?>" method="post">
login<input type="text" value="login"  name="login">
</br>
password<input type="text" value="password"  name="password">
 <input type="submit" value="log in">
</form>
<?php echo '<h3 style="color:red">'.$msg.'</h3>';

?>


</body>
</html>