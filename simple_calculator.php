
<?php

  $firstNumber = $_POST['fNumber'];
  $secondNumber = $_POST['sNumber'];
  $operator = $_POST['operator'];
  $result = " ";

    if(empty($firstNumber) && empty($secondNumber))

        $error =  " ";

    else{

        if((is_numeric($firstNumber) != 1 && is_numeric($secondNumber) != 1) || 
        (empty($firstNumber) && is_numeric($secondNumber) != 1) || 
        (is_numeric($firstNumber) != 1 && empty($secondNumber)))
            $error =  "Enter valid oparents";

        else if((empty($firstNumber) && is_numeric($secondNumber) == 1) || 
        (is_numeric($firstNumber) == 1 && empty($secondNumber)))
            $error =  "Enter two valid oparents";

        else if((is_numeric($firstNumber) == 1 && is_numeric($secondNumber) != 1) ||
        (is_numeric($firstNumber) != 1 && is_numeric($secondNumber) == 1))
            $error =  "Enter two valid operants";

        else{
            $error =  " ";
            if($operator == "+")
                $result = $firstNumber + $secondNumber;

            else if($operator == "-")
                $result = $firstNumber - $secondNumber;

            else if($operator == "*")
                $result = $firstNumber * $secondNumber;

            else if($operator == "/")
                $result = $firstNumber / $secondNumber;

        }
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">

        .header{
            background-color: gray;
            text-align: center;
            border: black 2px solid;
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: black 1px 1px 10px 1px;
        }

        .container{
            padding: 100px;
            text-align: center;
            border: solid 2px black;
            background-color: #ccc;
            border-radius: 5px;
            box-shadow: black 1px 1px 10px 1px;
        }
        input{
            width: 40%;
            padding: 10px 12px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid gray;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type = submit]{
            width: 12%;
            background-color: gray;
            font-weight: bold;
            font-family: sans-serif;
            padding: 10px;
            max-width: 0 5px;
            border: 1px black solid;
            cursor: pointer;
        }
        p{
            color: red;
            font-weight: bold;
        }

    </style>
    
</head>
<body>
    
    <div class="header">
        <h1 style="color: rgb(228, 228, 228);"> Simple Calculator </h1>
    </div>

    <div class="container">

        <form action="" method="POST">

            <label for="fNumber">First Number : </label>
            <input type="text" name="fNumber" id="fNumber"><br>

            <label for="sNumber">Second Number : </label>
            <input type="text" name="sNumber" id="sNumber"><br>

            <p><?php echo $error ?></p>

            <label for="result">Result : </label>
            <input type="text" name="result" id="result" value="<?php echo $result ?>"><br>

            <input type="submit" name="operator" value="+" >

            <input type="submit" name="operator" value="-" >

            <input type="submit" name="operator" value="/">

            <input type="submit" name="operator" value="*">

        </form>

    </div>
    
   
</body>
</html>
