<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191105105152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $table = $schema->createTable("log");

        $table->addColumn("ID", "integer", ["autoincrement" => true, "notnull" => true]);
        $table->addColumn("time", "datetime");
        $table->addColumn("route", "string");

        $table->setPrimaryKey(["ID"]);

    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable("log");
    }
}
