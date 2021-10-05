<?php

$genderError = "";
$Gender = "";

if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    if (empty($_POST["gender"])) {
        $genderError = "Gender Required";
    } else {
        $Gender = test_input($_POST["gender"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<html>

<head>
    <title>Gender</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <?php if ($genderError == "") {
                echo $Gender;
            }
            ?>
            <fieldset >
                <legend>
                    <label">GENDER</label>
                </legend>
                <input type="radio" id="gender" name="gender" value="Male"> Male
                <input type="radio" id="gender" name="gender" value="Female"> Female
                <input type="radio" id="gender" name="gender" value="Other"> Other
                    <?php
                    if ($genderError != "") {
                        echo "* - ";
                        echo $genderError;
                    }
                    ?>
                    <input type="submit" value="Submit">
            </fieldset>
        </div>
    </form>

</body>

</html>
