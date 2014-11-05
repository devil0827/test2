<html>
<body>

<?php

// Use fopen function to open a file
$file = fopen("qq.txt", "r");

// Read the file line by line until the end
while (!feof($file)) 
{
	$value = fgets($file);
	
	$value_up=0;
	$value_up_sum=0;
	if(strrpos($value,"(") =="")
	{
		echo "Null"."<br/>";
	}
	else
	{
		for($p=1;$p<=12;$p++)
		{
			for($s=1;$s<=count(explode('|',$value));$s++)
			{	
				if( str_replace(')','',explode('(',explode('|',$value)[$s-1])[1])<= $p)
				{
					$value_up++;
				}
			}
			//echo "p=" .$p." ".$value_up." ";
			$value_up_sum += $value_up/$p;
			$value_up=0;
		}
		echo $value_up_sum/12 ."<br/>";
	}
	/*for($p=1;$p<=12;$p++)
	{
		for($s=1;$s<=count(explode('|',$value));$s++)
		{	
			if( str_replace(')','',explode('(',explode('|',$value)[$s-1])[1])<= $p)
			{
				$value_up++;
			}
		}
		//echo "p=" .$p." ".$value_up." ";
		$value_up_sum += $value_up/$p;
		$value_up=0;
	}
	echo $value_up_sum/12 ."<br/>";*/
}
//count(explode('|',$value))
//str_replace(')','',explode('(',explode('|',$value)[$i])[1])
// Close the file that no longer in use
fclose($file);

?>


</body>
</html>