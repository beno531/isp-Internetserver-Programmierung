<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zahlauswahl</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <nav>
        <?php echo "
            <a href='index.php'>Hauptseite</a> 
            <a href='contact_form.php'>Projektkontakt</a> 
            <a href='num_form.php'>Zahlauswahl</a> 
        ";?>
    </nav>

    <main>

    <h1>Zahlauswahl</h1>

    <form name="zahlenauswahlForm" action="contact_form.php" method="get">
        <label for="number">Nummer:</label>
        <input type="number" id="number" name="number" min="1" max="5" required><br><br>
        <input type="submit" value="Submit">
    </form>

    

    </main>
    <footer>
        copyright Benito Ernst
    </footer>
    
</body>
</html>