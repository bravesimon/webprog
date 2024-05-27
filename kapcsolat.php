<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        <?php
            $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
            if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
            {
                exit("Hibás email: ".$_POST['email']);
            }

            if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
            {
                exit("Hibás szöveg: ".$_POST['szoveg']);
            }

            echo "Kapott értékek: "."<br>";
            echo "A megadott email cimmel: ".$_POST['email']."<br>"; 
            echo "Begepelt uzenete: ".$_POST['szoveg']."<br>";
            echo "Elkuldve a webhely szamara. Bezarhatja az abalakot vagy a vissza gommbal visszaterhet.";
        ?>

        <br>
        <form action="https://localhost/webprog/?oldal=kapcsolat">
            <input type="submit" value="Vissza a fo oldalra." />
        </form>
        <br>
	</body>
</html>


<?php session_start(); ?>

<?php
try 
{
    $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    
    $sqlSelect = "select id from uzenetek where email = :email";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute(array(':email' => $_POST['email']));

    if ( $row = $sth->fetch(PDO::FETCH_ASSOC)) 
    {  
        echo "Mar elkuldte az uzenetet, kerem varja meg a valaszt ra.";
    }
    else
    {
        $login_nev = isset($_SESSION['login']) ? $_SESSION['login'] : "vendeg";    
        $datum = date('Y-m-d H:i:s');     

        $sqlInsert = "insert into uzenetek(id, email, uzenet, written_date, nev)
                                    values(0, :emaile, :uzenete, :writtendate, :neve)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array(':emaile' => $_POST['email'],
                            ':uzenete' => $_POST['szoveg'], 
                            ':writtendate' => $datum,
                            ':neve' => $login_nev ));
    }
}
catch (PDOException $e) 
{
    echo "Hiba: ".$e->getMessage();
}   
?>