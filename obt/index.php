<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BP</title>
</head>
<body>
<center>

  <form action="index.php" method="post">
    <h3>Login</h3>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required><br><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required><br><br>

    <button type="submit">Login</button>

  </form>
<body>
<pre>
<center>
<h2>Projek Web Programming</h2>
        
<h1>Nama Sistem : Online Ticket Booking (OTB)</h1>
            
<a href="manager/st.php">Manager (Sahul)</a>
-menguruskan senarai maklumat pelanggan
-menguruskan senarai maklumat tayangan
            
<a href="staff/st.php">Staff (Alif Azni)</a>
-menguruskan senarai ticket
            
<a href="pelanggan/index.php">Pelanggan (Radzi)</a>
-menguruskan senarai tempahan

<hr></hr>

Database OTB

Ticket (idTicket, movie, HargaTicket)

Tempahan (idTempahan, idPelanggan, idTicket, idTayangan, JumlahBayaran)

Tayangan (idTayangan, movie, date, time)

Pelanggan (idPelanggan, username, password, namapenuh, icno, email, phoneno)

Manager (password)

Staff (password)

<hr></hr> 

<table border="1">
    <?php
        echo "<h1>Table Ticket</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>idTicket</td>
      <td>INT (12)</td>
      <td>PK A_I</td>
    </tr>  
    <tr>
      <td>Movie</td>
      <td>Varchar (50)</td>
      <td></td>
    </tr>  
    <tr>
      <td>HargaTicket</td>
      <td>Float (20)</td>
      <td></td>
    </tr> 
</table>

<table border="1">
    <?php
        echo "<h1>Table Tempahan</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>idTempahan</td>
      <td>INT (15)</td>
      <td>PK A_I</td>
    </tr>  
    <tr>
      <td>idPelanggan</td>
      <td>INT (15)</td>
      <td>FK</td>
    </tr>  
    <tr>
      <td>idTicket</td>
      <td>INT (20)</td>
      <td>FK</td>
    </tr> 
    <tr>
      <td>idTayangan</td>
      <td>INT (20)</td>
      <td>FK</td>
    </tr>    
    <tr>
      <td>JumlahBayaran</td>
      <td>Float (20)</td>
      <td></td>
    </tr>
</table>

<table border="1">
    <?php
        echo "<h1>Table Tayangan</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>idTayangan</td>
      <td>INT (12)</td>
      <td>PK A_I</td>
    </tr>  
    <tr>
      <td>Movie</td>
      <td>Varchar (50)</td>
      <td></td>
    </tr>  
    <tr>
      <td>Date</td>
      <td>Float (20)</td>
      <td></td>
    </tr> 
    <tr>
      <td>Time</td>
      <td>Float (20)</td>
      <td></td>
    </tr>
</table>

<table border="1">
    <?php
        echo "<h1>Table Pelanggan</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>idPelanggan</td>
      <td>INT (15)</td>
      <td>PK A_I</td>
    </tr>  
    <tr>
      <td>username</td>
      <td>Varchar (20)</td>
      <td></td>
    </tr>  
    <tr>
      <td>password</td>
      <td>Varchar (20)</td>
      <td></td>
    </tr> 
    <tr>
      <td>namapenuh</td>
      <td>Varchar (50)</td>
      <td></td>
    </tr>
    <tr>
      <td>icno</td>
      <td>Varchar (30)</td>
      <td></td>
    </tr>
    <tr>
      <td>email</td>
      <td>Varchar (20)</td>
      <td></td>
    </tr>
    <tr>
      <td>phoneno</td>
      <td>Varchar (20)</td>
      <td></td>
    </tr>
</table>

<table border="1">
    <?php
        echo "<h1>Table Manager</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>Password</td>
      <td>Varchar (150)</td>
      <td></td>
    </tr>
</table> 

<table border="1">
    <?php
        echo "<h1>Table Staff</h1>";
    ?>
    <tr>
      <td>Name</td>
      <td>Type</td>
      <td>Extra</td>
    </tr>  
    <tr>
      <td>Password</td>
      <td>Varchar (150)</td>
      <td></td>
    </tr>
</table>

<hr></hr>

</center>        
</pre>

</body>
</html>