<?php
    $tableName = 'QA_Player';

    $data = DB::query("SELECT USERNAME, POINTS FROM $tableName ORDER BY POINTS");
    echo json_encode($data);
?>