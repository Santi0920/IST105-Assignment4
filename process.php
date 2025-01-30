<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        echo "<p>Error: All inputs must be numeric.</p>";
    } else {
        $command = escapeshellcmd("python3 calculate.py $a $b $c");
        $output = shell_exec($command);
        echo "<h2>Result:</h2>";
        echo $output;
    }
} else {
    echo "<p>No data submitted. Error 404.</p>";
}
?>