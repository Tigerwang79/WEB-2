<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427182442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE im22_panier (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, quantite INTEGER NOT NULL, User_id INTEGER NOT NULL, Produit_Id INTEGER NOT NULL)');
        $this->addSql('CREATE INDEX IDX_E3BB1FCA68D3EA09 ON im22_panier (User_id)');
        $this->addSql('CREATE INDEX IDX_E3BB1FCAD5ED5989 ON im22_panier (Produit_Id)');
        $this->addSql('CREATE TABLE im22_produit (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INTEGER NOT NULL)');
        $this->addSql('CREATE TABLE im22_user (pk INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(30) DEFAULT \'1\' NOT NULL, prenom VARCHAR(30) DEFAULT \'1\' NOT NULL, username VARCHAR(64) NOT NULL --Set de login doit être unique
        , roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(64) NOT NULL --mot de passe crypté : il faut une taille assez grande pour ne pas le tronquer
        , birthday DATE DEFAULT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3DFDD5A9F85E0677 ON im22_user (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE im22_panier');
        $this->addSql('DROP TABLE im22_produit');
        $this->addSql('DROP TABLE im22_user');
    }
}
