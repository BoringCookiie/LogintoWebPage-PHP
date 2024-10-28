<!--projet still missing session save and email containing '@gmail.com'-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

      
        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
            padding: 1em 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2em;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffd700;
        }
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="page2.php">Page 2</a></li>
            <li><a href="page3.php">Page 3</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <?php
   echo"<br><br>";
    $name = "AICHA";
    echo"Hello $name ,welcome to home page.";
    ?>
</body>
</html>
