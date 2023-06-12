<style>
    table tr td {padding : 5px 10px ; border : 1px solid gray}
</style>

<?php
    $jsonVeri = file_get_contents("https://finans.truncgil.com/today.json");
    $veri = json_decode($jsonVeri,1);

    echo $veri["ABD DOLARI"]["Satış"]

?>

<table cellspacing = "0">
    <tr>
        <td>Döviz</td>
        <td>Döviz</td>
        <td>Döviz</td>
    </tr>
    <tr>
        <td>Dolar</td>
        <td><?=$veri["ABD DOLARI"]["Alış"]?></td>
        <td><?=$veri["ABD DOLARI"]["Satış"]?</td>
    </tr>
    <tr>
        <td>Dolar</td>
        <td><?=$veri["EURO"]["Alış"]?></td>
        <td><?=$veri["EURO"]["Satış"]?</td>   
    </tr>