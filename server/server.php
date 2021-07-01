<?php
    require __DIR__ . '/../partials/database/database.php';

    header('Content-Type: application/json');

    echo json_encode($discs);