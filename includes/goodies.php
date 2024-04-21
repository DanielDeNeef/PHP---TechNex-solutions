<link rel="stylesheet" href="styles/goodies.css">

<?php
    // Path to your CSV file
    $csvFile = 'resources/prices.csv';

    echo '<div style="margin: 20px;">'; // Start of container
    echo '<h1>TechNex Goodies!</h1>'; // Table title

    // Open the CSV file
    if (($handle = fopen($csvFile, 'r')) !== false) {
        // Get the first row of the CSV file as an array of headers
        $headers = fgetcsv($handle, 0, ";");

        echo '<table>';

        // Output the headers
        echo '<tr>';
        foreach ($headers as $header) {
            echo "<th>{$header}</th>";
        }
        echo '</tr>';

        // Output the rows
        while (($row = fgetcsv($handle, 0, ";")) !== false) {
            echo '<tr>';
            foreach ($row as $index => $cell) {
                if (strtolower(trim($headers[$index])) == 'price') {
                    /**
                     * As the try catch is not able to detect such kind of errors 
                     * I am checking first if the value is numeric or not 
                     * If numeric I apply the requested decimal seperator 
                     * Else if display the text "On demand"
                     */
                    if (is_numeric($cell)) {
                        // The cell value is a number, format it as a price
                        $cell = number_format($cell, 2,',', '.') . ' €';
                    } else {
                        // The cell value is not a number, set it to "on demand"
                        $cell = 'on demand';
                    }
                }
                echo "<td>{$cell}</td>";
            }
            echo '</tr>';
        }

        echo '</table>';

        // Close the CSV file
        fclose($handle);
    }

    echo '</div>'; // End of container
?>

