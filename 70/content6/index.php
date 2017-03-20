<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-6.less', 'css/type-6.css');
        ?>
        
        <link href="css/type-6.css" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/js_composer.min.css">

      
        <title>type-6</title>
    </head>

    <body>
    

        
        <?php
        include 'type-6.php';
        ?>
             
    
       
       
     
    </body>

</html>




