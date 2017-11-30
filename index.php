<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.upload {background-color: #f44336;} 
.upload:hover {background: #da190b;}

.token {background-color: #ff9800;} 
.token:hover {background: #e68a00;}

.stem {background-color: #4CAF50;} 
.stem:hover {background: #46a049;}

.cariquery {background-color: #f44336;} 
.cariquery:hover {background: #da190b;}

.query {background-color: #ff9800;} 
.query:hover {background: #e68a00;}

.bobot {background-color: #4CAF50;} 
.bobot:hover {background: #46a049;}

	</style>
</head>
<body style="background-color:#b3ccff">

<center> 
<h1 style="background-color:DodgerBlue">UNIVERSITAS STIKUBANK SEMARANG <br> TAHUN PELAJARAN 2017 </h1> 
<br>
<input type="button" value="Upload File PDF" onclick="window.open('upload.php')" button class="btn upload">  </button> <br> <br>
<input type="button" value="Pencarian Kata Dasar" onclick="window.open('stem.php')" button class="btn stem">  </button> <br> <br>
<input type="button" value="Hasil Tokenisasi" onclick="window.open('hasil_tokenisasi.php')" button class="btn token">  </button> <br> <br>
<input type="button" value="Pencarian Kata Kunci" onclick="window.open('awalquery.php')" button class="btn cariquery">  </button> <br> <br>
<input type="button" value="Hasil Query" onclick="window.open('query.php')" button class="btn query">  </button> <br> <br>
<input type="button" value="Hasil Bobot" onclick="window.open('hitungbobot.php')" button class="btn bobot">  </button> <br> <br>
 
<h4 style="background-color:DodgerBlue">Irfan Ardhiyanto (15.01.53.0061) <br> Apriana Panca K (15.01.53.0065) <br> Fadilla Maulida (15.01.53.0082)</h4> 
</center>


</center><br/>
<br/>
<br/>
<br/>
<br/>

</body>
</html>