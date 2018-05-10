<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/10
 * Time: 14:21
 */

namespace app\admin\controller;


use think\Collection;

class Bbb extends Collection
{
    /**
     *
     */
    public function bbb(){
       echo  strtolower(md5(trim('123456')));
    }
}