<?php

class Benchmark {

     private $start_time;
     private $_test = array();
      
     function __construct() {
	     $this->start_time = microtime();
	 }

	 public function startBench($test_name) {
	 	// start a test, and store the start time as the array value
	 	$this->_test[$test_name] = microtime();
	 }
	 
	 public function completeBench($test_name = null, $remove_test = false) {
	 	
	 	if (!is_null($test_name)) {
	 		$this->_test[$test_name] = $this->complete($this->_test[$test_name]); // pass the start time as the value, and then overwrite the start time with the total execution time
	 	} else {
	 		// get last test and use
	 		end($this->_test);
	 		$key = key($this->_test);
	 		$test_name = $key;
	 		$this->_test[$key] = $this->complete($this->_test[$key]);
	 	}
	 	
	 	if ($remove_test) {
	 		$test = array($test_name, $this->_test[$test_name]);
	 		unset($this->_test[$test_name]);
	 		return $test;
	 	}
	 }
	 
	 function complete($time_start = null) {
	 	if (is_null($time_start)) {
	 		$time_start = $this->start_time;
	 	}
          
        $time_end   = microtime();
        $time_start = explode(' ', $time_start);
        $time_end   = explode(' ', $time_end);
        return number_format(($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0])), 4);
	 }
	 
	 public function getTestResults() {
	 	return $this->_test;
	 }
	 
	 public function printTest() {
	 	echo "<br />Test Results:<br />";
	 	foreach ($this->_test as $test_name => $test_time) {
	 		echo '&nbsp;&nbsp;&nbsp;' . $test_name . ': ' . $test_time . 's<br />';
	 	}
	 	
	 }

}

?>