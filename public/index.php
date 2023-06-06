<?php
use App\Models\Stage;

try{

    $stages = Stage::all();
    return $stages;

}catch(\Exception $erro){
    
    return ['status' => 'erro', 'details' => $erro];

}