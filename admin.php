<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Success</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <style type="text/css">
    h1 
    {
        text-align: center;
    }
    h2 
    {
        text-align: center;
    }
    *{
        margin: 0;
        padding: 0;
    }
    body
    {
        font-family: 'Ubuntu', sans-serif;
        background: #4288c8;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container 
    {
        margin-top: 50px;
        width: 85%;
        background-color: #FFFFFF;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 50px;
    }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $pwd = "Varun@0810";
    $email = "varunkhadayate0810@gmail.com";
    if($pwd == $_POST["password"])
    {
        print("<h1>Login Sucessful</h1>");
        print("<br><h2>Hello DehandpaintedChaos!!!</h2>");
        print("<br><h2>Here are the Details of the users Registered</h2>");
/*        print("<br><h3> Name :: </h3>".$Name." ".$Surname);
        print("<br>");
        print("<br><h3> Cell Number :: </h3>".$cell_no);
        print("<br>");
        print("<br><h3> Email Address :: </h3>".$email);   */
    }
    else 
    {
        print("Password is incorrect");
    
    }
    ?>
    <div align="center">
            <?php include 'show.php' ?>
    </div>
    </div>
</body>
</html>