
<!DOCTYPE html>
<html lang="en">

<?php 
$age_title="Submit Page";
include("../header.php")?>
<body>

<div class="container mt-5">
    <?php

    $servername = "10.72.1.14";
    $username = "group2";
    $dbpass = "6QOIHm";
    $dbname = "group2";

  //default success if error change color
  echo'<div class="alert alert-success" id="result"role="alert">';

    $conn = new mysqli($servername, $username, $dbpass, $dbname);
    if ($conn->connect_error) {
        $success = FALSE;
        die("Connection failed: " . $conn->connect_error);
    }

    $title_post = $_POST['title'];
    $description_post = $_POST['description'];
    $image_post = $_POST['file'];
    $price_post = $_POST['price'];

    $description_post = empty($description_post) ? "NULL" : "'$description_post'";
    $image_post = empty($image_post) ? "NULL" : "'$image_post'";
    $price_post = empty($price_post) ? "NULL" : $price_post;
    
    if (empty($title_post)) {
        $success = FALSE;
        print "Title should not be empty";
    } else {
        $sql = "INSERT INTO food(title,description,image,price) 
        VALUES ('$title_post',$description_post,$image_post,$price_post) ;";
        if ($conn->query($sql) === TRUE) {
            $success = TRUE;
            echo "New record created successfully";
        } else {
            $success = FALSE;
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    echo '</div>';

    if (!$success) {
        echo'<script>
        document.getElementById("result").className = " alert alert-danger"; 
        </script>';
    } 
    $conn->close(); 
    ?>
<br>
<a class ="btn btn-primary" href = "/maintenance">Maintenance Page</a>

</div>

</body>
</html>
