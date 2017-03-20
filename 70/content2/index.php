<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-2.less', 'css/type-2.css');
        ?>
        
        <link href="css/type-2.css" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">


      
        <title>type-2</title>
    </head>

    <body>
        <?php
        include 'type-2.php';
        ?>
       
     
    </body>

</html>




