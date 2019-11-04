<?php
  # require_once('Job_candidate.php');
  # require_once('External_storage.php');
  require_once('./Employer.php');
  require_once('./Internal_storage.php');

  /**
   * App
   * 
   * Core app class.
   */
  class App {
    function __construct() {
      $employer = new Employer('../data/candidates.txt');
    }
  }

  $app = new App();
?>
