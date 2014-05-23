<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130903125202 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE armd_hall (id INT AUTO_INCREMENT NOT NULL, number VARCHAR(255) NOT NULL, floor INT NOT NULL, geometry INT DEFAULT NULL, coordinates LONGTEXT DEFAULT NULL, transitions LONGTEXT DEFAULT NULL, septa LONGTEXT DEFAULT NULL, close TINYINT(1) DEFAULT NULL, close_start DATE DEFAULT NULL, close_end DATE DEFAULT NULL, UNIQUE INDEX UNIQ_BAE858F496901F54 (number), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_hall_audit (id INT NOT NULL, rev INT NOT NULL, number VARCHAR(255) DEFAULT NULL, floor INT DEFAULT NULL, geometry INT DEFAULT NULL, coordinates LONGTEXT DEFAULT NULL, transitions LONGTEXT DEFAULT NULL, septa LONGTEXT DEFAULT NULL, close TINYINT(1) DEFAULT NULL, close_start DATE DEFAULT NULL, close_end DATE DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY(id, rev)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_infrastructure (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, coordinates LONGTEXT DEFAULT NULL, floor INT NOT NULL, title_en VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE infrastructure_halls (infrastructure_id INT NOT NULL, hall_id INT NOT NULL, INDEX IDX_46FB0956243E7A84 (infrastructure_id), INDEX IDX_46FB095652AFCFD6 (hall_id), PRIMARY KEY(infrastructure_id, hall_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_infrastructure_audit (id INT NOT NULL, rev INT NOT NULL, title VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, coordinates LONGTEXT DEFAULT NULL, floor INT DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY(id, rev)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE infrastructure_halls ADD CONSTRAINT FK_46FB0956243E7A84 FOREIGN KEY (infrastructure_id) REFERENCES armd_infrastructure (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE infrastructure_halls ADD CONSTRAINT FK_46FB095652AFCFD6 FOREIGN KEY (hall_id) REFERENCES armd_hall (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE armd_exhibit ADD hall_id INT DEFAULT NULL, ADD qr_code LONGTEXT DEFAULT NULL");
        $this->addSql("ALTER TABLE armd_exhibit ADD CONSTRAINT FK_BE6BA15652AFCFD6 FOREIGN KEY (hall_id) REFERENCES armd_hall (id)");
        $this->addSql("CREATE INDEX IDX_BE6BA15652AFCFD6 ON armd_exhibit (hall_id)");
        $this->addSql("ALTER TABLE armd_exhibit_audit ADD hall_id INT DEFAULT NULL, ADD qr_code LONGTEXT DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_exhibit DROP FOREIGN KEY FK_BE6BA15652AFCFD6");
        $this->addSql("ALTER TABLE infrastructure_halls DROP FOREIGN KEY FK_46FB095652AFCFD6");
        $this->addSql("ALTER TABLE infrastructure_halls DROP FOREIGN KEY FK_46FB0956243E7A84");
        $this->addSql("DROP TABLE armd_hall");
        $this->addSql("DROP TABLE armd_hall_audit");
        $this->addSql("DROP TABLE armd_infrastructure");
        $this->addSql("DROP TABLE infrastructure_halls");
        $this->addSql("DROP TABLE armd_infrastructure_audit");
        $this->addSql("DROP INDEX IDX_BE6BA15652AFCFD6 ON armd_exhibit");
        $this->addSql("ALTER TABLE armd_exhibit DROP hall_id, DROP qr_code");
        $this->addSql("ALTER TABLE armd_exhibit_audit DROP hall_id, DROP qr_code");
    }
}
