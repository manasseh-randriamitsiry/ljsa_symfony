<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221120072201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE terminale (id INT AUTO_INCREMENT NOT NULL, nmat_id INT NOT NULL, mlg DOUBLE PRECISION NOT NULL, frs DOUBLE PRECISION NOT NULL, ang DOUBLE PRECISION NOT NULL, hg DOUBLE PRECISION NOT NULL, phylo DOUBLE PRECISION NOT NULL, math DOUBLE PRECISION NOT NULL, spc DOUBLE PRECISION NOT NULL, svt DOUBLE PRECISION NOT NULL, ses DOUBLE PRECISION NOT NULL, eps DOUBLE PRECISION NOT NULL, annee_scolaire INT NOT NULL, trimestre INT NOT NULL, INDEX IDX_EE8E70492B808156 (nmat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE terminale ADD CONSTRAINT FK_EE8E70492B808156 FOREIGN KEY (nmat_id) REFERENCES etudiant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE terminale DROP FOREIGN KEY FK_EE8E70492B808156');
        $this->addSql('DROP TABLE terminale');
    }
}
