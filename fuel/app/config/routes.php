<?php
return array(
	'_root_'  => 'form/index',  // The default route
	'_404_'   => 'form/404',    // The main 404 route

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);