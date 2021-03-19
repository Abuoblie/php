<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <?php 
            
             $myArray = ['i','a','c','d','e','f','g','v'];
             array_push($myArray, 'England');
             print_r($myArray);
             echo '<pre>';
                     print_r($myArray);
             echo '</pre>';

             var_dump($myArray);

             //If you want to use an associative key (more on this in a bit):

             $person['function'] = 'Junior Web Developer';
             echo $person['function'];

             $user = [
                'firstname' => 'Juan',
                'lastname' => 'Pablo',
                'adress' => '3 Paradijsestraat',
                'city' => 'Antwerpen'
                 ];

         echo '<pre>';
                 print_r($user);
         echo '</pre>';
         var_dump($user);

         $me = array(
                'age'	=> 45 , 
                'firstname' => 'Alexandre' ,
                'lastname' => 'Plennevaux' ,
                'favourite_movies'=> array('My Own Private Idaho', 'Her', 'Matrix')
        );
        $me['hobby'] = ['football','athletics','cooking'];
        $clio = [
                'age'	=> 35 , 
                'firstname' => 'ndre' ,
                'lastname' => 'Plenne' ,
                'favourite_movies'=> array('fast and furious', 'Her', 'Matrix'),
                'hobbies'=> ['cooking','reading','dancing','tyu']        
        ];
        $me['friend'] =$clio;
        $hobbies = count($me['friend']);
        echo "$hobbies";
        
        $array1 = ["a" => "green", "red", "blue"];
        $array2 = array("b" => "green", "yellow", "red");
        $result = array_intersect($array1, $array2);
        print_r($result);
        echo"<br>";
        $result2 = array_merge($array1, $array2);
        print_r($result);
       
        $ar1 = array("color" => array("favorite" => "red"), 5);
        $ar2 = array(10, "color" => array("favorite" => "green", "blue"));
        $ret = array_merge_recursive($ar1, $ar2);
        print_r($ret);  
        echo '<pre>';
        echo "array_merge<br>";
        print_r(array_merge($me,$clio));
        
        echo"array_merge_recursive<br>";
        print_r(array_merge_recursive($me,$clio));
        
        echo"array_intersect_assoc <br>";
        print_r(array_intersect_assoc($me,$clio));
        echo'</pre>';   
        ?>
</body>

</html>