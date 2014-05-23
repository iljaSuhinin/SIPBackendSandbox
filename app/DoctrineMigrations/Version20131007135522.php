<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131007135522 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_infrastructure CHANGE coordinates coordinates LONGTEXT NOT NULL COMMENT '(DC2Type:array)'");
        $this->addSql("ALTER TABLE armd_infrastructure_audit CHANGE coordinates coordinates LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)'");
        $this->addSql("ALTER TABLE armd_infrastructure CHANGE title title VARCHAR(255) DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_infrastructure CHANGE coordinates coordinates LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_infrastructure_audit CHANGE coordinates coordinates LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_infrastructure CHANGE title title VARCHAR(255) NOT NULL");
    }
}
