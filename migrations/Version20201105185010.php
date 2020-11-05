<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201105185010 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE people_id_seq CASCADE');
        $this->addSql('ALTER TABLE people ALTER id TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE people ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE people ALTER password DROP NOT NULL');
        $this->addSql('ALTER TABLE people ALTER email DROP NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE people_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE people ALTER id TYPE INT');
        $this->addSql('ALTER TABLE people ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE people ALTER password SET NOT NULL');
        $this->addSql('ALTER TABLE people ALTER email SET NOT NULL');
    }
}
