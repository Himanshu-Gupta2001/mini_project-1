<?php
$email=$_GET['t1'];
$psw=$_GET['t2'];
$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file))
  {
  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),5,null);
  if ($str_arr[1]==$psw and $str_arr[2]==$email){
		echo "Congratulations! You are authorized user"."<br>";
    echo "Your Job Application number is ".$str_arr[4]."<br>";
    echo "<br>";
    $ques=$str_arr[4] % 2 + 19;
    $solve=fopen("ques$ques.txt", 'r');
    $str = fread($solve, filesize("ques$ques.txt"));
    echo "$str";
    fclose($solve);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coding Problem</title>

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="header">Coding Problem</div>
    <div class="control-panel">
        Select Language:
        &nbsp; &nbsp;
        <select id="languages" class="languages" onchange="changeLanguage()">
            <option value="c"> C </option>
            <option value="cpp"> C++ </option>
            <option value="php"> PHP </option>
        </select>
    </div>
    <div class="editor" id="editor"></div>

    <div class="button-container">
        <button class="btn" onclick="executeCode()"> Run </button>
    </div>

    <div class="output"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/lib/ace.js"></script>
    <script src="js/lib/theme-monokai.js"></script>
    <script src="js/ide.js"></script>

</body>
</html>

<?php

      $flag=1;
      break;
    }//end if 
  }//end while
if ($flag==0)
echo "Please register yourself before login";
  fclose($file);
?>




