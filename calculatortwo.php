<!DOCTYPE html>

<html>

    <head>
        <title>Calculator</title>
    
    </head>
    
    <body>
        <form action="" method="POST">
        <h1>Calculator</h1>
        
       Enter Number One: <input type="text" name="numberone">
       Enter Number Two: <input type="text" name="numbertwo">
        <input type="submit" name="plus" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="multiply" value="*">
        <input type="submit" name="division" value="/">
        </form>
        
        <?php
            if(isset($_POST['plus'])){
                if(is_numeric($_POST['numberone']) && is_numeric($_POST['numbertwo'])){
                    function sum(){
                        $numone = $_POST['numberone'];
                        $numtwo = $_POST['numbertwo'];
                        $resultsum = $numone+$numtwo;
                        return $resultsum;
                    }
                    echo "The Sum of two Numbers are ".sum();
                }else{
                        echo "Function throws error!";
                    }
            }else{
                
            }
        
        
        
        if(isset($_POST['minus'])){
                if(is_numeric($_POST['numberone']) && is_numeric($_POST['numbertwo'])){
                    function minus(){
                        $numone = $_POST['numberone'];
                        $numtwo = $_POST['numbertwo'];
                        $resultminus = $numone-$numtwo;
                        return $resultminus;
                    }
                    echo "The Subtration of two Numbers are ".minus();
                }else{
                        echo "Function throws error!";
                    }
            }else{
                
            }
        
        if(isset($_POST['multiply'])){
                if(is_numeric($_POST['numberone']) && is_numeric($_POST['numbertwo'])){
                    function multiply(){
                        $numone = $_POST['numberone'];
                        $numtwo = $_POST['numbertwo'];
                        $resultmultiply = $numone*$numtwo;
                        return $resultmultiply;
                    }
                    echo "The Multiplication of two Numbers are ".multiply();
                }else{
                        echo "Function throws error!";
                    }
            }else{
                
            }
        
        if(isset($_POST['division'])){
                if(is_numeric($_POST['numberone']) && is_numeric($_POST['numbertwo'])){
                    function division(){
                        $numone = $_POST['numberone'];
                        $numtwo = $_POST['numbertwo'];
                        $resultDivision = $numone / $numtwo;
                        return $resultDivision;
                    }
                    echo "The Division of two Numbers are ".division();
                }else{
                        echo "Function throws error!";
                    }
            }else{
                
            }
        ?>
        
        
    </body>
    
</html>