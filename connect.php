
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $conn = new mysqli('localhost','root','','test1');
    if($conn->connect_error){
        die('connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, email, mobile, username, password)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $name, $email, $mobile, $username, $password);
        $stmt->execute();
        echo "registration successfull";
        $stmt->close();
        $conn->close();
    }


?>
