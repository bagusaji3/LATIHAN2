<html>
<head>
<title>Contoh Form dengan POST</title>
</head>
<body>
<h1>Buku Tamu</h1>
Komentar dan saran sangat kami butuhkan untuk meningkatkan kualitas situs kami.
<hr>
<form action="proc_bukutamu.php" method="post">
<pre>
Nama anda : <input type="text" name="nama" size="25" maxlength="50">
komentar : <textarea name="komentar" cols="40" rows="5"> </textarea>
<input type="submit" value="kirim">
<input type="reset" value="ulangi">
</pre>
</from>
</body>
</html>