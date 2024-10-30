<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <style>
        fieldset:first-child {
            background-color: gray;
            width: 30%;
            float: left;
        }
    </style>
</head>
<body>

    <form action="get.php" method="get">
        <fieldset>
            <legend>Metoda GET</legend>
            <label for="imie">Imię </label>
            <input type="text" name="imie" id="imie"><br>
            <label for="nazwisko">Nazwisko 
                <input type="text" name="nazwisko" id="nazwisko">
            </label><br>
            <button type="submit" name="get">GET</button>
        </fieldset>
    </form>
    <form action="post.php" method="post">
        <fieldset>
            <legend>Metoda POST</legend>
            <label for="imie1">Imię </label>
            <input type="text" name="imie1" id="imie1"><br>
            <label for="nazwisko1">Nazwisko 
                <input type="text" name="nazwisko1" id="nazwisko1">
            </label><br>
            <button type="submit">POST</button>
        </fieldset>
    </form>
    <form action="post_baza.php" method="post">
        <fieldset>
            <legend>Metoda POST BAZA</legend>
            <button type="submit">POST-BAZA</button>
        </fieldset>
    </form>
</body>
</html>