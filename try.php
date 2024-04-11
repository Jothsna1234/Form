<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: linear-gradient(pink,aqua);
            align-items: center;
        }
       
    </style>

</head>
<body>
    <?php
  
   $name = $email = $website = $comment = $gender = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = test_input($_POST["name"]);
       $email = test_input($_POST["email"]);
       $website = test_input($_POST["website"]);
       $comment = test_input($_POST["comment"]);
       $gender = test_input($_POST["gender"]);
   }
   function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }
   ?>
   
   
    <h1 style="text-align: center"><i><u>Form Validation</u></i></h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <strong ><em>Name:</em></strong>
    <br><br><input type="text" name="name">
    <br><br>
    <strong><em>Email:</em></strong>
    <br><br><input type="text" name="email">
    <br><br>
    <strong><m>Website:</em></strong>
    <br><br><input type="text" name="website">
    <br><br>
    <strong><em>Comments:</em></strong>
    <br><br><textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    <strong><em>Gender:</em></strong>
    <br><br>
    <input type="radio" name="gender" value="male" >Male
    <input type="radio" name="gender" value="female" >Female
    <input type="radio" name="gender" value="others" >Others
    <br><br>
    <input type="submit" name="submit" value= "SUBMIT">
    </form>

    <?php
    echo "<h2>Input for the form:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>

</body>
</html>