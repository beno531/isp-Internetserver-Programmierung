<?php

if (file_exists('data/projektkontakte.json')) {
    $filename = 'data/projektkontakte.json';
    $data = file_get_contents($filename);

    $contacts = json_decode($data);
}

?>

<h1>Liste aller Projektkontakte</h1>

<ul class="contact-list">
    <?php

    for ($id = 0; $id <= count($contacts) - 1; $id++) {
        echo "<li onclick='viewDetails($id)'>" . $contacts[$id]->nachname . ", " . $contacts[$id]->vorname . "</li>";
    }

    ?>
</ul>
