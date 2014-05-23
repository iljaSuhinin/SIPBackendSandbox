<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130905223220 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_hall CHANGE coordinates coordinates LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', CHANGE transitions transitions LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', CHANGE septa septa LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)'");
        $this->addSql("ALTER TABLE armd_hall_audit CHANGE coordinates coordinates LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', CHANGE transitions transitions LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', CHANGE septa septa LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)'");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_hall CHANGE coordinates coordinates LONGTEXT DEFAULT NULL, CHANGE transitions transitions LONGTEXT DEFAULT NULL, CHANGE septa septa LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_hall_audit CHANGE coordinates coordinates LONGTEXT DEFAULT NULL, CHANGE transitions transitions LONGTEXT DEFAULT NULL, CHANGE septa septa LONGTEXT DEFAULT NULL");
    }
}
