<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>

  <link rel="stylesheet" href="login.css">
</head>

<body>
  <?php
  // define variables and set to empty values
 $emailerror = $passeror =  $succes =$message= "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
      $password = $_POST["password"];

      //   validation for password
// var_dump($_POST["option"]); die;
  
      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      $number = preg_match('@[0-9]@', $password);
      $specialChars = preg_match('@[^\w]@', $password);
      if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $passeror = 'Password should be at least 8 characters in length<br>and  should include at least one  upper case<br> letter,one number, and one special character.';
      }
      //   validation for email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerror = 'Enter valid Email';
      }
      if (empty($emailerror) && empty($passeror)) {
        $succes = "Your response is succesfully submited";
      }
      if($email=="ufarwa@gmail.com" && $password=="Ufarwa@1234"){
        $redirect_url = "./hello.php";
        header('Location: '.$redirect_url);
      }
      else{
      $message ="invalid credentials";
      }
    }


  ?>


  <form method="post" action="<?php ($_SERVER["PHP_SELF"]); ?>" onsubmit="return submitForm();">
    <!-- drop down -->
    
      <label>Email: </label>
      <input type="text" name="email" id="email"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (filter_var($emailerror)) {
          echo $emailerror;
        } ?>
      </span><br>


      <!-- password -->
      <label>Password: </label>
      <input type="password" name="password" id="password"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($passeror)) {
          echo $passeror;
        } ?>
      </span> <br>
      <input type="submit" value="Submit" class="submit"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($message)) {
          echo $message;
        } ?></span> <br>
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!-- <script src="login.js"></script> -->


</body>

</html>


