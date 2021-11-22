<?php

require 'functions.php';
require 'db.php';

$users = get_all("SELECT * FROM users"); ?>
<table>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
