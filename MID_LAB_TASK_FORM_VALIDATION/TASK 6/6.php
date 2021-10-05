<?php
$Blood_Group = "";
$blood_group_error = "";
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    if (empty($_POST["bloodgroup"])) {
        $blood_group_error = "One needs to be Selected";
    } else {
        $Blood_Group = test_input($_POST["bloodgroup"]);
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
    <title>BLOOD GROUP</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <div>
                <?php if ($blood_group_error == "") {
                    echo $Blood_Group;
                }
                ?>
                <fieldset>
                    <legend><label>BLOOD GROUP</label></legend>

                    <select name="bloodgroup">
                        <option disabled selected value> Select An Option </option>
                        <option value="A Positive">A+</option>
                        <option value="A Negative">A-</option>
                        <option value="B Positive">B+</option>
                        <option value="B Negative">B-</option>
                        <option value="AB Positive">AB+</option>
                        <option value="AB Negative">AB-</option>
                        <option value="O Positive">O+</option>
                        <option value="O Negative">O-</option>
                    </select>
                        <?php
                        if ($blood_group_error != "") {
                            echo "* - ";
                            echo $blood_group_error;
                        }
                        ?>
                        <input type="submit" value="Submit">
                </fieldset>
            </div>
    </form>
</body>
</html>
