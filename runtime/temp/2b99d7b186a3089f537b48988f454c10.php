<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"D:\project\base\public/../module/admin\view\system\args.html";i:1514549566;s:60:"D:\project\base\public/../module/admin\view\public\base.html";i:1516416741;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo \think\Config::get('SITE_NAME'); ?>-后台管理中心</title>      
        <link rel="stylesheet" href="__PUBLIC__/plugins/layui2.2.3/css/layui.css">
	    <link rel="stylesheet" href="__PUBLIC__/plugins/font-awesome/css/font-awesome.min.css" media="all" />  
         
 <style>
    .layui-upload-img {width: 92px;height: 92px;margin: 0 10px 10px 0;}
    .layui-elem-quote {padding:5px 15px 5px 15px}
</style>

        <style>
            .container{min-height: 600px;padding: 10px 10px 10px 10px;}
        </style>
	</head> 
    <body>
        <div class="container">
        
    <div>
    <blockquote class="layui-elem-quote">
        <a class="layui-btn layui-btn-sm" href="<?php echo url('admin/system/add_args'); ?>"><i class="layui-icon"></i> 添 加</a>        
         调用方法: 模板中 $config['KEY']  控制器中 $this->config['KEY']
    </blockquote>
    
    
    </div>
    <table class="layui-table" lay-skin="line" lay-size="sm">
        <colgroup>
            <col width="150">
            <col width="70">
            <col width="100">
            <col width="200">
            <col width="70">
            <col width="70">
            <col width="70">
            <col>
             <col width="200">
        </colgroup>
        <thead>
            <tr>
                <th>名称</th>
                <th style="text-align:center">类型</th>
                <th>KEY</th>                
                <th>值</th>
                <th style="text-align:center">系统菜单</th>
                <th style="text-align:center">允许为空</th>
                <th style="text-align:center">是否显示</th>
                <th>备注</th>
                <th>可用操作</th>
            </tr> 
        </thead> 
        <tbody>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr> <!-- colspan="3"-->
               
                <?php if($vo['ishead'] == '1'): ?>
                    <td style="color:red;font-weight:bold"><?php echo $vo['title']; ?></td>
                    <td colspan="7"></td>   
                <?php else: ?>
                    <td><?php echo $vo['title']; ?></td>
                    <td align="center"><?php echo get_option_byid($vo['ctype']); ?></td> 
                    <td><?php echo $vo['key']; ?></td>               
                    <td><?php echo $vo['val']; ?></td>
                    <td align="center"><i class="layui-icon"> <?php if($vo['issys'] == '1'): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>                    
                    <td align="center"><i class="layui-icon"> <?php if($vo['allowempty'] == '1'): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>                    
                    <td align="center"><i class="layui-icon"> <?php if($vo['ishide'] == '0'): ?>&#xe618;<?php else: ?>&#x1006;<?php endif; ?></i></td>
                    <td><?php echo $vo['cmark']; ?></td>
                <?php endif; ?>
                <td>
                    <a href="<?php echo url('@admin/system/modify',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-sm layui-bg-green"><i class="layui-icon">&#xe631;</i>修改</a>
	                <a data-id="<?php echo url('@admin/system/del',['id'=>$vo['id']]); ?>" class="layui-btn layui-btn-sm layui-btn-danger del"><i class="layui-icon">&#xe640;</i>删除</a>                    
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

        </div>
    </body> 
    <script src="__PUBLIC__/plugins/layui2.2.3/layui.js" charset="utf-8"></script> 
	<script src="__PUBLIC__/js/jquery.min.js" charset="utf-8"></script>
	<script src="__PUBLIC__/js/jquery.extend.js" charset="utf-8"></script>	 

    <!-- 百度编辑器 -->
    <script type="text/javascript" src="__PUBLIC__/plugins/umeditor/ueditor.config.js"></script>   
    <script type="text/javascript" src="__PUBLIC__/plugins/umeditor/ueditor.all.min.js"></script>

    <script type="text/javascript">
        var table,form,laydate; 
        layui.use(['form', 'table', 'laydate'], function(){
            table = layui.table;form = layui.form;laydate = layui.laydate;  
        });
    </script>
    
<script>
layui.use(['form','upload', 'layedit','table', 'laydate','element'], function(){
    var form = layui.form,layer = layui.layer,layedit = layui.layedit
    ,laydate = layui.laydate,upload = layui.upload,element = layui.element,table = layui.table; 
    //刷新页面    
    function re_reload(data){
        if(data.code=='1') location.reload();
    } 
    $('.del').on('click',function(){
        var delurl = $(this).attr('data-id');
        parent.$.fn.jcb.confirm(true,'确定删除吗?',delurl,re_reload); 			
    });

    function goback(data){
     
    }  
});
</script>

</html>