<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201113135910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE people_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pokemon_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE people (id VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, age INT NOT NULL, password VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, roles JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uniq_28166a26e7927c74 ON people (email)');
        $this->addSql('CREATE TABLE pokemon (id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, type_one VARCHAR(255) DEFAULT NULL, type_two VARCHAR(255) DEFAULT NULL, total NUMERIC(10, 0) DEFAULT NULL, hp NUMERIC(10, 0) DEFAULT NULL, attack NUMERIC(10, 0) DEFAULT NULL, defense NUMERIC(10, 0) DEFAULT NULL, special_attack NUMERIC(10, 0) DEFAULT NULL, special_defense NUMERIC(10, 0) DEFAULT NULL, speed NUMERIC(10, 0) DEFAULT NULL, generation NUMERIC(10, 0) DEFAULT NULL, legendary BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX pokemon_id_uindex ON pokemon (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE people_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pokemon_id_seq CASCADE');
        $this->addSql('DROP TABLE people');
        $this->addSql('DROP TABLE pokemon');
    }
}
