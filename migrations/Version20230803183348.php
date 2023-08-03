<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230803183348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE nin_holder3');
        $this->addSql('ALTER TABLE nin_holder CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE enrollee enrollee VARCHAR(255) NOT NULL, CHANGE gender gender VARCHAR(12) NOT NULL, CHANGE marital_status marital_status VARCHAR(20) NOT NULL, CHANGE creation_date creation_date DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE nin_holder2 CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE enrollee enrollee VARCHAR(255) NOT NULL, CHANGE gender gender VARCHAR(12) NOT NULL, CHANGE marital_status marital_status VARCHAR(20) NOT NULL, CHANGE creation_date creation_date DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nin_holder3 (id INT DEFAULT 0 NOT NULL, enrollee VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, gender VARCHAR(12) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_of_birth DATE NOT NULL, marital_status VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, disabled TINYINT(1) DEFAULT NULL, creation_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\') DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE nin_holder2 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON nin_holder2');
        $this->addSql('ALTER TABLE nin_holder2 CHANGE id id INT DEFAULT 0 NOT NULL, CHANGE enrollee enrollee VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE gender gender VARCHAR(12) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE marital_status marital_status VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE creation_date creation_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE nin_holder MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON nin_holder');
        $this->addSql('ALTER TABLE nin_holder CHANGE id id INT DEFAULT 0 NOT NULL, CHANGE enrollee enrollee VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE gender gender VARCHAR(12) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE marital_status marital_status VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE creation_date creation_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
