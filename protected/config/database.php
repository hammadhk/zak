<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	'connectionString' => 'mysql:host=localhost;dbname=garage_crm',
	'emulatePrepare' => true,
	'username' => 'garage_crm',
	'password' => 'garage@123',
	'charset' => 'utf8',
);
