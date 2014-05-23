<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130923184748 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_hall CHANGE off_center off_center LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)'");
        $this->addSql("ALTER TABLE armd_hall_audit CHANGE off_center off_center LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)'");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_hall CHANGE off_center off_center VARCHAR(255) DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_hall_audit CHANGE off_center off_center VARCHAR(255) DEFAULT NULL");
    }
}
