<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <form action="Drill.php" method="get">
                <input type="date" name="birth_date" required="required">
                gender<input type="radio" name="gender" id="gender" value="m">m
                <input type="radio" name="gender" id="gender" value="f">f<br>
                Do you speak english<input type="radio" name="language" id="language" value="yes">yes
                <input type="radio" name="language" id="language" value="no">no


                <input type="submit" name="submit">
        </form>


        <?php 
              // 1.1 Clean your room Exercise 
                function cleanup_room(){
                        echo "cleaning yuks room";
                }
                 $room_is_filthy = false;
        
                if( $room_is_filthy ){
                	echo "Yuk, Room is dirty : let's clean it up !";
                	cleanup_room();
                	echo "<br>Room is now clean!";
                	$room_is_filthy = false;
                } else {
                	echo "<br>Nothing to do, room is neat. <br>";
                        
                }
                        //clean room improved
                $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate" ];

                       // When testing, change the index value to navigate to the possible array values
                       
                $room_filthiness = $possible_states[0]; 
                
                if( $room_filthiness == $possible_states[0] || $room_filthiness ==  $possible_states[1] ){
                	echo "Yuk, Room is Disgusting! Let's clean it up !";
                } else if( $possible_states[2] ){
                	echo "Yuk, Room is dirty : let's clean it up !";
                // ...
                } else {
                	echo "<br>Nothing to do, room is neat.";
                }
                echo "<br>";
                 // 2. "Different greetings according to time" Exercise
                 $time = date('H:i:s');
                 $hour= date('H');
                 $minutes = date('i');
                 $seconds = date('s');
                
                 echo "$time ";
              
                // Test the value of $now and display the right message according to the specifications.
                
                if( $hour >= 5 && $hour < 9){
                      echo "good morning";
                } 
                elseif ($hour == 9 && $minutes == 0 && $seconds == 0){ 
                        echo "good morning";        
                }
                
                else if( $hour > 9 && $hour < 12){
                        echo "good day <br>";
                } 
                elseif ($hour == 9 && ($minutes > 0 || $seconds > 0)) {
                         echo "good day <br>";
                        
                }
                elseif ($hour == 12 && $minutes == 0 && $seconds == 0) {
                                echo "good day <br>";
                }
                else if( $hour > 12 && $hour < 16){
                        echo "good After noon <br>";
                } 
                elseif ($hour == 12 && ($minutes > 0 || $seconds > 0)) {
                                echo "After noon <br>";
                }
                elseif ($hour == 16 &&($minutes == 0 && $seconds == 0)) {
                                echo "After noon <br>";
                }
                else if( $hour > 16 && $hour < 21){
                        echo "good evening <br>";
                } 
                elseif ($hour == 16 &&($minutes > 0 || $seconds > 0)) {
                                echo "good evening <br>";
                }
                elseif ($hour == 21 && ($minutes == 0 && $seconds == 0)) {
                                echo "good evening  <br>";
                }
                else if( $hour > 21 || $hour < 5){
                        echo "good night  <br>";
                } 
                elseif ($hour == 21 && ($minutes == 0 && $seconds == 0)) {
                                echo "good night  <br>";
                }
                
                //message par  age
                if (isset($_GET['submit']) && !empty($_GET['submit']) ) {
                         $birth_date  = $_GET['birth_date'];
                         $gender =  $_GET["gender"];
                         $language =  $_GET['language'];
                         
                }
                 echo "{$gender} , {$language} ";
                
                
                $tYear = date('Y');
                $tMonth = date('m'); 
                $tDay  = date('d');
                $bYear = date("Y", strtotime($birth_date));
                $bMonth = date("m", strtotime($birth_date)); 
                $bDay  = date("d", strtotime($birth_date));
                
                $age = $tYear - $bYear;
                if ($bMonth>$tMonth) {
                        $age--;
                }
                else if (($tMonth == $bMonth) && ($bDay > $tDay)) {
                        $age--;
                }

                switch ($gender) {
                        case 'm':
                                switch ($language) {
                                        case 'yes':
                                                
                                                if ($age < 12) {
                                                       echo "Hello kiddo boy! <br>";
                                                }
                                                else if ($age  >=12 && $age < 18) {
                                                        echo "Hello Teenager! boy<br>";
                                                 }
                                                 else if ($age  >=18 && $age <= 115) {
                                                        echo "Hello Adult! man<br>";
                                                 }
                                                 else {
                                                        echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ? man <br>";
                                                 }
                                                break;
                                        case 'no':
                                                
                                                if ($age < 12) {
                                                       echo "allowa kiddo! boy <br>";
                                                }
                                                else if ($age  >=12 && $age < 18) {
                                                        echo "allowa Teenager! boy<br>";
                                                 }
                                                 else if ($age  >=18 && $age <= 115) {
                                                        echo "allowa Adult! man<br>";
                                                 }
                                                 else {
                                                        echo  "allowa Wow! Still alive ? Are you a robot, like me ? Can I hug you man? <br>";
                                                 }
                                                break;
                                        
                                        default:
                                               
                                                break;
                                }
                                break;
                         case 'f':
                                switch ($language) {
                                        case 'yes':
                                               
                                                if ($age < 12) {
                                                       echo "Hello kiddo! girl<br>";
                                                }
                                                else if ($age  >=12 && $age < 18) {
                                                        echo "Hello Teenager! girl <br>";
                                                 }
                                                 else if ($age  >=18 && $age <= 115) {
                                                        echo "Hello Adult! woman<br>";
                                                 }
                                                 else {
                                                        echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ? woman<br>";
                                                 }
                                                break;
                                        case 'no':
                                                
                                                if ($age < 12) {
                                                       echo "Allowa kiddo! girl<br>";
                                                }
                                                else if ($age  >=12 && $age < 18) {
                                                        echo "Allowa Teenager! girl<br>";
                                                 }
                                                 else if ($age  >=18 && $age <= 115) {
                                                        echo "Allowa Adult! woman<br>";
                                                 }
                                                 else {
                                                        echo  "Allowa! Still alive ? Are you a robot, like me ? Can I hug you ? woman<br>";
                                                 }
                                                break;
                                        
                                        default:
                                                
                                                break;
                                }
                                break;
                                
                        
                        default:
                               
                                break;
                }



                
                
                
                         
                
                
                
                        
      
        ?>
</body>

</html>