<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Deskripsi Blog">
<meta name="author" content="Rangga Yustian M">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="omfgitsasalmon">
<meta name="twitter:title" content="Simple Blog">
<meta name="twitter:description" content="Deskripsi Blog">
<meta name="twitter:creator" content="Simple Blog">
<meta name="twitter:image:src" content="{{! TODO: ADD GRAVATAR URL HERE }}">

<meta property="og:type" content="article">
<meta property="og:title" content="Simple Blog">
<meta property="og:description" content="Deskripsi Blog">
<meta property="og:image" content="{{! TODO: ADD GRAVATAR URL HERE }}">
<meta property="og:site_name" content="Simple Blog">

<link rel="stylesheet" type="text/css" href="assets/css/screen.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Simple Blog | Edit Post</title>


</head>

<?php
	include "db.php";
	
	$result=mysql_query("SELECT * FROM blog WHERE id = ".mysql_real_escape_string($_GET['id']));
?>


<body class="default">
<div class="wrapper">

<nav class="nav">
    <a style="border:none;" id="logo" href="index.php"><h1>Simple<span>-</span>Blog</h1></a>
    <ul class="nav-primary">
        <li><a href="new_post.php">+ Tambah Post</a></li>
    </ul>
</nav>

<?php while($row=mysql_fetch_array($result)): ?>
	<article class="art simple post">
		
		
		<h2 class="art-title" style="margin-bottom:40px">-</h2>

		<div class="art-body">
			<div class="art-body-inner">
				<h2>Edit Post</h2>

				<div id="contact-area">
					<form method="post" action="updating.php">
						<input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" >
					
						<label for="judul">Judul:</label>
						<input type="text" name="judul" id="judul" value="<?php echo $row['judul']; ?>">

						<label for="tanggal">Tanggal:</label>
						<input type="text" name="tanggal" id="tanggal" value="<?php echo $row['tanggal']; ?>" placeholder="Dalam format YYYY-MM-DD" title="Default: tanggal sekarang">
						
						<label for="konten">Konten:</label><br>
						<textarea name="konten" rows="20" cols="20" id="konten"><?php echo $row['konten']; ?></textarea>

						<input type="submit" name="submit" value="Simpan" class="submit-button">
					</form>
				</div>
			</div>
		</div>

	</article>
<?php endwhile; ?>
	
<footer class="footer">
    <div class="back-to-top"><a href="">Back to top</a></div>
    <!-- <div class="footer-nav"><p></p></div> -->
    <div class="psi">&Psi;</div>
    <aside class="offsite-links">
        Asisten IF3110 /
        <a class="rss-link" href="#rss">RSS</a> /
        <br>
        <a class="twitter-link" href="http://twitter.com/YoGiiSinaga">Yogi</a> /
        <a class="twitter-link" href="http://twitter.com/sonnylazuardi">Sonny</a> /
        <a class="twitter-link" href="http://twitter.com/fathanpranaya">Fathan</a> /
        <br>
        <a class="twitter-link" href="#">Renusa</a> /
        <a class="twitter-link" href="#">Kelvin</a> /
        <a class="twitter-link" href="#">Yanuar</a> /
        
    </aside>
</footer>

</div>


</body>
</html>