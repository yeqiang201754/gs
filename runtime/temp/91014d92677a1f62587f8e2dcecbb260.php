<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\project\base\public/../module/admin\view\member\index.html";i:1514513844;s:60:"D:\project\base\public/../module/admin\view\public\base.html";i:1516416741;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo \think\Config::get('SITE_NAME'); ?>-后台管理中心</title>      
        <link rel="stylesheet" href="__PUBLIC__/plugins/layui2.2.3/css/layui.css">
	    <link rel="stylesheet" href="__PUBLIC__/plugins/font-awesome/css/font-awesome.min.css" media="all" />  
        
<style>
.layui-nav-img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 50%;
}
.layui-table-cell {
    height: 40px;
    line-height: 40px;
}
</style>

        <style>
            .container{min-height: 600px;padding: 10px 10px 10px 10px;}
        </style>
	</head> 
    <body>
        <div class="container">
        
<div class="layui-btn-group">
    <a class="layui-btn layui-btn-sm" href="<?php echo url('@admin/member/add'); ?>"><i class="layui-icon">&#xe61f;</i> 添加</a>
</div>
<table class="layui-table" lay-data="{ url:'<?php echo url("@admin/member/data"); ?>', page:true, id:'data', limit:<?php echo $config['page_num']; ?>}" lay-filter="data">
	<thead>
		<tr> 			
            <th lay-data="{type:'numbers', fixed: 'left'}"></th>	
            <th lay-data="{field:'avatar', width:60, templet: '#avatar', unresize: true,align:'center'}">头像</th>
			<th lay-data="{field:'username',width:200, align:'center'}">登陆名</th>                     
            <th lay-data="{field:'nickname',width:200,align:'center'}">真实姓名</th> 
            <th lay-data="{field:'cstatus', width:110, templet: '#cstatus', unresize: true,align:'center'}">状态</th>    
            <th lay-data="{field:'rolename'}">角色</th> 
			<th lay-data="{fixed: 'right', align:'center', toolbar: '#menu',width:300}">可用操作</th> 
		</tr>
	</thead>
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
    
<script type="text/html" id="menu">	
    <a class="layui-btn layui-btn-sm layui-bg-green" lay-event="edit"><i class="layui-icon">&#xe632;</i>修改</a> 
	<a class="layui-btn layui-btn-sm layui-btn-danger" lay-event="del"><i class="layui-icon">&#xe640;</i>删除</a>
</script>
<!--表格样式化 begin-->
<script type="text/html" id="avatar">  
  <img src = {{d.avatar != '' ? d.avatar : 'http://t.cn/RCzsdCq' }} class="layui-nav-img">
</script> 
<script type="text/html" id="cstatus"> 
  <input type="checkbox" name="lock" value="{{d.id}}" title="启用" lay-filter="cstatus" {{ d.cstatus == 1 ? 'checked' : '' }}>
</script>
<!--表格样式化 end-->

<script>
layui.use(['form', 'layedit','table', 'laydate','element'], function(){
    var form = layui.form
    ,layer = layui.layer
    ,layedit = layui.layedit
    ,laydate = layui.laydate
    ,element = layui.element,table = layui.table;    
    


 	function table_reload(data){
        if(data.code=='1'){
            table.reload('data', {
                url: '<?php echo url("@admin/member/data"); ?>', page: {
                        curr: 1 //重新从第 1 页开始
                }
            });
        }
    } 

    
    form.on('checkbox(cstatus)', function(obj){
		var postdata ={'field':'cstatus','value':obj.elem.checked ==true ? 1 :0,'id':this.value}  
		parent.$.fn.jcb.post('<?php echo url("@admin/member/modify_field"); ?>',postdata,false); 						
	}); 

	table.on('tool(data)', function(obj){
		var data = obj.data;
		if(obj.event === 'edit'){ 
			location.href = "<?php echo url('@admin/member/modfiy'); ?>" +'?id='+ data.id; 
        }else if(obj.event==='del'){
			parent.$.fn.jcb.confirm(true,'确定删除吗?','<?php echo url("@admin/member/del"); ?>',table_reload,{'id':data.id}); 				
		} 
	}); 
});
</script>

</html>