<?php

$config['social'] = array(
	"base_url" => base_url() . 'hybridauth/hybridauth_endpoint/',
	"providers" => array (
		"Facebook" => array (
			"enabled" => true,
			"keys"    => array ( "id" => "872365952794421", "secret" => "ffc6b9458fc8139a7b30b53e8d567547" ),
			"scope"   => "email, user_about_me, user_birthday, user_hometown", // optional
			//"display" => "popup" // optional
		)
	)
);