#CREATE TABLE users (
#    id INT AUTO_INCREMENT PRIMARY KEY,
#    nom VARCHAR(100) NOT NULL
#    
#);

#INSERT INTO users (nom) VALUES
#('John Doe'),
#('Mathis Thibault'),
#('Elly Dubois'),
CREATE TABLE IF NOT EXISTS etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL
);

INSERT INTO etudiants (nom) VALUES
('Alice Dupont'),
('Bob Martin'),
('Mathis Thibault'),
('Elly Dubois'),
('Jane Smith');
