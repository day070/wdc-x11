<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container ">
        <h1 style="display: flex;justify-content:center ;">- FORM BIODATA -</h1>
        <hr>
        <form action="proses-data.php" method="POST">
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 20px;">
                 <div class="form-group">
                    <label for="">Name</label>
                     <input type="text" name="nama" class="form-control">
                 </div>
            </div>
            <hr>
             <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Name Depan</label>
                    <input type="text" name="nd" class="form-control">
                 </div>
            </div>
             <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Nama Belakang</label>
                    <input type="text" name="nb" class="form-control">
                 </div>
            </div>
             <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl" class="form-control">
                 </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="perempuan">perempuan</option>
                        <option value="laki-laki">laki-laki</option>
                    </select>
                </div>
            </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <textarea placeholder="Alamat" name="alamat" style="width:100%;margin-top: 20px;"></textarea>
                 </div>
            </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Hobby</label>
                    <input type="textarea" name="hb" class="form-control">
                 </div>
            </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Cita-cita</label>
                    <input type="text" name="ctt" class="form-control">
                 </div>
            </div>


            <hr style="margin-top: 40px;-">
            <div class="d-grid gap-2">
                <button type="sumbit" name="sumbit" class="btn btn-outline-info">Simpan data</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>