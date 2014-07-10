<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>视频列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<link type="text/css" rel="stylesheet" href="public/styles/default.css" />
<script type="text/javascript" src="public//js/jquery.js"></script>
<script type="text/javascript" src="public//js/event.js"></script>
<script type="text/javascript" src="public//js/init.js"></script>
<script type="text/javascript">
    if (typeof Globals == "undefined" || !Globals) {
	    var Globals = {};
	    Globals.objs = {};
	    Globals.define = {};
    }
    function init() {
        var def = Globals.define;
        /*def.islogin = ${(sessionScope.hostid==null)?'false':'true'};
        def.urlPrefix = "${applicationScope.urlPrefix}";
        def.urlStatic = "${applicationScope.urlStatic}";
        def.headPrefix = "${applicationScope.headPrefix}";
        def.layoutPhotoLimit = "${applicationScope.layoutPhotoLimit}";
        def.innerPhotoLimit = "${applicationScope.innerPhotoLimit}";
        def.communityPhotoLimit = "${applicationScope.communityPhotoLimit}";
        def.debug = true;*/
    }
    init()
</script>
</head>
<body>
	<code id="pagename" style="display:none">c:index_a:index</code>
	<div id="wrapper" style="margin:0 auto;">
		<div id="header">
			<div class="logo">
				<a href="./" title="返回首页">
					<img src="public/images/logo.png">
				</a>
			</div>
		</div>	
	 	<ul class="navigater">
			<li><a href="">最新视频</a></li>
			<li><a href="">点击排行</a></li>
		</ul>
		<div class="pageContent block">
			<div class="searchBar">
				<div class="search">
					<h3>搜索最新的视频</h3>
					<form action="">
						<input type="text" name="keyword" value="<?php echo ($keyword); ?>" class="keyword"/>
						<select name="org" class="org">
							<option value="">后缀</option>
							<option value="com" <?php if($org == 'com'): ?>selected<?php endif; ?>>com</option>
							<option value="cn" <?php if($org == 'cn'): ?>selected<?php endif; ?>>cn</option>
							<option value="net" <?php if($org == 'net'): ?>selected<?php endif; ?>>net</option>
						</select>
						<input type="submit" class="submit" value="查询"/>
					</form>
					<div class="hot"><a href="">AABB</a>|<a href="">AABB</a>|<a href="">AABB</a></div>
				</div>
				<div class="info">
				1234
				</div>
			</div>
			<!-- 域名26网 -->
			<!-- 查询未注册域名的专门网站 -->
			<!-- 不知道用什么域名好？想到的域名都被注册了？还在费脑汁想么，全部列出可用的任你选 -->
			<div class="pageLeft">
				<div class="block" style="height:200px; border:solid 1px #ccc;">
				123
				</div>
			</div>
			<div class="pageRight">
				<div class="domainList block">
					<table cellspacing="0">
						<tr>
							<!-- <th>序号</th> -->
							<th width="122px">名称</th>
							<th width="260px">机构名</th>
							<th width="240px">更新时间</th>
							<th>操作</th>
						</tr>
						<?php if(is_array($domainList)): foreach($domainList as $key=>$domain): if($key % 2 == 0): ?><tr class="odd"><?php else: ?><tr><?php endif; ?>
								<!-- <td><?php echo ($domain["id"]); ?></td> -->
								<td><?php echo ($domain["name"]); ?></td>
								<td><?php echo ($domain["org"]); ?></td>
								<td><?php echo ($domain["uts"]); ?></td>
								<td></td>
						    </tr><?php endforeach; endif; ?>
					</table>
					<div class="result page"><?php echo ($page); ?></div>
				</div>
			</div>
		</div>
		
		<div>
		</div>
	</div>
</body>
</html>