CREATE DATABASE IF NOT EXISTS escuela;
USE escuela;

CREATE TABLE IF NOT EXISTS cascos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    talla VARCHAR(10) NOT NULL,
    color VARCHAR(30),
    precio DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- datos de ejemplo
INSERT INTO cascos (modelo, marca, talla, color, precio, stock) VALUES
('RX-7', 'Shoei', 'M', 'Negro/Rojo', 450.00, 10),
('GT-Air 2', 'Shoei', 'L', 'Blanco/Azul', 520.00, 5),
('X14', 'Arai', 'M', 'Negro Mate', 650.00, 8),
('RPHA 11', 'HJC', 'S', 'Rojo Racing', 350.00, 15),
('AGV K6', 'AGV', 'L', 'Gris Titanio', 420.00, 7),
('Corsa-X', 'Bell', 'XL', 'Amarillo/Negro', 380.00, 3),
('N100-5', 'Nolan', 'M', 'Azul Marino', 290.00, 12),
('FF800', 'LS2', 'S', 'Blanco/Rojo', 220.00, 20),
('Thunder 4', 'MT', 'M', 'Verde Lima', 180.00, 25),
('RF-1400', 'Shoei', 'L', 'Plateado', 680.00, 4);
-- 3. Verificar la creación
SELECT 'Tabla creada exitosamente' as Mensaje;
SELECT COUNT(*) as 'Total de cascos' FROM cascos;