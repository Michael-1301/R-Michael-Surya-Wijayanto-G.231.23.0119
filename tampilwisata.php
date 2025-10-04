<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/wisata/Wisata.php");
$data = json_decode($send, TRUE);

echo "<table border='1' cellspacing='10' cellpadding='8' style='border-collapse: collapse; font-size:30px;'>";

echo "
<tr style='background-color:#f2f2f2; font-weight:bold;'>
    <th>KOTA</th>
    <th>LANDMARK</th>
    <th>TARIF</th>
</tr>
";

foreach($data as $row){
    echo "
    <tr>
        <td>" . strtoupper($row['kota']) . "</td>
        <td>" . strtoupper($row['landmark']) . "</td>
        <td>" . strtoupper($row['tarif']) . "</td>
    </tr>
    ";
}

echo "</table>";
?>
