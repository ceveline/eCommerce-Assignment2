<?php
namespace app\filters;

#[\Attribute]
class Logout implements \app\core\AccessFilter{

	public function redirected(){
		if(isset($_SESSION['user_id'])){
			header('location:/Profile/index');
			return true;
		}
		return false;
	}

}