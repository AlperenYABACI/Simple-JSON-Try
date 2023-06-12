<style>
    table tr td {padding : 5px 10px ; border : 1px solid gray}
    table tr td img { width: 50px}
</style>

<?php
    $jsonVeri = file_get_contents("https://finans.truncgil.com/today.json");
    $veri = json_decode($jsonVeri);
    foreach($veri as $vakit){
        echo $vakit -> Aksam."<br/>";
    }

    echo $veri["ABD DOLARI"]["Satış"]

?>
<table cellspacing = "0">
    <tr>
        <td>Tarih</td>
        <td>İmsak</td>
        <td>Güneş</td>
        <td>Öğle</td>
        <td>İkindi</td>
        <td>Akşam</td>
        <td>Yatsı</td>
        <td>Ayin Sekli</td>
    </tr>
    <?php
        foreach($veri as $vakit){
            echo $vakit -> Aksam."<br/>";
        }
    ?>
    <tr>
        <td><?=$vakit ->MiladiTarihKisa ?></td>
        <td><?=$vakit ->Imsak ?></td>
        <td><?=$vakit ->Gunes ?></td>
        <td><?=$vakit ->Ogle ?></td>
        <td><?=$vakit ->Ikindi ?></td>
        <td><?=$vakit ->Aksam ?></td>
        <td><?=$vakit ->Yatsi ?></td>
        <td>
            <img src ="<?=$vakit ->AyinSekliURL ?>" /> 
        </td>
    </tr>
</table>