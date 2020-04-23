<?php 
    $seconds=date('U')-strtotime('2020-4-12 0:0:0');
    
    $cont_time['day']=strval(intval(intval($seconds)/60/60/24)).'天';
    $cont_time['hour']=strval(intval($seconds)/60/60%24).'时';
    $cont_time['min']=strval(intval(intval($seconds)/60%60)).'分';
    $cont_time['second']=strval(intval(intval($seconds)%60)).'秒';
    
    echo $cont_time['day'].$cont_time['hour'].$cont_time['min'].$cont_time['second'];
?>