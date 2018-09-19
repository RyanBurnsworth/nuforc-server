 <?php
 
	/**
	 * Class to handle database functions
	 */
	 
	 class DbHandler {
		 private $conn;
		 
		 function __construct() {
		     require_once dirname(__FILE__) . '/dbconnect.php';
			
		     $db = new DbConnect();
		     $this->conn = $db->connect();
		 }
		 
		 public function insertSightingRecord($sightingData) {
		     $dateTime = $sightingData->getDateTime();
		     $city = $sightingData->getCity();
		     $state = $sightingData->getState();
		     $location = $sightingData->getLocation();
		     $longitude = $sightingData->getLongitude();
		     $latitude = $sightingData->getLatitude();
		     $shape = $sightingData->getShape();
		     $duration = $sightingData->getDuration();
		     $summary = $sightingData->getSummary();
		     $posted = $sightingData->getPosted();
		    
          	     $stmt = $this->conn->prepare("INSERT INTO SightingRecords(DateTime, City, State, Location, Longitude, Latitude, Shape, Duration, Summary, Posted) values('$dateTime', '$city', '$state', '$location', '$longitude', '$latitude', '$shape', '$duration', '$summary', '$posted')");
	             $stmt->execute();
		     $stmt->close();
		 }
	 }
?>
