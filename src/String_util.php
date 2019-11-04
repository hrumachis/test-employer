<?php
/**
   * String_util
   * 
   * String utility methods
   */
  class String_util {
    /**
     * Returns string new lines
     * 
     * @param string
     * @return string[]
     */
    static public function get_lines(string $string) {
      return preg_split("/((\r?\n)|(\r\n?))/", $string);
    }
  }
?>
