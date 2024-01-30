<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122210523 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE character_photos (id INT AUTO_INCREMENT NOT NULL, character_id_id INT DEFAULT NULL, photo_url VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_AB34234A81877935 (character_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE characters (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, element_type VARCHAR(255) NOT NULL, weapon_type VARCHAR(255) NOT NULL, rarity INT NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE characters_teams (characters_id INT NOT NULL, teams_id INT NOT NULL, INDEX IDX_B7A55EBFC70F0E28 (characters_id), INDEX IDX_B7A55EBFD6365F12 (teams_id), PRIMARY KEY(characters_id, teams_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teams (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_96C222589D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_photos (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, photo_url VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6D24FBE49D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE character_photos ADD CONSTRAINT FK_AB34234A81877935 FOREIGN KEY (character_id_id) REFERENCES characters (id)');
        $this->addSql('ALTER TABLE characters_teams ADD CONSTRAINT FK_B7A55EBFC70F0E28 FOREIGN KEY (characters_id) REFERENCES characters (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE characters_teams ADD CONSTRAINT FK_B7A55EBFD6365F12 FOREIGN KEY (teams_id) REFERENCES teams (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teams ADD CONSTRAINT FK_96C222589D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_photos ADD CONSTRAINT FK_6D24FBE49D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE character_photos DROP FOREIGN KEY FK_AB34234A81877935');
        $this->addSql('ALTER TABLE characters_teams DROP FOREIGN KEY FK_B7A55EBFC70F0E28');
        $this->addSql('ALTER TABLE characters_teams DROP FOREIGN KEY FK_B7A55EBFD6365F12');
        $this->addSql('ALTER TABLE teams DROP FOREIGN KEY FK_96C222589D86650F');
        $this->addSql('ALTER TABLE user_photos DROP FOREIGN KEY FK_6D24FBE49D86650F');
        $this->addSql('DROP TABLE character_photos');
        $this->addSql('DROP TABLE characters');
        $this->addSql('DROP TABLE characters_teams');
        $this->addSql('DROP TABLE teams');
        $this->addSql('DROP TABLE user_photos');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
