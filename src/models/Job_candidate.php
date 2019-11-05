<?php
  class Job_candidate {
    private $name = "";
    private $experienced = false;

    /**
     * @param string $name
     * @param boolean $experienced
     */
    function __construct($name, $experienced) {
      $this->name = $name;
      $this->experienced = $experienced;
    }

    /**
     * @return string
     */
    public function get_name() {
      return $this->name;
    }

    /**
     * @return boolean
     */
    public function is_experienced() {
      return $this->experienced === true;
    }
  }
?>
