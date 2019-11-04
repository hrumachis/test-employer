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
    static public function read(string $path) {
      $content = file_get_contents($path);

      return $content;
    }

    /**
     * Write to <path>.txt file
     * 
     * @param string $path
     */
    static public function write(string $path, string $content) {
      file_put_contents($path, $content, FILE_APPEND);
    }
  }
?>
