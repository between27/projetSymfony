<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240130150047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE characters (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, element VARCHAR(255) NOT NULL, weapon_type VARCHAR(255) NOT NULL, rarity INT NOT NULL, INDEX IDX_3A29410E9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapons (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, rarity INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE weapons_characters (weapons_id INT NOT NULL, characters_id INT NOT NULL, INDEX IDX_160E92F62EE82581 (weapons_id), INDEX IDX_160E92F6C70F0E28 (characters_id), PRIMARY KEY(weapons_id, characters_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE characters ADD CONSTRAINT FK_3A29410E9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE weapons_characters ADD CONSTRAINT FK_160E92F62EE82581 FOREIGN KEY (weapons_id) REFERENCES weapons (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE weapons_characters ADD CONSTRAINT FK_160E92F6C70F0E28 FOREIGN KEY (characters_id) REFERENCES characters (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characters DROP FOREIGN KEY FK_3A29410E9D86650F');
        $this->addSql('ALTER TABLE weapons_characters DROP FOREIGN KEY FK_160E92F62EE82581');
        $this->addSql('ALTER TABLE weapons_characters DROP FOREIGN KEY FK_160E92F6C70F0E28');
        $this->addSql('DROP TABLE characters');
        $this->addSql('DROP TABLE weapons');
        $this->addSql('DROP TABLE weapons_characters');
    }
}
