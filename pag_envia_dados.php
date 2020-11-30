<?php

	$nome = $_POST['pag_nome'];
	$sobrenome = $_POST['pag_sobrenome'];
	$email = $_POST['pag_email'];
	$msg = $_POST['pag_msg'];


	echo "Imprimindo dados informados!<br> ";

	echo "<br> Nome: ".$nome; 
	echo "<br> Sobrenome: ".$sobrenome;
	echo "<br> Email: ".$email;
	echo "<br> Mensagem: ".$msg; 

?>