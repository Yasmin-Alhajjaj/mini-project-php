
<?php
$conn = mysqli_connect('localhost', 'root', 'asd=fg44', 'users');
// this if to check if it connects successfully.
if(!$conn){
    echo 'error in connection: '. mysqli_connect_error();
}
echo "Connected successfully";

?>