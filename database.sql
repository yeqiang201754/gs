/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : jcb_cms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-02-03 16:43:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jcb_sys_action_role
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_action_role`;
CREATE TABLE `jcb_sys_action_role` (
  `roleid` bigint(20) NOT NULL,
  `action` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jcb_sys_action_role
-- ----------------------------
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|index');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|data');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|export');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|repair');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|optimize');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|importlist');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|datalist');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|del');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|databackup|import');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|index|index');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|index|main');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|index|pwd');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|index|clearcache');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|member|index');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|member|data');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|member|add');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|member|del');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|member|modfiy');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|member|modify_field');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|menu|index');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|menu|menu_data');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|menu|menu_set');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|menu|menu_del');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|menu|menu_add');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|action_set');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|index');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|role_data');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|add');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|del');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|modify');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|set_menu');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|role|menu_data');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|system|index');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|system|save');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|system|args');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|system|add_args');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|system|modify');
INSERT INTO `jcb_sys_action_role` VALUES ('1', 'admin|system|del');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|index|index');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|index|pwd');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|member|index');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|member|data');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|member|add');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|member|del');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|member|modfiy');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|member|modify_field');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|menu|index');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|menu|menu_data');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|menu|menu_set');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|menu|menu_del');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|menu|menu_add');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|action_set');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|index');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|role_data');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|add');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|del');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|modify');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|set_menu');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|role|menu_data');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|system|index');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|system|save');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|system|args');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|system|add_args');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|system|modify');
INSERT INTO `jcb_sys_action_role` VALUES ('3', 'admin|system|del');

-- ----------------------------
-- Table structure for jcb_sys_config
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_config`;
CREATE TABLE `jcb_sys_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `key` varchar(255) DEFAULT NULL,
  `val` varchar(255) DEFAULT NULL,
  `ctype` varchar(255) DEFAULT NULL COMMENT '1 文本框  2数值框 ',
  `sort` int(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cmark` varchar(255) DEFAULT NULL,
  `item` varchar(3000) DEFAULT NULL,
  `allowempty` tinyint(4) DEFAULT '1' COMMENT '1 为空 0 不为空',
  `issys` tinyint(4) DEFAULT '0' COMMENT '1 系统默认 不能删除',
  `ishide` tinyint(4) DEFAULT '0' COMMENT '0 显示 1隐藏',
  `ishead` tinyint(255) DEFAULT '0' COMMENT '0 否 1是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jcb_sys_config
