<?php
  require_once('models/Job_candidate.php');
  # require_once('External_storage.php');
  require_once('Internal_storage.php');

  /**
   * Employer
   * 
   * Manage job candidates data.
   */
  class Employer {
    private $_internal_storage = null;
    private $_external_storage = null;

    /**
     * @param string $path
     */
    function __construct($path) {
      $this->_internal_storage = new Internal_storage($path);
      # $this->_external_storage = new External_storage();
    }

    /**
     * Employ candidate if he is experienced.
     * 
     * @param Job_candidate $job_candidate
     * @param External_storage $external_storage
     * @param Internal_storage $internal_storage
     * @return boolean
     */
    public function employ(Job_candidate $job_candidate) {
      // Check if candidate experience state is negative.
      if ($job_candidate->is_experienced() === false) {
        // Insert name to history .txt file.
        $this->_internal_storage->insert($job_candidate->get_name());
        return false;
      }

      // Employ candidate.
      // Insert name to external storage.
      # $this->_external_storage->insert($job_candidate->get_name());

      return true;
    }
  }
?>
