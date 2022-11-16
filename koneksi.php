<?php 
if(isset($_POST['contact__form']))

 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "name : ".$name."<br/>email : ".$email" <br/>message : ".$message.";
}
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
 $fnama = $_GET['fnama'];
 $lalamat = $_GET['lalamat'];
 echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>