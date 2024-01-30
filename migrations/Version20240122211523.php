<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240122211523 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE characters_users (characters_id INT NOT NULL, users_id INT NOT NULL, INDEX IDX_35E4D90EC70F0E28 (characters_id), INDEX IDX_35E4D90E67B3B43D (users_id), PRIMARY KEY(characters_id, users_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE characters_users ADD CONSTRAINT FK_35E4D90EC70F0E28 FOREIGN KEY (characters_id) REFERENCES characters (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE characters_users ADD CONSTRAINT FK_35E4D90E67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE characters_users DROP FOREIGN KEY FK_35E4D90EC70F0E28');
        $this->addSql('ALTER TABLE characters_users DROP FOREIGN KEY FK_35E4D90E67B3B43D');
        $this->addSql('DROP TABLE characters_users');
    }
}
