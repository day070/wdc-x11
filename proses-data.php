<?php
   if(isset($_POST['sumbit'])){
    $nama = $_POST['nama'];
    $nd   = $_POST['nd'];
    $nb   = $_POST['nb'];
    $tgl  = $_POST['tgl'];
    $jk   = $_POST['jk'];    
    $hb   = $_POST['hb'];
    $ctt  = $_POST['ctt'];
    $alamat = $_POST['alamat'];
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Formulir</title>
    <style>
        *{

            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        div {
            background-color: #ffffff;
            max-width: 700px;
            height: 100vh;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        h1 {
            color: #333;
            display: flex;
            justify-content: center;
        }
        p {
            margin: 10px 0;
        }
        .atur{
            margin-top: 20px;
            line-height: 20px;
        }
        a{
            list-style-type: none; 
            text-decoration: none;
        }
        button{
            width: 150px;
            height: 30px;
            background-color: aqua;
            border: 1px solid black;
            border-radius: 10px;
        }
        button:hover{
            background-color: aqua;
            opacity: 70%;
        }
    </style>
</head>
<body>
    <div>
        <h1>Hasil Formulir</h1>
        <hr>
        <pre class="atur">
        <h2>Nama Anda           : <?php echo $nama; ?></h2>
        <h2>Jenis Kelamin Anda  : <?php echo $jk; ?></h2>
        <h2>Nama Lengkap Anda   : <?php echo $nd . ' ' . $nb; ?></h2>
        <h2>Tanggal Lahir Anda  : <?php echo $tgl; ?></h2>
        <h2>Hobi Anda adalah    : <?php echo $hb; ?></h2>
        <h2>Cita-Cita Anda      : <?php echo $ctt; ?></h2>
        <h2>Alamat Anda         : <?php echo $alamat; ?></h2>
        </pre>

        <button ><a href="index.php">Kembali</a></button>
    </div>
</body>
</html>

 <?php 

   }
?>

