<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 3</title>
</head>
<body>
    <h1>Soal 3</h1>
    <form method="post" class="form">

            <label>Value 1 <input type="text" name="value1" placeholder="Enter 1st value"></label>
            <label>Value 2<input type="text" name="value2" placeholder="Enter 2nd value"></label>
            

            <h1>Select Operator </h1>
            <input type="radio" name="operator" value="add">+
            <br>
            <input type="radio" name="operator" value="sub">-
            <br>
            <input type="radio" name="operator" value="mul">*
            <br>
            <input type="radio" name="operator" value="div">/
            <br>

            <input type="submit" class="btn btn-success" value="Show Result">
        </form>
    <?php
        
            
            if( isset(
                $_POST['value1'],
                $_POST['value2'],
                $_POST['operator']
            )) {
                
                $value_1=(int)$_POST['value1'];
                $value_2=(int)$_POST['value2'];     
                $operator=$_POST['operator'];
                
                
                switch( $operator ){
                    case 'add':$symbol='+';$res=$value_1 + $value_2;break;
                    case 'sub':$symbol='-';$res=$value_1 - $value_2;break;
                    case 'mul':$symbol='*';$res=$value_1 * $value_2;break;
                    case 'div':$symbol='/';$res=$value_1 / $value_2;break;
                }
            
                printf(
                    '%d %s %s=%d',
                    $value_1,
                    $symbol,
                    $value_2,
                    $res
                );
            }
    ?>
</body>
</html>