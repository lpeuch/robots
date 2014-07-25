<?php

	$db = new PDO('sqlite:robots.db');
	$db->exec('CREATE TABLE robots(name Text, description Text, humanoide Text, website Text, price Text, size Text, weight Text, origine Text, picture Text, year Text, createby Text)');
?>