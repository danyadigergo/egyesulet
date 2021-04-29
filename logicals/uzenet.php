<?php
if(isset($_POST['felado']) && isset($_POST['email']) && isset($_POST['message'])) {
    try
    {
        $dbh = new PDO('mysql:host=localhost;dbname=uzenetek', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlInsert = "insert into uzenetek(id, felado, email, message)
                    values(0, :felado, :email, :message)";
        $stmt = $dbh->prepare($sqlInsert); 
        $stmt->execute(array(':felado' => $_POST['felado'], ':email' => $_POST['email'],
                             ':message' => $_POST['message'])); 
        if($count = $stmt->rowCount()) {
            $newid = $dbh->lastInsertId();
            $uzenet = "Az üzenet elküldése sikeres.<br>Azonosítója: {$newid}";                     
            $ujra = false;
        }
        else {
            $uzenet = "Az üzenet elküldése nem sikerült.";
            $ujra = true;
        }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
?>