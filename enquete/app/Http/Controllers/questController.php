<?php
$fname = $_POST['fname'];
echo $fname . '<br>';

$lname = $_POST['lname'];
echo $lname . '<br>';
?>

<?php
$schoolstarttime = $_POST['schoolstarttime'];
echo $schoolstarttime . '<br>';
?>

<?php
$opinion1 = $_POST['opinion1'];
echo $opinion1 . '<br>';

$opinion2 = $_POST['opinion2'];
echo $opinion2 . '<br>';

$opinion3 = $_POST['opinion3'];
echo $opinion3 . '<br>';
?>

<?php
$subject_web = $_POST['subject_web'];
echo $subject_web . '<br>';
?>

<?php
$subject1 = $_POST['subject1'];
echo $subject1 . '<br>';

$subject2 = $_POST['subject2'];
echo $subject2 . '<br>';

$subject3 = $_POST['subject3'];
echo $subject3 . '<br>';
?>

<?php
$rating = $_POST['rating'];
echo $rating . '<br>';
?>

<?php
$major = $_POST['major'];
echo $major . '<br>';
?>

<?php
$quantity = $_POST['quantity'];
echo $quantity . '<br>';
?>

<?php
file_put_contents(
    '../app/Http/Controllers/questionaire.txt',
    $fname . "," . $lname . "," . $schoolstarttime . "," . $opinion1 . "," . $opinion2 . "," . $opinion3 . "," . $subject_web . "," . $subject1 . "," . $subject2 . "," . $subject3 . "," . $rating . "," . $major . "," . $quantity . "," . PHP_EOL,
    FILE_APPEND
);

$msg = "Je formulier is gestuurd!!!!!";
?>
