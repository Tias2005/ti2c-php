<?php include("config.php"); ?>  
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

        th{
            background-color: #d2b9d3;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
        }

        tbody{
            background-color: white;
            text-align: left;
        }

        table{
            margin-left: 50px;
        }
    </style>
</head>	 	
 		
<body>	 		
    <header>	 	
        <h3>LIST MAHASISWA</h3>	 	
    </header>	 		
 
    <br> 
 			
    <table class="tabel-list">	 		
    <thead>	 
        
        <div class="list">
        <tr>	 					
            <th>NIM</th>	 		
            <th>Nama</th>	 		
            <th>Alamat</th>	 		
            <th>TTL</th>	 		
            <th>Jenis Kelamin</th>
            <th>Usia</th>	 		
        </tr>	
        </div>

    </thead>	 		
    <tbody>	 			
 
 <?php	 				
        $sql = "SELECT * FROM calon_siswa";	 
        $query = mysqli_query($db, $sql);	 	
 		
        while($siswa = mysqli_fetch_array($query))
        {	echo "<tr>";	 	
 		
            echo "<td>".$siswa['NIM']."</td>";	 	
            echo "<td>".$siswa['Nama']."</td>";	 	
            echo "<td>".$siswa['Alamat']."</td>";	 	
            echo "<td>".$siswa['TTL']."</td>";	 
            echo "<td>".$siswa['Jenis_kelamin']."</td>";	 	
            echo "<td>".$siswa['Usia']."</td>";	 		 
 
            echo "</tr>";			
        }	 			
        ?>	 			
 				
    </tbody>	 
    </table>
 				
    </body>	 				
</html>	 					
