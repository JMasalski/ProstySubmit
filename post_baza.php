<?php
    echo "JESTEM";
    $link = new mysqli('localhost', 'root', '','dane');
    $sql = "SELECT nazwisko , imie , data FROM dane";
    $dane = $link->query($sql);
    echo <<<EOT
        <style>
            th,td{
            border: 1px solid black;
            }
            table{
            border-collapse: collapse;
            }  
        </style>
        <table>
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Data</th>
            </tr>
EOT;
    
    while($rek = $dane->fetch_object()){
        echo "<tr><td>$rek->nazwisko</td><td>$rek->imie</td><td>$rek->data</td></tr>";
    }
    echo "</table>";
    $link->close();

?>