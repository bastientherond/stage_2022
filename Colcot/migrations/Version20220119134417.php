<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220119134417 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Annonces CHANGE brochureFilename brochureFilename VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE Produits CHANGE prix prix DOUBLE PRECISION DEFAULT \'NULL\', CHANGE description description VARCHAR(100) DEFAULT \'NULL\', CHANGE echelle echelle VARCHAR(100) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Annonces CHANGE brochureFilename brochureFilename VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE Produits CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE description description VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE echelle echelle VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
    }
}
