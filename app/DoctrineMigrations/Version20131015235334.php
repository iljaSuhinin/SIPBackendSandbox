<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131015235334 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE armd_guide (id INT AUTO_INCREMENT NOT NULL, image_id INT DEFAULT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, identifier VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, position INT NOT NULL, duration INT NOT NULL, start_text LONGTEXT DEFAULT NULL, end_text LONGTEXT DEFAULT NULL, title_en VARCHAR(255) NOT NULL, description_en LONGTEXT NOT NULL, start_text_en LONGTEXT NOT NULL, end_text_en LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_C689BBFD772E836A (identifier), INDEX IDX_C689BBFD3DA5256D (image_id), INDEX IDX_C689BBFD12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_guide_audit (id INT NOT NULL, rev INT NOT NULL, image_id INT DEFAULT NULL, category_id INT DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, identifier VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, position INT DEFAULT NULL, duration INT DEFAULT NULL, start_text LONGTEXT DEFAULT NULL, end_text LONGTEXT DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY(id, rev)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_guide_category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, title_en VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_guide_category_audit (id INT NOT NULL, rev INT NOT NULL, title VARCHAR(255) DEFAULT NULL, revtype VARCHAR(4) NOT NULL, PRIMARY KEY(id, rev)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_guide_item (id INT AUTO_INCREMENT NOT NULL, exhibit_id INT DEFAULT NULL, photo_exhibit_id INT DEFAULT NULL, icon_exhibit_id INT DEFAULT NULL, audion_id INT DEFAULT NULL, guide_id INT DEFAULT NULL, title_exhibit VARCHAR(255) DEFAULT NULL, descriptionExhibit LONGTEXT DEFAULT NULL, metadata_exhibit LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', position INT NOT NULL, moves LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', title_exhibit_en VARCHAR(255) NOT NULL, descriptionExhibit_en LONGTEXT NOT NULL, moves_en LONGTEXT NOT NULL COMMENT '(DC2Type:array)', INDEX IDX_4BAD58B52E5CE433 (exhibit_id), INDEX IDX_4BAD58B562380A3B (photo_exhibit_id), INDEX IDX_4BAD58B5DD53EE43 (icon_exhibit_id), INDEX IDX_4BAD58B540385457 (audion_id), INDEX IDX_4BAD58B5D7ED1D4B (guide_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE armd_guide_item_audit (id INT NOT NULL, rev INT NOT NULL, exhibit_id INT DEFAULT NULL, photo_exhibit_id INT DEFAULT NULL, icon_exhibit_id INT DEFAULT NULL, audion_id INT DEFAULT NULL, guide_id INT DEFAULT NULL, title_exhibit VARCHAR(255) DEFAULT NULL, descriptionExhibit LONGTEXT DEFAULT NULL, metadata_exhibit LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', position INT DEFAULT NULL, moves LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', revtype VARCHAR(4) NOT NULL, PRIMARY KEY(id, rev)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE armd_guide ADD CONSTRAINT FK_C689BBFD3DA5256D FOREIGN KEY (image_id) REFERENCES armd_media_media (id)");
        $this->addSql("ALTER TABLE armd_guide ADD CONSTRAINT FK_C689BBFD12469DE2 FOREIGN KEY (category_id) REFERENCES armd_guide_category (id)");
        $this->addSql("ALTER TABLE armd_guide_item ADD CONSTRAINT FK_4BAD58B52E5CE433 FOREIGN KEY (exhibit_id) REFERENCES armd_exhibit (id)");
        $this->addSql("ALTER TABLE armd_guide_item ADD CONSTRAINT FK_4BAD58B562380A3B FOREIGN KEY (photo_exhibit_id) REFERENCES armd_media_media (id)");
        $this->addSql("ALTER TABLE armd_guide_item ADD CONSTRAINT FK_4BAD58B5DD53EE43 FOREIGN KEY (icon_exhibit_id) REFERENCES armd_media_media (id)");
        $this->addSql("ALTER TABLE armd_guide_item ADD CONSTRAINT FK_4BAD58B540385457 FOREIGN KEY (audion_id) REFERENCES armd_media_media (id)");
        $this->addSql("ALTER TABLE armd_guide_item ADD CONSTRAINT FK_4BAD58B5D7ED1D4B FOREIGN KEY (guide_id) REFERENCES armd_guide (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE armd_guide_item DROP FOREIGN KEY FK_4BAD58B5D7ED1D4B");
        $this->addSql("ALTER TABLE armd_guide DROP FOREIGN KEY FK_C689BBFD12469DE2");
        $this->addSql("DROP TABLE armd_guide");
        $this->addSql("DROP TABLE armd_guide_audit");
        $this->addSql("DROP TABLE armd_guide_category");
        $this->addSql("DROP TABLE armd_guide_category_audit");
        $this->addSql("DROP TABLE armd_guide_item");
        $this->addSql("DROP TABLE armd_guide_item_audit");
    }
}
