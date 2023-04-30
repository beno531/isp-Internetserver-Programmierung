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
    $contact2 = new Contact("Max2", "Mustermann2", "test2@mail.com", "222222222");
    $contact3 = new Contact("Max3", "Mustermann3", "test3@mail.com", "333333333");
    $contact4 = new Contact("Max4", "Mustermann4", "test4@mail.com", "444444444");
    $contact5 = new Contact("Max5", "Mustermann5", "test5@mail.com", "555555555");

    $contacts = [1 => $contact1, 2 => $contact2, 3 => $contact3, 4 => $contact4, 5 => $contact5];

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