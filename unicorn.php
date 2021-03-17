<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>unicorn</title>
        <style>
        body {
                display: flex;

                flex-direction: column;
                align-items: center;
        }

        img {}
        </style>
</head>

<body>
        <!-- <img src="100.webp" alt="human">
        
        <img src="giphy.gif" alt="unicorn"> -->
        <form action="unicorn.php" method="get">
                <p>are you a <input type="radio" name="race" id="race" value="human">human
                        <input type="radio" name="race" id="race" value="cat">cat
                        <input type="radio" name="race" id="race" value="unicorn">unicorn
                </p> <input type="submit" value="submit" name="submit">
        </form>
        <?php 
              
              if (isset($_GET['submit']) && !empty($_GET['submit']) ){
                $race = $_GET['race'] == 'cat' ? '<img src="200w.webp" alt="cat">': ($_GET['race'] == 'human'? '<img src="100.webp" alt="human">' :'<img src="giphy.gif" alt="unicorn"> ');
                echo "$race";
              }
                
               
              

        ?>
</body>

</html>