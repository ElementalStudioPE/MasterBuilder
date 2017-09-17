<?php

return array(

	'driver' => 'smtp',

	'host' => 'smtp.gmail.com',

	'port' => 587,

	'from' => array('address' => 'amsaperu16@gmail.com', 'name' => 'Contacto AMSA'),

	'encryption' => 'tls',

	'username' => 'personal@tuoferta.com.pe',

	'password' => 'ptuoferta',

	'sendmail' => '/usr/sbin/sendmail -bs',

	'pretend' => false,

);
