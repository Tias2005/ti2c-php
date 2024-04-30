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
            border-radius: 10px;
            background-color: #d2b9d3;
            text-align: center;
        }

        .tabel p{
            text-align: center;
            margin-left: 50px;
        }

        label {
            text-align: left;
            display: inline-block;
            width: 150px;
        }

        .tabel p input[type="text"]{
            width: 300px;
        }

        .tabel p input[type="submit"]{
            margin-top: 30px;
            width: 100px;
            background-color: #d2b9d3;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border-radius: 10px;
        }
    </style>

</head>	 	
 		
<body>	 		
    <header>	 	
        <h3>FORMULIR MAHASISWA</h3>	 
    </header>	
 
    <form action="proses-pendaftaran.php" method="POST"> 

    <div class="tabel">
        <p>	 			
            <label for="nim">NIM : </label>	 		
            <input type="text" name="nim" id="nim"/>	 
        </p>
        <p>	 			
            <label for="nama">Nama : </label>	 		
            <input type="text" name="nama" id="nama" />	 
        </p>	 	
        <p>	 		
            <label for="alamat">Alamat : </label>	 	
            <input type="text" name="alamat" id="alamat"/>  		
        </p>	 			
        <p>	 			
            <label for="ttl">TTL : </label>	 		
            <input type="text" name="ttl" id="ttl"/>	 
        </p>	 			
        <p>	 			
            <label for="jk">Jenis Kelamin : </label>	 		
            <input type="text" name="jk" id="jk"/>	 
        </p>				
        <p>	 			
            <label for="usia">Usia : </label>	 		
            <input type="text" name="usia" id="usia"/>	 
        </p>	 		
        <p>	 			
            <input type="submit" value="Daftar" name="daftar" />	 		
        </p>	
    </div>  			
 
    </form> 

    </body>	 				
</html>	 					
