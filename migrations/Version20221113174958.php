<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221113174958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seconde CHANGE mlg mlg DOUBLE PRECISION NOT NULL, CHANGE frs frs DOUBLE PRECISION NOT NULL, CHANGE ang ang DOUBLE PRECISION NOT NULL, CHANGE hg hg DOUBLE PRECISION NOT NULL, CHANGE eac eac DOUBLE PRECISION NOT NULL, CHANGE ses ses DOUBLE PRECISION NOT NULL, CHANGE spc spc DOUBLE PRECISION NOT NULL, CHANGE math math DOUBLE PRECISION NOT NULL, CHANGE eps eps DOUBLE PRECISION NOT NULL, CHANGE tice tice DOUBLE PRECISION NOT NULL, CHANGE trimestre trimestre DOUBLE PRECISION NOT NULL, CHANGE annee_scolaire annee_scolaire DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seconde CHANGE mlg mlg INT NOT NULL, CHANGE frs frs INT NOT NULL, CHANGE ang ang INT NOT NULL, CHANGE hg hg INT NOT NULL, CHANGE eac eac INT NOT NULL, CHANGE ses ses INT NOT NULL, CHANGE spc spc INT NOT NULL, CHANGE math math INT NOT NULL, CHANGE eps eps INT NOT NULL, CHANGE tice tice INT NOT NULL, CHANGE trimestre trimestre INT NOT NULL, CHANGE annee_scolaire annee_scolaire INT NOT NULL');
    }
}
