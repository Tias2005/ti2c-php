<!DOCTYPE html>	 
<html>	 
 	
<head>		
    <title>Absensi</title>	
    <style>
        body{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: #fcdfff;
        }

        header{
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 50px;
            margin-top: 30px;
            margin-left: 50px;
            margin-right: 50px;
            text-align: center;
            border-radius: 10px;
            background-color: #d2b9d3;
        }

        .menu{
            justify-content: center;
            background-color: white;
            padding-top: 1px;
            padding-bottom: 1px;
            padding-left: 30px;
            margin-left: 50px;
            margin-right: 950px;
            border-radius: 10px;
        }

        .notif{
            color: black;
            padding-left: 50px;
        }

    </style> 
</head>	 	
 		
<body>	 		
    <header>	 	
        <h3>Absensi Mahasiswa</h3>	 	
        <h1>POLITEKNIK NEGERI MADIUN</h1>
    </header>	 			
 		
    <div class="menu">
    <h4>Menu</h4>	 			
    <nav>	 				
        <ul>	 				
            <li><a href="form-daftar.php">Input Data</Datag></a></li>	 
            <li><a href="list-siswa.php">List Mahasiswa</a></li>	 	
        </ul>	 		
    </nav>
    </div>

    <?php if(isset($_GET['status'])): ?>	
        
<div class="notif">
    <p>	 
    <?php	 
        if($_GET['status'] == 'sukses'){	 
            echo "Absensi Mahasiswa Berhasil!";	 
        } else{
            echo "Pendaftaran Gagal";
        }         
        ?>
    </p>
    <?php endif; ?>
</div>

    </body>	 
</html>	 	
