<html>
<head>
    <meta charset="utf-16">
    <meta name="test site">
    <title>test</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>

<H1>Superhero details</H1>

<?php

$forename = $_POST['forename'];
$surname = $_POST['surname'];
$superpowers = $_POST['powers'];
$gender = $_POST['gender'];


echo "<label>Forename:</label>". "<p>$forename</p>" ."<br> <label>Surname:</label>"."<p>$surname</p>"."<br><label>Superpower:</label>"."<p>$superpowers</p>"."<br><label>Gender:</label>"."<p>$gender</p>";
?>

</body>

</html>
