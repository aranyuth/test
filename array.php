<?php 
$a=array ("Beer","Bom","Wat", "hello");
$b=array_slice($a,1,2);
foreach ($b as $value)
{
   echo "print".$value."<br>\n";// แสดงออกมา Bom Wat 
}
?>