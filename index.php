<html>
    <head>
        <title>Calculator</title>
        <meta charset="utf-8">
        <meta name="author" content="Mehran Gholizadeh">
        <meta name="description" content="Simple Calculator">
        <meta name="keywords" content="Simple Calculator,Calculator,html,css,php and ...">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
    $ans= null;
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['op'];

    if($op == "+"){
        $ans = $num1 + $num2;
    }
    else if($op == "-"){
      $ans = $num1 - $num2;
    }
    else if($op == "*"){
        $ans = $num1 * $num2;
    }
    else if($op == "/"){
        $ans = $num1 / $num2;
    }
    ?>
    <body style="padding-left: 3%; padding-top: 3%">
    <div class="container">
    <form method="GET">
        <h1>Calculator</h1>
       <label>First Number: </label><input type="text" name="num1">
        <br>
        <br>
        <label>Second Number: </label><input type="text" name="num2">
        <br>
        <br>
        <label>Operator: </label><input type="text" name="op">
        <button>=</button>
        <br>
        <br>
        <label>Result: </label><input type="text" name="result" value="<?php echo $ans; ?>"><br>   
    </form>
    </div>
    </body>
</html>