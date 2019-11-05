<?php
  class EmployerTest extends \PHPUnit_Framework_TestCase {
    public function test_that_employing_experienced_candidate_return_true() {
      require_once('src/Config.php');
      require_once('src/Employer.php');

      $employer = new Employer(Config::CANDIDATES_DATA_PATH());
      $candidate = new Job_candidate("Mark", true);

      $this->assertEquals($employer->employ($candidate), true);
    }

    public function test_that_employing_unexperienced_candidate_return_false() {
      require_once('src/Config.php');
      require_once('src/Employer.php');

      $employer = new Employer(Config::CANDIDATES_DATA_PATH());
      $candidate = new Job_candidate("Mark", false);

      $this->assertEquals($employer->employ($candidate), false);
    }
  }
?>
