<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Custom CSS -->
      <style>
        body {
            background: linear-gradient(135deg, #090979, #00D4FF);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-container {
            max-width: 420px;
            margin: 80px auto;
            padding: 40px 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .profile img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
        }
    </style>
  
  
  </head>
  <body>
  
   <div class="login-container text-center">
        
  
   <form method="POST" style="margin:20px; padding:10px" action="getdata2.php">
	  <div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" name="inputemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="inputpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  
	  <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
		
	<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   kelamin
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">laki-laki</a></li>
    <li><a class="dropdown-item" href="#">perempuan</a></li>
  </ul>
</div>
	
	<div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan alamat lengkap"></textarea>
            </div>

	<div class="row">
                <div class="col-md-15 mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <select class="form-select" name="pekerjaan">
                        <option value="">Pilih Pekerjaan</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Karyawan">Karyawan Swasta</option>
                        <option value="PNS">PNS</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

	 <div class="col-md-15 mb-3">
						<label class="form-label">No. Telepon</label>
						<input type="tel" class="form-control" name="no_telp" placeholder="08123456789">
					</div>
					
	<div class="col-md-15 mb-3">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Check me out</label> 				
				</div>

		</div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
    <div class="text-center mt-4">
            <p>Sudah punya akun?</p>
            <a href="login.php" class="btn btn-outline-primary w-100">
                Kembali ke Login
            </a>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>