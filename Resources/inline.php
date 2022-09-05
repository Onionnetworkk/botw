<?php
# SB
$sql = "SELECT status FROM gateway WHERE gatecmd='sb'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("testt.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $sbstatus = anicap($final2, '"status":"','"');
    mysqli_close(mysqlcon());
    if($sbstatus == "ON"){
        $sbtick = "✅";
    }elseif($sbstatus =="OFF"){
        $sbtick = "❌";
    }


#ch
$sql = "SELECT status FROM gateway WHERE gatecmd='ch'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("testt.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $chstatus = anicap($final2, '"status":"','"');
    mysqli_close(mysqlcon());
    if($chstatus == "ON"){
        $chtick = "✅";
    }elseif($chstatus =="OFF"){
        $chtick = "❌";
    }
// sh
    $sql = "SELECT status FROM gateway WHERE gatecmd='sh'";
    $result = mysqli_query(mysqlcon(), $sql);
    
    $json_array = [];
    
    
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    
    $final2 = json_encode($json_array);
    
    
    $file = fopen("testt.txt","w");
    echo fwrite($file,$message_id);
    fclose($file);
    
    $shstatus = anicap($final2, '"status":"','"');
    mysqli_close(mysqlcon());
    if($shstatus == "ON"){
        $shtick = "✅";
    }elseif($shstatus =="OFF"){
        $shtick = "❌";
    }

    # 