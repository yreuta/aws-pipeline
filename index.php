<!DOCTYPE html>
<html>
<head>
    <title>XML Data</title>
    <style>
        pre {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            padding: 10px;
            overflow-x: auto;
        }
    </style>
</head>
<body>

<?php
    $xmlData = simplexml_load_file("pytest_reports/pytest_report.xml") 
        or die("Unable to load the xml.");
    echo '<pre>';
    print_r($xmlData);
    echo '</pre>';
?>

</body>
</html>