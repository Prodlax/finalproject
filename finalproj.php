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
         $arg10 = test_input($_POST["arg10"]);
         $arg11 = test_input($_POST["arg11"]);
         $arg12 = test_input($_POST["arg12"]);
         $arg13 = test_input($_POST["arg13"]);
         $arg14 = test_input($_POST["arg14"]);
         $arg15 = test_input($_POST["arg15"]);
         $arg16 = test_input($_POST["arg16"]);
         $arg17 = test_input($_POST["arg17"]);
         $arg18 = test_input($_POST["arg18"]);
         $arg19 = test_input($_POST["arg19"]);
         $arg20 = test_input($_POST["arg20"]);
         $arg21 = test_input($_POST["arg21"]);
         $arg22 = test_input($_POST["arg22"]);
         $arg23 = test_input($_POST["arg23"]);
         $arg24 = test_input($_POST["arg24"]);
         $arg25 = test_input($_POST["arg25"]);
         $arg26 = test_input($_POST["arg26"]);
         $arg27 = test_input($_POST["arg27"]);
         $arg28 = test_input($_POST["arg28"]);
         $arg29 = test_input($_POST["arg29"]);
         $arg30 = test_input($_POST["arg30"]);
         $arg31 = test_input($_POST["arg31"]);
         $arg32 = test_input($_POST["arg32"]);
         $arg33 = test_input($_POST["arg33"]);
         $arg34 = test_input($_POST["arg34"]);
         $arg35 = test_input($_POST["arg35"]);
         $arg36 = test_input($_POST["arg36"]);
         $arg37 = test_input($_POST["arg37"]);
         $arg38 = test_input($_POST["arg38"]);
         $arg39 = test_input($_POST["arg39"]);
         $arg40 = test_input($_POST["arg40"]);
         $arg41 = test_input($_POST["arg41"]);
         $arg42 = test_input($_POST["arg42"]);
         $arg43 = test_input($_POST["arg43"]);
         $arg44 = test_input($_POST["arg44"]);
         $arg45 = test_input($_POST["arg45"]);
         $arg46 = test_input($_POST["arg46"]);
         $arg47 = test_input($_POST["arg47"]);
         $arg48 = test_input($_POST["arg48"]);
         $arg49 = test_input($_POST["arg49"]);
         $arg50 = test_input($_POST["arg50"]);
         $arg51 = test_input($_POST["arg51"]);
         $arg52 = test_input($_POST["arg52"]);
         $arg53 = test_input($_POST["arg53"]);
         $arg54 = test_input($_POST["arg54"]);
         $arg55 = test_input($_POST["arg55"]);
         $arg56 = test_input($_POST["arg56"]);
         $arg57 = test_input($_POST["arg57"]);
         $arg58 = test_input($_POST["arg58"]);
         $arg59 = test_input($_POST["arg59"]);
         $arg60 = test_input($_POST["arg60"]);
         exec("/usr/lib/cgi-bin/pi/argtest2 " . $arg1 . " " . $arg2 . " " . $arg3 . " " . $arg4 . " " . $arg5. " " . $arg6 . " " . $arg7 . " " . $arg8 . " " . $arg9 . " " . $arg10 . " " . $arg11 . " " . $arg12 . " " . $arg13 . " " . $arg14 . " " . $arg15 . " . $arg16 . " " . $arg17 . " " . $arg18 . " " . $arg19 . " " . $arg20 . " " . $arg21 . " " . $arg22 . " " . $arg23 . " " . $arg24 . " " . $arg25 . " " . $arg26 . " " . $arg27 . " " . $arg28 . " " . $arg29 . " " . $arg30 . " " . $arg31 . " " . $arg32 . " " . $arg33 . " " . $arg34 . " " . $arg35 . " " . $arg36 . " " . $arg37 . " " . $arg38 . " " . $arg39 . " " . $arg40 . " " . $arg41 . " " . $arg42 . " " . $arg43 . " " . $arg44 . " " . $arg45 . " " . $arg46 . " " . $arg47 . " " . $arg48 . " " . $arg49 . " " . $arg50 . " " . $arg51 . " " . $arg52 . " " . $arg53 . " " . $arg54 . " " . $arg55 . " " . $arg56 . " " . $arg57 . " " . $arg58 . " " . $arg59 . " " . $arg60, $output, $retc); 
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
