<?php
//Model
function processData(){
    $data['title'] = 'Brad Company';
    $data['who'] = 'Brad';
    return $data;
}

//call view
function loadView($viewFile, $data){
    $query = http_build_query(array("data" => $data));
    echo file_get_contents("http://localhost/test/views/{$viewFile}.php?{$query}");
}


$data = processData();
loadView('view2',$data);