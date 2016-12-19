 <?php
 
 $password ='1234';
 $password = password_hash ($password, PASSWORD_DEFAULT); 
 echo "$password <br>";
 
 
 $passwordadmin='1234';
 $passwordadmin = password_hash ($passwordadmin, PASSWORD_DEFAULT);
 echo "$passwordadmin";
 
 ?>