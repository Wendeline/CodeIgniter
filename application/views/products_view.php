<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
    </head>
    <body>
        <h1><?php echo $heading;?></h1>
        <table><?php
            foreach ($content as $value) {
            ?><tr><?php
                foreach($value as $row){
                    ?><th><?php echo $row . "  "; ?></th><?php
                }
            ?></tr><?php
        }?></table
    </body>
</html>
