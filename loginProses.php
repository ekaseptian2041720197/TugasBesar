<?php 
			if(isset($_POST['submit'])){

				include 'koneksi.php';

				$username = mysqli_real_escape_string($conn, $_POST['username']);
				$password = mysqli_real_escape_string($conn, $_POST['password']);

				$cek  = mysqli_query($conn, "SELECT * FROM user WHERE  username = '".$username."' AND password = '".MD5($password)."' AND id = 1");
                $cek2 = mysqli_query($conn, "SELECT * FROM user WHERE  username = '".$username."' AND password = '".MD5($password)."' AND id = 2");
                $cek3 = mysqli_query($conn, "SELECT * FROM user WHERE  username = '".$username."' AND password = '".MD5($password)."' AND id = 3");
				if(mysqli_num_rows($cek) > 0) {
					$d = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->id;
					echo '<script>window.location="dataEka.php"</script>';
                }else if (mysqli_num_rows($cek2) > 0) {
                        $d = mysqli_fetch_object($cek);
                        $_SESSION['status_login'] = true;
                        $_SESSION['a_global'] = $d;
                        $_SESSION['id'] = $d->id;
                        echo '<script>window.location="dataAldo.php"</script>';
            
                }else if (mysqli_num_rows($cek3) > 0) {
                        $d = mysqli_fetch_object($cek);
                        $_SESSION['status_login'] = true;
                        $_SESSION['a_global'] = $d;
                        $_SESSION['id'] = $d->id;
                        echo '<script>window.location="dataBia.php"</script>';
                }else{
                        echo '<script>alert("Username atau Password anda salah")</script>';
                    }
                }
		 ?>