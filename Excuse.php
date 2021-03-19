<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>excuse</title>
        <link rel="stylesheet" href="style.css">
</head>

<body>
        <header class="hd">
                <h1>welcome to myExcuse. generate your letters with just a click</h1>
        </header>
        <section class="sec1">

                <form action='excuse.php' method='get'>
                        <fieldset>
                                <legend>excuse form</legend>
                                <p><label>name of the child</label><input type="text" name="name_of_child"
                                                required="required">
                                </p>
                                <p><label>name of the teacher</label></label><input type="text" name="name_of_teacher"
                                                required="required"></p>
                                <p><label>Gender</label><input type="radio" name="gender" value="M"
                                                required="required">M
                                        <input type="radio" name="gender" value="F" required="required">F
                                </p>
                                <label>reason: </label><input type="radio" name="reason" value="illness">illness
                                <input type="radio" name="reason" value="death">death of the pet
                                (or a family member)<br>
                                <input type="radio" name="reason" value="activity">significant
                                extra-curricular activity
                                </label><input type="radio" name="reason" value="other">other</p>
                                <input type="submit" value="submit" name="submit">
                        </fieldset>
                </form>

        </section>


        <?php 
           $name_of_child;
           $name_of_teacher;
           $gender;
           $reason;
           if (isset($_GET['submit']) && !empty($_GET['submit'])) {
                $name_of_child = $_GET['name_of_child'];
                $name_of_teacher = $_GET['name_of_teacher'];
                $gender = $_GET['gender'];
                $reason  = $_GET['reason'];
           }
           echo "$reason";
           print_r($_GET);
           
           switch ($gender) {
                   case 'M':
                           switch ($reason) {
                                case 'illness':
                                        echo "<article class='reason'> 
                                        <h1>justification Message for a sick child </h1>
                                        <h3>Dear {$name_of_teacher}</h3>
                                        <p>Our son {$name_of_child}, a student at your college, will not be able to attend class today.</p>
                                        <p>He is sick and the family doctor has recommended a period of rest.</p>
                                        <p>Our child should return to class in a week time.<br> For any further information, please do not hesitate to contact us.</p>
                                        <p>Our most sincere greetings</p>
                                        <p>...................</p>
                                        <p>signature</p>
                                        </article>";
                                        break;
                                case 'death':
                                     echo "<article class='reason'> 
                                     <h1>justify an absence from school</h1>
                                     <h3>Dear {$name_of_teacher}</h3>
                                     <p>Our son {$name_of_child}, a student at your college, will not be able to attend class today. as result of a tragic incident that occurred yesterday</p>
                                     <p>our son has just lost his favorite pet </p>
                                     <p>Our most sincere greetings</p>
                                     <p>...................</p>
                                     <p>signature</p>
                                     </article>";
                                       break;
                                case 'activity':
                                     echo "<article class='reason'> 
                                     <h1>justify an absence from school </h1>
                                     <h3>Dear {$name_of_teacher}</h3>
                                     <p>Our son {$name_of_child}, a student at your college, will not be able to attend class today.</p>
                                     <p>he has a very important activity today and he will be retuning tomorrow. Hope you understand </p>
                                     <p>For any further information do contact us</p>
                                     <p>Our most sincere greetings</p>
                                     <p>...................</p>
                                     <p>signature</p>
                                     </article>";
                                        break;
                                   
                                   default:
                                         echo "<article class='reason'> 
                                               <h1>justify an absence from school </h1>
                                               <h3>Dear {$name_of_teacher}</h3>
                                               <p>Our son {$name_of_child}, a student at your college, will not be able to attend class today due to family and personal reasons. </p>
                                               <p>he will be returning in two day time when we hope all will be well.<br> We hope you understand.</p>
                                               <p>Our most sincere greetings</p>
                                               <p>...................</p>
                                               <p>signature</p>
                                     </article>";
                                           break;
                           }
                           break;
                   case 'F':
                        switch ($reason) {
                                case 'illness':
                                        echo "<article class='reason'> 
                                        <h1>justification Message for a sick child </h1>
                                        <h3>Dear {$name_of_teacher}</h3>
                                        <p>Our daughter {$name_of_child}, a student at your college, will not be able to attend class today.</p>
                                        <p>He is sick and the family doctor has recommended a period of rest.</p>
                                        <p>Our child should return to class in a week time.<br> For any further information, please do not hesitate to contact us.</p>
                                        <p>Our most sincere greetings</p>
                                        <p>...................</p>
                                        <p>signature</p>
                                        </article>";
                                        break;
                                case 'death':
                                        echo "<article class='reason'> 
                                        <h1>justify an absence from school</h1>
                                        <h3>Dear {$name_of_teacher}</h3>
                                        <p>Our daughter {$name_of_child}, a student at your college, will not be able to attend class today. as result of a tragic incident that occurred yesterday</p>
                                        <p>our daughter has just lost her favorite pet </p>
                                        <p>Our most sincere greetings</p>
                                        <p>...................</p>
                                        <p>signature</p>
                                        </article>";
                                       break;
                                case 'activity':
                                        echo "<article class='reason'> 
                                        <h1>justify an absence from school </h1>
                                        <h3>Dear {$name_of_teacher}</h3>
                                        <p>Our son {$name_of_child}, a student at your college, will not be able to attend class today.</p>
                                        <p>she has a very important activity today and she will be retuning tomorrow. Hope you understand </p>
                                        <p>For any further information do contact us</p>
                                        <p>Our most sincere greetings</p>
                                        <p>...................</p>
                                        <p>signature</p>
                                        </article>";
                                        break;
                                   
                                   default:
                                         echo "<article class='reason'> 
                                               <h1>justify an absence from school </h1>
                                               <h3>Dear {$name_of_teacher}</h3>
                                               <p>Our daughter {$name_of_child}, a student at your college, will not be able to attend class today.</p>
                                               <p>she will be returning in two day time when we hope all will be well.<br> We hope you understand.</p>
                                               <p>Our most sincere greetings</p>
                                               <p>...................</p>
                                               <p>signature</p>
                                     </article>";
                                           break;
                           }
                           break;
                  
                   default:
                
                           break;
           }

           
           echo "<article class='phpStyle'>
           
           </article>"
        ?>

</body>

</html>