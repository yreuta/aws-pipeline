<!DOCTYPE html>
<html>
<head>
    <title>Test Results</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
    $xmlData = simplexml_load_file("pytest_reports/pytest_report.xml") or die("Unable to load the XML.");

    if ($xmlData) {
        echo '<table>';
        echo '<tr><th>Test Name</th><th>Status</th></tr>';
        
        foreach ($xmlData->testcase as $test) {
            $testName = (string)$test['classname'] . '::' . (string)$test['name'];
            $testStatus = ($test->failure) ? 'Failed' : 'Passed';

            echo '<tr>';
            echo '<td>' . $testName . '</td>';
            echo '<td>' . $testStatus . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    } else {
        echo 'No data available';
    }
?>

</body>
</html>