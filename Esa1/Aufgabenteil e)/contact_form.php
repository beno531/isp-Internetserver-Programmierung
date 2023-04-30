<html lang="en">
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
           <a href='num_form.php'>Zahlauswahl</a> 
        ";?>
    </nav>

    <main>


    <?php 

    if(isset($_GET['number'])){

        $input = $_GET['number'];
        $input = $input - 1;
    }



    if(file_exists('data/projektkontakte.json'))
    {
        $filename = 'data/projektkontakte.json';
        $data = file_get_contents($filename);
        
        $contacts = json_decode($data); 

        $message = "<h4 class='text-success'>JSON file successfully loaded</h3>";
    }else{
        $message = "<h4 class='text-danger'>JSON file not found</h3>";
    }

    echo $message;

    ?>

    <h1>Projektkontakt</h1>
    
    <form action="num_form.php" method="get">
        <label for="lname">Nachname:</label>
        <input type="text" id="lname" name="nachname" placeholder="Texteingabe" value="<?php echo (isset($input)) ? $contacts[$input]->nachname : false; ?>"><br><br>
        <label for="fname">Vorname:</label>
        <input type="text" id="fname" name="vorname" placeholder="Texteingabe" value="<?php echo (isset($input)) ? $contacts[$input]->vorname : false; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Eingabe einer E-Mailadresse" value="<?php echo (isset($input)) ? $contacts[$input]->email : false; ?>"><br><br>
        <label for="tel">Telefonnummer:</label>
        <input type="tel" id="tel" name="telefon" placeholder="Eingabe v. Ortsvorwahl und Anschluss" value="<?php echo (isset($input)) ? $contacts[$input]->telefon : false; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>

    
    

    </main>
    <footer>
        copyright Benito Ernst
    </footer>

    
</body>
</html>