<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Num Input</title>
</head>
<body>

    <nav>
        <?php echo "
            <a href='index.php'>Index</a> 
            <a href='contact_form.php'>Form</a> 
            <a href='num_form.php'>Num</a> 
        ";?>
    </nav>

    <main>

    
    <form action="contact_form.php" method="get">
        <label for="number">Nummer:</label>
        <input type="number" id="number" name="number"><br><br>
        <input type="submit" value="Submit">
    </form>

    
    

    </main>
    <footer>
        copyright Benito Ernst
    </footer>
    
</body>
</html>