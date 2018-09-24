<?php

$servername = "mysql.saintpegasus1984.com";
$username = "aaronwen";
$password = "taon2293!";
$dbname = "catacsv";

$con=mysqli($servername, $username, $password, $dbname);

if($con)
{
    print_r($_FILES['csvfile']); //Print Array!
    $file=$_FILES['csvfile']['tmp_name'];
    $handle=fopen($file,"r");
    $i=0;
    while(($cont=fgetcsv($handle,1000,","))!== false)
    {
       $table=rtrim($_FILES['csvfile']['name'],".csv");
       if($i==0)
       {
          $name = ucfirst($name);//Change first letter into upcase.
          $name=$cont[0];
          $surname = ucfirst($surname);
          $surname=$cont[1];
          //$email=$cont[2];
          $email = filter_var($email, FILTER_VALIDATE_EMAIL); //Validate email
          if(filter_var($email, FILTER_VALIDATE_EMAIL)                  
          {               
             $email = strtolower($email);
             $email=$cont[2];
             $query="CREATE TABLE user($name VARCHAR(10), $surname VARCHAR(10), $email VARCHAR(50));";
             echo $query,"<br>";
             mysqli_query($con,$query);
          }
          else {
             echo "$email is not a valid email address!";
          }
       }
       else
       {
          $query="INSERT INTO user ($name, $surname, $email) VALUES ('$cont[0]','$cont[1]', '$cont[2]');";
          echo $query,"<br>";
          mysqli_query($con,$query);
       }
       i++;
    }
    
}
else
{
    echo"Connection Failed!";
}
?>
