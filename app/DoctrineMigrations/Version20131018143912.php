<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131018143912 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_guide ADD version INT DEFAULT 0");
        $this->addSql("ALTER TABLE armd_guide_audit ADD version INT DEFAULT 0");
        $this->addSql("ALTER TABLE armd_guide_item CHANGE moves_en moves_en LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)'");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_guide DROP version");
        $this->addSql("ALTER TABLE armd_guide_audit DROP version");
        $this->addSql("ALTER TABLE armd_guide_item CHANGE moves_en moves_en LONGTEXT NOT NULL COMMENT '(DC2Type:array)'");
    }
}
