<?php
  # require_once('Job_candidate.php');
  # require_once('External_storage.php');
  require_once('./Internal_storage.php');

  /**
   * Employer
   * 
   * Manage job candidates data.
   */
  class Employer {
    private $_storage = null;

    function __construct(string $path) {
      $this->_storage = new Internal_storage($path);
    }

    /**
     * Employ candidate if he is experienced.
     * 
     * @param Job_candidate $job_candidate
     * @param External_storage $external_storage
     * @param Internal_storage $internal_storage
     * @return boolean
     */
    public function employ(Job_candidate $job_candidate, External_storage $external_storage, Internal_storage $internal_storage) {
      // Check if candidate experience state is negative.
      if ($job_candidate->is_experienced() === false) {
        // Insert name to history .txt file.
        $internal_storage->insert($job_candidate->get_name());
        return false;
      }

      // Employ candidate.
      // Insert name to external state.
      $external_storage->insert($job_candidate->get_name());

      return true;
    }
  }
?>
