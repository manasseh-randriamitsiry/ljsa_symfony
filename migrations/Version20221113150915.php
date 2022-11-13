<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221113150915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE seconde (id INT AUTO_INCREMENT NOT NULL, n_matricule VARCHAR(10) NOT NULL, mlg INT NOT NULL, frs INT NOT NULL, ang INT NOT NULL, hg INT NOT NULL, eac INT NOT NULL, ses INT NOT NULL, spc INT NOT NULL, math INT NOT NULL, eps INT NOT NULL, tice INT NOT NULL, trimestre INT NOT NULL, annee_scolaire INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE seconde');
    }
}
