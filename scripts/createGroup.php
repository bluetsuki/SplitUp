<?php
session_start();

$remake = filter_input(INPUT_GET, "remake", FILTER_SANITIZE_STRING);


if(!$remake){
    $users = filter_input(INPUT_POST, "users", FILTER_SANITIZE_STRING);
    $number = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);
    $settings = filter_input(INPUT_POST, "group", FILTER_SANITIZE_STRING);
    $_SESSION["users"]=$users;
}elseif($remake){
    $users=$_SESSION["users"];
}
if($number==''){
    $settings = $_SESSION["settings"];
    $number = $_SESSION["number"];
}else{
    $_SESSION["settings"] = $settings;
    $_SESSION["number"] = $number;
}
$groups = array();
$tempArray=array();
$tabUsers=explode(";", $users);

if(count($tabUsers) >= $number){
    if($settings=="groups"){
        $nbUser = floor(count($tabUsers)/$number);
        $userSupp = count($tabUsers) % $number;
                
        for($i=0;$i<$number;$i++){
            
            $groups[$i]=array();
            
            for($j=0;$j<$nbUser;$j++){
                
                $rnd = rand(0, count($tabUsers)-1);
                array_push($groups[$i], $tabUsers[$rnd]);
                
                unset($tabUsers[$rnd]);
                $tempArray=array();
                foreach($tabUsers as $value){
                    array_push($tempArray,$value );
                }
                $tabUsers=$tempArray;
            }
        }
        
        for($i=0;$i<$userSupp;$i++){                
            $rnd = rand(0, count($tabUsers)-1);
            array_push($groups[$i], $tabUsers[$rnd]);
            
            unset($tabUsers[$rnd]);
                $tempArray=array();
                foreach($tabUsers as $value){
                    array_push($tempArray,$value );
                }
                $tabUsers=$tempArray;
        }
        
    }elseif($settings=="memberspergroup"){
        $nbGroups = floor(count($tabUsers)/$number);
        $userSupp = count($tabUsers) % $number;
                
        for($i=0;$i<$nbGroups;$i++){
            
            $groups[$i]=array();
            
            for($j=0;$j<$number;$j++){
                
                $rnd = rand(0, count($tabUsers)-1);
                array_push($groups[$i], $tabUsers[$rnd]);
                
                unset($tabUsers[$rnd]);
                $tempArray=array();
                foreach($tabUsers as $value){
                    array_push($tempArray,$value );
                }
                $tabUsers=$tempArray;
            }
        }
        
        for($i=0;$i<$userSupp;$i++){  
            $rnd = rand(0, count($tabUsers)-1);
            if($i>=count($groups)){
            array_push($groups[$i-count($groups)], $tabUsers[$rnd]);    
            }else{
            array_push($groups[$i], $tabUsers[$rnd]);
            }
            
            unset($tabUsers[$rnd]);
                $tempArray=array();
                foreach($tabUsers as $value){
                    array_push($tempArray,$value );
                }
                $tabUsers=$tempArray;
        }
        
    }
    $_SESSION["groups"]=$groups;
    header("Location: ../groupResult.php");
}else{
    header("Location: addUser.php?error=number");
}
