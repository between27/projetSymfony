<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240130233157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE character_photo (id INT AUTO_INCREMENT NOT NULL, character_id_id INT DEFAULT NULL, photo_url VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EA74637A81877935 (character_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE character_photo ADD CONSTRAINT FK_EA74637A81877935 FOREIGN KEY (character_id_id) REFERENCES characters (id)');
        $this->addSql('ALTER TABLE character_photos DROP FOREIGN KEY FK_AB34234A81877935');
        $this->addSql('DROP TABLE character_photos');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE character_photos (id INT AUTO_INCREMENT NOT NULL, character_id_id INT DEFAULT NULL, photo_url VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_AB34234A81877935 (character_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE character_photos ADD CONSTRAINT FK_AB34234A81877935 FOREIGN KEY (character_id_id) REFERENCES characters (id)');
        $this->addSql('ALTER TABLE character_photo DROP FOREIGN KEY FK_EA74637A81877935');
        $this->addSql('DROP TABLE character_photo');
    }
}
