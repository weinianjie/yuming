<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>视频列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<!-- <link type="text/css" rel="stylesheet" href="/yuming/public/styles/default.css" /> -->
<link type="text/css" rel="stylesheet" href="public/styles/default.css" />
</head>
<body>
	<div id="wrapper" style="margin:0 auto;">
		<div id="header">
			<div class="logo">
				<a href="#" title="返回首页">
					<img src="public/images/logo.png">
				</a>
			</div>
<!-- 			<ul class="navigater">
				<li><a href="">首页</a></li>
				<li><a href="">域名查询</a></li>
			</ul> -->
		</div>		
		<div>
			<form action="">
				<input type="text" name="keyword" value="<?php echo ($keyword); ?>" />
				<br/>
				后缀：
				<input type="checkbox" name="com" value="1" <?php if($com == 1): ?>checked<?php endif; ?> />com
				<input type="checkbox" name="cn" value="1" <?php if($cn == 1): ?>checked<?php endif; ?> />cn
				<input type="checkbox" name="net" value="1" <?php if($net == 1): ?>checked<?php endif; ?> />net
				<br/>
				<input type="submit" />
			</form>
			<!-- 域名26网 -->
			<!-- 查询未注册域名的专门网站 -->
			<!-- 不知道用什么域名好？想到的域名都被注册了？还在费脑汁想么，全部列出可用的任你选 -->
			<table cellspacing="1" class="domainList">
				<tr>
					<!-- <th>序号</th> -->
					<th width="122px">域名</th>
					<th width="260px">机构名</th>
					<th width="240px">更新时间</th>
					<th>操作</th>
					<th>点击次数</th>
				</tr>
				<?php if(is_array($domainList)): foreach($domainList as $key=>$domain): if($key % 2 == 0): ?><tr class="odd"><?php else: ?><tr><?php endif; ?>
						<!-- <td><?php echo ($domain["id"]); ?></td> -->
						<td><?php echo ($domain["name"]); ?></td>
						<td><?php echo ($domain["org"]); ?></td>
						<td><?php echo ($domain["uts"]); ?></td>
						<td></td>
						<td></td>
				    </tr><?php endforeach; endif; ?>
			</table>
			<div class="result page"><?php echo ($page); ?></div>
		</div>
		
		<div>
		</div>
	</div>
</body>
</html>