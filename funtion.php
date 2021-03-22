<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>function</title>
</head>

<body>
        <?php 
        $emile ='emile';
        $emile = ucfirst($emile);
        echo"$emile ";
        $year = date('Y');
        echo"$year ";
        $dte = date('d/m/Y, H:i:s');
        echo"$dte  ";
        function sum($a,$b)
        { 
                if(is_numeric($a) && is_numeric($b) ){
                     return $a+$b;   
                }
                else {
                   echo "invalid entry";
                   return "invalid entry";
                }     
        }
        $sum = sum('a',2);
        echo"sum 1 and 2 is {$sum}"; 
        
        function firstLetters($str)
        {
                $arr = explode(" ", $str);
               $word="";
               foreach ($arr as $item) {
                      $word.=  strtoupper($item[0]);
               }
               return $word;
        }
        $word = firstLetters("In code we trust!");
        echo " $word";

        $sArray = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
        
            
        function chaReplace($variable){
                foreach ($variable as $key => $value) {
                        $variable[$key] = str_replace('ae',"æ",$value);  
                         
                }
                        return  $variable;   
        }
        $sArray = chaReplace($sArray);
        print_r($sArray );
        echo "<br>";
        
        function reReplace($variable){
                foreach ($variable as $key => $value) {
                        $variable[$key] = str_replace("æ",'ae',$value);  
                         
                }
                  return $variable;          
        }
        $sArray = reReplace($sArray);
        var_dump($sArray );

        function feedback($message, $error = 'info'){
               return "<div class ='$error'>Error: $message</div>";
        }
        echo feedback("Incorrect email address", "error");

        function randomWordsGenerator(){
                $alpha = 'abcdefghijklmnopqrstuvwxyz';
                $shuffle = str_shuffle($alpha);
                $ln1 = rand(1,5);
                $ln2 = rand(7, 15);
                $word1 = substr($shuffle,0,$ln1 );
                $shuffle = str_shuffle($shuffle);
                $word2 = substr($shuffle,0,$ln2 );
                
                echo"
                    <div class = 'toto'>
                       <h1>Generate new Word</h1>
                       <p> <b>word 1:</b> {$word1}  <b>word 2</b> : {$word2}</p>
                       <button class='btn'>Generate</button>
                    </div>
                ";
                
                
        }
        randomWordsGenerator();

        function de_capitalize($str){
                return strtolower($str);
        }
        echo de_capitalize("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
        echo "<br>";
        
        function calculate_cone_volume($radius,$height){
                return M_PI*$radius*$radius*$height/3;
        }
        echo calculate_cone_volume(5,2);
        ?>
</body>

</html>