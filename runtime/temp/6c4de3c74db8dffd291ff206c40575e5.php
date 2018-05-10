<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"D:\project\base\public/../module/admin\view\databackup\index.html";i:1517279580;s:60:"D:\project\base\public/../module/admin\view\public\base.html";i:1516416741;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo \think\Config::get('SITE_NAME'); ?>-后台管理中心</title>      
        <link rel="stylesheet" href="__PUBLIC__/plugins/layui2.2.3/css/layui.css">
	    <link rel="stylesheet" href="__PUBLIC__/plugins/font-awesome/css/font-awesome.min.css" media="all" />  
        
<style>
.layui-table-cell {height: 32px;line-height: 32px;}
</style>

        <style>
            .container{min-height: 600px;padding: 10px 10px 10px 10px;}
        </style>
	</head> 
    <body>
        <div class="container">
        
<div class="layui-btn-group">
    <a class="layui-btn layui-btn-sm backup"><i class="layui-icon">&#xe61f;</i> 立即备份</a>
    <a class="layui-btn layui-btn-sm optimize"><i class="layui-icon">&#xe636;</i> 优化数据表</a>
    <a class="layui-btn layui-btn-sm repair"><i class="layui-icon">&#xe631;</i> 修复数据表</a>
    <a class="layui-btn layui-btn-sm" href="<?php echo url('@admin/databackup/importlist'); ?>"><i class="layui-icon">&#xe681;</i> 还原数据库</a>
</div>
<table class="layui-table" lay-data="{ url:'<?php echo url("@admin/databackup/data"); ?>', page:false, id:'data', limit:1000}" lay-filter="data">
	<thead>
		<tr> 			
			<th lay-data="{type:'checkbox'}"></th>                     
            <th lay-data="{field:'name',width:200,align:'left'}">表名</th>
            <th lay-data="{field:'rows',width:150}">数据量</th>
            <th lay-data="{field:'data_length',width:150}">数据大小</th>
            <th lay-data="{field:'create_time',align:'left'}">创建时间</th>          
			<th lay-data="{align:'center', toolbar: '#menu',width:250}">操作</th>             
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
    <a class="layui-btn layui-btn-sm layui-bg-green layui-btn-radius" lay-event="optimize"><i class="layui-icon">&#xe636;</i>优化表</a> 
	<a class="layui-btn layui-btn-sm layui-btn-danger layui-btn-radius" lay-event="repair"><i class="layui-icon">&#xe640;</i>修复表</a>
</script>
<script type="text/javascript">
layui.use(['form', 'layedit','table', 'laydate','element'], function(){
    var form = layui.form,layer = layui.layer,layedit = layui.layedit,laydate = layui.laydate,element = layui.element,table = layui.table; 
    //立即开始备份
    $('.backup').on('click',function(){
        var checkStatus = table.checkStatus('data'),data = checkStatus.data; 
        if(data.length === 0){
            parent.$.fn.jcb.alert('没有选中需要进行备份的表!','error'); return;         
        }
        var new_data=[];
        $(data).each(function(i){
            new_data.push($(this)[0].name)          
        });
        data= {'tables[]':new_data};
        parent.$.fn.jcb.confirm(true,'确定备份吗?','<?php echo url("@admin/databackup/export"); ?>',null,data);        
    });
    /**优化表**/
    $('.optimize').on('click',function(){  
        var checkStatus = table.checkStatus('data'),data = checkStatus.data; 
        if(data.length === 0){
            parent.$.fn.jcb.alert('没有选中需要进行优化的表!','error');return;         
        }
        var new_data=[];
        $(data).each(function(i){
            new_data.push($(this)[0].name)          
        });
        data= {'tables[]':new_data};     
        parent.$.fn.jcb.confirm(true,'确定优化表吗?','<?php echo url("@admin/databackup/optimize"); ?>',null,data);        
    });

    /**修复表**/
    $('.repair').on('click',function(){   
        var checkStatus = table.checkStatus('data'),data = checkStatus.data; 
        if(data.length === 0){
            parent.$.fn.jcb.alert('没有选中需要进行修复的表!','error');  return;         
        }
        var new_data=[];
        $(data).each(function(i){
            new_data.push($(this)[0].name)          
        });
        data= {'tables[]':new_data};    
        parent.$.fn.jcb.confirm(true,'确定开始修复表吗?','<?php echo url("@admin/databackup/repair"); ?>',null,data);        
    });

 	function table_reload(data){
        if(data.code=='1'){
            table.reload('data', {
                url: '<?php echo url("@admin/databackup/data"); ?>', page: {curr: 1}
            });
        }
    } 

	table.on('tool(data)', function(obj){
		var data = obj.data;
		if(obj.event === 'optimize'){ 		 
            var post_data = {'tables':data.name};
            parent.$.fn.jcb.confirm(true,'确定优化表吗?','<?php echo url("@admin/databackup/optimize"); ?>',null,post_data);        
        }else if(obj.event==='repair'){	
            var post_data = {'tables':data.name};		
            parent.$.fn.jcb.confirm(true,'确定开始修复表吗?','<?php echo url("@admin/databackup/repair"); ?>',null,post_data); 				
		} 
	}); 
});
</script>

</html>