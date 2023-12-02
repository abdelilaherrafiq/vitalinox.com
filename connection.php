
<?php 
    $servername = "localhost";

    switch($_SERVER['HTTP_HOST']){
        //this case part is modified, shouldnt matter i think
        case "my website's link in 000webhost":
        $username = "lorem";
        $password = "lorem";
        $database = "lorem";
        break;

        //this default part is not modified
        default:
        $username = "root";
        $password = "";
        $database = "cart_db";
    }
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

?>