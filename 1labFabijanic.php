<?php
	echo 'zadatak 1';
	echo "</br>";
	
	$x = 5.7;
	if(is_int($x))
	{
		echo $x;
	}
	else 
	{
		$x = (int)$x;
		echo $x;
	}
	echo "</br>";
	
	echo 'zadatak 2';
	echo "</br>";
	
	$x = 4;
	if($x % 3 == 0)
	{
		echo $x;
	}
	else 
	{
	while($x % 3 != 0)
	{
		$x++;	
	}
	echo $x;
	}
	echo "</br>";
	
	echo 'zadatak 3';
	echo "</br>";
	
	$x = rand(1, 20);
	while($x != 10)
	{				
		$x = rand(1, 20);
		echo($x);
		echo "</br>";
	}
	echo "</br>";
	
	echo 'zadatak 4';
	echo "</br>";
		
	$brojevi = [];
	for ($i = 1; $i <= 10; $i++)
	{
		echo "#";
		array_push($brojevi, $i);
		foreach($brojevi as $broj)
		{
			echo $broj;
			echo " ";
		}
		echo "</br>";
	}
	echo "</br>";
	
	echo 'zadatak 5';
	echo "</br>";
	
	function Palindrome($string)
	{
		if($string == strrev($string))
			return "string $string je palidnroman";
		else
			return "string $string nije palidnroman";
	}
	
	echo Palindrome('madam')."\n";
	
	echo "</br>";
	
	echo 'zadatak 6';
	echo "</br>";
	
	$predmeti = array('Mrežno programiranje', 'Integracija računala i telefonije', 'Operacijski sustavi', 'Web programiranje na strani poslužitelja');
	foreach($predmeti as $predmet)
	{
		echo $predmet;
		echo " ";
		echo strlen($predmet);
		echo "</br>";
	}
	
	echo "</br>";
	
	echo 'zadatak 7';
	echo "</br>";
	
	function Circular($list1, $list2)
	{
		sort($list1);
		sort($list2);
		if(count($list1) != ($list2))
		{
			return "liste nisu cirkularno identicne";
		}
		
		$string1 = join(" ", $list1);
		$string2 = join(" ", $list2);
		if (strpos($string1, $string2) != false)
		{
			return "liste su cirukalrno identicne";
		}	
	}
	
	$list1 = array(1, 2, 3, 4, 5);
	$list2 = array(3, 4, 5, 1, 2);
	
	echo Circular($list1, $list2);
	
	echo "</br>";
	
	echo 'zadatak 8';
	echo "</br>";
	$a = Array( Array(1,2),Array(4,5));
	$b = Array( Array(7,5), Array(3,2));

	$r=count($a);
	$c=count($b[0]);
	$p=count($b);
	if(count($a[0]) != $p){
    echo "Nije moguće pomnožiti te matrice";
    exit(0);
	}
	$result=array();
	for ($i=0; $i < $r; $i++){
    for($j=0; $j < $c; $j++){
        $result[$i][$j] = 0;
        for($k=0; $k < $p; $k++){
            $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
        }
    }
	}
	print_r($result);
	
	echo "</br>";
	
	echo 'zadatak 9';
	echo "</br>";
	
	$matrix = array(3,3,[[0,0,1], [1,1,2] , [1,2,3] , [2,2,5]]);
	$matrix2 = array();
	for($i = 0; $i <$matrix[0]; $i++)
	{
		for($j = 0; $j <$matrix[1]; $j++)
		{
			$matrix2[$i][$j] = 0;
		}
	}
	
	for($i = 0; $i < count($matrix[2]); $i++)
	{
		$matrix2[$matrix[2][$i][0]][$matrix[2][$i][1]] = $matrix[2][$i][2]; 
	}
	for($i=0; $i<$matrix[0]; $i++)
	{
		for($j=0; $j<$matrix[1]; $j++)
		{
		echo $matrix2[$i][$j];	
		}
		echo "</br>";
	}
	

	echo "</br>";
	
	echo 'zadatak 10';
	echo "</br>";	
	
	function Fibonacci($n){
  
	global $fib;
	$fib = array();
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
		array_push($fib, $num3);
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
	return $fib;
	}
  
	
	$n = 10;
	Fibonacci($n);	
?>