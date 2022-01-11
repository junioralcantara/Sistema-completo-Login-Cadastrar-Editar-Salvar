<?php
	session_start();
	unset($_SESSEION["email"]);
	unset($_SESSEION["nome"]);
	unset($_SESSEION["tipo"]);
	unset($_SESSEION["id"]);
	session_destroy();
	header("Location: index.php");
	exit;