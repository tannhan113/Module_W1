<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <?php if (!class_exists( 'lessc')) { include ( './libs/lessc.inc.php'); }
        $less=new lessc;
        $less->compileFile('less/type-1.less', 'css/type-1.css');
        ?>
        
        <link href="css/type-1.css" rel="stylesheet" type="text/css" /> 
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
      
        <title>type-1</title>
    </head>

    <body>
        <?php
        include 'type-1.php';
        ?>
       
     
    </body>

</html>




