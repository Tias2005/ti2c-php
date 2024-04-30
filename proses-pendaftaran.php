<?php  include("config.php");  

if(isset($_POST['daftar'])){	 	
 			 
    $nim = $_POST['nim'];	 		
    $nama = $_POST['nama'];	 		
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];	 				
    $jk = $_POST['jk'];	 	
    $usia = $_POST['usia'];	 			 	
 			 		
    $sql = "INSERT INTO calon_siswa (NIM, Nama, Alamat, TTL, Jenis_kelamin, Usia)	 
VALUE ('$nim', '$nama', '$alamat', '$ttl', '$jk', '$usia')";	 	
    $query = mysqli_query($db, $sql);	 		
 			 			
    if( $query ) {	 				
        
        header('Location: index.php?status=sukses');	 		
    } else {	 			
        	 		
        header('Location: index.php?status=gagal');	 			
    }	 				
} else {	 				
    die("Akses dilarang...");	 				
}	 
 					
