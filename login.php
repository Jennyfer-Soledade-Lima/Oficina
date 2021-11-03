<?php
include_once("conexao.php"); 
if(isset($_POST['enviar'])){
	// o atributo post é usado para coletar dados de formulário. $ _POST é um array de variáveis ​​passadas para o script atual por meio do método HTTP POST.
	$email = isset($_POST["email"])?$_POST["email"]:" ";
	// na parte ?$_POST["entrega"]:" No Local"; relaciona esse valor , do local indicado
	//echo $email;
	$senha = isset($_POST["senha"])?$_POST["senha"]:" ";
	//echo $senha;

	

	$verifica = mysqli_query($conn,"SELECT * FROM login WHERE email =
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
        die();
    }
    else{
    	 echo"<script language='javascript' type='text/javascript'>
        alert('Login efetuado com sucesso');window.location
        .href='index.php';</script>";
        die();
        
      }
}
