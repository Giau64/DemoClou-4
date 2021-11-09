<?php 
    $conn = pg_connect('postgres://rsrrwstlqfpime:73e6230abee41e1178509266eddf3935f95e6ff5c24575d711abb29ad42a546e@ec2-23-23-181-251.compute-1.amazonaws.com:5432/dergm9smdg5qdk');
            or die("Can not connect database".pg_connect_errormessage());
?>