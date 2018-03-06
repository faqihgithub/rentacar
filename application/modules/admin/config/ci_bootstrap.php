<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views
| when calling MY_Controller's render() function.
|
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'Administrare flota',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),

	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/admin/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js'
		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/admin/adminlte.min.css',
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',

	// Multilingual settings
	'languages' => array(
	),

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'user' => array(
			'name'		=> 'Clienti',
			'url'		=> 'user',
			'icon'		=> 'fa fa-users',
			'children'  => array(
				'Toti'			=> 'user',
				'Adauga'		=> 'user/create',
			)
		),
		'masini' => array(
			'name'		=> 'Masini',
			'url'		=> 'masini',
			'icon'		=> 'fa fa-car',
			'children'  => array(
				'Toate'			=> 'masini',
				'Adauga'		=> 'masini/create',
			)
		),
		'sedii' => array(
			'name'		=> 'Puncte de lucru',
			'url'		=> 'sedii',
			'icon'		=> 'fa fa-building-o',
			'children'  => array(
				'Toate'			=> 'sedii',
				'Adauga'		=> 'sedii/create',
			)
		),
		'contracte' => array(
			'name'		=> 'Contracte',
			'url'		=> 'contracte',
			'icon'		=> 'fa fa-file-word-o',
			'children'  => array(
				'Toate'			=> 'contracte',
				'Adauga'		=> 'contracte/create',
			)
		),
		'service' => array(
			'name'		=> 'Service',
			'url'		=> 'service',
			'icon'		=> 'fa fa-wrench',
			'children'  => array(
				'Toate'			=> 'service',
				'Adauga'		=> 'service/create',
			)
		),
		'notificari' => array(
			'name'		=> 'Notificari',
			'url'		=> 'notificari',
			'icon'		=> 'fa fa-bell',
			'children'  => array(
				'Toate'			=> 'notificari',
			)
		),
		'panel' => array(
			'name'		=> 'Administrare utilizatori',
			'url'		=> 'panel',
			'icon'		=> 'fa fa-user',
			'children'  => array(
				'Toti utilizatorii'			=> 'panel/admin_user',
				'Adaugare utilizator'		=> 'panel/admin_user_create',
				'Grupuri de acces'		=> 'panel/admin_user_group',
			)
		),
		'util' => array(
			'name'		=> 'Setari',
			'url'		=> 'util',
			'icon'		=> 'fa fa-cogs',
			'children'  => array(
				'Database Versions'		=> 'util/list_db',
			)
		),
		'logout' => array(
			'name'		=> 'Logout',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'admin/login',

	// Restricted pages
	'page_auth' => array(
		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
		'util'						=> array('webmaster'),
		'util/list_db'				=> array('webmaster'),
		'util/backup_db'			=> array('webmaster'),
		'util/restore_db'			=> array('webmaster'),
		'util/remove_db'			=> array('webmaster'),
	),

	// AdminLTE settings
	'adminlte' => array(
		'body_class' => array(
			'webmaster'	=> 'skin-red',
			'admin'		=> 'skin-red',
			'manager'	=> 'skin-red',
			'staff'		=> 'skin-red',
		)
	),

	// Useful links to display at bottom of sidemenu
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
		array(
			'auth'		=> array('webmaster', 'admin'),
			'name'		=> 'API Site',
			'url'		=> 'api',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Github Repo',
			'url'		=> CI_BOOTSTRAP_REPO,
			'target'	=> '_blank',
			'color'		=> 'text-green'
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_admin';
