<?php

use Phinx\Migration\AbstractMigration;

class AddInvalidEmail extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table1 = $this->table('security_users');
        $table1
            ->addColumn('is_valid_email', 'boolean', [
                'default' => 1,
                'null' => false,
            ])
            ->save();
    }

    public function down()
    {
        $table1 = $this->table('security_users');
        $table1->removeColumn('is_valid_email');
    }
}
