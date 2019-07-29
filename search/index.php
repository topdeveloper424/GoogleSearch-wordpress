<?php
    $query = filter_input(INPUT_GET, "query");
    if($query != NULL && trim($query)!= ""){
        $command = 'python test.py';
        var_dump($command);
        $res = exec($command);
        var_dump($res);
        $yourURL="http://localhost/google-tree/html/".$res;
//        echo ("<script>location.href='$yourURL'</script>");

    }

?>
