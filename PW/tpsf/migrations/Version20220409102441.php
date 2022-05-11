<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220409102441 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ts_produits (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, denomination VARCHAR(255) NOT NULL, code VARCHAR(30) NOT NULL, date_creation DATETIME NOT NULL, actif INTEGER NOT NULL, descriptif CLOB NOT NULL)');
        $this->addSql('DROP TABLE produit');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, denomination VARCHAR(255) NOT NULL COLLATE BINARY, code VARCHAR(30) NOT NULL COLLATE BINARY, date_creation DATETIME NOT NULL, actif INTEGER NOT NULL, descriptif CLOB NOT NULL COLLATE BINARY)');
        $this->addSql('DROP TABLE ts_produits');
    }
}
