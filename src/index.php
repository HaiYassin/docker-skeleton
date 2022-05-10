<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//    $url = 'https://velib-metropole-opendata.smoove.pro/opendata/Velib_Metropole/system_information.json';

    $urlStationsStatus = 'https://velib-metropole-opendata.smoove.pro/opendata/Velib_Metropole/station_status.json';
    $urlStationsInfo = 'https://velib-metropole-opendata.smoove.pro/opendata/Velib_Metropole/station_information.json';
    $data = file_get_contents($urlStationsStatus);
    
    var_dump(json_decode($data));

    // echo phpinfo();
?>

</body>
</html>
