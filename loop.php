<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loop</title>
</head>

<body>
        <form action="">

        </form>


        <?php 
        $names= array('John', 'jeanne', 'Joan', 'émile');
        var_dump($names);
        
        foreach ($names as $key=> $value){
                $names[$key] = ucfirst($value);
        }
        var_dump($names);
        $i=1; 
        while($i <= 120){
                echo "{$i}, ";
                $i++;
        }
         echo "<br>";
         for ($i=1; $i <= 120 ; $i++) { 
                echo "{$i}, ";
                
         }
         echo"<br>";
         foreach ($names as $key => $value) {
                 echo"{$value}<br>";
         }
         $country = array('Be' =>'Belgium','Ru' =>'Russia','Gh' =>'Ghana', 'JM' =>'Jamaica','Tg' => 'Togo', 'Gb' =>'England','Ch' =>'China','Bb' => 'Barbados','Gn' =>'Guinea','Jp' =>'Japan');
         echo '<select>';
                foreach ($country as $key => $value) {
                        echo"<option value = '{$key} {$value}'>{$key} {$value}</option>";
                }
         echo '</select>';
         
         
        ?>


</body>

</html>