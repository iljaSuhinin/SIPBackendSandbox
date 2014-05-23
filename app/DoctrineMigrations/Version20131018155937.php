<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131018155937 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_guide_item ADD hall_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_guide_item ADD CONSTRAINT FK_4BAD58B552AFCFD6 FOREIGN KEY (hall_id) REFERENCES armd_hall (id)");
        $this->addSql("CREATE INDEX IDX_4BAD58B552AFCFD6 ON armd_guide_item (hall_id)");
        $this->addSql("ALTER TABLE armd_guide_item_audit ADD hall_id INT DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_guide_item DROP FOREIGN KEY FK_4BAD58B552AFCFD6");
        $this->addSql("DROP INDEX IDX_4BAD58B552AFCFD6 ON armd_guide_item");
        $this->addSql("ALTER TABLE armd_guide_item DROP hall_id");
        $this->addSql("ALTER TABLE armd_guide_item_audit DROP hall_id");
    }
}
