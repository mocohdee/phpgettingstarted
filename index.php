<?php
//all your code
//$myName="Diana Mocoh";

//echo $myName

//arrays
$students = array("Purity","Annet","Diana","Jamal","Mitchelle");
echo $students[4];
 
//associative array
$myMarks = array("Assements" => 25,
                 "CAT" => 15,
                 "Attendance" => 8,
                 "Projects" =>20,
                );
echo "My project Marks: " .$myMarks["Projects"];

//Multidimensional Arrays 
$webDevTechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend'  => array('PHP','Python','JS'),
    'framework'=> array('Laravel','Django','SpringBoot','Flutter'),
    'database' => array('MySQL','Firebase','PostgreSQL','Mongo DR'),
);
 echo $webDevTechnologies['frontend'][3];
 echo $webDevTechnologies['backend'][2];
 echo $webDevTechnologies['framework'][2];
 echo $webDevTechnologies['database'][0];


?>
