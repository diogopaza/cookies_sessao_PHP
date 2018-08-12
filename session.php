<?php

	
	if(isset($_SESSION['usuario'])){

		echo "Bem vindo {$_SESSION['usuario']}!";

	}else{

		echo 'Você nunca esteve aqui';
		$_SESSION['usuario'] = 'diogo';

	}


?>