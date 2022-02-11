<?php
    $tableName = 'QA_Player';

    $data = DB::query("SELECT USERNAME, POINTS FROM $tableName ORDER BY POINTS DESC");
    echo json_encode($data);
?>