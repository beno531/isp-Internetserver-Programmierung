<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Input</title>
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


    <?php 

    $input = $_GET['number']; 


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

    $contacts = [$contact1, $contact2, $contact3, $contact4, $contact5];

    ?>

    
    <form action="" method="post">
        <label for="fname">Vorname:</label>
        <input type="text" id="fname" name="vorname" value="<?php echo $contacts[$input]->vorname; ?>"><br><br>
        <label for="lname">Nachname:</label>
        <input type="text" id="lname" name="nachname" value="<?php echo $contacts[$input]->nachname; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $contacts[$input]->email; ?>"><br><br>
        <label for="tel">Telefonnummer:</label>
        <input type="tel" id="tel" name="telefon" value="<?php echo $contacts[$input]->telefon; ?>"><br><br>
        <input type="submit" value="Submit">
    </form>

    
    

    </main>
    <footer>
        copyright Benito Ernst
    </footer>
    
</body>
</html>