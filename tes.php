<?php
	require_once ('inc/config.php');
    require_once ('inc/helper.php');
    require_once ('inc/database.php');
    $a = nilaiRapor();
    foreach ($a as $b) {
    	$d=$b['id_mapel'];
    	$c[]= array_unique($d);
    }

    
    // foreach ($a as $b) {
   	
    // 	$c[]=array(
    // 		'id_mapel' => $b['id_mapel'],
    // 		'smt1' => ,
    // 		'smt2' => getRapor($b['id_mapel'],'2')['nilai'],
    // 		'smt3' => getRapor($b['id_mapel'],'3')['nilai'],
    // 		'smt4' => getRapor($b['id_mapel'],'4')['nilai'],
    // 		'smt5' => getRapor($b['id_mapel'],'5')['nilai'],

    // 	);
    // 	# code...
    // }
    var_dump($c);

 ?>