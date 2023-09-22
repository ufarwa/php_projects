<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php
// define variables and set to empty values
$nameerror=$lnameerror=$departmenterror=$emailerror=$passeror=$gendereror=$phoneerror =$succes="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $department = $_POST["department"];

//   validation for password
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);
  if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
     $passeror='Password should be at least 8 characters in length<br>and  should include at least one  upper case<br> letter,one number, and one special character.';
  }

//   validation for fname
if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
  $nameerror = "Only letters and white space allowed";
}
if(empty($fname)){
    $nameerror= 'First Name is Required';
}
elseif ($fname[0] !== strtoupper($fname[0])) {
  $nameerror = 'First letter of the First Name should be capitalized';
}

//   validation for lname
if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
  $lnameerror = "Only letters and white space allowed";
}
if(empty($lname)){
    $lnameerror= 'Last Name is Required';
}
elseif ($lname[0] !== strtoupper($lname[0])) {
  $lnameerror = 'First letter of the First Name should be capitalized';
}
//   validation for email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailerror='Enter valid Email';
  }
  //   validation for department
if(empty($department)) 
{
    $departmenterror="Required";
}
// validation for gender
if(!isset($_POST["gender"])) { 
  $gendereror='Please select a gender.'; 
}
// var_dump($departmenterror);die;
//   validation for phone
if(empty($phone)){
  $phoneerror= 'Phone num Required';
}else{
  if (!preg_match("/[0-9]/",$phone)){
    $phoneerror= 'Must be a number';
  }
}

// $isValid = preg_match("/[0-9]{11}/", $formvalue);
if(empty($nameerror) &&  empty($lnameerror) && empty($departmenterror) && empty($emailerror) && empty($passeror) && empty($gendereror) && empty($phoneerror)  && empty($succes)){
$succes="Your response is succesfully submited";
}
}
// var_dump($phoneerror);die;
?>
<h1>Form</h1>
<form method="post" action="<?php ($_SERVER["PHP_SELF"]);?>">

<!-- first name -->
    <label>First Name: </label>
    <input type="text" name="fname"><br>
    <span style='color:red; font-size:smaller;'><?php if(!empty($nameerror)){echo $nameerror;} ?></span> <br>
<!-- last name -->


    <label>last Name: </label>
    <input type="text" name="lname"><br> 
    <span style='color:red; font-size:smaller;'><?php if(!empty($lnameerror)){echo $lnameerror;} ?></span><br>
    <!-- email -->


    <label>Email: </label>
    <input type="text" name="email"><br>
    <span style='color:red; font-size:smaller;'><?php if(filter_var($emailerror)){echo $emailerror;} ?></span><br>


    <!-- password -->
    <label>Password: </label>
    <input type="password" name="password"><br>
    <span style='color:red; font-size:smaller;'><?php if(!empty( $passeror)){echo  $passeror;} ?></span> <br>


    <!-- phone -->
    <label>Phone:</label> 
    <input type="text" name="phone"><br>
    <span style='color:red; font-size:smaller;'><?php if(!empty($phoneerror)){echo $phoneerror;} ?></span> <br>


    <!-- gender -->
   <label> Gender: </label>
   <input type="radio" name="gender" value="male"> &nbsp Male 
   <input type="radio" name="gender" value="female">Female <br>
   <span style='color:red; font-size:smaller;'><?php if(!empty($gendereror)){echo  $gendereror;} ?></span> <br>


   <!-- department -->
   <label for="">Choose Department:</label>
  <select  name="department">
  <option value="">--Select--</option>
    <option value="physics">Physics</option>
    <option value="chemistry">Chemistry</option>
    <option value="CSIT">CSIT</option>
  </select> <br><span style='color:red; font-size:smaller;'><?php if(!empty($departmenterror)){echo $departmenterror;} ?></span>
    <input type="submit" value="Submit" class="submit">

</form>
<span class="sucess"><?php if(!empty($succes)){echo $succes;} ?></span> <br>
</body>
</html>