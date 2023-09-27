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
  $nameerror = $lnameerror = $departmenterror = $emailerror = $passeror = $gendereror = $phoneerror = $succes = "";
  $studentnameerror = $studentlnameerror = $studentdepartmenterror = $studentemailerror = $studentpasseror = $studentgendereror = $studentphoneerror = $succes2 = "";
  $HODnameerror = $HODlnameerror = $HODdepartmenterror = $HODemailerror = $HODpasseror = $HODgendereror = $HODphoneerror = $succes3 = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST["option"];
    if ($option == "Teacher") {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $phone = $_POST["phone"];
      $department = $_POST["department"];
      //   validation for password
// var_dump($_POST["option"]); die;
  
      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      $number = preg_match('@[0-9]@', $password);
      $specialChars = preg_match('@[^\w]@', $password);
      if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $passeror = 'Password should be at least 8 characters in length<br>and  should include at least one  upper case<br> letter,one number, and one special character.';
      }

      //   validation for fname
      if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        $nameerror = "Only letters and white space allowed";
      }
      if (empty($fname)) {
        $nameerror = 'First Name is Required';
      } elseif ($fname[0] !== strtoupper($fname[0])) {
        $nameerror = 'First letter of the First Name should be capitalized';
      }

      //   validation for lname
      if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
        $lnameerror = "Only letters and white space allowed";
      }
      if (empty($lname)) {
        $lnameerror = 'Last Name is Required';
      } elseif ($lname[0] !== strtoupper($lname[0])) {
        $lnameerror = 'First letter of the First Name should be capitalized';
      }
      //   validation for email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailerror = 'Enter valid Email';
      }
      //   validation for department
      if (empty($department)) {
        $departmenterror = "Required";
      }
      // validation for gender
      if (!isset($_POST["gender"])) {
        $gendereror = 'Please select a gender.';
      }

      //   validation for phone
      if (empty($phone)) {
        $phoneerror = 'Phone num Required';
      } else {
        if (!preg_match("/[0-9]/", $phone)) {
          $phoneerror = 'Must be a number';
        }
        if (empty($nameerror) && empty($lnameerror) && empty($departmenterror) && empty($emailerror) && empty($passeror) && empty($gendereror) && empty($phoneerror) && empty($succes)) {
          $succes = "Your response is succesfully submited";
        }
      }
    }


    if ($option == "Student") {
      $studentfname = $_POST["studentfname"];
      $studentlname = $_POST["studentlname"];
      $studentemail = $_POST["studentemail"];
      $studentpassword = $_POST["studentpassword"];
      $studentphone = $_POST["studentphone"];
      $studentdepartment = $_POST["studentdepartment"];
      //   validation for password
  
      $uppercase = preg_match('@[A-Z]@', $studentpassword);
      $lowercase = preg_match('@[a-z]@', $studentpassword);
      $number = preg_match('@[0-9]@', $studentpassword);
      $specialChars = preg_match('@[^\w]@', $studentpassword);
      if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($studentpassword) < 8) {
        $studentpasseror = 'Password should be at least 8 characters in length<br>and  should include at least one  upper case<br> letter,one number, and one special character.';
      }

      //   validation for fname
      if (!preg_match("/^[a-zA-Z-' ]*$/", $studentfname)) {
        $studentnameerror = "Only letters and white space allowed";
      }
      if (empty($studentfname)) {
        $studentnameerror = 'First Name is Required';
      } elseif ($studentfname[0] !== strtoupper($studentfname[0])) {
        $studentnameerror = 'First letter of the First Name should be capitalized';
      }

      //   validation for lname
      if (!preg_match("/^[a-zA-Z-' ]*$/", $studentlname)) {
        $studentlnameerror = "Only letters and white space allowed";
      }
      if (empty($studentlname)) {
        $studentlnameerror = 'Last Name is Required';
      } elseif ($studentlname[0] !== strtoupper($studentlname[0])) {
        $studentlnameerror = 'First letter of the First Name should be capitalized';
      }
      //   validation for email
      if (!filter_var($studentemail, FILTER_VALIDATE_EMAIL)) {
        $studentemailerror = 'Enter valid Email';
      }
      //   validation for department
      if (empty($studentdepartment)) {
        $studentdepartmenterror = "Required";
      }
      // validation for gender
      if (!isset($_POST["studentgender"])) {
        $studentgendereror = 'Please select a gender.';
      }

      if (empty($studentphone)) {
        $studentphoneerror = 'Phone num Required';
      } else {
        if (!preg_match("/[0-9]/", $studentphone)) {
          $studentphoneerror = 'Must be a number';
        }
        if (empty($studentnameerror) && empty($studentlnameerror) && empty($studentdepartmenterror) && empty($studentemailerror) && empty($studentpasseror) && empty($studentgendereror) && empty($studentphoneerror) && empty($succes2)) {
          $succes2 = "Your response is succesfully submited";
        }
      }
    }

    if ($option == "HOD") {
      $HODfname = $_POST["HODfname"];
      $HODlname = $_POST["HODlname"];
      $HODemail = $_POST["HODemail"];
      $HODpassword = $_POST["HODpassword"];
      $HODphone = $_POST["HODphone"];
      $HODdepartment = $_POST["HODdepartment"];
      //   validation for password
// var_dump($_POST["option"]); die;
  
      $uppercase = preg_match('@[A-Z]@', $HODpassword);
      $lowercase = preg_match('@[a-z]@', $HODpassword);
      $number = preg_match('@[0-9]@', $HODpassword);
      $specialChars = preg_match('@[^\w]@', $HODpassword);
      if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($HODpassword) < 8) {
        $HODpasseror = 'Password should be at least 8 characters in length<br>and  should include at least one  upper case<br> letter,one number, and one special character.';
      }

      //   validation for fname
      if (!preg_match("/^[a-zA-Z-' ]*$/", $HODfname)) {
        $HODnameerror = "Only letters and white space allowed";
      }
      if (empty($HODfname)) {
        $HODnameerror = 'First Name is Required';
      } elseif ($HODfname[0] !== strtoupper($HODfname[0])) {
        $HODnameerror = 'First letter of the First Name should be capitalized';
      }

      //   validation for lname
      if (!preg_match("/^[a-zA-Z-' ]*$/", $HODlname)) {
        $HODlnameerror = "Only letters and white space allowed";
      }
      if (empty($HODlname)) {
        $HODlnameerror = 'Last Name is Required';
      } elseif ($HODlname[0] !== strtoupper($HODlname[0])) {
        $HODlnameerror = 'First letter of the First Name should be capitalized';
      }
      //   validation for email
      if (!filter_var($HODemail, FILTER_VALIDATE_EMAIL)) {
        $HODemailerror = 'Enter valid Email';
      }
      //   validation for department
      if (empty($HODdepartment)) {
        $HODdepartmenterror = "Required";
      }
      // validation for gender
      if (!isset($_POST["HODgender"])) {
        $HODgendereror = 'Please select a gender.';
      }
      // var_dump($departmenterror);die;
