<?php 
session_start();

if(isset($_SESSION["login"])){
    header("Location: dashboard.php");
    exit;
}

require 'function.php';
require 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbhak Services - Admin Sign In</title>

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Quicksand', sans-serif;
        }
        .judul1{
            position: relative;
            top: 130px;
            left: 330px; 

        }
        .garis{
            border: 0.1px solid black;
            width: 125px;  
            position: absolute; 
        }
        .heading{
            position: relative;
            top: 180px;
            left: 235px; 
        }
     
        input{
            width: 300px;
            height: 40px;
            border-radius: 15px;
            align-items: center;
            padding-left:  10px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.51);
            border-color: transparent;
            background-color: #D9D9D9;
        }
        h5{
            margin-top: 10px;
        }
        h1{
            position: absolute;
            top: 100px;
            left: 400px;
        }
        .input-data{
            margin-top: 50px;
            margin-left: 200px;
            align-items: center;
            
        }
        .button{
            background-color: #434CE7;
            cursor: pointer;
            width: 100px;
            border-radius: 15px;
            height: 40px;
            border: none;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.51);
            border-color: transparent;
        }
        .background{
            height: 500px;
            width: 400px;
            background-color:rgb(201, 200, 200);
            margin-left: -5px;
            margin-top: -170px;
            border-radius: 15px;
        }
        table tr td{
            padding: 10px 5px 10px 5px;
        }
        #back{
            position: relative;
            top: 532px;
            left: 400px;
        }
    </style>
</head>
<body>
    <!-- image -->
    <div class="all">
       
        <h1>Sign Up</h1>
        <form action="signin2.php" method="post">
            <table style="position: absolute; top:190px; left:400px;" >
                <tr>
                    <td>
                        <label for="name">Nama :</label>
                    </td>
                    <td>
                        <input type="text" name="nama" id="kode_permit" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Usia :</label>
                    </td>
                    <td>
                        <input type="number" name="usia" id="username" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">NISN :</label>
                    </td>
                    <td>
                        <input type="number" name="NISN" id="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password2">Tanggal Lahir :</label>
                    </td>
                    <td>
                        <input type="date" name="ttl" id="password2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password2">Kelas :</label>
                    </td>
                    <td>
                        <input type="text" name="kelas" id="password2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gmail">Gmail :</label>
                        </td>
                    <td>
                        <input type="email" name="gmail" id="gmail">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="register" id="register" class="button" style="float:right;">Register</button>
                    </td>
                </tr>
            </table>
        </form>
        <a href="dashboard.php" id="back">
            <button type="submit" name="backlogin" id="backlogin" class="button " style="background-color: gold; margin-top:4.5% ">Back</button>
        </a>
    </div>
</body>
</html>























