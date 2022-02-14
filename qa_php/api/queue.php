<?php

    $data = DB::query("SELECT * FROM QA_Player WHERE INQUEUE=1", array());
    if($data[1] != null){
        DB::query("INSERT INTO QA_Session (STARTTIME, GAMEMODEID, ROUNDS) VALUES (:starttime, :gamemodeid, :rounds)" array(':starttime' => date('d-m-Y'),':gamemodeid' => 2,':rounds' => 2));
        $session = DB::query("SELECT * FROM QA_Session ORDER BY SESSIONID DESC WHERE ROWNUM=1"), array());
        foreach($data as $player){
            DB::query("UPDATE QA_Player SET INQUEUE=0, INGAME=1 WHERE PLAYERID=:playerid", array(':playerid' => $player['PLAYERID']));
        }
    }
?>