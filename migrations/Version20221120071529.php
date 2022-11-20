<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221120071529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE premiere (id INT AUTO_INCREMENT NOT NULL, nmat_id INT NOT NULL, mlg DOUBLE PRECISION NOT NULL, frs DOUBLE PRECISION NOT NULL, ang DOUBLE PRECISION NOT NULL, hg DOUBLE PRECISION NOT NULL, eac DOUBLE PRECISION NOT NULL, ses DOUBLE PRECISION NOT NULL, spc DOUBLE PRECISION NOT NULL, svt DOUBLE PRECISION NOT NULL, math DOUBLE PRECISION NOT NULL, eps DOUBLE PRECISION NOT NULL, tice DOUBLE PRECISION NOT NULL, phylo DOUBLE PRECISION NOT NULL, trimestre INT NOT NULL, annee_scolaire INT NOT NULL, INDEX IDX_A3FD9D0F2B808156 (nmat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE premiere ADD CONSTRAINT FK_A3FD9D0F2B808156 FOREIGN KEY (nmat_id) REFERENCES etudiant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE premiere DROP FOREIGN KEY FK_A3FD9D0F2B808156');
        $this->addSql('DROP TABLE premiere');
    }
}
