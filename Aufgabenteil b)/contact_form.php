<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projektkontakt</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <nav>
    <?php echo "
            <a href='index.php'>Hauptseite</a> 
            <a href='contact_form.php'>Projektkontakt</a> 
        ";?>
    </nav>

    <main>


    <h1>Projektkontakt</h1>
    
    <form action="" method="get">
        <label for="lname">Nachname:</label>
        <input type="text" id="lname" name="nachname"><br><br>
        <label for="fname">Vorname:</label>
        <input type="text" id="fname" name="vorname" ><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>
        <label for="tel">Telefonnummer:</label>
        <input type="tel" id="tel" name="telefon" ><br><br>
        <input type="submit" value="Submit">
    </form>


    </main>
    <footer>
        copyright Benito Ernst
    </footer>
    
</body>
</html>