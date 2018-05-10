<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use think\Request;

class Base extends Controller
{
    protected $config = array(); //系统配置
    public function _initialize(){	
        $request = Request::instance();
        /*基础信息*/ 
        foreach(Db::name('sys_config')->field('key,val')->where('ishead',0)->select() as $item){
             $this->config[$item['key']] = $item['val'];
        }        
        $this->config['current_url'] = $request->url(true);  
        $this->assign('config',$this->config);  
    }
}