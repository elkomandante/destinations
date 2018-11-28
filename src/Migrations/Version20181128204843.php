<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181128204843 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE destination CHANGE introtext introtext LONGTEXT DEFAULT NULL, CHANGE bottom_text bottom_text LONGTEXT DEFAULT NULL, CHANGE short_content short_content LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE destination CHANGE bottom_text bottom_text LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE introtext introtext LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE short_content short_content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
