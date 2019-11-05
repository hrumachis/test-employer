<?php
  require_once('Text_file.php');
  require_once('String_util.php');

  /**
   * Internal_storage
   * 
   * Manage internal storage
   */
  class Internal_storage {
    protected $_storage_path = "";

    /**
     * @param string $path
     */
    function __construct($path) {
      if (file_exists($path) !== true) {
        die("The file $path does not exist");
      }

      $this->_storage_path = $path;
    }

    /**
     * Read storage names, return as array
     * 
     * @return array
     */
    public function get_names() {
      return String_util::get_lines(Text_file::read($this->_storage_path));
    }

    /**
     * Insert name to storage
     * 
     * @param string $name
     */
    public function insert($name) {
      // Check if name is empty
      if (isset($name) && $name === "") {
        return false;
      }

      // Check if name exist in storage
      if ($this->is_existing($name) === true) {
        return false;
      }

      Text_file::write($this->_storage_path, $name . "\n");

      return true;
    }

    /**
     * Check if name exist in storage
     * 
     * @param string $name
     * @return boolean
     */
    public function is_existing($name) {
      $data = $this->get_names();

      foreach($data as $line){
        if ($line === $name) {
          return true;
        }
      }

      return false;
    }
  }
?>
