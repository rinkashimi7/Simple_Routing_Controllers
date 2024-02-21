<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>"127.0.0.1:8000/hobbies/"</title>
    <style>
        body {
            background-color: black;
        }
        
        

        button {
            display: inline-flexbox;
            align-items: center;
            width: 200px;
            height: 50px;
            font-size: 16px;
            border-radius: 5px;
            background-color: white;
            color: white;
        }
       
        h1 {
            text-align: center;
            font-size: 5em;
            color: white;
        }
        .text {
            color: white;
        }
        body{
            align-items: center;
        }
    </style>
        <h1>Hobbies</h1>
</head>
<body class="text">
    <p>I love {{$hobby}}</p>
    
</body>
<footer>
    <nav>
        <button class="container"><a href="AboutMe">About Me</button>
        <button class="container"><a href="Skills">Skills</a></button>
        <button class="container"><a href="Hobbies">Hobbies</a></button>
    </nav>
</footer>
</html>