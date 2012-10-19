<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>未注册域名列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<link type="text/css" rel="stylesheet" href="/yuming/public/styles/default.css" />
</head>
<body>
	<div id="wrapper" style="margin:0 auto;">
		<div id="header">
			<div class="logo">
				<a href="#" title="返回首页">
					<img src="http://cimg2.163.com/help/v2/img/logo1.gif">
				</a>
			</div>
			<ul class="navigater">
				<li><a href="">首页</a></li>
				<li><a href="">域名查询</a></li>
			</ul>
		</div>
		
		<div>
			<table cellspacing="1">
				<tr>
					<th>序号</th>
					<th>域名</th>
					<th>机构名</th>
					<th>更新时间</th>
				</tr>
				<?php if(is_array($domainList)): foreach($domainList as $key=>$domain): ?><tr>
						<td><?php echo ($domain["id"]); ?></td>
						<td><?php echo ($domain["name"]); ?></td>
						<td><?php echo ($domain["org"]); ?></td>
						<td><?php echo ($domain["uts"]); ?></td>
				    </tr><?php endforeach; endif; ?>
			</table>
		</div>
		
		<div>
		</div>
	</div>
</body>
</html>