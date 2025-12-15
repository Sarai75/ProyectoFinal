CREATE DATABASE IF NOT EXISTS cascos;
USE cascos;

CREATE TABLE IF NOT EXISTS encuestas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    grupo VARCHAR(20) NOT NULL,
    usa_casco VARCHAR(50) NOT NULL,
    certificacion VARCHAR(50) NOT NULL,
    comentario TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO encuestas (nombre, grupo, usa_casco, certificacion, comentario) VALUES
('Melisa', '5AVP', 'Siempre', 'Sí', 'Todos deberían usar casco'),
('Margarita', '3B', 'A veces', 'No sé', 'Falta concientización');

SHOW TABLES;

SELECT * FROM encuestas;