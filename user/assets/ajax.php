<?php
require_once("db.php");

if(isset($_POST['act'])) {
    switch ($_POST['act']) {
        case 'getJenisBarang':
            echo json_encode(['data' => 'kontol']);
            break;

        default:
            echo json_encode(['data'] => 'No Data!');
            break;
    }
}

?>
