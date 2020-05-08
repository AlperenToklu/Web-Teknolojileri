<?php
$username = "G181210380@sakarya.edu.tr";
$password = "123456";

if($_POST["username"] == $username && $_POST["password"] == $password){
	

?>
<p>Hoşgeldiniz
<?php echo $_POST["username"]?></p>

<?php 
} 
else{
	header('Location: girisyap.html');
	
}

?>