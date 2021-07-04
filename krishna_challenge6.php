<?php
    $user = "krishna";
?>
<!DOCTYPE html>
<html>
    <head> <title> program 6 </title></head>
<body style="background-color:blue;">
    <span style="color:#FFFFFF;text-align:center;">
    <h1>Hello <?php echo $user; ?>!, Welcome to Sample PHP Script </h1>

    <?php
        echo "<p align='left'> <font color=white  size='5pt'><b>This Programs displays the number page visits</font></b> </p>";
        echo "<p align='left'> <font color=white  size='5pt'><b>REFRESH PAGE</font></b> </p>";
        $name="counter.txt";
        $file = fopen($name,"r");
        $hits = fscanf($file,"%d");
        fclose($file);
        $hits[0]++;
        $file = fopen($name,"w");
        fprintf($file,"%d",$hits[0]);
        fclose($file);
        print "Total number of views: ".$hits[0];
    ?>
</body>
</html>
