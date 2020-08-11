<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200810161443 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE heather_gallery (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, visible BOOLEAN NOT NULL DEFAULT 1, file_url VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL)');
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('5731d06ce812ahd728.png', 'Heather on a baseball field.')");
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('3240916424.jpg', 'Heather standing on the grass.')");
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('3150433295.jpg', 'The last school photo for Heather, she was 12.')");
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('2395985929.jpg', 'Heather in the TV movie Surviving.')");
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('6023659288.jpg', 'Heather holding a gift during a photoshoot.')");
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('1315592550.jpg', 'Heather wearing a red dress.')");
        $this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('4110797794.jpg', 'Heather in a photoshoot.')");
        //$this->addSql("INSERT INTO heather_gallery (file_url, description) VALUES ('', '')");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE heather_gallery');
    }
}