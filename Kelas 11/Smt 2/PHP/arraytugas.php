<?php
    $kelas = [
        ["id"=>"876","namasiswa" => "Arvano Muhammad","Kelas"=>"XI RPL 5", "nilaimat"=>65,"nilaibing"=>80,"nilaibind"=>75], 
        ["id"=>"877","namasiswa" => "Bella Putri","Kelas"=>"XI RPL 5", "nilaimat"=>89,"nilaibing"=>83,"nilaibind"=>79],
        ["id"=>"878","namasiswa" => "Cindy Eka","Kelas"=>"XI RPL 5", "nilaimat"=>77,"nilaibing"=>89,"nilaibind"=>91],
        ["id"=>"879","namasiswa" => "Kirana Dewi","Kelas"=>"XI RPL 5", "nilaimat"=>88,"nilaibing"=>80,"nilaibind"=>75],
        ["id"=>"880","namasiswa" => "Jamal Jung","Kelas"=>"XI RPL 5", "nilaimat"=>93,"nilaibing"=>97,"nilaibind"=>88],
        ["id"=>"881","namasiswa" => "Siti Ummah","Kelas"=>"XI RPL 5", "nilaimat"=>89,"nilaibing"=>91,"nilaibind"=>84],
    ];
    echo '<table border = "1">';
    echo '<tr bgcolor=\"#99FFFF"\>';
    echo '<th>NIS</th><th>Nama Siswa</th><th>Kelas</th><th>Nilai MAT</th><th>Nilai B.Inggris</th><th>Nilai B.Indo</th><th>Rata-rata</th>';
    echo '</tr>';
    foreach ($kelas as $key => $value){
        echo '<tr bgcolor=\"#EAE3D2"\>';
        echo '<td>'. $value['id'].'</td>';
        echo '<td>'. $value['namasiswa'].'</td>';
        echo '<td>'. $value['Kelas'].'</td>';
        echo '<td style=text-align:center;>'. $value['nilaimat'].'</td>';
        echo '<td style=text-align:center;>'. $value['nilaibing'].'</td>';
        echo '<td style=text-align:center;>'. $value['nilaibind'].'</td>';
        $jumlah = $value["nilaimat"]+$value["nilaibing"]+$value["nilaibind"];
        $rata = $jumlah/3;
        echo '<td>'. $rata.'</td>';
        echo '</tr>';
    };
    echo '</table>';
?>