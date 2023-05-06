<?php

if (isset($_GET['number'])) {

    $input = $_GET['number'];
}


if (file_exists('data/projektkontakte.json')) {
    $filename = 'data/projektkontakte.json';
    $data = file_get_contents($filename);

    $contacts = json_decode($data);

}
?>

<h1>Detailanzeige</h1>

<form>
    <label for="lname">Nachname:</label>
    <input type="text" id="lname" name="nachname" readonly="readonly" placeholder="Texteingabe"
           value="<?php echo (isset($input)) ? $contacts[$input]->nachname : false; ?>"><br><br>
    <label for="fname">Vorname:</label>
    <input type="text" id="fname" name="vorname" readonly="readonly" placeholder="Texteingabe"
           value="<?php echo (isset($input)) ? $contacts[$input]->vorname : false; ?>"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" readonly="readonly" placeholder="Eingabe einer E-Mailadresse"
           value="<?php echo (isset($input)) ? $contacts[$input]->email : false; ?>"><br><br>
    <label for="tel">Telefonnummer:</label>
    <input type="tel" id="tel" name="telefon" readonly="readonly" placeholder="Eingabe v. Ortsvorwahl und Anschluss"
           value="<?php echo (isset($input)) ? $contacts[$input]->telefon : false; ?>"><br><br>
</form>

<button onclick='loadView("contact_list.php")'>Zurück zur Listenansicht</button>

