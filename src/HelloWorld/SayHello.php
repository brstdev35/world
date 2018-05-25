<?php

namespace HelloWorld;

class SayHello {
    
    public $table = 'register_user';

    public function init() {
        parent::init();
        $this->checkTable();
        // custom initialization code goes here
    }

    public static function world() {
        return 'This is my first program';
    }

    protected function checkTable() {
        if (isset(Yii::$app->db->schema->db->tablePrefix))
            $this->table = Yii::$app->db->schema->db->tablePrefix . $this->table;

        if (Yii::$app->db->schema->getTableSchema($this->table, true) === null) {
            Yii::$app->db->createCommand()
                    ->createTable(
                            $this->table, array(
                        'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY',
                        'firstname' => 'varchar(255) DEFAULT NULL',
                        'lastname' => 'varchar(255) DEFAULT NULL',
                        'email' => 'varchar(255) DEFAULT NULL',
                        'password' => 'varchar(255) DEFAULT NULL',
                        'access_token' => 'varchar(255) DEFAULT NULL',
                        'profile_image' => 'varchar(255) DEFAULT NULL',
                        'created' => 'int(11) unsigned DEFAULT NULL',
                        'updated' => 'int(11) unsigned DEFAULT NULL',
                            ), 'ENGINE=InnoDB DEFAULT CHARSET=utf8'
                    )
                    ->execute();
        }
    }

}

?>