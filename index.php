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

<h1>PHP work</h1>
<br>

<h3> This is my php work for the labwork we had to do today.</h3>

<br>


<p>Where would you like to say hello?</p>

<ol>
    <li><a href="http://phpmurray.azurewebsites.net/earth.php?planet=Earth">Earth</a></li>
    <li><a href="http://phpmurray.azurewebsites.net/earth.php?planet=Mars">Mars</a></li>
    <li><a href="http://phpmurray.azurewebsites.net/earth.php?planet=Uranus">Uranus</a></li>
</ol>

<h1 style="margin: auto">S.H.I.E.L.D</h1>

<br>
<div id="shield" style="float:left">

    <p>S.H.I.E.L.D is looking for <span style="text-decoration: line-through">nutters</span> Superheroes. Would you like to sign up?</p>

    <form action="heroes.php" method="post" STYLE="margin-left: 3%; margin-right: 3%;">

        <label>Forename: </label><input type="text" name="forename">

        <br>
        <br>

        <label>Surname: </label><input type="text" name="surname">

        <br>
        <br>

        <label>Superpower: </label> <select name="powers">

            <option value="Intelligence">Hyper-Intelligence</option>
            <option value="Strength">Super-Strength</option>
            <option value="Speed">Speed</option>
            <option value="Technology">Access to advanced technology</option>
            <option value="Otherworldy Being">Otherworldy being</option>
            <option value="Soldier">Skilled combatant/Former Special Forces</option>

        </select>

        <br>
        <br>

        <label>Gender: </label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option valiue="other">Other</option>
        </select>

        <br>
        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
    
</div>
<div id="task3" style="float:left">
<h4>database task</h4>

<br>

<a href="http://phpmurray.azurewebsites.net/superheroform.html">The task</a>

</div>

<?php

?>

</body>
</html>
