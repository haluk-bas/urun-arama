<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    
    .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 2);
        padding: 10px;
        width: 40%;
        border: 2px solid rgb(212, 212, 212);
        border-radius: 20px;
        box-sizing: border-box;
        max-width: 250px;
        max-height: 450px;
        margin: 0px 40px 40px 40px;
        float: left;
        background-color: rgb(225, 225, 225);
        color: rgb(0 68 68);
        
        
    }
    
    .card:hover{
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 2);
    }

    .container{
        background-color: rgb(254, 254, 245);
        padding: 10px;
        border-radius: 0px 0px 20px 20px;
    }

    .image{
        width: 230px;
        height: 200px;
        border-radius: 20px 20px 0px 0px;
        
    }


</style>
<body>

<?php
class VSearch{

    public function render($title, $data){

    foreach ($data as $key => $value) {

    echo <<<EOT

        <div class="card">
            <img class="image"  src="{$value["img"]}" alt="">

            <div class="container">
                <h3><b>{$value["name"]}</b></h3>
                <br>
                <p>price: <b>{$value["price"]}</b></p>
                <p>stock: <b>{$value["stock"]}</b></p>
            </div>

        </div>
    EOT;

    }
}   
}

?>

</body>
</html>


