<html>
<head>
   <style>
      .error {color: #FF0000;}
   </style>
</head>
<body>
   <?php
   
      // define variables and set to empty values
      $nameErr = $emailErr = $genderErr = $websiteErr = "";
      $name = $email = $gender = $class = $course = $subject = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if (empty($_POST["name"])) {
            $nameErr = "Name is required";
         }else {
            $name = test_input($_POST["name"]);
         }

         if (empty($_POST["email"])) {
            $emailErr = "Email is required";
         } else {
            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $emailErr = "Invalid email format"; 
            }
         }

         if (empty($_POST["course"])) {
            $course = "";
         } else {
            $course = test_input($_POST["course"]);
         }

         if (empty($_POST["class"])) {
            $class = "";
         } else {
            $class = test_input($_POST["class"]);
         }

         if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
         } else {
            $gender = test_input($_POST["gender"]);
         }

         if (empty($_POST["subject"])) {
            $subjectErr = "You must select one or more subjects";
         } else {
            $subject = $_POST["subject"];	
         }
      }

      function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }
   ?>
   <h2>Absolute Classes Registration Form</h2>
   <p><span class = "error">* required field.</span></p>
   <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <table>
         <tr>
            <td>Name:</td>
            <td>
               <input type = "text" name = "name">
               <span class = "error">* <?php echo $nameErr;?></span>
            </td>
         </tr>
         <tr>
            <td>E-mail: </td>
            <td>
               <input type = "text" name = "email">
               <span class = "error">* <?php echo $emailErr;?></span>
            </td>
         </tr>
         <tr>
            <td>Time:</td>
            <td> 
               <input type = "text" name = "course">
               <span class = "error"><?php echo $websiteErr;?></span>
            </td>
         </tr>
         <tr>
            <td>Classes:</td>
            <td><textarea name = "class" rows = "5" cols = "40"></textarea></td>
         </tr>
         <tr>
            <td>Gender:</td>
            <td>
               <input type = "radio" name = "gender" value = "female">Female
               <input type = "radio" name = "gender" value = "male">Male
               <span class = "error">* <?php echo $genderErr;?></span>
            </td>
         </tr>
         <tr>
            <td>Select:</td>
            <td>
               <select name = "subject[]" size = "4" multiple>
                  <option value = "C">C</option>
                  <option value = "Java">Java</option>
                  <option value = "C#">C#</option>
                  <option value = "c++">C++</option>
                  <option value = "PHP">PHP</option>
                  <option value = "Python">Python</option>
               </select>
            </td>
         </tr>
         <tr>
            <td>Agree</td>
            <td><input type = "checkbox" name = "checked" value = "1"></td>
            <?php if(!isset($_POST['checked'])){ ?>
               <span class = "error">* <?php echo "You must agree to terms";?></span>
            <?php } ?> 
         </tr>
         <tr>
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
         </tr>
      </table>
   </form>
   <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         echo "<h2>Your given values are as :</h2>";
         echo ("<p><b>Name</b> : $name</p>");
         echo ("<p><b>Email address</b> : $email</p>");
         echo ("<p><b>Preffered class time</b> : $course</p>");
         echo ("<p><b>Class info</b> : $class </p>");
         echo ("<p><b>Gender</b> : $gender</p>");
         echo "<p><b>Subjcts Chosen:</b><p>";
         if (!empty($subject)) { 
            echo "<ul>";
            for($i = 0; $i < count($subject); $i++) {
               echo "<li>$subject[$i]</u/li>";
            }
            echo "</ul>";
         }
      }
   ?>
</body>
</html>