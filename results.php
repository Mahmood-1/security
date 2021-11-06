<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>

<body>
    <table>
        <tr>
            <td>
                IP
            </td>
            <td>
                URL
            </td>
            <td>
                Time
            </td>
        </tr>
        <?php
        $inp = file_get_contents('results.json');
        $tempArray = json_decode($inp);
        foreach ($tempArray as $result) {
            echo ('<tr>');
            foreach ($result as $key => $value) {
                if ($key == 'time') echo '<td>' . date('m/d/Y H:i:s', $value) . '</td>';
                else echo ('<td>' . $value . '</td>');
            }
            echo ('</tr>');
        }
        ?>
    </table>
</body>

</html>