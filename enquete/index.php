<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Enquete</title>
</head>
<body>
    <div class="wrapper vragenbox">
        <form action="../app/Http/Controllers/questController.php" method="post">
            <label for="fname">Voornaam:</label><br>
            <input type="text" id="fname" name="fname"><br>

            <label for="lname">Achternaam:</label><br>
            <input type="text" id="lname" name="lname"><br>

            <p>Wanneer ben je met de opleiding begonnen?</p>
            <label for="schoolstarttime">Begonnen op:</label>
            <input type="date" id="schoolstarttime" name="schoolstarttime"><br>

            <p>Hoe vind je de opleiding tot nu toe?</p>
            <input type="checkbox" id="opinion1" name="opinions[]" value="LeukLeerzaam">
            <label for="opinion1">Leuk, erg leerzaam.</label><br>
            <input type="checkbox" id="opinion2" name="opinions[]" value="Oke">
            <label for="opinion2">Het is oke.</label><br>
            <input type="checkbox" id="opinion3" name="opinions[]" value="NietLeuk">
            <label for="opinion3">Niet heel leuk.</label><br>

            <h3>Als je de opleiding leuk vindt, klik op de knop!</h3>
            <input type="button" onclick="alert('Wat fijn om te horen! (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧')" value="Click Me!"><br>

            <p>Wat vind je van het vak 'WEB'?</p>
            <input type="radio" id="fun" name="subject_web" value="Leuk">
            <label for="fun">Leuk!</label><br>
            <input type="radio" id="medium" name="subject_web" value="Matig">
            <label for="medium">Matig</label><br>
            <input type="radio" id="dontLike" name="subject_web" value="NiksAan">
            <label for="dontLike">Vind ik niks aan</label><br>

            <p>Wat vind je het moeilijkste vak tot nu toe?</p>
            <input type="checkbox" id="subject1" name="subjects[]" value="WEB">
            <label for="subject1">WEB</label><br>
            <input type="checkbox" id="subject2" name="subjects[]" value="NATIVE">
            <label for="subject2">NATIVE</label><br>
            <input type="checkbox" id="subject3" name="subjects[]" value="PORPRA">
            <label for="subject3">POR/PRA</label><br>

            <p>Hoeveel sterren zou je deze opleiding geven?</p>
            <input type="radio" id="rating1" name="rating" value="een">
            <label for="rating1">1 ster</label><br>
            <input type="radio" id="rating2" name="rating" value="twee">
            <label for="rating2">2 sterren</label><br>
            <input type="radio" id="rating3" name="rating" value="drie">
            <label for="rating3">3 sterren</label><br>
            <input type="radio" id="rating4" name="rating" value="vier">
            <label for="rating4">4 sterren</label><br>
            <input type="radio" id="rating5" name="rating" value="vijf">
            <label for="rating5">5 sterren</label><br>

            <p>Is er wat aan de opleiding dat je anders zou doen? Of verbeteringen?</p>
            <input type="radio" id="yes" name="major" value="Yes">
            <label for="yes">Ja</label><br>
            <input type="radio" id="no" name="major" value="No">
            <label for="no">Nee</label><br>

            <h2>Zo ja, wat is het?</h2>
            <label for="critique">Wat er anders kan in de opleiding...</label><br>
            <input type="text" id="critique" name="critique"><br>

            <h4>Tussen de nummer 1 en 10, hoeveel moeite heb je nu met de opleiding?</h4>
            <label for="quantity">Ik heb zoveel moeite met de opleiding:</label>
            <input type="number" id="quantity" name="difficulty" min="1" max="10"><br>

            <input type="submit" value="Submit your contactform!">
        </form>
    </div>
</body>
</html>
