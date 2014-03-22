<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to a Simple View Page</title>
    </head>
    <body>
        <h1>Welcome to your first View Page</h1>
        <h3>This is a simple View Page.</h3>
        <?php 
        if($myValue){
        echo "<p>This is the value: <strong>" . $myValue . "</strong></p>";
        }
        if($anotherValue){
        echo "<p>This is another value: <strong>" . $anotherValue . "</strong></p>";
        }
        ?>
    </body>
</html>