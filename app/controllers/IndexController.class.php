<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Log;
use app\models\School;
class IndexController extends \Controller{
	public function index()
	{
		echo "<center><h1 style='padding-top: 200px'>欢迎使用</h1></center>";
	}
}
?>