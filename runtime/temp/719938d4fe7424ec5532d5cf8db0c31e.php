<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\project\base\public/../module/admin\view\member\modfiy.html";i:1514516579;s:60:"D:\project\base\public/../module/admin\view\public\base.html";i:1516416741;}*/ ?>
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
</style>

        <style>
            .container{min-height: 600px;padding: 10px 10px 10px 10px;}
        </style>
	</head> 
    <body>
        <div class="container">
        
 <form class="layui-form" action="">

  
  <div class="layui-form-item">
    <label class="layui-form-label">头像</label>
    <div class="layui-input-inline">
        <div class="layui-upload-list">
            <img class="layui-upload-img" src="<?php echo (isset($u['avatar']) && ($u['avatar'] !== '')?$u['avatar']:'__PUBLIC__/images/avatar.png'); ?>" id="img">
            <p id="demoText"></p>
        </div>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">用户名</label>
    <div class="layui-input-block">
      <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" value="<?php echo $u['username']; ?>" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">密码框</label>
    <div class="layui-input-inline">
      <input type="password" name="password" placeholder="不修改请留为空" autocomplete="off" class="layui-input">
    </div>
    <div class="layui-form-mid layui-word-aux">密码必须输入6-12个字符</div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">昵称</label>
    <div class="layui-input-block">
      <input type="text" name="nickname" required  lay-verify="required" value="<?php echo $u['nickname']; ?>" placeholder="请输入昵称" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">状态</label>
    <div class="layui-input-block">
      <input type="checkbox" name="cstatus" title="启用" <?php if($u['cstatus'] == '1'): ?>checked<?php endif; ?> >
    </div>
  </div>
   

  <div class="layui-form-item">
    <label class="layui-form-label">权限选择</label>
    <div class="layui-input-block">
      <select name="roleid" lay-verify="required">
        <option value=""></option>
        <?php if(is_array($roles) || $roles instanceof \think\Collection || $roles instanceof \think\Paginator): $i = 0; $__LIST__ = $roles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <option value="<?php echo $vo['id']; ?>" <?php if($u['roleid'] == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['rolename']; ?></option> 
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </div>
  </div>   
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="submit">保存修改</button>
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>



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
    var form = layui.form
    ,layer = layui.layer,layedit = layui.layedit
    ,laydate = layui.laydate,upload = layui.upload
    ,element = layui.element,table = layui.table;     

    function goback(data){
        if(data.code=='1') window.history.go(-1);
    }
    upload.render({
        elem: '#img'
        ,url: '<?php echo url("@admin/login/upload"); ?>'
        ,done: function(res){
            if(res.code == 1){
                $("#img").attr('src',res.data.src); 
            }else{
                parent.$.fn.jcb.alert(res.msg,'error');
            } 
        }
    });

    form.on('submit(submit)', function(data){
        data.field.avatar = $('#img').attr('src'); 
		    parent.$.fn.jcb.post("<?php echo $config['current_url']; ?>",data.field,false,goback);  
		return false;
	}); 

});
</script>

</html>