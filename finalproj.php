<!DOCTYPE html>
<html>
  <head>
    <title>Money calculator</title>
  </head>


  <body>

    <h1>Input how much money you spent and earned in the past 30 days, and this program will run statistics on it</h1>
    <p>The program should display net profit/loss, average money earned per day, average money spent each day, profit/loss each day, highest money spent in one day, and the highest money earned in one day</p>

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
         exec("/usr/lib/cgi-bin/sp1b/project " . $arg1 . " " . $arg2 . " " . $arg3 . " " . $arg4 . " " . $arg5. " " . $arg6 . " " . $arg7 . " " . $arg8 . " " . $arg9 . " " . $arg10 . " " . $arg11 . " " . $arg12 . " " . $arg13 . " " . $arg14 . " " . $arg15 . " " . $arg16 . " " . $arg17 . " " . $arg18 . " " . $arg19 . " " . $arg20 . " " . $arg21 . " " . $arg22 . " " . $arg23 . " " . $arg24 . " " . $arg25 . " " . $arg26 . " " . $arg27 . " " . $arg28 . " " . $arg29 . " " . $arg30 . " " . $arg31 . " " . $arg32 . " " . $arg33 . " " . $arg34 . " " . $arg35 . " " . $arg36 . " " . $arg37 . " " . $arg38 . " " . $arg39 . " " . $arg40 . " " . $arg41 . " " . $arg42 . " " . $arg43 . " " . $arg44 . " " . $arg45 . " " . $arg46 . " " . $arg47 . " " . $arg48 . " " . $arg49 . " " . $arg50 . " " . $arg51 . " " . $arg52 . " " . $arg53 . " " . $arg54 . " " . $arg55 . " " . $arg56 . " " . $arg57 . " " . $arg58 . " " . $arg59 . " " . $arg60, $output, $retc); 
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Money spent on day 1: <input type="text" name="arg1"><br>
      Money earned on day 1: <input type="text" name="arg2"><br>
      Money spent on day 2: <input type="text" name="arg3"><br>
      Money earned on day 2: <input type="text" name="arg4"><br>
      Money spent on day 3: <input type="text" name="arg5"><br>
      Money earned on day 3: <input type="text" name="arg6"><br>
      Money spent on day 4: <input type="text" name="arg7"><br>
      Money earned on day 4: <input type="text" name="arg8"><br>
      Money spent on day 5: <input type="text" name="arg9"><br>
      Money earned on day 5: <input type="text" name="arg10"><br>
      Money spent on day 6: <input type="text" name="arg11"><br>
      Money earned on day 6: <input type="text" name="arg12"><br>
      Money spent on day 7: <input type="text" name="arg13"><br>
      Money earned on day 7: <input type="text" name="arg14"><br>
      Money spent on day 8: <input type="text" name="arg15"><br>
      Money earned on day 8: <input type="text" name="arg16"><br>
      Money spent on day 9: <input type="text" name="arg17"><br>
      Money earned on day 9: <input type="text" name="arg18"><br>
      Money spent on day 10: <input type="text" name="arg19"><br>
      Money earned on day 10: <input type="text" name="arg20"><br>
      Money spent on day 11: <input type="text" name="arg21"><br>
      Money earned on day 11: <input type="text" name="arg22"><br>
      Money spent on day 12: <input type="text" name="arg23"><br>
      Money earned on day 12: <input type="text" name="arg24"><br>
      Money spent on day 13: <input type="text" name="arg25"><br>
      Money earned on day 13: <input type="text" name="arg26"><br>
      Money spent on day 14: <input type="text" name="arg27"><br>
      Money earned on day 14: <input type="text" name="arg28"><br>
      Money spent on day 15: <input type="text" name="arg29"><br>
      Money earned on day 15: <input type="text" name="arg30"><br>
      Money spent on day 16: <input type="text" name="arg31"><br>
      Money earned on day 16: <input type="text" name="arg32"><br>
      Money spent on day 17: <input type="text" name="arg33"><br>
      Money earned on day 17: <input type="text" name="arg34"><br>
      Money spent on day 18: <input type="text" name="arg35"><br>
      Money earned on day 18: <input type="text" name="arg36"><br>
      Money spent on day 19: <input type="text" name="arg37"><br>
      Money earned on day 19: <input type="text" name="arg38"><br>
      Money spent on day 20: <input type="text" name="arg39"><br>
      Money earned on day 20: <input type="text" name="arg40"><br>
      Money spent on day 21: <input type="text" name="arg41"><br>
      Money earned on day 21: <input type="text" name="arg42"><br>
      Money spent on day 22: <input type="text" name="arg43"><br>
      Money earned on day 22: <input type="text" name="arg44"><br>
      Money spent on day 23: <input type="text" name="arg45"><br>
      Money earned on day 23: <input type="text" name="arg46"><br>
      Money spent on day 24: <input type="text" name="arg47"><br>
      Money earned on day 24: <input type="text" name="arg48"><br>
      Money spent on day 25: <input type="text" name="arg49"><br>
      Money earned on day 25: <input type="text" name="arg50"><br>
      Money spent on day 26: <input type="text" name="arg51"><br>
      Money earned on day 26: <input type="text" name="arg52"><br>
      Money spent on day 27: <input type="text" name="arg53"><br>
      Money earned on day 27: <input type="text" name="arg54"><br>
      Money spent on day 28: <input type="text" name="arg55"><br>
      Money earned on day 28: <input type="text" name="arg56"><br>
      Money spent on day 29: <input type="text" name="arg57"><br>
      Money earned on day 29: <input type="text" name="arg58"><br>
      Money spent on day 30: <input type="text" name="arg59"><br>
      Money earned on day 30: <input type="text" name="arg60"><br>
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
