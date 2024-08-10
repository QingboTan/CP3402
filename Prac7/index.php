<?php
include 'header.php';
include 'functions.php';

echo "<h2>PHP Echo Examples</h2>";
echo "<p>This is a paragraph echoed using PHP.</p>";
echo "<ul>";
echo "<li>Item 1</li>";
echo "<li>Item 2</li>";
echo "<li>Item 3</li>";
echo "</ul>";

echo "<h2>Decision Making with If/Else</h2>";
$hour = date("H");
if ($hour < 12) {
    echo "<p>Good morning!</p>";
} elseif ($hour < 18) {
    echo "<p>Good afternoon!</p>";
} else {
    echo "<p>Good evening!</p>";
}

echo "<h2>Repetition with Loops</h2>";

echo "<h3>For Loop</h3>";
echo "<ul>";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>Number $i</li>";
}
echo "</ul>";

echo "<h3>While Loop</h3>";
echo "<ul>";
$i = 1;
while ($i <= 5) {
    echo "<li>Count $i</li>";
    $i++;
}
echo "</ul>";

echo "<h3>Foreach Loop with an Array</h3>";
$array = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
echo "<ul>";
displayArray($array);
echo "</ul>";

echo "<h2>Using Functions with Parameters</h2>";
echo "<p>" . greetUser("Neo") . "</p>";

include 'footer.php';
?>
