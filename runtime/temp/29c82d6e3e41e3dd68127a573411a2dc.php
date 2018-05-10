<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\project\base\public/../module/admin\view\index\index.html";i:1517547674;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php echo $config['title']; ?></title>
		<link rel="stylesheet" href="/resource/plugins/layui2.2.3/css/layui.css">
		<link rel="stylesheet" href="/resource/plugins/font-awesome/css/font-awesome.min.css" media="all" />
		<link rel="stylesheet" href="/resource/css/themes/green.css" media="all" id="skin" />
	</head>
<style type="text/css">
	.layui-tab-content iframe{width:100%;border:none;margin:0px;padding:0px;border:none}
	.kit-side .layui-side-scroll .kit-side-fold {height: 35px;background-color: #4A5064;color: #aeb9c2;line-height: 35px;text-align: center;cursor: pointer;}
	.kit-layout-admin .kit-sided{width: 50px;}
	.kit-side .layui-side-scroll{width: auto;}
	.kit-side .layui-side-scroll .layui-nav-tree {width: auto;}
	.kit-sided .layui-side-scroll .layui-nav-item {text-align: center;}
	.kit-sided .layui-side-scroll a span {display: none;}
	.kit-side .layui-nav-tree .layui-nav-child a {padding-left: 30px;}
	.kit-sided .layui-nav-tree .layui-nav-child a {padding-left: 0;}
	.kit-sided .layui-side-scroll .layui-nav-item a, .kit-layout-admin .layui-header .layui-layout-right {padding: 0;}
	.kit-layout-admin .kit-body-folded, .kit-layout-admin .kit-footer-folded {left: 50px;}
	.kit-layout-admin .layui-header {height: 50px;}
	.kit-nav .layui-nav-item {line-height: 50px;}
	.layui-header .w50{width: 50px;}
	.layui-header .l50{left:50px;}

	.kit-tab .kit-tab-tool {z-index: 5;position: absolute;width: 40px;height: 40px;background-color: #f2f2f2;top: 0;right: 0px;border-left: 1px solid #e2e2e2;line-height: 40px;text-align: center;cursor: pointer;}
	.kit-tab .kit-tab-tool-body {position: absolute;top: 40px;right: 0px;width: 150px;border: 1px solid #e2e2e2;display: none;background-color: #fff;    z-index: 999;}
	.kit-tab .kit-tab-tool-body ul {text-align: center;padding: 8px 0;}
	.kit-tab .kit-tab-tool-body ul li.kit-item {line-height: 35px;cursor: pointer;color: #393D49;}

	/**修改密码样式**/
	.red{color:red !important}
	.layui-layer-molv{border-radius: 8px !important;overflow: hidden !important;}

	@media only screen and (max-width: 500px) {
		.layui-layout-admin .layui-logo{width: 0px;}
		.layui-layout-admin .layui-layout-left{left:0px}
		.kit-side,.kit-tab-tool{display: none}
		.layui-body,.layui-layout-admin .layui-footer{left:0px;}
		
	}
</style>
<body class="layui-layout-body kit-theme">
	<div class="layui-layout layui-layout-admin kit-layout-admin">
	 <!--header begin-->
	  <div class="layui-header">
			<div class="layui-logo"><?php echo $config['name']; ?></div>
			<!-- 头部区域（可配合layui已有的水平导航） -->
			<ul class="layui-nav layui-layout-left kit-nav">
				<?php if(is_array($menu['top']) || $menu['top'] instanceof \think\Collection || $menu['top'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['top'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<li class="layui-nav-item">
					<a href="javascript:;" class="tab-active" data-options='<?php echo json_encode($vo); ?>'>
						<i class="layui-icon"><?php echo (isset($vo['ico']) && ($vo['ico'] !== '')?$vo['ico']:''); ?></i>  
						<?php echo $vo['title']; ?>
					</a>
					<?php if(count($vo['child']) > 0): ?>
					<dl class="layui-nav-child"> 
						<?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?>
							<dd><a href="javascript:;" class="tab-active" data-options='<?php echo json_encode($child); ?>'><i class="layui-icon"><?php echo (isset($child['ico']) && ($child['ico'] !== '')?$child['ico']:''); ?></i>  <?php echo $child['title']; ?></a></dd>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</dl>
					<?php endif; ?>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?> 
			</ul>

			<ul class="layui-nav layui-layout-right kit-nav">
				<li class="layui-nav-item">
					<a href="javascript:;">
						<i class="layui-icon">&#xe63f;</i> 更换风格</a>
					</a>
					<dl class="layui-nav-child skin">
						<dd><a href="javascript:;" data-skin="default" style="color:#393D49;"><i class="layui-icon">&#xe658;</i> 默认</a></dd>
						<dd><a href="javascript:;" data-skin="orange" style="color:#ff6700;"><i class="layui-icon">&#xe658;</i> 橘子橙</a></dd>
						<dd><a href="javascript:;" data-skin="green" style="color:#00a65a;"><i class="layui-icon">&#xe658;</i> 原谅绿</a></dd>
						<dd><a href="javascript:;" data-skin="pink" style="color:#FA6086;"><i class="layui-icon">&#xe658;</i> 少女粉</a></dd>
						<dd><a href="javascript:;" data-skin="blue.1" style="color:#00c0ef;"><i class="layui-icon">&#xe658;</i> 天空蓝</a></dd>
						<dd><a href="javascript:;" data-skin="red" style="color:#dd4b39;"><i class="layui-icon">&#xe658;</i> 枫叶红</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item">
					<a href="javascript:;">
					<img src="<?php echo (isset($member['avatar']) && ($member['avatar'] !== '')?$member['avatar']:'__PUBLIC__/images/avatar.png'); ?>" class="layui-nav-img"><?php echo $member['nickname']; ?></a>
					<dl class="layui-nav-child">
						<dd><a href="javascript:modify()">密码修改</a></dd>
						<dd><a href="javascript:void(0)" class="clearcache">清除缓存</a></dd>
						<dd><a href="<?php echo url('@admin/login/index'); ?>">注销登陆</a></dd>
					</dl>
				</li>
				<li class="layui-nav-item">&nbsp;&nbsp;</li>
			</ul>
	  </div>
	   <!--header end-->

	   <!--leftmenu begin-->
	  <div class="layui-side layui-bg-black kit-side">
		<div class="layui-side-scroll">
		  <div class="kit-side-fold"><i class="fa fa-navicon" aria-hidden="true"></i></div>

		  <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
		  <ul class="layui-nav layui-nav-tree"  lay-filter="test">
			<?php if(is_array($menu['left']) || $menu['left'] instanceof \think\Collection || $menu['left'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['left'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>	
			<li class="layui-nav-item layui-nav-itemed">				
			  	<a href="javascript:;" class="tab-active" data-options='<?php echo json_encode($vo); ?>'>
					<i class="layui-icon"><?php echo (isset($vo['ico']) && ($vo['ico'] !== '')?$vo['ico']:''); ?></i> 
					<span><?php echo $vo['title']; ?></span>
				</a>
				<?php if(count($vo['child']) > 0): ?>
				<dl class="layui-nav-child"> 
					<?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?> 
						<dd>
							<a href="javascript:;" class="tab-active" data-options='<?php echo json_encode($child); ?>'>
								<i class="layui-icon"><?php echo (isset($child['ico']) && ($child['ico'] !== '')?$child['ico']:''); ?></i> 
								<span><?php echo $child['title']; ?></span> 
							</a>
						</dd>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dl> 
				<?php endif; ?>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		  </ul>
		</div>
	  </div>
	  <!--leftmenu end-->
	  <!--mainbody begin-->
	  <div class="layui-body"> 
		<div class="layui-tab layui-tab-card kit-tab" lay-allowClose="true" lay-filter="kitTab" style="margin:0px">
		  	<ul class="layui-tab-title">
				<li class="layui-this"><i class="layui-icon">&#xe68e;</i> 控制主面板</li> <!--<i class="fa fa-home fa-lg"> </i>-->
		  	</ul>
			<!--close btn begin-->
		  	<i class="fa fa-chevron-down kit-tab-tool"></i>
			<div class="kit-tab-tool-body layui-anim layui-anim-upbit" id="kuaijie" style="display: none;">
				<ul id="menudiv">
					<li class="kit-item">
						<a class="kit-item closte_btn" data-target="closeOther">关闭其他标签页</a>
					</li>
					<li class="kit-item">
						<a class="kit-item closte_btn" data-target="closeAll">关闭全部标签页</a>
					</li>
				</ul>
			</div>
			<!--close btn end-->		  
		  <div class="layui-tab-content" style="padding:0px">
			<div class="layui-tab-item layui-show"><iframe src="<?php echo $config['defaulturl']; ?>" height="100%"></iframe></div>		 
		  </div>
		</div> 
	  </div>
	   <!--mainbody end--> 
	  <div class="layui-footer">
			<!-- 底部固定区域 -->
			<?php echo $config['copyright']; ?>
	  </div>
	</div>

	<script src="/resource/js/jquery.min.js"></script>	
	<script src="/resource/plugins/layui2.2.3/layui.js"></script>  
	<script src="/resource/js/jquery.extend.js"></script> 
	<script type="text/javascript"> 
		var element=null;
		var active = {		 
				tabAdd: function(options){ 
					var iconHtml = ''; //是否有图标
					if(options.icon != ''){
						iconHtml = '<i class="layui-icon">'+options.ico+'</i> ';
					} 
					element.tabAdd('kitTab', {
						title:  iconHtml + options.title,content: options.url?'<iframe src="'+options.url+'">':options.content,id: options.id  //当id小于0 时 不可以关闭
					});
					active.tabChange(options.id); //激活面板
					active.winResize();
				}
				,tabDelete: function(id){ 
					element.tabDelete('kitTab', id); //删除：			
				}
				,tabChange: function(id){			 
					element.tabChange('kitTab',id); //切换到指定Tab项
				}
				,winResize: function() {
					var h= $('.layui-body').height();
					$('.layui-tab-item iframe').each(function(){
						$(this).height(h-46);
					});	
				}		
		};
		//打开tab
		function _tabadd(options){
			var t=true;				 
			if(options.url == null || options.url == '') return;	
			$('.layui-tab-title li').each(function(a){ 
				if(options.id == $(this).attr('lay-id')){
					active['tabChange'].call(this,options.id);  //激活
					t= false;
				}				
			}); 
			t ? active['tabAdd'].call(this,options):''; //创建tab 
		}
		layui.use(['form', 'layer', 'element'], function(){
			var form = layui.form,layer = layui.layer;	
			element = layui.element;
			form.on('submit(subpwd)', function(data){
				if(data.field.oldpwd == data.field.repwd){
					$.fn.jcb.alert('新密码和旧密码不能一样!','error');					
				}else if(data.field.newpwd != data.field.repwd){
					$.fn.jcb.alert('两次新密码不一样!','error');					
				}else{
					$.fn.jcb.post('<?php echo url("@admin/index/pwd"); ?>',data.field,false,closeopen); 
				} 
				return false;
			});
			//清缓存
			form.on('submit(clear)', function(data){ 
				$.fn.jcb.post('<?php echo url("@admin/index/clearcache"); ?>',data.field,false,closeopen);
				return false;
			});
			
		
			//监听点击
			$('.tab-active').on('click', function(){
				_tabadd($(this).data('options')); 			
			});	
			//窗口大小改变时
			$(window).resize(function() {
					active.winResize();
			});	
			//折叠菜单
			$('.kit-side-fold').off('click').on('click', function() {
				var _doc = $(document);
				var _side = _doc.find('div.layui-side');
				if (_side.hasClass('kit-sided')) {
					_side.removeClass('kit-sided');
					_doc.find('div.layui-body').removeClass('kit-body-folded');
					_doc.find('div.layui-footer').removeClass('kit-footer-folded');
					_doc.find('div.layui-logo').removeClass('w50');
					$('.layui-layout-left').removeClass('l50');						
				} else {
					_side.addClass('kit-sided');
					_doc.find('div.layui-body').addClass('kit-body-folded');
					_doc.find('div.layui-footer').addClass('kit-footer-folded');
					_doc.find('div.layui-logo').addClass('w50');
					$('.layui-layout-left').addClass('l50');	
				}
			});	
			//更换风格
			$('.skin a').on('click',function(){
				var skinName = $(this).attr('data-skin');
				var path  = '/resource/css/themes/';
				$("#skin").attr("href",path +skinName+".css");
				//jquery.cookie 存放
				//$.cookie("myCssSkin",skinName,{path:'/',expires:10});
			});	

					/*清除缓存*/
			$('.clearcache').on('click',function(){
				layer.open({
						type: 1,title: '清除缓存',closeBtn: false,skin: 'layui-layer-molv',area:['330px','180px']
						,shade: 0.8,id: 'clearcanche',moveType: 1
						,content:  
							'<div class="pwd" style="line-height: 22px;padding: 10px 20px;">'						
							+'<form class="layui-form layui-form-pane" action="">'						
							+'<div class="layui-form-item">'
							+'    <div class="layui-inline">'
							+'		<input type="checkbox" name="log" value="1" title="日志" checked>'
							+'		<input type="checkbox" name="temp" value="2" title="临时" checked>'
							+'		<input type="checkbox" name="cache" value="3" title="缓存" checked>'
							+'	  </div>'
							+'</div>'
							+'<div>'
							+'	<div style="width:200px; margin:0 auto"><button class="layui-btn" lay-submit lay-filter="clear">一键清除</button><a  class="layui-btn layui-btn-primary" href="javascript:cancel()">放弃清除</a></div>'
							+'</div>'
							+'</form></div>'
				});
				form.render('checkbox');
			});
		});  
		/*密码修改*/
		function modify(){
			layer.open({
					type: 1,title: '密码修改',closeBtn: false,skin: 'layui-layer-molv',area:['370px','280px']
					,shade: 0.8,id: 'pwdalter',moveType: 1
					,content:  
						'<div class="pwd" style="line-height: 22px;padding: 10px 20px;"><form class="layui-form layui-form-pane" action=""><div class="layui-form-item"><label class="layui-form-label">原始密码</label><div class="layui-input-inline"><input type="text" name="oldpwd" required  lay-verify="required" placeholder="请输入原始密码" autocomplete="off" class="layui-input">'
						+'</div><div class="layui-form-mid layui-word-aux red">*</div></div><div class="layui-form-item"><label class="layui-form-label">原始密码</label><div class="layui-input-inline"><input type="password" name="newpwd" required  lay-verify="required" placeholder="请输入新密码" autocomplete="off" class="layui-input">'
						+'</div><div class="layui-form-mid layui-word-aux red">*</div></div><div class="layui-form-item"><label class="layui-form-label">重复密码</label><div class="layui-input-inline"><input type="password" name="repwd" required  lay-verify="required" placeholder="请输入新密码" autocomplete="off" class="layui-input">'
						+'</div><div class="layui-form-mid layui-word-aux red">*</div></div><div><div style="width:200px; margin:0 auto"><button class="layui-btn" lay-submit lay-filter="subpwd">提交修改</button><a  class="layui-btn layui-btn-primary" href="javascript:cancel()">放弃修改</a></div></div></form></div>'
			});
		}

		/*关闭窗口方法*/
		function cancel(){
			layer.closeAll();
		}
		function closeopen(data){
			if(data.code=='1') layer.closeAll();
		}

		$(function(){
			var h= $('.layui-body').height();
			$('.layui-tab-item iframe').each(function(){
				$(this).height(h-46);
			});	
			/*tab 按钮*/
			$('.fa-chevron-down').on('click',function(){
				if($('#kuaijie').css('display') === 'none'){
					$('#kuaijie').show();
				}else{
					$('#kuaijie').hide();
				}
			});
			/*关闭tab*/
			$('.closte_btn').on('click',function(){
				if($(this).attr('data-target')==='closeOther'){
					$('.layui-tab-title li').each(function(a){ 
						var id = $(this).attr('lay-id');
						if($(this).attr('class') !== 'layui-this'){ 
							if(id > 0) active['tabDelete'].call(this,id);   
						}										
					}); 	
				}else{
					$('.layui-tab-title li').each(function(a){ 
						var id = $(this).attr('lay-id');
						if(id > 0) active['tabDelete'].call(this,id);  
					});
				}
				$('#kuaijie').hide();
			});			
		});
		
		//关闭当前tab
		function close_current_tb(){
			$('.layui-tab-title li').each(function(a){ 				
				if($(this).attr('class') === 'layui-this'){ 
					var id = $(this).attr('lay-id');
					if(id > 0) active['tabDelete'].call(this,id);   
				}										
			}); 
		}
	</script>
</body>
</html>