<?

    $conn = new mysqli("127.0.0.1", "root", "123", "dbphp7");

    if($conn->connect_error)
    {
        echo "Error: " . $conn->connect_error;
    }

    $stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values(?, ?)");

    $stmt->bind_param("ss", $login, $pass);

    $login = "Nikolai";
    $pass = "abc";

    $stmt->execute();

    $login = "Fernfer";
    $pass = "@34!";

    $stmt->execute();

?>