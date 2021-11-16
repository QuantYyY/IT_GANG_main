<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211116135027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE album_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE image_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE relation_album_and_image_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE album (id INT NOT NULL, title VARCHAR(1000) NOT NULL, date_publication TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, description TEXT DEFAULT NULL, active BOOLEAN NOT NULL, date_create TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_update TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, user_create VARCHAR(255) NOT NULL, user_update VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE image (id INT NOT NULL, id_image_id INT DEFAULT NULL, image_name VARCHAR(255) NOT NULL, date_create TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, user_create VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C53D045F6D7EC9F8 ON image (id_image_id)');
        $this->addSql('CREATE TABLE relation_album_and_image (id INT NOT NULL, id_image_id INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_18CE0E036D7EC9F8 ON relation_album_and_image (id_image_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(255) NOT NULL, roles VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F6D7EC9F8 FOREIGN KEY (id_image_id) REFERENCES relation_album_and_image (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE relation_album_and_image ADD CONSTRAINT FK_18CE0E036D7EC9F8 FOREIGN KEY (id_image_id) REFERENCES album (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE relation_album_and_image DROP CONSTRAINT FK_18CE0E036D7EC9F8');
        $this->addSql('ALTER TABLE image DROP CONSTRAINT FK_C53D045F6D7EC9F8');
        $this->addSql('DROP SEQUENCE album_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE image_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE relation_album_and_image_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE album');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE relation_album_and_image');
        $this->addSql('DROP TABLE "user"');
    }
}
