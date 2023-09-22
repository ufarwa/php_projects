<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h1>MARK SHEET</h1>

    <?php 
    
    $urdu_Marks=75;
    $english_Marks=50;
    $maths_Marks=94;
    $science_Marks=89;
    $history_Marks=90;
    $Islamiat_Marks=72;
    $outOf=100;
    $total_Marks=600;
    $sum=$urdu_Marks+$english_Marks+$maths_Marks+$science_Marks+$history_Marks+$Islamiat_Marks;
    $percentage= ($sum/$total_Marks)*100;
    $roundedPercentage = round($percentage, 2);?>
    <table>
    <tr>
        <th>SUBJECTS</th>
        <th>OBTAINED_MARKS</th>
        <th>TOTAL_MARKS</th>
        <th>GRADE</th>
    </tr>
    <tr>
            <td>URDU</td>
            <td><?php echo $urdu_Marks?></td>
            <td><?php echo  $outOf ?></td>
            <td><?php  if ($urdu_Marks >= 90 && $urdu_Marks <= 100) {
                echo '<p style="color:green">A<sup>+</sup></p>';
            } elseif ($urdu_Marks >= 80 && $urdu_Marks < 90) {
                echo '<p style="color:#66FF66">A</p>';
            } 
              elseif ($urdu_Marks >= 70 && $urdu_Marks < 80) {
                echo '<p style="color:#FFFF00">B</p>';
            } 
            elseif ($urdu_Marks >= 60 && $urdu_Marks < 70){
                echo '<p style="color:#FFA500">C</p>';
            }
            elseif ($urdu_Marks >= 50 && $urdu_Marks < 60){
                echo '<p style="color:#FF0000">D</p>';
            }
            else{
                echo '<p style="color:#990000">F</p>';  
            } ?></td>
        </tr>


        <tr>
            <td>URDU</td>
            <td><?php echo $english_Marks?></td>
            <td><?php echo  $outOf ?></td>
            <td><?php  if ($english_Marks >= 90 && $english_Marks <= 100) {
                echo '<p style="color:green">A<sup>+</sup></p>';
            } elseif ($english_Marks >= 80 && $english_Marks < 90) {
                echo '<p style="color:#66FF66">A</p>';
            } 
              elseif ($english_Marks >= 70 && $english_Marks < 80) {
                echo '<p style="color:#FFFF00">B</p>';
            } 
            elseif ($english_Marks >= 60 && $english_Marks < 70){
                echo '<p style="color:#FFA500">C</p>';
            }
            elseif ($english_Marks >= 50 && $english_Marks < 60){
                echo '<p style="color:#FF0000">D</p>';
            }
            else{
                echo '<p style="color:#990000">F</p>';  
            } ?></td>
        </tr>


        <tr>
            <td>URDU</td>
            <td><?php echo $maths_Marks?></td>
            <td><?php echo  $outOf ?></td>
            <td><?php  if ($maths_Marks >= 90 && $maths_Marks <= 100) {
                echo '<p style="color:green">A<sup>+</sup></p>';
            } elseif ($maths_Marks >= 80 && $maths_Marks < 90) {
                echo '<p style="color:#66FF66">A</p>';
            } 
              elseif ($maths_Marks >= 70 && $maths_Marks < 80) {
                echo '<p style="color:#FFFF00">B</p>';
            } 
            elseif ($maths_Marks >= 60 && $maths_Marks < 70){
                echo '<p style="color:#FFA500">C</p>';
            }
            elseif ($maths_Marks >= 50 && $maths_Marks < 60){
                echo '<p style="color:#FF0000">D</p>';
            }
            else{
                echo '<p style="color:#990000">F</p>';  
            } ?></td>
        </tr>


        <tr>
            <td>URDU</td>
            <td><?php echo $science_Marks?></td>
            <td><?php echo  $outOf ?></td>
            <td><?php  if ($science_Marks >= 90 && $science_Marks <= 100) {
                echo '<p style="color:green">A<sup>+</sup></p>';
            } elseif ($science_Marks >= 80 && $science_Marks < 90) {
                echo '<p style="color:#66FF66">A</p>';
            } 
              elseif ($science_Marks >= 70 && $science_Marks < 80) {
                echo '<p style="color:#FFFF00">B</p>';
            } 
            elseif ($science_Marks >= 60 && $science_Marks < 70){
                echo '<p style="color:#FFA500">C</p>';
            }
            elseif ($urdu_Marks >= 50 && $urdu_Marks < 60){
                echo '<p style="color:#FF0000">D</p>';
            }
            else{
                echo '<p style="color:#990000">F</p>';  
            } ?></td>
        </tr>


        <tr>
            <td>URDU</td>
            <td><?php echo $history_Marks?></td>
            <td><?php echo  $outOf ?></td>
            <td><?php  if ($history_Marks >= 90 && $history_Marks <= 100) {
                echo '<p style="color:green">A<sup>+</sup></p>';
            } elseif ($history_Marks >= 80 && $history_Marks < 90) {
                echo '<p style="color:#66FF66">A</p>';
            } 
              elseif ($history_Marks >= 70 && $history_Marks < 80) {
                echo '<p style="color:#FFFF00">B</p>';
            } 
            elseif ($history_Marks >= 60 && $history_Marks < 70){
                echo '<p style="color:#FFA500">C</p>';
            }
            elseif ($history_Marks >= 50 && $history_Marks < 60){
                echo '<p style="color:#FF0000">D</p>';
            }
            else{
                echo '<p style="color:#990000">F</p>';  
            } ?></td>
        </tr>


        <tr>
            <td>URDU</td>
            <td><?php echo $Islamiat_Marks?></td>
            <td><?php echo  $outOf ?></td>
            <td><?php  if ($Islamiat_Marks >= 90 && $Islamiat_Marks <= 100) {
                echo '<p style="color:green">A<sup>+</sup></p>';
            } elseif ($Islamiat_Marks >= 80 && $Islamiat_Marks < 90) {
                echo '<p style="color:#66FF66">A</p>';
            } 
              elseif ($Islamiat_Marks >= 70 && $Islamiat_Marks < 80) {
                echo '<p style="color:#FFFF00">B</p>';
            } 
            elseif ($Islamiat_Marks >= 60 && $Islamiat_Marks < 70){
                echo '<p style="color:#FFA500">C</p>';
            }
            elseif ($Islamiat_Marks >= 50 && $Islamiat_Marks < 60){
                echo '<p style="color:#FF0000">D</p>';
            }
            else{
                echo '<p style="color:#990000">F</p>';  
            } ?></td>
        </tr>

        <tr>
    <td></td>
    <td><h3><?php echo "Total: " . $sum . "<br>Percentage: " . $roundedPercentage ?></h3></td>
    <td><h3><?php echo "Total: " . $total_Marks ?></h3></td>
    <td><?php
        if ($roundedPercentage >= 90 && $roundedPercentage <= 100) {
            echo '<p style="color:green">A<sup>+</sup></p>';
        } elseif ($roundedPercentage >= 80 && $roundedPercentage < 90) {
            echo '<p style="color:#66FF66">A</p>';
        } elseif ($roundedPercentage >= 70 && $roundedPercentage < 80) {
            echo '<p style="color:#FFFF00">B</p>';
        } elseif ($roundedPercentage >= 60 && $roundedPercentage < 70) {
            echo '<p style="color:#FFA500">C</p>';
        } elseif ($roundedPercentage >= 50 && $roundedPercentage < 60) {
            echo '<p style="color:#FF0000">D</p>';
        } else {
            echo '<p style="color:#990000">F</p>';
        }
        ?>
    </td>
</tr>

</table>

</body>
</html>