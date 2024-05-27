<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlSelect = "SELECT * FROM uzenetek ORDER BY written_date DESC;";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        echo "Hiba: ".$e->getMessage();
    }      
?>


<?php if(isset($rows)) { ?>

    <table>
            <tr>
                <th>E-mail</th>
                <th>Uzenet</th>
                <th>Kuldes ideje</th>
                <th>Nev</th>
            </tr>

        <?php if($rows) {  
        foreach($rows as $row) { 
            echo "<tr>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["uzenet"]."</td>";
            echo "<td>".$row["written_date"]."</td>";
            echo "<td>".$row["nev"]."</td>";
            echo "</tr>";
        } ?>

    </table>
        
    <?php } else { ?>
        <h1>Nem sikerült lekerni az adatokat!</h1>
    <?php } ?>
<?php } ?>

