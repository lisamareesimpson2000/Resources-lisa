<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Module 4 Links for reference</title>
</head>
<body>
    <p>
        WORDPRESS LINKS
https://en-nz.wordpress.org/download/
http://localhost:8888/phpMyAdmin/server_databases.php?server=1
http://localhost:8888/wp-TFS-F1/wp-admin/
<!-- To search for syntax -->
https://codex.wordpress.org/Function_Reference
http://localhost:8888/phpMyAdmin/server_databases.php?server=1

To bring the database table created elsewhere to the class, 
while in phpmyadmin, click on the database created on the left panel 
and look for export on the right panel top  row of menus. Click on export 
and go button. go to downloads folder, copy whatever.sql  and bring it to the class.
    </p>

    <h1>php</h1>

    <h2>php function</h2>
    <?php
    function sayHi(){
        echo "Hi, everyone";
    }
    /*will only display if function is called, can do this more than once*/
    sayHi(); 
    sayHi();
    ?>

    <h3>php passing arguments through a function</h3>
    <?php
   /*arguments are basically user defined variables, $num */
    function ($num1, $num2){
        return $num1 + $num2;
    }
    echo "<h4> The sum 20 plus 30 is" . add(20, 30) . "</h4>";
    ?>

    <!-- require means that if something is broken in your code it must work to display everything on url.
    require will produce a fatal error (E_COMPILE_ERROR) and stop the script -->
    <?php require "header.php;"?>
    <h4>Page 1</h4>
    <!-- include means if something is broken is will show come of the code that is working on the url. 
    include will only produce a warning (E_WARNING) and the script will continue-->
    <?php include "header.php;"?>
    <h4>Page 1</h4>
    <!-- Use require when the file is required by the application.
    Use include when the file is not required and application should continue when file is not found. 
    We have been using require for devlopment-->
</body>
</html>
