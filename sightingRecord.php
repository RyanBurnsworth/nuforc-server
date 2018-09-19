<?php

	/**
	 *	POPO class for handling NUFORC sighting records
	 */
	 
	 class SightingRecord {
		private $dateTime;
		private $city;
		private $state;
		private $location;
		private $longitude;
		private $latitude;
		private $duration;
		private $shape;
		private $summary;
		private $posted
		
		public SightingRecord() {
			
		} 
		
		public function getDateTime() {
			return $this->dateTime;
		}
		
		public function setDateTime($dateTime) {
			$this->dateTime = $dateTime;
		}
		
				
		public function getCity() {
			return $this->city;
		}
		
		public function setCity($city) {
			$this->city = $city;
		}
		
				
		public function getState() {
			return $this->state;
		}
		
		public function setState($state) {
			$this->state = $state;
		}
		
				
		public function getLocation() {
			return $this->location;
		}
		
		public function setLocation($location) {
			$this->location = $location;
		}
		
				
		public function getLongitude() {
			return $this->longitude;
		}
		
		public function setLongitude($longitude) {
			$this->longitude = $longitude;
		}
		
				
		public function getLatitude() {
			return $this->latitude;
		}
		
		public function setLatitude($latitude) {
			$this->latitude = $latitude;
		}
		
				
		public function getShape() {
			return $this->shape;
		}
		
		public function setShape($shape) {
			$this->shape = $shape;
		}
		
				
		public function getDuration() {
			return $this->duration;
		}
		
		public function setDuration($duration) {
			$this->duration = $duration;
		}
		
				
		public function getPosted() {
			return $this->posted;
		}
		
		public function setPosted($posted) {
			$this->posted = $posted;
		}
		
				
		public function getSummary() {
			return $this->summary;
		}
		
		public function setSummary($summary) {
			$this->summary = $summary;
		}
	 }