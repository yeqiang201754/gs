<?php
namespace app\index\controller;

class Index extends Base
{
    public function index()
    {

       return $this->config['company'];
    }
	public function e(){
		return 'vvv';
	}
}
