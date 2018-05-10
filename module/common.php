<?php
use think\route;

//应用公共文件
//路由别名
Route::alias('index','index/index');

function get_option_byid($id){
    switch ($id){
        case 1: return '文本型'; break;  
        case 2: return '数值型'; break; 
        case 3: return '选择型'; break;  
        case 4: return '开关型'; break;  
        case 5: return '文本型1'; break;  
        case 6: return '文本型2'; break;
        default: return '';
    }
}
//判断是否在数组中
function is_in_arrary($i,$str){
    if(in_array($i,explode('|',$str))){
        return '1';
    }
    return '0';
}


/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function format_bytes($size, $delimiter = '') {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter . $units[$i];
}


//下拉列表
function get_datalist($k,$data){
    $a = array();
    foreach($data as $d){
        if($d['pid'] == $k){
            $a[] = $d;
        }
    }
    return $a;
}
//获取当前下拉列表
function get_current_datalist($id,$data){    
    $pid ='';
    foreach($data as $d){
        if($d['id'] == $id){
            $pid =$d['pid']; 
        }
    }
    return get_datalist($pid,$data);
}