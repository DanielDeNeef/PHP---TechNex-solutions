<?php
echo "<h1>Ingevoerde gegevens</h1>";
foreach ($_POST as $key => $value) {
    echo "<b>" . ($key) . "</b>: " . ($value) . "<br>";
}
?>
<br>
<button onclick="window.history.back()">Ga Terug</button>
