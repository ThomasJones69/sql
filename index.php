<?php
if (isset($_REQUEST['TeamB'])) {
    $conn = new mysqli("localhost", "root", "", "sport_rooster");
    $team_A = $_REQUEST['TeamA'];
    $team_B = $_REQUEST['TeamB'];
    $score = $_REQUEST['score'];
    echo $sql;
    $sql = "INSERT INTO `uitslagen`( `TeamA`, `TeamB`, `score`) VALUES ('$team_A','$team_B','$score')";
    
   
    //print_r($row);
    $conn->query($sql);
}
?>
<html>
    <head>        
    </head>
    <body>
        <form action="index.php" method="get">
            Naam Team A: <input type="text" name="TeamA">
            Naam Team B: <input type="text" name="TeamB">
            Score: <input type="text" name="score">
            <input type="submit" value="voegToe">
        </form>  
        <table>
            <?php
            $conn2 = new mysqli("localhost", "root", "", "sport_rooster");
            $sql = "SELECT * FROM `uitslagen`";
            $result = $conn2->query($sql);
            while ($row = mysqli_fetch_array($result)) {
                //echo "<tr><td>" . $row['id'] . "</td><td>" . $row['TeamA'] . "</td><td>" . $row['TeamB'] . "<tr><td>" . $row['score'] ."</td></tr>";
                echo "</td><td>" . $row['TeamA'] . "</td><td>" . $row['TeamB'] . "<tr><td>" . $row['score'] ."</td></tr>";
                //print_r($row);
            }
            ?>
        </table>
    </body>
</html>
