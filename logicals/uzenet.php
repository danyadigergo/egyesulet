<?php
if(isset($_POST['felado']) && isset($_POST['email']) && isset($_POST['message'])) {
    try
    {
        $dbh = new PDO('mysql:host=localhost;dbname=uzenetek', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlInsert = "insert into uzenet(id, felado, email, message)
                    values(0, :felado, :email, :message)";
        $stmt = $dbh->prepare($sqlInsert); 
        $stmt->execute(array(':felado' => $_POST['felado'], ':email' => $_POST['email'],
                             ':message' => $_POST['message']));
        if($count = $stmt->rowCount()) {
            $newid = $dbh->lastInsertId();
            $uzenet = "Az üzenet elküldése sikerült.<br>Az üzenet: {$_POST['message']}";                     
            $ujra = false;
        }
        else {
            $uzenet = "Az üzenet elküldése sikertelen volt.";
            $ujra = true;
        }
        echo $uzenet;
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
        echo $uzenet;
    }      
}
?>