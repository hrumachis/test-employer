<?php
  require_once('Config.php');
  # require_once('Job_candidate.php');
  # require_once('External_storage.php');
  require_once('Employer.php');
  require_once('Internal_storage.php');

  /**
   * App
   * 
   * Core app class.
   */
  class App {
    function __construct() {
      $employer = new Employer(Config::CANDIDATES_DATA_PATH());
      $candidate = new Job_candidate("Mark", false);
      $employer->employ($candidate);
    }
  }

  $app = new App();
?>
