<html>
<head>
<title></title>
</head>
<body>
<h1>Simpan file yang diupload</h1>
<br>
<?php
if ($filel!="none") {
	copy("$filel","hasilupload.txt") or
	die ("no files");
}
else{
	die("Tidak ada file yang diupload");
}
?>
</body>
</html>