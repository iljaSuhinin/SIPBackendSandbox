<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130919164314 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("ALTER TABLE armd_hall ADD title VARCHAR(255) NOT NULL, ADD title_en VARCHAR(255) NOT NULL");
        $this->addSql("ALTER TABLE armd_hall_audit ADD title VARCHAR(255) DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_hall ADD off_center VARCHAR(255) DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_hall_audit ADD off_center VARCHAR(255) DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");

        $this->addSql("ALTER TABLE armd_hall DROP title, DROP title_en");
        $this->addSql("ALTER TABLE armd_hall_audit DROP title");
        $this->addSql("ALTER TABLE armd_hall DROP off_center");
        $this->addSql("ALTER TABLE armd_hall_audit DROP off_center");
    }
}
