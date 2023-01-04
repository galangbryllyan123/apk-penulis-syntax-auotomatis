<?php
/**
 * Penulis Kode - SMM Panel script
 * Domain: http://penuliskode.com/
 * Documentation: http://penuliskode.com/smm/script/version-n1/documentation.html
 *
 */

date_default_timezone_set('Asia/Jakarta');
ini_set('memory_limit', '128M');

/* CONFIG */
$config['web'] = array(
	'maintenance' => 0, // 1 = yes, 0 = no
	'title' => 'Mastersosmed',
	'meta' => array(
		'description' => 'masukan deskripsi',
		'keywords' => 'smm panel',
		'author' => 'mastersosmed'
	),
	'base_url' => 'https://mastersosmed.id/',
	'register_url' => 'https://mastersosmed.id/auth/register.php'
);

$config['register'] = array(
	'price' => array(
		'member' => 10000,
		'reseller' => 30000,
	),
	'bonus' => array(
		'member' => 5000,
		'reseller' => 10000,
	)
);

$config['db'] = array(
	'host' => 'localhost',
	'name' => 'storyfqi_smm',
	'username' => 'storyfqi_smm',
	'password' => 'storyfqi_smm'
);
/* END - CONFIG */

require 'lib/db.php';
require 'lib/model.php';
require 'lib/function.php';

session_start();
$model = new Model();
