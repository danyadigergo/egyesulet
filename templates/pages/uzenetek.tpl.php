<table>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "uzenetek";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, felado, email, message FROM uzenet ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Üzenet: " . $row["felado"]. ": " . $row["message"]. "<br>";
                }
            } else {
            echo "0 results";
        }
        $conn->close();
    ?>
</table>