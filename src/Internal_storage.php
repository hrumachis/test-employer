<?php
  require_once('./Text_file.php');
  require_once('./String_util.php');

  /**
   * Internal_storage
   * 
   * Manage internal storage
   */
  class Internal_storage {
    protected $_storage_path = "";

    function __construct(string $path) {
      if (file_exists($path) !== true) {
        die("The file $path does not exist");
      }

      $this->_storage_path = $path;
    }

    /**
     * Read storage names, return as array
     * 
     * @return string[]
     */
    public function get_names() {
      return Text_file::read($this->_storage_path);
    }

    /**
     * Insert name to storage
     * 
     * @param string $name
     */
    public function insert(string $name) {
      // Check if name exist in storage
      if ($this->is_existing($name) !== true) {
        Text_file::write($this->_storage_path, $name . "\n");
      }
    }

    /**
     * Check if name exist in storage
     * 
     * @param string $name
     * @return boolean
     */
    public function is_existing(string $name) {
      $data = String_util::get_lines($this->get_names());

      foreach($data as $line){
        if ($line === $name) {
          return true;
        }
      }

      return false;
    }
  }
?>
