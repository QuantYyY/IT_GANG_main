<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211116123423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE album_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE album1_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE album1 (id INT NOT NULL, title VARCHAR(255) NOT NULL, date_publication VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, active BOOLEAN NOT NULL, date_create VARCHAR(255) NOT NULL, date_update VARCHAR(255) NOT NULL, user_create VARCHAR(255) NOT NULL, user_update VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE album1_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE album_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP TABLE album1');
    }
}
