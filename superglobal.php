  <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>superglobal</title>
    </head>
    <body>
        <h1>
    <?php
     #print_r($_GET);
     if (isset($_GET['nom'])& isset($_GET['age'])){
        echo $_GET ['nom']." a ".$_GET['age']."ans";
     }
    ?>
    </h1>   
    
    <p><a href="?nom=Jean&age=20">Jean</a></p>
    <p><a href="?nom=Blessing&age=220">Blessing</a></p>
    <p><a href="?nom=Nzemo&age=250">Nzemo</a></p>
        
        <form action ="action.php" method="post">
        <p>Nom:<input name="nom" type ="text"></p>
        <p>Age:<input name="age" type ="number"></p>
        <p><button type ="submit">Valider</button></p>
        </form>
    </body>
</html>

