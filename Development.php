<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: helvetica;
        }
        .container{
            width:300px;
            height:300px;
            position:relative;
            border:1px solid black;
            border-radius: 5px;
            
        }
        input{
            padding:6px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .Submit{
            padding:6px;
            width:200px;
            position: relative;
            top:50px;
        }

        h1{
            text-align: center;
        }
    </style>
</head>
<body>
  
    <div class="container">
    <h1>Login</h1>
    <form action=""  method="post">
        <input type="text" placeholder="Enter Name">
        <input type="text" placeholder="Enter Email">
        <input type="text" placeholder="Enter Password">
        <input type="Submit" value="Submit Details" class="Submit">
    </form>
    </div>
</body>
</html>