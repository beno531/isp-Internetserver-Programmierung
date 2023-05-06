<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
}

if (file_exists('data/projektkontakte.json')) {
    $filename = 'data/projektkontakte.json';
    $data = file_get_contents($filename);

    $contacts = json_decode($data);
}

?>

<h1>Projektkontakt</h1>

<form id="contactForm" onsubmit="saveContact();return false">
    <input type="hidden" id="lid" name="id" placeholder="" value="<?php echo (isset($id)) ? $id : false; ?>">
    <label for="lname">Nachname:</label>
    <input type="text" id="lname" name="nachname" placeholder="Texteingabe"
           value="<?php echo (isset($id)) ? $contacts[$id]->nachname : false; ?>" required><br><br>
    <label for="fname">Vorname:</label>
    <input type="text" id="fname" name="vorname" placeholder="Texteingabe"
           value="<?php echo (isset($id)) ? $contacts[$id]->vorname : false; ?>" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Eingabe einer E-Mailadresse"
           value="<?php echo (isset($id)) ? $contacts[$id]->email : false; ?>" required><br><br>
    <label for="tel">Telefonnummer:</label>
    <input type="tel" id="tel" name="telefon" placeholder="Eingabe v. Ortsvorwahl und Anschluss"
           value="<?php echo (isset($id)) ? $contacts[$id]->telefon : false; ?>" required><br><br>
    <input type="submit" value="Speichern">
    <input type="button" value="Abrechen" onclick="loadView('contact_list.php')">
</form>

