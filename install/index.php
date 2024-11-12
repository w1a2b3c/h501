<?php
//if(!file_exists('./install/install.lock')) exit('<script>location="./install";</script>');
$config_config_file = '../Mao/common.php';
$config_tip = '';
$config_success_tip = '账号：admin，密码：123456。<a href="/Mao_admin">前往后台</a>';
$config_db_replace_domain = 'mao.do0main.com';
?>
<?php
if(file_exists('./install.lock')) exit('已经安装过了，如需重新安装，请删除install.lock文件！');
?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta charset="utf-8" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<title>安装</title>
<style>
red{
display:block;
color:red;
}
green{
display:block;
color:green;
}
</style>
</head>
<body>
<h2>软件安装</h2>
<?php if(!$_POST): ?>
<form action="index.php" method="post">
<fieldset>
<legend>MySQL数据库信息:</legend>
数据库主机:
<input type="text" name="db_host" value="localhost" required><br>
数据库端口:
<input type="text" name="db_port" value="3306" required><br>
数据库名:
<input type="text" name="db_name" required><br>
数据库用户:
<input type="text" name="db_user" required><br>
数据库密码:
<input type="text" name="db_pass" required><br>
</fieldset>
<input type="submit" value="安装">
</form>
<p>
提示：
<br>
请使用空的数据库进行安装，如需重复安装，请删除数据库中的所有表！
</p>
<p>
<?php echo $config_tip; ?>
</p>
<?php else: ?>
<fieldset>
<legend>执行结果:</legend>
<?php
$conn = @new mysqli(@$_POST['db_host'],@$_POST['db_user'],@$_POST['db_pass'],@$_POST['db_name'],@$_POST['db_port']);
if($conn->connect_error){
echo '<red>连接失败: '.$conn->connect_error.'。</red>';
goto continue_view;
}
echo '<green>连接成功！</green>';
$sqls = explode(';
',file_get_contents('./install.sql'));
foreach($sqls as $sql){
if($sql){
$sql = str_replace($config_db_replace_domain,$_SERVER['HTTP_HOST'],$sql);
if(!$conn->query($sql)){
echo '<red>执行出错: '.$conn->error.'。</red>';
goto continue_view;
}
}
}
echo '<green>安装成功！</green>';
echo '<green>'.$config_success_tip.'</green>';
file_put_contents('./install.lock','本文件是安装锁文件，删除本文件可重新安装！');
file_put_contents($config_config_file,strtr(file_get_contents('./template.txt'),['<db_host>'=>$_POST['db_host'],'<db_user>' => $_POST['db_user'],'<db_pass>'=>$_POST['db_pass'],'<db_name>'=>$_POST['db_name'],'<db_port>'=>$_POST['db_port']]));
continue_view:
?>
</fieldset>
<a href="index.php"><input type="button" value="重试"></div>
<?php endif; ?>
</body>
</html>