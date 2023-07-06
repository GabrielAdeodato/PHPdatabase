<?php
echo "<h1>TRABALHO REDHAT OPENSHIFT</h1> ";
echo "<br><hr>";
echo "<h2>Nomes cadastrados no Banco de Dados:</h2>";
$conn = new mysqli("mysql", "admsql", "senhasql", "projetodb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT nome FROM tb_pessoas");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$result = $conn->query("SELECT ocupacao FROM tb_pessoas");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["nome"] . "</h3>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
