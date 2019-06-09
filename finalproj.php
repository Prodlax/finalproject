<!DOCTYPE html>
<html>
  <head>
    <title>Form Input 2</title>
  </head>


  <body>

    <h1>Form Input - Demo 2</h1>
    <p>Demo of how to take form input and pass it to a program - all in a single page</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $arg3 = $arg4 = $arg5 = $arg6 = $arg7 = $arg8 = $arg9 = $arg10 = $arg11 = $arg12 = $arg13 = $arg14 = $arg15 = $arg16 = $arg17 = $arg18 = $arg19 = $arg20 = $arg21 = $arg22 = $arg23 = $arg24 = $arg25 = $arg26 = $arg27 = $arg28 = $arg29 = $arg30 = $arg31 = $arg32 = $arg33 = $arg34 = $arg35 = $arg36 = $arg37 = $arg38 = $arg39 = $arg40 = $arg41 = $arg42 = $arg43 = $arg44 = $arg45 = $arg46 = $arg47 = $arg48 = $arg49 = $arg50 = $arg51 = $arg52 = $arg53 = $arg54 = $arg55 = $arg56 = $arg57 = $arg58 = $arg59 = $arg60 = $output = $retc = "";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg6 = test_input($_POST["arg6"]);
         $arg7 = test_input($_POST["arg7"]);
         $arg8 = test_input($_POST["arg8"]);
         $arg9 = test_input($_POST["arg9"]);
         $arg10 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg3 = test_input($_POST["arg3"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg4 = test_input($_POST["arg4"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg5 = test_input($_POST["arg5"]);
         $arg6 = test_input($_POST["arg6"]);
         exec("/usr/lib/cgi-bin/pi/argtest2 " . $arg1 . " " . $arg2, $output, $retc); 
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Arg1: <input type="text" name="arg1"><br>
      Arg2: <input type="text" name="arg2"><br>
      <br>
      <input type="submit" value="Go!">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Your Input:</h2>";
         echo $arg1;
         echo "<br>";
         echo $arg2;
         echo "<br>";
       
         echo "<h2>Program Output (an array):</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
       
         echo "<h2>Program Return Code:</h2>";
         echo $retc;
       }
    ?>
    
  </body>
</html>
