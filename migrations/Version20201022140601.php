<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201022140601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon_monsters ADD special_attack INT NULL');
        $this->addSql('ALTER TABLE pokemon_monsters ALTER id DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE pokemon_monsters DROP special_attack');
        $this->addSql('CREATE SEQUENCE pokemon_monsters_id_seq');
        $this->addSql('SELECT setval(\'pokemon_monsters_id_seq\', (SELECT MAX(id) FROM pokemon_monsters))');
        $this->addSql('ALTER TABLE pokemon_monsters ALTER id SET DEFAULT nextval(\'pokemon_monsters_id_seq\')');
    }
}
