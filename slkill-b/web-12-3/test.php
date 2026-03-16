<?php include_once "api/db.php";


for($i=4;$i<=10;$i++){
    $data=[
        'name'=>"院線片".$i,
        'level'=>rand(1,4),
        'length'=>rand(90,150),
        'ondate'=>"2026-03-".sprintf("%02d",rand(10,14)),
        'publisher'=>"院線片{$i}發行商",
        'director'=>"院線片{$i}導演",
        'trailer'=>"03B".sprintf("%02d",$i)."v.mp4",
        'poster'=>"03B".sprintf("%02d",$i).".png",
        'sh'=>1,
        'rank'=>$Movie->max('rank')+1,
        'intro'=>"院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介院線片{$i}的劇情簡介"
    ];
    $Movie->save($data);
}