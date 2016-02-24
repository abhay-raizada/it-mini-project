<?php
if (isset($_POST["register"])) {
    $c_image = $_FILES["c_image"]["name"];
    $c_image_tmp = $_FILES["c_image"]["tmp_name"];
    echo $c_image_tmp;
    move_uploaded_file($c_image_tmp, "$c_image");
}
?>

$sql = "UPDATE users_registered SET first_name='$first_name',last_name='$last_name',email='$email',phone_number='$phone',roll_no='$roll',dob='$dob',dept='$dept',gender='$gender',hobby='$hobby',password='$p_hash' WHERE id='$req_id';";


<form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="c_image" required>
    <input type="submit" name="register" value="Create Account">
</form>