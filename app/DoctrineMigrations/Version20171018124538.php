<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171018124538 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD is_scientist TINYINT(1) NOT NULL, ADD first_name VARCHAR(255) DEFAULT NULL, ADD last_name VARCHAR(255) DEFAULT NULL, ADD avatar_uri VARCHAR(255) DEFAULT NULL, ADD university_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE genus_scientist RENAME INDEX idx_2656d0b185c4074c TO IDX_66CF3FA885C4074C');
        $this->addSql('ALTER TABLE genus_scientist RENAME INDEX idx_2656d0b1a76ed395 TO IDX_66CF3FA8A76ED395');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE genus_scientist RENAME INDEX idx_66cf3fa885c4074c TO IDX_2656D0B185C4074C');
        $this->addSql('ALTER TABLE genus_scientist RENAME INDEX idx_66cf3fa8a76ed395 TO IDX_2656D0B1A76ED395');
        $this->addSql('ALTER TABLE user DROP is_scientist, DROP first_name, DROP last_name, DROP avatar_uri, DROP university_name');
    }
}
