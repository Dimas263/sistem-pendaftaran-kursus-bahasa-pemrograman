<?php
$Role = ucfirst($this->auth_libs->user_login()->role);
if ($Role == 'Admin'){
	include_once 'admin-role-kursus.php';
	include_once 'admin-role-mahasiswa.php';
}
elseif ($Role == 'Mahasiswa'){
	include_once 'user-role.php';
}
else{
	echo "Hidden";
}
?>
