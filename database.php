<?php 

	$config['db'] = array(
		'host'		=> 'localhost',
		'username'	=> 'root',
		'password'	=> '',
		'dbname'	=> 'quizzer'
	);

	try {

		$DBH = new PDO('mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
		
	} catch (PDOException $e) {

		die($e->getMessage());

	}

	$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)

?>