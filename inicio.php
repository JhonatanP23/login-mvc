
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>

<body>
    <h2>Bienvenido <?php echo $_SESSION["usuario"]?> al centro de administración de usuarios</h2>

    <center><DIV class="menu">
        <a href="index.html">Salir</a><br>
    </DIV></center>
    <style>
        body {
            background-image: url(views/assets/5631533.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        h2 {
            color: black;
            margin-left: 10%;
            font-size: 40px;
            margin-bottom: 30px;
            margin-top: 5%;
        }

        .menu a {
            text-decoration: none;
            color:#000;
            font-size: 32px;
            margin: 12%;
            
        }
        .menu{
            list-style: none;
            text-decoration: none;
            position: relative;
            bottom: -160px;
            text-align: center;
            font-weight: 800;
            margin-bottom: 30px;
            border-radius: 20px;
            background-color:yellow;
            width: 30%;
            padding: 20px 25px;
        }
        .menu :hover {
            color:blue;
            font-size: 32px;
            text-decoration: underline;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }
    </style>
</body>

</html>