<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190502110435 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, adress VARCHAR(255) DEFAULT NULL, postal_code INT DEFAULT NULL, city VARCHAR(50) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_a (id INT AUTO_INCREMENT NOT NULL, account_id INT DEFAULT NULL, event_id INT DEFAULT NULL, date_order DATE NOT NULL, quantity INT NOT NULL, INDEX IDX_96D1356F9B6B5FBA (account_id), INDEX IDX_96D1356F71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (place_name VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, postal_code INT NOT NULL, city VARCHAR(50) NOT NULL, PRIMARY KEY(place_name)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, place_name_place_id VARCHAR(255) DEFAULT NULL, title VARCHAR(30) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, event_type VARCHAR(9) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, price DOUBLE PRECISION NOT NULL, place_remain INT NOT NULL, place_max INT NOT NULL, INDEX IDX_3BAE0AA7931BE96D (place_name_place_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order_a ADD CONSTRAINT FK_96D1356F9B6B5FBA FOREIGN KEY (account_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE order_a ADD CONSTRAINT FK_96D1356F71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7931BE96D FOREIGN KEY (place_name_place_id) REFERENCES place (place_name)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE order_a DROP FOREIGN KEY FK_96D1356F9B6B5FBA');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7931BE96D');
        $this->addSql('ALTER TABLE order_a DROP FOREIGN KEY FK_96D1356F71F7E88B');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE order_a');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE event');
    }
}
