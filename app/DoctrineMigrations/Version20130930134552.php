<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130930134552 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE armd_exhibit_usn_seq (usn INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(usn)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE armd_exhibit ADD usn INT DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_exhibit_audit ADD usn INT DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("DROP TABLE armd_exhibit_usn_seq");
        $this->addSql("ALTER TABLE armd_exhibit DROP usn");
        $this->addSql("ALTER TABLE armd_exhibit_audit DROP usn");
    }
}
