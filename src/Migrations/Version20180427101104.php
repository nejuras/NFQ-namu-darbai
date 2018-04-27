<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180427101104 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE gift');
        $this->addSql('DROP TABLE gift_list');
        $this->addSql('ALTER TABLE fos_user ADD linkedin VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE gift (id INT AUTO_INCREMENT NOT NULL, gift VARCHAR(254) DEFAULT NULL COLLATE utf8mb4_unicode_ci, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gift_list (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(101) DEFAULT NULL COLLATE utf8mb4_unicode_ci, lastname VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(101) DEFAULT NULL COLLATE utf8mb4_unicode_ci, title VARCHAR(200) NOT NULL COLLATE utf8mb4_unicode_ci, description VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, uuid VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX UNIQ_B6B50A45D17F50A6 (uuid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fos_user DROP linkedin');
    }
}
