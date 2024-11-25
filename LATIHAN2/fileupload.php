<html>
<head>
<title>From untuk input nama file</tile>
</head>
<body>
<h1>Input nama file untuk Upload</h1>
<br>Klik Browse untuk memilih !
<from enctype="multipart/from data" method="post" action="do_upload.php">
<input type="hidden" name="MAX_FILE_SIZE" value="10000">
Nma File : <input type="file" name="filel" size="30">
<br>
<input type="submit" value="upload">
</from>
</body>
</html>