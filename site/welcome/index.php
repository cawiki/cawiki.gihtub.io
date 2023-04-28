<?php
    ob_start(); //before displaying any text
?>

<html>
    <head>
        <title>Willkommen!</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="pg-title-bg">
            <div class="pg-title_c">
                <span class="pg-title">Willkommen im Archiv!<br></span>
            </div>
        </div>

        <div>
            <br class="br-big">

            <p class="pg-headline">Über diese Seite</p>

            

        </div>
        
        <div class="text-content_c">
            <br class="br-big"><hr><br class="br-small">
            <span class="text-content">Diese Seite dient zur Aufklärung und Orientierung neuer Mitlieder des Community-Craftattack-Projekts von <a href="https://github.com/DaLoL-DE/">DaLoL</a>.<br>
                 Diese Seite gehört <u>nicht</u> DaLoL und ist damit auch <u>nicht</u> offiziell. <br>
                 Diese Seite steht unter der <a href="../../texts/LICENSE.txt">Apache License Version 2.0</a> und kann unter den Lizensbedingungen verändert werden.
                 
            </span>
        </div>
        

        <br class="br-small">

        <hr>

        <br class="br-small">


        <span class="text-footnote">
            
            copyright ©️ Tingly <br>

            <?php
            $file_path = dirname(dirname(dirname(__FILE__))).'\\texts\\notice.txt';
            // echo($file_path.);
            //$text = include($file_path); 
            $text = str_replace("\n", "<br>", file_get_contents($file_path));//str_replace("\n", $text, "</span><span class=\"text-footnote\">");
            echo($text);?>
            
        </span>

        <script>
            
        </script>
    <?php
    
    ?>
    </body>
</html>
