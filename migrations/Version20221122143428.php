<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221122143428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment ADD COLUMN description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__appointment AS SELECT id, title, start_time, end_time FROM appointment');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('CREATE TABLE appointment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(50) NOT NULL, start_time DATETIME NOT NULL, end_time DATETIME NOT NULL)');
        $this->addSql('INSERT INTO appointment (id, title, start_time, end_time) SELECT id, title, start_time, end_time FROM __temp__appointment');
        $this->addSql('DROP TABLE __temp__appointment');
    }
}
