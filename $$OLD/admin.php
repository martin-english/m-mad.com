<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>m-mad.com Minecraft status</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="m-mad.com Minecraft Admin Details" />
	<meta name="keywords" content="m-mad.com Minecraft Admin Details" />
</head>
<body>
<center>Minecraft Status</center>
<hr>
<?php
$fullPath = '/usr/local/minecraft/status.txt';

if ($fd = fopen ($fullPath, "r")) {
        $fsize = filesize($fullPath);

        while(!feof($fd)) {
                $buffer = fread($fd, 2048);
                $buffer = str_replace ("\n", "</BR>", $buffer);
                echo $buffer;
        }
}
fclose ($fd);

?>
<hr>
<center>Minecraft Admin List</center>
<hr>
<?php
$fullPath = '/usr/local/minecraft/admin.txt';

if ($fd = fopen ($fullPath, "r")) {
        $fsize = filesize($fullPath);

        while(!feof($fd)) {
                $buffer = fread($fd, 2048);
                $buffer = str_replace ("\n", "</BR>", $buffer);
                echo $buffer;
        }
}
fclose ($fd);

?>
<hr>
<center>Minecraft Oper List</center>
<hr>
<?php
$fullPath = '/usr/local/minecraft/ops.txt';

if ($fd = fopen ($fullPath, "r")) {
        $fsize = filesize($fullPath);

        while(!feof($fd)) {
                $buffer = fread($fd, 2048);
                $buffer = str_replace ("\n", "</BR>", $buffer);
                echo $buffer;
        }
}
fclose ($fd);

?>
<hr>

<center>Minecraft Banned Players</center>
<hr>
<?php
$fullPath = '/usr/local/minecraft/banned-players.txt';

if ($fd = fopen ($fullPath, "r")) {
	$fsize = filesize($fullPath);

	while(!feof($fd)) {
		$buffer = fread($fd, 2048);
                $buffer = str_replace ("\n", "</BR>", $buffer);
		echo $buffer;
	}
}
fclose ($fd);

?>
<hr>
</body>
</html>

