<?php
session_start();

$users = filter_input(INPUT_POST, "users", FILTER_SANITIZE_STRING);
$settings = $_SESSION["settings"];
$number = $_SESSION["number"];
$groups = array();

$_SESSION["users"]=$users;
$tempArray=array();
$tabUsers=explode(";", $users);
echo "<pre>";
if(count($tabUsers) > $number){
    if($settings="groups"){
            
        $nbUser = floor(count($tabUsers)/$number);
        $userSupp = count($tabUsers) % $number;
                
        for($i=0;$i<$number;$i++){
            
            $groups[$i]=array();
            
            for($j=0;$j<$nbUser;$j++){
                
                $rnd = rand(0, count($tabUsers)-1);
                echo $tabUsers[$rnd]."<br/>";
                array_push($groups[$i], $tabUsers[$rnd]);
                
                unset($tabUsers[$rnd]);
                $tempArray=array();
                foreach($tabUsers as $value){
                    array_push($tempArray,$value );
                }
                $tabUsers=$tempArray;
                var_dump($tempArray);
                echo "<br/>";
            }
        }
        
        var_dump($groups);
    }else{
        
    }
}else{
    header("Location: addUser.php?error=number");
}
