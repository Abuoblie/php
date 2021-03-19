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
        //Create an array $web_development containing a 'frontend' and a 'backend' key. Assign an empty array to each key.
               $web_development = array('frontend'=>[],'backend'=>[]);
               array_push($web_development['frontend'],'xhtml','CSS','JavaScript',);
               array_push($web_development['backend'],'Ruby on Rails','Flash');
             
               echo '<pre>';
                     print_r($web_development);
               echo '</pre>';
               $web_development['frontend']=array_replace($web_development['frontend'],array(0 => 'html'));
               array_splice( $web_development['backend'], 1,1);
               echo"<br>";
               echo '<pre>';
                     print_r($web_development);
               echo '</pre>';
               
               
        ?>
</body>

</html>