<!DOCTYPE html>

<html lang="en">
    <!--Wesley Griffiths
    Simple Php file to create a chessboard through the use of while loops -->
    <head>
        <!-- include the CSS inside the PHP --> 
 <link href="checkers.css" rel="stylesheet">
        
        <!-- use the <title> element to set the browser tab title to Checkers -->

    <title>Checkers</title>
    </head>
    <body>    
        <?php
            // define constant SIZE with the value of 8
        define("size", 8);
        
            
            // build the HTML
            // display as an <h1> the word Checkers using class 'title'
echo "<h1 class='title'>Checkers</h1>";
            // create a <div> with the id 'board'
            echo"<div id='board'>";
                // create a <table> with classes 'checkers' and 'container' 
                echo"<table class='checkers container'>";
                    // loop through the 8 rows (i.e. use the constant SIZE)
                    
            $i = 0;
     while( $i < size) 
     {
        $q=0;
                        // create a <tr> with class 'row'
                    echo "<tr class='row'>";
                            // loop through the 8 columns (i.e. use the constant SIZE)
                            while($q< size){  
                                // If the Checkers square should be empty (i.e., no checker) create a <td> using class empty
                                if($i==3 || $i==4)
                                    echo "<td class='empty'></td>";
                                    else{
                                        
                                // else
                                       // if($i<3 && $i%2==){
                                        if($i<3) {
                                            if($i==1){
                                                 if ($q%2==0)
                                                echo "<td><img src='red_pawn.png'></td>";
                                        else
                                                   echo "<td class='empty'></td>";
                                            }
                                            if($i != 1){
                                            if ($q%2==1 )
                                                echo "<td><img src='red_pawn.png'></td>";
                                        else
                                                   echo "<td class='empty'></td>";
                                            }
                                        }
                                    // create a <td> 
                                         if($i > 4){
                                                if($i==6){
                                                 if ($q%2==1 && $i==6)
                                                echo "<td><img src='black_pawn.png'></td>";
                                        else
                                                   echo "<td class='empty'></td>";
                                            }
                                             if($i!=6){                                             if($q%2==0 )
                                   echo  "<td><img src='black_pawn.png'></td>";
                                        else
                                        echo "<td class='empty'></td>";
                                         }
                                         }
                                    }
                             $q++;
                                    }                        
                        // create the closing </tr> for the row
                        
                            echo "</tr>";
         $i++;
     }
                // create the closing </table> for the table
                echo"</table>";
                     
            // create the closing </div> for id='board'
        echo"</div>";
        ?>
    </body>
</html>