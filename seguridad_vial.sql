CREATE DATABASE seguridad_vial;
USE seguridad_vial;
CREATE TABLE contactos_compromisos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telefono VARCHAR(20),
    mensaje TEXT,
    acepta_compromiso TINYINT(1) DEFAULT 0,
    tipo_conductor VARCHAR(50),
    edad INT,
    ip_registro VARCHAR(45),
    user_agent VARCHAR(255),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO contactos_compromisos
(nombre, email, telefono, mensaje, acepta_compromiso, tipo_conductor, edad, ip_registro, user_agent)
VALUES
('Ariana Quintino Guzman','ariana.qg@email.com','4452174499','Me comprometo a manejar con precaución.',1,'Particular',30,'127.0.0.1','Mozilla/5.0'),
('Mariana Margarita Gonzalez Zavala','mariana.mgz@email.com','4451446782','Apoyo la conducción segura.',1,'Particular',27,'127.0.0.1','Mozilla/5.0'),
('Dulce Maria Diego Chacon','dulce.mdc@email.com','4451083037','Interesado en cursos de manejo.',0,'Profesional',40,'127.0.0.1','Mozilla/5.0'),
('Jessica Sarai Morales Alarcon','jessica.sma@email.com','4451831266','Manejo responsable en ciudad.',1,'Particular',25,'127.0.0.1','Mozilla/5.0'),
('Martha Melisa Alcantar Gonzalez','martha.mag@email.com','4451016620','Evitar el celular al conducir.',1,'Profesional',38,'127.0.0.1','Mozilla/5.0'),
('Paola Rivera','paola.r@gmail.com','5567891234','Campañas de prevención.',1,'Particular',29,'127.0.0.1','Mozilla/5.0'),
('Miguel Sánchez','miguel.s@gmail.com','5534567890','Reducir accidentes.',1,'Profesional',45,'127.0.0.1','Mozilla/5.0'),
('Laura Castillo','laura.c@gmail.com','5578912345','Mayor señalización.',0,'Otro',22,'127.0.0.1','Mozilla/5.0'),
('Jorge Ramírez','jorge.r@gmail.com','5590123456','Cursos para jóvenes.',1,'Particular',33,'127.0.0.1','Mozilla/5.0'),
('Sofía Núñez','sofia.n@gmail.com','5521098765','Respeto a peatones.',1,'Particular',26,'127.0.0.1','Mozilla/5.0');
