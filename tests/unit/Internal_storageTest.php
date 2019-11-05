<?php
  class Internal_storageTest extends \PHPUnit_Framework_TestCase {
    public function testThatGetNamesReturnsCorrectList() {
      require_once('src/Config.php');
      require_once('src/Internal_storage.php');

      $internal_storage = new Internal_storage(Config::CANDIDATES_DATA_PATH());
      Text_file::clear(Config::CANDIDATES_DATA_PATH());
      $names = $internal_storage->get_names();

      $this->assertEquals(count($names), 1);
    }

    public function testThatInsertAddsNameToStorageAfterPassingGuardStatements() {
      require_once('src/Config.php');
      require_once('src/Internal_storage.php');

      $internal_storage = new Internal_storage(Config::CANDIDATES_DATA_PATH());
      Text_file::clear(Config::CANDIDATES_DATA_PATH());

      $this->assertEquals($internal_storage->insert(''), false);
      $this->assertEquals($internal_storage->insert('Harry'), true);
      $names = $internal_storage->get_names();
      $this->assertEquals(count($names), 2);
      $this->assertEquals($internal_storage->insert('Harry'), false);
    }

    public function testThatIsExistingReturnsTrueWhenNameIsInStorage() {
      require_once('src/Config.php');
      require_once('src/Internal_storage.php');

      $internal_storage = new Internal_storage(Config::CANDIDATES_DATA_PATH());
      Text_file::clear(Config::CANDIDATES_DATA_PATH());

      $this->assertEquals($internal_storage->is_existing('Golp'), false);

      $internal_storage->insert('Golp');

      $this->assertEquals($internal_storage->is_existing('Golp'), true);
    }
  }
?>
