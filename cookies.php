<?php

	if(isset($_COOKIE['cookie_teste'])){

		echo 'Você já passou por aqui';

	}else{
		echo 'Você nunca passou por aqui';
		setcookie('cookie_teste', 'algum valor', time() + 3600);
	}



?>