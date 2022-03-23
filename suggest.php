<?php

$student=["MEGHASYAM BALABADRA","AMRUTHALAKSMI AMARA","KATIKALA RAKESH REDDY","GANGISETTY SAI PAVAN","PAVAN KUMAR BANDA","KANNEKANTI RAAJI","CHEEMALA RAHUL REDDY","annaya"];
$q=$_REQUEST['m'];
$suggestion="";
//Get Suggestions;
if($q!=="")
{
    // $q=strtolower($q);
    $len=strlen($q);
    foreach($student as $person)
    {
        // if(stristr($q,substr($person,0,$len)))
        if(stristr($person,$q))
        {
            if($suggestion==="")
            {
                $suggestion=$person;
            }
            else
            {
                $suggestion .=",$person";
            }
        }
    }
}
// echo $suggestion === "" ? "No Suggestions " : $suggestion ;
?>