<?php 

$my_text = 'non dire cavolate mai più.'  ;


$censura = $_GET['name'];

$testo_censurato = str_replace($censura, "***", $my_text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <div>
            <p>
              <h2>Testo non censurato: <?= $my_text ?> </h2>
              <span>lunghezza Paragrafo:</span> <?php echo strlen($my_text);?>
            </p>
        </div>
    
        
        <div>
            <p>
            <h2>Testo censurato:<?= $testo_censurato ?> </h2>
            <span>lunghezza Paragrafo:</span> <?php echo strlen($my_text);?>
            </p>
    
        </div>
        
    </body>
    </html>
        
    



    


<style>

    div{
        margin: 30px 0;
    }




</style>