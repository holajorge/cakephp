<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * User Controller
 *
 */
class UserController extends AppController
{
	public function index(){
		echo "listado de users";
		exit();
	}
		public function view($name){
		echo "vista de usuarios " . $name;
		exit();
	}
}
