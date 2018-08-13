<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $TITRE ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- mon style -->
        <link rel="stylesheet" type="text/css" href="<?php echo $RACINE ?>style.css" >         
        
        <!-- mathjax -->
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]},
            CommonHTML: { scale: 90 }  
            });
        </script>
        <script type="text/javascript" async
                src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML" async>
        </script>
                
        <!-- mes scripts -->
        <script src="<?php echo $RACINE ?>script.js"></script> 
                
        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $RACINE ?>images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $RACINE ?>images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $RACINE ?>images/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $RACINE ?>images/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $RACINE ?>images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body>