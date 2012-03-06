<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_todo_table extends Migration {

  public function up()
  {
      $this->dbforge->add_field('todo_id INT(10) NOT NULL AUTO_INCREMENT');
      $this->dbforge->add_field('description VARCHAR(255) NOT NULL');
      $this->dbforge->add_field('deleted TINYINT(1) DEFAULT 0 NOT NULL');
      $this->dbforge->add_key('todo_id', true);
      $this->dbforge->create_table('todos');
  }

  //--------------------------------------------------------------------

  public function down()
  {
      $this->dbforge->drop_table('todos');
  }

  //--------------------------------------------------------------------

}