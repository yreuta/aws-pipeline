<!DOCTYPE html>
<html>
<head>
    <title>Test Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
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
    $xmlData = simplexml_load_file("pytest_reports/pytest_report.xml") or die("Unable to load the XML.");

    if ($xmlData) {
        // Display test suite details
        echo '<h2>Test Suite Details</h2>';
        echo '<pre>';
        print_r($xmlData->testsuite->attributes());
        echo '</pre>';

        // Display test results in a table
        echo '<h2>Test Results</h2>';
        echo '<table>';
        echo '<tr><th>Test Name</th><th>Class Name</th><th>Time</th></tr>';
        
        foreach ($xmlData->testsuite->testcase as $test) {
            $testName = (string) $test['name'];
            $className = (string) $test['classname'];
            $testTime = (string) $test['time'];

            echo '<tr>';
            echo '<td>' . $testName . '</td>';
            echo '<td>' . $className . '</td>';
            echo '<td>' . $testTime . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    } else {
        echo 'No data available';
    }
?>

</body>
</html>