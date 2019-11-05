<?php
  /**
   * Text_file
   * 
   * Manage .txt file.
   */
  class Text_file {
    /**
     * Read <path>.txt file
     * 
     * @param string $path
     * @return string || null
     */
    static public function read($path) {
      $content = file_get_contents($path);

      return $content;
    }

    /**
     * Write to <path>.txt file
     */
    static public function write($path, $content) {
      file_put_contents($path, $content, FILE_APPEND);
    }

    /**
     * Clear <path>.txt file
     */
    static public function clear($path) {
      file_put_contents($path, "");
    }
  }
?>
