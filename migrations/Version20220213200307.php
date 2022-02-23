<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213200307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY fk_id_client_commande');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY fk_id_client');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY fk_id_client_panier');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY fk_ref_p');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY fk_id_res');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE coach_prive');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE nutritionniste');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE staff');
        $this->addSql('ALTER TABLE evenement CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE Date date DATE NOT NULL, CHANGE Image image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE client (id_client INT NOT NULL, nomC VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, prenomC VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_de_naiss_C DATE DEFAULT NULL, sexeC VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, adresseC VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, telephoneC INT NOT NULL, EmailC VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_client)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE coach_prive (id_Coach INT NOT NULL, nom_Coach VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, prenomCoach VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, spécialité VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, adresseCoach VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, numCoach INT NOT NULL, PRIMARY KEY(id_Coach)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE commande (id_commande INT NOT NULL, id_client INT NOT NULL, titre INT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prix INT NOT NULL, date_rec DATE NOT NULL, INDEX fk_id_client_commande (id_client), PRIMARY KEY(id_commande)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE cours (id_seance INT NOT NULL, type_cours VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_cours DATE NOT NULL, heure_debut TIME NOT NULL, duree TIME NOT NULL, niveau VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, numero_salle INT NOT NULL, INDEX fc_numero_salle (numero_salle), PRIMARY KEY(id_seance)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE livraison (id_livraison INT NOT NULL, id_client INT NOT NULL, date_livraison DATE NOT NULL, adresseC VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_id_client (id_client), PRIMARY KEY(id_livraison)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE nutritionniste (id_nut INT NOT NULL, nom_nut VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PrenomNut VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, adresseNut VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, num_nut INT NOT NULL, PRIMARY KEY(id_nut)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE panier (ref_panier INT NOT NULL, id_client INT NOT NULL, ref_p INT NOT NULL, id_res INT NOT NULL, datepay DATE NOT NULL, modalite INT NOT NULL, tarif INT NOT NULL, modedepay VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_id_client_panier (id_client), INDEX fk_ref_p (ref_p), INDEX fk_id_res (id_res), PRIMARY KEY(ref_panier)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (ref_p INT NOT NULL, id_categorie INT NOT NULL, libelle INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, nombre INT NOT NULL, prix DOUBLE PRECISION NOT NULL, reduction INT NOT NULL, date DATE NOT NULL, INDEX fk_idcategorie (id_categorie), PRIMARY KEY(ref_p)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation (id_res INT NOT NULL, id_event INT NOT NULL, id_client INT NOT NULL, date_res DATE NOT NULL, nbr_personne INT NOT NULL, INDEX fk_id_event (id_event), INDEX id_client (id_client), PRIMARY KEY(id_res)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE salle (numero_salle INT NOT NULL, surface DOUBLE PRECISION NOT NULL, nom_salle VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, capacite INT NOT NULL, nombre_cours INT NOT NULL, PRIMARY KEY(numero_salle)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE staff (id_staff INT NOT NULL, nom_staff VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, prenom_staff VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_de_naiss_s DATE NOT NULL, sexe VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, adresse VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, telephone INT NOT NULL, Email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, poste INT NOT NULL, date_entree DATE NOT NULL, PRIMARY KEY(id_staff)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT fk_id_client_commande FOREIGN KEY (id_client) REFERENCES client (id_client) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT fk_id_client FOREIGN KEY (id_client) REFERENCES client (id_client) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT fk_id_client_panier FOREIGN KEY (id_client) REFERENCES client (id_client) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT fk_id_res FOREIGN KEY (id_res) REFERENCES reservation (id_res) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT fk_ref_p FOREIGN KEY (ref_p) REFERENCES produit (ref_p) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT fk_id_event FOREIGN KEY (id_event) REFERENCES evenement (idEvent) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_1 FOREIGN KEY (id_client) REFERENCES client (id_client) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement CHANGE id id INT NOT NULL, CHANGE date Date DATE DEFAULT NULL, CHANGE image Image BLOB NOT NULL');
    }
}
