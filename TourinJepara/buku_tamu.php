<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>
    <link rel="stylesheet" type="text/css" href="style/style4.css">
</head>
<body>
<div class="hero">
		<nav>
			<h2 class="logo"><img src="style/asset/logo.png" height="40%" width=50%"></h2>
			<ul>
				<li><a href="index.html">Home</a></li>
                <li><a href="destination.html">Destination</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="buku_tamu.php">Guest Book</a></li>
                <img src="style/asset/menu.png" class="menu-icon" width="5%">
			</ul>
		</nav>
	<section class="about">
		<div class="main">
		  <div class="about-text">
            <div class="row">
            <div class="column">
            <h3>Guest Book</h3>
            <div>
                <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                <label>Nama</label>
                <input type="text" name="fnama" placeholder="Tuliskan nama Anda">
                <label>Email</label>
                <input type="text" name="femail" placeholder="Tulisakan email anda">
                <label>Provinsi</label>
                <select id="prov" name="fprovinsi">
                    <option value="Jateng">Jawa Tengah</option>
                    <option value="Jabar">Jawa Barat</option>
                    <option value="Jatim">Jawa Timur</option>
                </select>
                <label>Pesan</label>
                <textarea name="fpesan"></textarea>
                <input type="submit" value="Submit">
                </form>   
                <h5>*Jika ada pertanyaan lebih lanjut, silahkan hubungi: eiffelputri@gmail.com</h5><br>
        </div>
    </div>
    <?php
        if (isset($_POST['fnama'])){
            $nama=$_POST['fnama'];
            $email=$_POST['femail'];
            $prov=$_POST['fprovinsi'];
            $pesan=$_POST['fpesan'];

            echo "Daftar Tamu:";
            echo "<table id='tamu'>";
            echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Provinsi</th><th>Pesan</th></tr>";
            echo "<tr><th>1.</th><th>$nama</th><th>$email</th><th>$prov</th><th>$pesan</th></tr>";

        }
    ?>      
		</div>
	</section>
</body>
</html>