<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Model;
class TestController extends \Controller{
	public function index()
	{
        $this->render('show1');
	}

    public function show2(){
        $un=$_POST['un'];
        $tit=$_POST['tit'];
        $model=new Model();
        $arr=$model->insert('new',array('name'=>$un,'tit'=>$tit));
       //$sql="insert into new (name,tit) values('$un','$tit')";
        if($arr){
            header( "Location: /test/li" );
        }
    }
    public function li(){
        $model=new Model();
        $arr=$model->select('new','*');
        $this->render('list',['arr'=>$arr]);
    }
    public function shan($id){
        $model=new Model();
        $ar=$model->delete('new',['id'=>$id]);
        if($ar){
            header( "Location: /test/li" );
        }
    }
}
?>
