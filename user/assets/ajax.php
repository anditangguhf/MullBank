<?php
require_once("db.php");

if(isset($_POST['act'])) {
    switch ($_POST['act']) {
        case 'getJenisBarang':
            echo json_encode(['data' => 'kontol']);
            break;

        case 'kritiksaran':
            echo json_encode(['data' => $_POST['textbox']]);
            break;

        default:
            echo json_encode(['data' => 'No Data!']);
            break;
    }
}

?>
