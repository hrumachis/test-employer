<?php
  class EmployerTest extends \PHPUnit_Framework_TestCase {
    public function testThatEmployingExperiencedCandidateReturnTrue() {
      require_once('src/Config.php');
      require_once('src/Employer.php');

      $employer = new Employer(Config::CANDIDATES_DATA_PATH());
      $candidate = new Job_candidate("Mark", true);

      $this->assertEquals($employer->employ($candidate), true);
    }

    public function testThatEmployingUnexperiencedCandidateReturnFalse() {
      require_once('src/Config.php');
      require_once('src/Employer.php');

      $employer = new Employer(Config::CANDIDATES_DATA_PATH());
      $candidate = new Job_candidate("Mark", false);

      $this->assertEquals($employer->employ($candidate), false);
    }
  }
?>
