<html>
 <head>
 </head>
 <body>
    <?php
        echo "<pre style='color: green;'>SERVER";
        echo print_r(ksort($_SERVER), true);
        echo "</pre>";
    ?>

    <?php 
        echo "<pre style='color: orange;'>ENV";
        echo print_r(asort($_ENV), true);
        echo "</pre>";
    ?>
    
	<?= phpinfo(); ?>
 </body>
</html>