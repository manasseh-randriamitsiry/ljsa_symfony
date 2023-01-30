<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230107072931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, classe VARCHAR(10) NOT NULL, coeff_total INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, classe_id INT NOT NULL, enom VARCHAR(255) NOT NULL, eprenom VARCHAR(255) NOT NULL, date_nais DATE NOT NULL, nmat VARCHAR(10) NOT NULL, INDEX IDX_717E22E38F5EA509 (classe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE premiere (id INT AUTO_INCREMENT NOT NULL, nmat_id INT NOT NULL, mlg DOUBLE PRECISION NOT NULL, frs DOUBLE PRECISION NOT NULL, ang DOUBLE PRECISION NOT NULL, hg DOUBLE PRECISION NOT NULL, eac DOUBLE PRECISION NOT NULL, ses DOUBLE PRECISION NOT NULL, spc DOUBLE PRECISION NOT NULL, svt DOUBLE PRECISION NOT NULL, math DOUBLE PRECISION NOT NULL, eps DOUBLE PRECISION NOT NULL, tice DOUBLE PRECISION NOT NULL, phylo DOUBLE PRECISION NOT NULL, trimestre INT NOT NULL, annee_scolaire INT NOT NULL, INDEX IDX_A3FD9D0F2B808156 (nmat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seconde (id INT AUTO_INCREMENT NOT NULL, nmat_id INT DEFAULT NULL, mlg DOUBLE PRECISION NOT NULL, frs DOUBLE PRECISION NOT NULL, ang DOUBLE PRECISION NOT NULL, hg DOUBLE PRECISION NOT NULL, eac DOUBLE PRECISION NOT NULL, ses DOUBLE PRECISION NOT NULL, spc DOUBLE PRECISION NOT NULL, math DOUBLE PRECISION NOT NULL, eps DOUBLE PRECISION NOT NULL, tice DOUBLE PRECISION NOT NULL, trimestre DOUBLE PRECISION NOT NULL, annee_scolaire DOUBLE PRECISION NOT NULL, total DOUBLE PRECISION NOT NULL, INDEX IDX_DB02BCB72B808156 (nmat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terminale (id INT AUTO_INCREMENT NOT NULL, nmat_id INT NOT NULL, mlg DOUBLE PRECISION NOT NULL, frs DOUBLE PRECISION NOT NULL, ang DOUBLE PRECISION NOT NULL, hg DOUBLE PRECISION NOT NULL, phylo DOUBLE PRECISION NOT NULL, math DOUBLE PRECISION NOT NULL, spc DOUBLE PRECISION NOT NULL, svt DOUBLE PRECISION NOT NULL, ses DOUBLE PRECISION NOT NULL, eps DOUBLE PRECISION NOT NULL, annee_scolaire INT NOT NULL, trimestre INT NOT NULL, INDEX IDX_EE8E70492B808156 (nmat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_role (user_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_2DE8C6A3A76ED395 (user_id), INDEX IDX_2DE8C6A3D60322AC (role_id), PRIMARY KEY(user_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E38F5EA509 FOREIGN KEY (classe_id) REFERENCES classe (id)');
        $this->addSql('ALTER TABLE premiere ADD CONSTRAINT FK_A3FD9D0F2B808156 FOREIGN KEY (nmat_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE seconde ADD CONSTRAINT FK_DB02BCB72B808156 FOREIGN KEY (nmat_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE terminale ADD CONSTRAINT FK_EE8E70492B808156 FOREIGN KEY (nmat_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E38F5EA509');
        $this->addSql('ALTER TABLE premiere DROP FOREIGN KEY FK_A3FD9D0F2B808156');
        $this->addSql('ALTER TABLE seconde DROP FOREIGN KEY FK_DB02BCB72B808156');
        $this->addSql('ALTER TABLE terminale DROP FOREIGN KEY FK_EE8E70492B808156');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3A76ED395');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3D60322AC');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE premiere');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE seconde');
        $this->addSql('DROP TABLE terminale');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_role');
    }
}
