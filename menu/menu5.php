<?php
include "../config/koneksi.php";

$cek=umenu_akses("?module=user",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=user'><b>Setting User</b></a></li>";
}

$cek=umenu_akses("?module=modul",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=modul'><b>Managemen Modul</b></a></li>";
}

?>
