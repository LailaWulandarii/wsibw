
<?php

$salaries = array( 
 "mohammad" => 2000, 
 "qadir" => 1000, 
 "zara" => 500
 );
echo "Salary of mohammad is ". $salaries['mohammad'] . "\n";
echo "Salary of qadir is ". $salaries['qadir']. "\n";
echo "Salary of zara is ". $salaries['zara']. "\n";

$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low";
echo "Salary of mohammad is ". $salaries['mohammad'] . "\n";
echo "Salary of qadir is ". $salaries['qadir']. "\n";
echo "Salary of zara is ". $salaries['zara']. "\n";
?> 