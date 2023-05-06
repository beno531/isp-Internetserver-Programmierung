<?php

if (file_exists('data/projektkontakte.json')) {
    $filename = 'data/projektkontakte.json';
    $data = file_get_contents($filename);

    $contacts = json_decode($data);
}

?>

<h1>Liste aller Projektkontakte</h1>

<ul class="contact-list">
    <button class="add-button" onclick="loadView('contact_form.php', 'state=POST')">+</button>
    <?php


    for ($id = 0; $id <= count($contacts) - 1; $id++) {
        echo "<div>" . "<li onclick='loadView(\"contact_details.php\",\"number=$id\")'>" . $contacts[$id]->nachname . ", " . $contacts[$id]->vorname . "</li>" . "<button class='edit-button' onclick='loadView(\"contact_form.php\", \"id=$id\")'>Ändern</button>" . "<button class='delete-button' onclick='deleteContact($id)'>Löschen</button>" . "</div>";
    }

    ?>
</ul>
