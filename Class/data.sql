
CREATE TABLE Utilisateur (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    mot_de_passe VARCHAR(255)
);
CREATE TABLE Statut (
    id_statut INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255)
);

CREATE TABLE Tag (
    id_tag INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255)
);

CREATE TABLE Ticket (
    id_ticket INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255),
    description TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    priorite INT,
    id_createur INT,
    id_statut INT,
    FOREIGN KEY (id_statut) REFERENCES Statut(id_statut)
    FOREIGN KEY (id_createur) REFERENCES Utilisateur(id_utilisateur),
);

CREATE TABLE Commentaire (
    id_commentaire INT PRIMARY KEY AUTO_INCREMENT,
    contenu TEXT,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    id_utilisateur INT,
    id_ticket INT,
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
    FOREIGN KEY (id_ticket) REFERENCES Ticket(id_ticket)
);

CREATE TABLE Attribution (
    id_attribution INT PRIMARY KEY AUTO_INCREMENT,
    id_ticket INT,
    id_assigne INT,
    date_attribution TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_ticket) REFERENCES Ticket(id_ticket),
    FOREIGN KEY (id_assigne) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE Utilisateur_Ticket (
    id_utilisateur INT,
    id_ticket INT,
    PRIMARY KEY (id_utilisateur, id_ticket),
    FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
    FOREIGN KEY (id_ticket) REFERENCES Ticket(id_ticket)
);