//   validation for phone
      if (empty($HODphone)) {
        $HODphoneerror = 'Phone num Required';
      } else {
        if (!preg_match("/[0-9]/", $HODphone)) {
          $HODphoneerror = 'Must be a number';
        }
        if (empty($HODnameerror) && empty($HODlnameerror) && empty($HODdepartmenterror) && empty($HODemailerror) && empty($HODpasseror) && empty($HODgendereror) && empty($HODphoneerror) && empty($succes3)) {
          $succes3 = "Your response is succesfully submited";
        }
      }
    }
  }


  ?>


  <form method="post" action="<?php ($_SERVER["PHP_SELF"]); ?>">
    <!-- drop down -->
    <label for="optionSelect">Choose</label>
    <select onchange="select()" name="option" id="optionSelect">
      <option  value="">--Select--</option>
      <option <?php if (!empty($option) && $option == "Teacher") {
        echo "selected";
      } ?> value="Teacher" class="">Teacher
      </option>
      <option <?php if (!empty($option) && $option == "Student") {
        echo "selected";
      } ?> value="Student">Student</option>
      <option <?php if (!empty($option) && $option == "HOD") {
        echo "selected";
      } ?> value="HOD">HOD</option>
    </select>




    <div id="Teacher_form" style="<?php if (!empty($option) && $option == "Teacher") {
      echo "display:block;";
    } else {
      echo "display:none;";
    } ?> ">
      <h1>Teacher Data</h1>
      <!-- first name -->
      <label>First Name: </label>
      <input type="text" name="fname"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($nameerror)) {
          echo $nameerror;
        } ?>
      </span> <br>
      <!-- last name -->


      <label>last Name: </label>
      <input type="text" name="lname"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($lnameerror)) {
          echo $lnameerror;
        } ?>
      </span><br>
      <!-- email -->


      <label>Email: </label>
      <input type="text" name="email"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (filter_var($emailerror)) {
          echo $emailerror;
        } ?>
      </span><br>


      <!-- password -->
      <label>Password: </label>
      <input type="password" name="password"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($passeror)) {
          echo $passeror;
        } ?>
      </span> <br>


      <!-- phone -->
      <label>Phone:</label>
      <input type="text" name="phone"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($phoneerror)) {
          echo $phoneerror;
        } ?>
      </span> <br>


      <!-- gender -->
      <label> Gender: </label>
      <input type="radio" name="gender" value="male"> &nbsp Male
      <input type="radio" name="gender" value="female">Female <br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($gendereror)) {
          echo $gendereror;
        } ?>
      </span> <br>


      <!-- department -->
      <label for="">Choose Department:</label>
      <select name="department">
        <option value="">--Select--</option>
        <option value="physics">Physics</option>
        <option value="chemistry">Chemistry</option>
        <option value="CSIT">CSIT</option>
      </select> <br><span style='color:red; font-size:smaller;'>
        <?php if (!empty($departmenterror)) {
          echo $departmenterror;
        } ?>
      </span><br>
      <input type="submit" value="Submit" class="submit">
      <span class="sucess">
        <?php if (!empty($succes)) {
          echo $succes;
        } ?>
      </span> <br>

    </div>

    <div id="Student_form1" style="<?php if (!empty($option) && $option == "Student") {
      echo "display:block;";
    } else {
      echo "display:none;";
    } ?> ">
      <h1>Student Data</h1>
      <!-- first name -->
      <label>First Name: </label>
      <input type="text" name="studentfname"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($studentnameerror)) {
          echo $studentnameerror;
        } ?>
      </span> <br>
      <!-- last name -->


      <label>last Name: </label>
      <input type="text" name="studentlname"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($studentlnameerror)) {
          echo $studentlnameerror;
        } ?>
      </span><br>
      <!-- email -->


      <label>Email: </label>
      <input type="text" name="studentemail"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (filter_var($studentemailerror)) {
          echo $studentemailerror;
        } ?>
      </span><br>


      <!-- password -->
      <label>Password: </label>
      <input type="password" name="studentpassword"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($studentpasseror)) {
          echo $studentpasseror;
        } ?>
      </span> <br>


      <!-- phone -->
      <label>Phone:</label>
      <input type="text" name="studentphone"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($studentphoneerror)) {
          echo $studentphoneerror;
        } ?>
      </span> <br>


      <!-- gender -->
      <label> Gender: </label>
      <input type="radio" name="studentgender" value="male"> &nbsp Male
      <input type="radio" name="studentgender" value="female">Female <br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($studentgendereror)) {
          echo $studentgendereror;
        } ?>
      </span> <br>


      <!-- department -->
      <label for="">Choose Department:</label>
      <select name="studentdepartment">
        <option value="">--Select--</option>
        <option value="physics">Physics</option>
        <option value="chemistry">Chemistry</option>
        <option value="CSIT">CSIT</option>
      </select> <br><span style='color:red; font-size:smaller;'>
        <?php if (!empty($studentdepartmenterror)) {
          echo $studentdepartmenterror;
        } ?>
      </span><br>
      <input type="submit" value="Submit" class="submit">
      <span class="sucess">
        <?php if (!empty($succes2)) {
          echo $succes2;
        } ?>
      </span> <br>

    </div>
    <div id="HOD_form1" style="<?php if (!empty($option) && $option == "HOD") {
      echo "display:block;";
    } else {
      echo "display:none;";
    } ?> ">
      <h1>HOD Data</h1>
      <!-- first name -->
      <label>First Name: </label>
      <input type="text" name="HODfname"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($HODnameerror)) {
          echo $HODnameerror;
        } ?>
      </span> <br>
      <!-- last name -->


      <label>last Name: </label>
      <input type="text" name="HODlname"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($lHODnameerror)) {
          echo $HODlnameerror;
        } ?>
      </span><br>
      <!-- email -->


      <label>Email: </label>
      <input type="text" name="HODemail"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (filter_var($HODemailerror)) {
          echo $HODemailerror;
        } ?>
      </span><br>


      <!-- password -->
      <label>Password: </label>
      <input type="password" name="HODpassword"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($HODpasseror)) {
          echo $HODpasseror;
        } ?>
      </span> <br>


      <!-- phone -->
      <label>Phone:</label>
      <input type="text" name="HODphone"><br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($HODphoneerror)) {
          echo $HODphoneerror;
        } ?>
      </span> <br>


      <!-- gender -->
      <label> Gender: </label>
      <input type="radio" name="HODgender" value="male"> &nbsp Male
      <input type="radio" name="HODgender" value="female">Female <br>
      <span style='color:red; font-size:smaller;'>
        <?php if (!empty($HODgendereror)) {
          echo $HODgendereror;
        } ?>
      </span> <br>


      <!-- department -->
      <label for="">Choose Department:</label>
      <select name="HODdepartment">
        <option value="">--Select--</option>
        <option value="physics">Physics</option>
        <option value="chemistry">Chemistry</option>
        <option value="CSIT">CSIT</option>
      </select> <br><span style='color:red; font-size:smaller;'>
        <?php if (!empty($HODdepartmenterror)) {
          echo $HODdepartmenterror;
        } ?>
      </span><br>
      <input type="submit" value="Submit" class="submit"><br>
      <span class="sucess">
        <?php if (!empty($succes3)) {
          echo $succes3;
        } ?>
      </span> <br>

    </div>

  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./form.js"></script>
</body>

</html>