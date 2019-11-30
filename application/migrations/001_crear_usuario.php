<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'idpk' => array(
                                'type' => 'INT',
                                'constraint' => 10,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'usuario' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE,
                        ),
                        'contrasena' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE,
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => 1,
                                'null' => TRUE,
                        ),
                        'rango' => array(
                                'type' => 'INT',
                                'constraint' => 1,
                                'null' => TRUE,
                        )
                ));
                $this->dbforge->add_key('idpk', TRUE);
                $this->dbforge->create_table('usuario');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuario');
        }
}