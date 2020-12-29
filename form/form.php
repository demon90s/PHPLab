<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
Name: <input type="text" name="name"><br>
E-mail: <input type="text", name="email"><br>
Website: <input type="text", name="website"><br>
Comment: <textarea name="comment" rows="5", cols="40"></textarea><br>

Gender: 
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">male
<br>

<input type="submit">

</form>

<?php
$name = "";
$email = "";
$gender = "";
$comment = "";
$website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $website = test_input($_POST["website"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "your input:<br>";
echo "name: " . $name . "<br>";
echo "email: " . $email . "<br>";
echo "gender: " . $gender . "<br>";
echo "comment: " . $comment . "<br>";
echo "website: " . $website . "<br>";
?>