<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            padding: 0px;
            margin: 0px;
        }

        .panel{
            text-align: center;
            margin-bottom: 50px;
            background-color: rgb(245, 245, 245);
            padding: 50px;
        }

        .panel .header{
            color: rgb(0 68 68);
            
        };

    </style>
</head>
<body>

    <div class="panel">
        <h1 class="header">Ürün Arama</h1> 
        <br> 
        <form action="index.php" method="GET">
            <input type="text" name="data" placeholder="bilgisayar, tablet, işlemci ">
            <input type="submit" value="Ara">
        </form>
    </div>



</body>
</html>


<?php   


spl_autoload_register(function($class){

    if(file_exists("./control/".$class.".php")){
        require_once "./control/".$class.".php";
    }
    else if(file_exists("./model/".$class.".php")){
        require_once "./model/".$class.".php";
    }
    else if(file_exists("./view/".$class.".php")){
        require_once "./view/".$class.".php";
    }

});
 
if (!isset($_GET["data"]) || $_GET["data"]== NULL) {
    exit();
}

else {
    $control = new CSearch();
    $control->index($_GET["data"]);  
}


?>