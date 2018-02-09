<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180209194817 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $table = $schema->createTable('book');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);
        $table->addColumn('title', 'text', ['notnull'=>true]);
        $table->addColumn('author', 'text', ['notnull'=>true]);
        $table->setPrimaryKey(['id']);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('book');
    }
}
