<?php    
    require_once dirname(__FILE__) . '/dbhandler.php';
    require_once dirname(__FILE__) . '/sightingRecord.php';
	
	$db = new DbHandler();
	$sightingRecord = new SightingRecord();
	
	isset($_GET['DateTime']) ? $sightingRecord->setDateTime(urldecode($_GET['DateTime']) : die('Error: Missing Parameter');
	isset($_GET['City']) ? $sightingRecord->setCity(urldecode($_GET['City']) : die('Error: Missing Parameter');
	isset($_GET['State']) ? $sightingRecord->setState(urldecode($_GET['State']) : die('Error: Missing Parameter');
	isset($_GET['Location']) ? $sightingRecord->setLocation(urldecode($_GET['Location']) : die('Error: Missing Parameter');
	isset($_GET['Longitude']) ? $sightingRecord->setLongitude(urldecode($_GET['Longitude']) : die('Error: Missing Parameter');
	isset($_GET['Latitude']) ? $sightingRecord->setLatitude(urldecode($_GET['Latitude']) : die('Error: Missing Parameter');
	isset($_GET['Summary']) ? $sightingRecord->setSummary(urldecode($_GET['Summary']) : die('Error: Missing Parameter');
	isset($_GET['Posted']) ? $sightingRecord->setPosted(urldecode($_GET['Posted']) : die('Error: Missing Parameter');
	isset($_GET['Duration']) ? $sightingRecord->setDuration(urldecode($_GET['Duration']) : die('Error: Missing Parameter');
	isset($_GET['Shape']) ? $sightingRecord->setShape(urldecode($_GET['Shape']) : die('Error: Missing Parameter');
	
	$db->insertSightingRecord($sightingRecord);
	
?>