-- ----------------------------
INSERT INTO `jcb_sys_config` VALUES ('1', '0', '', '', '0', '0', '基础设置', '', '', '0', '1', '0', '1');
INSERT INTO `jcb_sys_config` VALUES ('2', '0', '', '', '0', '0', '其它参数', '', '1', '1', '0', '0', '1');
INSERT INTO `jcb_sys_config` VALUES ('3', '1', 'title', '后台管理系统', '1', '0', '后台名称', '', '1', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('4', '1', 'name', '开放式系统', '1', '0', '系统名称', '系统显示名称', '上海|北京|天京', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('5', '1', 'name_en', 'JCB ADMIN', '1', '0', '系统英文', '系统显示英文名称', '', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('6', '1', 'company', '金诚宝科技有限公司', '1', '0', '公司名称', '公司名称', '', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('7', '1', 'copyright', 'CopyRight © 2010-2018 JCB ADMIN All Rights Reserved.', '1', '0', '系统版权', '系统版 权', '', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('8', '1', 'url', 'www.jcbweb.cn', '1', '0', '网址', '系统网址', '', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('9', '1', 'page_num', '12', '2', '0', '每页显示数', '表格中每页显示的数量', '', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('10', '2', 'area', '北京', '3', '0', '选择题', '请选择', '上海|北京|天京', '1', '0', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('11', '2', 'kaiguan', '0', '4', '0', '开关题', '请指定', '', '1', '0', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('19', '0', '', '', '0', '0', '前台参数', '', '', '1', '0', '0', '1');
INSERT INTO `jcb_sys_config` VALUES ('20', '19', 'front_notice', '没有什么内容', '5', '0', '前台显示', '前台显示文字', '', '1', '0', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('22', '1', 'defaulturl', '/admin/index/main', '1', '0', '默认网址', '进入后台时的默认网址 此tab不可删除', '', '1', '1', '0', '0');
INSERT INTO `jcb_sys_config` VALUES ('23', '1', 'uploadtype', 'jpg,png,gif,jpeg', '1', '0', '允许上传类型', '输入允许上传的文件类型  请用,分隔', '', '1', '1', '0', '0');

-- ----------------------------
-- Table structure for jcb_sys_ico
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_ico`;
CREATE TABLE `jcb_sys_ico` (
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jcb_sys_ico
-- ----------------------------
INSERT INTO `jcb_sys_ico` VALUES ('主页', '#xe68e;', '1');
INSERT INTO `jcb_sys_ico` VALUES ('赞', '#xe6c6;', '2');
INSERT INTO `jcb_sys_ico` VALUES ('踩', '#xe6c5;', '3');
INSERT INTO `jcb_sys_ico` VALUES ('男', '#xe662;', '4');
INSERT INTO `jcb_sys_ico` VALUES ('女', '#xe661;', '5');
INSERT INTO `jcb_sys_ico` VALUES ('相机-空心', '#xe660;', '6');
INSERT INTO `jcb_sys_ico` VALUES ('菜单-水平', '#xe65f;', '7');
INSERT INTO `jcb_sys_ico` VALUES ('菜单-竖直', '#xe671;', '8');
INSERT INTO `jcb_sys_ico` VALUES ('菜单-水平', '#xe65f;', '9');
INSERT INTO `jcb_sys_ico` VALUES ('菜单-竖直', '#xe671;', '10');
INSERT INTO `jcb_sys_ico` VALUES ('返回', '#xe65c;', '11');
INSERT INTO `jcb_sys_ico` VALUES ('Hot', '#xe756;', '12');
INSERT INTO `jcb_sys_ico` VALUES ('404', '#xe61c;', '13');
INSERT INTO `jcb_sys_ico` VALUES ('21cake_list', '#xe60a;', '14');
INSERT INTO `jcb_sys_ico` VALUES ('emw_代码', '#xe64e;', '15');
INSERT INTO `jcb_sys_ico` VALUES ('font-strikethrough', '#xe64f;', '16');
INSERT INTO `jcb_sys_ico` VALUES ('help', '#xe607;', '17');
INSERT INTO `jcb_sys_ico` VALUES ('html', '#xe64b;', '18');
INSERT INTO `jcb_sys_ico` VALUES ('icon_树', '#xe62e;', '19');
INSERT INTO `jcb_sys_ico` VALUES ('loading', '#xe63d;', '20');
INSERT INTO `jcb_sys_ico` VALUES ('loading', '#xe63e;', '21');
INSERT INTO `jcb_sys_ico` VALUES ('star', '#xe600;', '22');
INSERT INTO `jcb_sys_ico` VALUES ('tab', '#xe62a;', '23');
INSERT INTO `jcb_sys_ico` VALUES ('top', '#xe604;', '24');
INSERT INTO `jcb_sys_ico` VALUES ('unlink', '#xe64d;', '25');
INSERT INTO `jcb_sys_ico` VALUES ('报表', '#xe629;', '26');
INSERT INTO `jcb_sys_ico` VALUES ('编辑', '#xe642;', '27');
INSERT INTO `jcb_sys_ico` VALUES ('编辑_文字', '#xe639;', '28');
INSERT INTO `jcb_sys_ico` VALUES ('表单', '#xe63c;', '29');
INSERT INTO `jcb_sys_ico` VALUES ('表格', '#xe62d;', '30');
INSERT INTO `jcb_sys_ico` VALUES ('表情', '#xe60c;', '31');
INSERT INTO `jcb_sys_ico` VALUES ('表情', '#xe650;', '32');
INSERT INTO `jcb_sys_ico` VALUES ('播放', '#xe652;', '33');
INSERT INTO `jcb_sys_ico` VALUES ('播放暂停', '#xe651;', '34');
INSERT INTO `jcb_sys_ico` VALUES ('布局', '#xe632;', '35');
INSERT INTO `jcb_sys_ico` VALUES ('窗口', '#xe638;', '36');
INSERT INTO `jcb_sys_ico` VALUES ('错-', '#x1007;', '37');
INSERT INTO `jcb_sys_ico` VALUES ('代码1', '#xe635;', '38');
INSERT INTO `jcb_sys_ico` VALUES ('单选框-候选', '#xe63f;', '39');
INSERT INTO `jcb_sys_ico` VALUES ('单选框-选中', '#xe643;', '40');
INSERT INTO `jcb_sys_ico` VALUES ('等级', '#xe735;', '41');
INSERT INTO `jcb_sys_ico` VALUES ('对', '#xe605;', '42');
INSERT INTO `jcb_sys_ico` VALUES ('对勾', '#xe618;', '43');
INSERT INTO `jcb_sys_ico` VALUES ('对话', '#xe611;', '44');
INSERT INTO `jcb_sys_ico` VALUES ('发布', '#xe609;', '45');
INSERT INTO `jcb_sys_ico` VALUES ('分享', '#xe641;', '46');
INSERT INTO `jcb_sys_ico` VALUES ('工具', '#xe631;', '47');
INSERT INTO `jcb_sys_ico` VALUES ('勾选框（未打勾）', '#xe626;', '48');
INSERT INTO `jcb_sys_ico` VALUES ('勾选框（已打勾）', '#xe627;', '49');
INSERT INTO `jcb_sys_ico` VALUES ('购物车1', '#xe698;', '50');
INSERT INTO `jcb_sys_ico` VALUES ('购物车2', '#xe657;', '51');
INSERT INTO `jcb_sys_ico` VALUES ('关于', '#xe60b;', '52');
INSERT INTO `jcb_sys_ico` VALUES ('好友请求', '#xe612;', '53');
INSERT INTO `jcb_sys_ico` VALUES ('换肤2', '#xe61b;', '54');
INSERT INTO `jcb_sys_ico` VALUES ('记录', '#xe60e;', '55');
INSERT INTO `jcb_sys_ico` VALUES ('加粗', '#xe62b;', '56');
INSERT INTO `jcb_sys_ico` VALUES ('检验', '#xe6b2;', '57');
INSERT INTO `jcb_sys_ico` VALUES ('金额-美元', '#xe659;', '58');
INSERT INTO `jcb_sys_ico` VALUES ('金额-人民币', '#xe65e;', '59');
INSERT INTO `jcb_sys_ico` VALUES ('进水', '#xe636;', '60');
INSERT INTO `jcb_sys_ico` VALUES ('居中对齐', '#xe647;', '61');
INSERT INTO `jcb_sys_ico` VALUES ('客服', '#xe606;', '62');
INSERT INTO `jcb_sys_ico` VALUES ('哭脸', '#xe69c;', '63');
INSERT INTO `jcb_sys_ico` VALUES ('喇叭', '#xe645;', '64');
INSERT INTO `jcb_sys_ico` VALUES ('链接', '#xe64c;', '65');
INSERT INTO `jcb_sys_ico` VALUES ('聊天 对话 IM 沟通', '#xe63a;', '66');
INSERT INTO `jcb_sys_ico` VALUES ('轮播组图', '#xe634;', '67');
INSERT INTO `jcb_sys_ico` VALUES ('么么直播－翻页', '#xe633;', '68');
INSERT INTO `jcb_sys_ico` VALUES ('日期', '#xe637;', '69');
INSERT INTO `jcb_sys_ico` VALUES ('三角', '#xe623;', '70');
INSERT INTO `jcb_sys_ico` VALUES ('三角', '#xe625;', '71');
INSERT INTO `jcb_sys_ico` VALUES ('删除', '#xe640;', '72');
INSERT INTO `jcb_sys_ico` VALUES ('上传', '#xe62f;', '73');
INSERT INTO `jcb_sys_ico` VALUES ('上传-空心', '#xe681;', '74');
INSERT INTO `jcb_sys_ico` VALUES ('上传-实心', '#xe67c;', '75');
INSERT INTO `jcb_sys_ico` VALUES ('上一页', '#xe65a;', '76');
INSERT INTO `jcb_sys_ico` VALUES ('设置', '#xe614;', '77');
INSERT INTO `jcb_sys_ico` VALUES ('设置', '#xe620;', '78');
INSERT INTO `jcb_sys_ico` VALUES ('视频', '#xe6ed;', '79');
INSERT INTO `jcb_sys_ico` VALUES ('手机', '#xe63b;', '80');
INSERT INTO `jcb_sys_ico` VALUES ('刷新', '#x1002;', '81');
INSERT INTO `jcb_sys_ico` VALUES ('搜索', '#xe615;', '82');
INSERT INTO `jcb_sys_ico` VALUES ('添加', '#xe61f;', '83');
INSERT INTO `jcb_sys_ico` VALUES ('添加', '#xe654;', '84');
INSERT INTO `jcb_sys_ico` VALUES ('添加', '#xe608;', '85');
INSERT INTO `jcb_sys_ico` VALUES ('图表', '#xe62c;', '86');
INSERT INTO `jcb_sys_ico` VALUES ('图片', '#xe60d;', '87');
INSERT INTO `jcb_sys_ico` VALUES ('图片', '#xe64a;', '88');
INSERT INTO `jcb_sys_ico` VALUES ('位置', '#xe715;', '89');
INSERT INTO `jcb_sys_ico` VALUES ('文档', '#xe705;', '90');
INSERT INTO `jcb_sys_ico` VALUES ('文件', '#xe621;', '91');
INSERT INTO `jcb_sys_ico` VALUES ('文件', '#xe61d;', '92');
INSERT INTO `jcb_sys_ico` VALUES ('文件夹', '#xe7a0;', '93');
INSERT INTO `jcb_sys_ico` VALUES ('文件夹', '#xe622;', '94');
INSERT INTO `jcb_sys_ico` VALUES ('文件夹_反', '#xe624;', '95');
INSERT INTO `jcb_sys_ico` VALUES ('文件下载', '#xe61e;', '96');
INSERT INTO `jcb_sys_ico` VALUES ('我的好友', '#xe613;', '97');
INSERT INTO `jcb_sys_ico` VALUES ('下一页', '#xe65b;', '98');
INSERT INTO `jcb_sys_ico` VALUES ('下载', '#xe601;', '99');
INSERT INTO `jcb_sys_ico` VALUES ('向上', '#xe619;', '100');
INSERT INTO `jcb_sys_ico` VALUES ('向下', '#xe61a;', '101');
INSERT INTO `jcb_sys_ico` VALUES ('笑脸', '#xe6af;', '102');
INSERT INTO `jcb_sys_ico` VALUES ('斜体', '#xe644;', '103');
INSERT INTO `jcb_sys_ico` VALUES ('星级', '#xe658;', '104');
INSERT INTO `jcb_sys_ico` VALUES ('选择模版48', '#xe630;', '105');
INSERT INTO `jcb_sys_ico` VALUES ('音乐', '#xe6fc;', '106');
INSERT INTO `jcb_sys_ico` VALUES ('引擎', '#xe628;', '107');
INSERT INTO `jcb_sys_ico` VALUES ('隐身-im', '#xe60f;', '108');
INSERT INTO `jcb_sys_ico` VALUES ('应用', '#xe857;', '109');
INSERT INTO `jcb_sys_ico` VALUES ('右对齐', '#xe648;', '110');
INSERT INTO `jcb_sys_ico` VALUES ('右右', '#xe602;', '111');
INSERT INTO `jcb_sys_ico` VALUES ('语音', '#xe688;', '112');
INSERT INTO `jcb_sys_ico` VALUES ('圆点', '#xe617;', '113');
INSERT INTO `jcb_sys_ico` VALUES ('阅卷错号', '#x1006;', '114');
INSERT INTO `jcb_sys_ico` VALUES ('在线', '#xe610;', '115');
INSERT INTO `jcb_sys_ico` VALUES ('正确', '#x1005;', '116');
INSERT INTO `jcb_sys_ico` VALUES ('正确', '#xe616;', '117');
INSERT INTO `jcb_sys_ico` VALUES ('字体-下划线', '#xe646;', '118');
INSERT INTO `jcb_sys_ico` VALUES ('左对齐', '#xe649;', '119');
INSERT INTO `jcb_sys_ico` VALUES ('左左', '#xe603;', '120');

-- ----------------------------
-- Table structure for jcb_sys_member
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_member`;
CREATE TABLE `jcb_sys_member` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `cstatus` tinyint(4) DEFAULT '1',
  `roleid` bigint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='会员表';

-- ----------------------------
-- Records of jcb_sys_member
-- ----------------------------
INSERT INTO `jcb_sys_member` VALUES ('1', 'admin', '202cb962ac59075b964b07152d234b70', '管理员', '/uploads/20171230\\e5038d874b758fa3b84a444b144e8b09.png', '1', '1');

-- ----------------------------
-- Table structure for jcb_sys_member_menu
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_member_menu`;
CREATE TABLE `jcb_sys_member_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文档ID',
  `module` varchar(20) DEFAULT NULL,
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `url` char(255) DEFAULT NULL COMMENT '链接地址',
  `icon` varchar(64) DEFAULT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `type` varchar(40) DEFAULT NULL COMMENT 'nav,auth',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='后台菜单';

-- ----------------------------
-- Records of jcb_sys_member_menu
-- ----------------------------
INSERT INTO `jcb_sys_member_menu` VALUES ('13', 'member', '0', '个人资料', '', 'fa-users fa-lg', '1', 'nav');
INSERT INTO `jcb_sys_member_menu` VALUES ('14', 'member', '13', '我的资料', 'member/account/profile', '', '1', 'nav');
INSERT INTO `jcb_sys_member_menu` VALUES ('15', 'member', '13', '修改密码', 'member/account/password', '', '2', 'nav');
INSERT INTO `jcb_sys_member_menu` VALUES ('19', 'member', '0', '我的订单', '', 'fa-credit-card fa-lg', '0', 'nav');
INSERT INTO `jcb_sys_member_menu` VALUES ('20', 'member', '13', '地址簿', 'member/account/address', '', '3', 'nav');
INSERT INTO `jcb_sys_member_menu` VALUES ('21', 'member', '19', '订单管理', 'member/order_member/index', '', '1', 'nav');
INSERT INTO `jcb_sys_member_menu` VALUES ('22', 'member', '21', '订单详情', 'member/order_member/show_order', '', '1', 'auth');
INSERT INTO `jcb_sys_member_menu` VALUES ('23', 'member', '21', '订单历史', 'member/order_member/history', '', '0', 'auth');
INSERT INTO `jcb_sys_member_menu` VALUES ('25', 'member', '20', '新增', 'member/account/add_address', '', '0', 'auth');
INSERT INTO `jcb_sys_member_menu` VALUES ('26', 'member', '20', '编辑', 'member/account/edit_address', '', '0', 'auth');
INSERT INTO `jcb_sys_member_menu` VALUES ('27', 'member', '20', '删除', 'member/account/del_address', '', '0', 'auth');
INSERT INTO `jcb_sys_member_menu` VALUES ('28', 'member', '21', '取消订单', 'member/order_member/cancel', '', '0', 'auth');

-- ----------------------------
-- Table structure for jcb_sys_menu
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_menu`;
CREATE TABLE `jcb_sys_menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sort` bigint(255) DEFAULT NULL,
  `istop` tinyint(255) DEFAULT '0',
  `isshow` tinyint(255) DEFAULT '0',
  `ico` varchar(255) DEFAULT NULL,
  `url` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jcb_sys_menu
-- ----------------------------
INSERT INTO `jcb_sys_menu` VALUES ('1', '0', '系统设置', '1', '1', '1', '&#xe614;', '');
INSERT INTO `jcb_sys_menu` VALUES ('2', '1', '菜单设置', '1', '1', '1', '&#xe647;', '/admin/menu/index');
INSERT INTO `jcb_sys_menu` VALUES ('3', '1', '角色列表', '2', '1', '1', '&#xe62a;', '/admin/role/index');
INSERT INTO `jcb_sys_menu` VALUES ('4', '0', '金诚宝', '0', '1', '1', '&#xe609;', 'http://www.jcbweb.cn');
INSERT INTO `jcb_sys_menu` VALUES ('5', '1', '后台用户', '3', '1', '1', '&#xe612;', '/admin/member/index');
INSERT INTO `jcb_sys_menu` VALUES ('6', '1', '参数设置', '5', '1', '1', '&#xe631;', '/admin/system/index');
INSERT INTO `jcb_sys_menu` VALUES ('7', '1', '参数命名', '4', '1', '1', '&#xe620;', '/admin/system/args');
INSERT INTO `jcb_sys_menu` VALUES ('14', '1', '备份还原', '7', '1', '1', '&#xe681;', '/admin/databackup/index');
INSERT INTO `jcb_sys_menu` VALUES ('15', '0', '日志记录', '4', '0', '1', '&#xe60a;', '');
INSERT INTO `jcb_sys_menu` VALUES ('16', '0', '商品管理', '2', '0', '1', '&#xe857;', '');
INSERT INTO `jcb_sys_menu` VALUES ('17', '0', '新闻管理', '3', '0', '1', '&#xe6ed;', '');

-- ----------------------------
-- Table structure for jcb_sys_menu_role
-- ----------------------------
DROP TABLE IF EXISTS `jcb_sys_menu_role`;
CREATE TABLE `jcb_sys_menu_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(255) DEFAULT NULL,
  `cstatus` tinyint(255) DEFAULT NULL,
  `sort` int(255) DEFAULT NULL,
  `roleval` varchar(2000) DEFAULT NULL COMMENT '菜单值',
  `cmark` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jcb_sys_menu_role
-- ----------------------------
INSERT INTO `jcb_sys_menu_role` VALUES ('1', '超级管理', '1', '1', '1,2,3,4,5,9,10,11,12,19,17,8,18,6,14,15,16,7', '超级管理员拥有超级管理员权限');
INSERT INTO `jcb_sys_menu_role` VALUES ('3', '普通会员', '1', '0', ',18,1,4,17,2,9,3,10,8,7,5,19,12,6', '这是普通会员只有普通会员权限');
