<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotización Dolar</title>
</head>
<body>

 <td class="col-xs-4">
                                            <label>Dolar BNA:</label>

    <?php

$data_in = "http://ws.geeklab.com.ar/dolar/get-dolar-json.php";
$data_json = @file_get_contents($data_in);
if (strlen($data_json) > 0) {
    $data_out = json_decode($data_json, true);

    if (is_array($data_out)) {
        if (isset($data_out['libre'])) {
            echo "<input class='form-control' type='text' name='valordolar' id='valordolar' value=" . $data_out['libre'] . "  >";
        }

    }
}

?>
                                        </td>



</body>
</html>