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


    <?php 

    if(isset($_GET['number'])){

        $input = $_GET['number'];

    }

    class Contact{
        public $vorname;
        public $nachname;
        public $email;
        public $telefon;

        public function __construct(string $vorname, string $nachname, string $email, string $telefon) {
            $this->vorname = $vorname;
            $this->nachname = $nachname;
            $this->email = $email;
            $this->telefon = $telefon;
        }
    }

    $contact1 = new Contact("Max1", "Mustermann1", "test1@mail.com", "111111111");

    $contacts = [1 => $contact1];

    ?>

    <h1>Projektkontakt</h1>
    
    <form action="" method="get">
        <label for="lname">Nachname:</label>
        <input type="text" id="lname" name="nachname" placeholder="Texteingabe" value="<?php echo (isset($input)) ? $contacts[$input]->nachname : false; ?>"><br><br>
        <label for="fname">Vorname:</label>
        <input type="text" id="fname" name="vorname" placeholder="Texteingabe" value="<?php echo (isset($input)) ? $contacts[$input]->vorname : false; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Eingabe einer E-Mailadresse" value="<?php echo (isset($input)) ? $contacts[$input]->email : false; ?>"><br><br>
        <label for="tel">Telefonnummer:</label>
        <input type="tel" id="tel" name="telefon" placeholder="Eingabe v. Ortsvorwahl und Anschluss" value="<?php echo (isset($input)) ? $contacts[$input]->telefon : false; ?>"><br><br>
        <input type="hidden" name="number" value="1">
        <input type="submit" value="Submit">
    </form>



    </main>
    <footer>
        copyright Benito Ernst
    </footer>
    
</body>
</html>