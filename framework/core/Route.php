<?php
use framework\core\Log;
use framework\core\Config;
class Route{
	protected $_controller;
	protected $_action;
	protected $_params;
	protected static $_instance;

	public static function getInstance()
	{
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	private function __construct(){
		$this->_controller = Config::getInstance()->get('app.defaultController');
		$this->_action = Config::getInstance()->get('app.defaultAction');

        //echo $path;die;
		$this->_params = array();
		$request = $_SERVER['REQUEST_URI'];
//      print_r($_SERVER);die;
        preg_match_all('/\/(\w+)/',$request,$arr);
			//$params = array_combine($keys,$values);
			$this->_controller = !empty($arr[1][0])?$arr[1][0]:$this->_controller;

			$this->_action = !empty($arr[1][1])?$arr[1][1]:$this->_action;
        if(!empty($arr[1][0])&&!empty($arr[1][1])){
            unset($arr[1][0]);
            unset($arr[1][1]);
        }
        $keys=$values=[];
        $arr=$arr[1];
        if(!empty($arr)){
            foreach($arr as $k=>$v){
                if($k%2==0){
                    $keys[]=$v;
                }else{
                    $values[]=$v;
                }
            }
        }

        $params = array_combine($keys,$values);

			$this->_params = $params;
		}



	public function route()
	{
		Log::init();
		$this->_controller = ucfirst(strtolower($this->getController()));
		

		$class = "\app\controllers\\".$this->getController()."Controller";
		

		//$controller = new $class();

			$rc = new ReflectionClass($class);
				if($rc->hasMethod($this->getAction())){
					$controller = $rc->newInstance();

					$method = $rc->getMethod($this->getAction());
					$method->invokeArgs($controller,array_values($this->_params));
				}else{
					throw new Exception('Action');
				}
			
	}

	public function getParams()
	{
		return $this->_params;
	}

	public function getController()
	{
		return $this->_controller;
	}

	public function getAction()
	{
		return $this->_action;
	}

}