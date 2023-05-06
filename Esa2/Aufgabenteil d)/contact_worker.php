<?php

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

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $id = $_POST['id'];
    $nachname = $_POST['nachname'];
    $vorname = $_POST['vorname'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];

    if (file_exists('data/projektkontakte.json')) {
        $filename = 'data/projektkontakte.json';

        $data = json_decode(file_get_contents($filename));

        $contacts = array();


        foreach ($data as $item) {
            $contact = new Contact($item->vorname, $item->nachname, $item->email, $item->telefon);
            $contacts[] = $contact;
        }

        $newContact = new Contact(
            $vorname,
            $nachname,
            $email,
            $telefon
        );


        if (empty($id)) {
            $contacts[] = $newContact;
        } else {
            $contacts[$id] = $newContact;
        }

        $newJsonString = json_encode($contacts, JSON_PRETTY_PRINT);
        $fp = fopen($filename, 'w');
        fwrite($fp, $newJsonString);
        fclose($fp);


        echo count($contacts) - 1;

    }
}



if ($_SERVER["REQUEST_METHOD"] === "DELETE") {

    $id = $_GET['id'];

    if (file_exists('data/projektkontakte.json')) {
        $filename = 'data/projektkontakte.json';

        $data = json_decode(file_get_contents($filename));

        $contacts = array();


        foreach ($data as $item) {
            $contact = new Contact($item->vorname, $item->nachname, $item->email, $item->telefon);
            $contacts[] = $contact;
        }

        unset($contacts[$id]);

        $newJsonString = json_encode($contacts, JSON_PRETTY_PRINT);
        $fp = fopen($filename, 'w');
        fwrite($fp, $newJsonString);
        fclose($fp);

    }

}





?>