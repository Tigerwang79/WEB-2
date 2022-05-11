<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329145224 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__sb_films AS SELECT id, nom, annee, enstock, prix, quantite FROM sb_films');
        $this->addSql('DROP TABLE sb_films');
        $this->addSql('CREATE TABLE sb_films (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(200) NOT NULL, annee INTEGER NOT NULL --année de sortie
        , enstock BOOLEAN DEFAULT 1 NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO sb_films (id, nom, annee, enstock, prix, quantite) SELECT id, nom, annee, enstock, prix, quantite FROM __temp__sb_films');
        $this->addSql('DROP TABLE __temp__sb_films');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__sb_films AS SELECT id, nom, annee, enstock, prix, quantite FROM sb_films');
        $this->addSql('DROP TABLE sb_films');
        $this->addSql('CREATE TABLE sb_films (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(200) NOT NULL, annee INTEGER NOT NULL, enstock BOOLEAN NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO sb_films (id, nom, annee, enstock, prix, quantite) SELECT id, nom, annee, enstock, prix, quantite FROM __temp__sb_films');
        $this->addSql('DROP TABLE __temp__sb_films');
    }
}
