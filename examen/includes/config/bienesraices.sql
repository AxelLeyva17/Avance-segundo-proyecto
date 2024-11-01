-- Active: 1730432982636@@127.0.0.1@3306
CREATE DATABASE bienesraices;

DROP DATABASE bienesraices;

USE bienesraices;

CREATE TABLE seller(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    email VARCHAR(32) NOT NULL,
    phone VARCHAR(10)
);

CREATE TABLE propierties (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(32) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(256),
    description TEXT,
    rooms INT,
    wc INT,
    garage INT,
    id_seller INT(11),
    CONSTRAINT fk_seller FOREIGN KEY (id_seller) REFERENCES seller(id)
);


CREATE TABLE sales (
    property_id INT(11),
    seller_id INT(11),
    sale_date DATE,
    PRIMARY KEY (property_id, seller_id, sale_date),
    CONSTRAINT fk_property_sales FOREIGN KEY (property_id) REFERENCES propierties(id),
    CONSTRAINT fk_seller_sales FOREIGN KEY (seller_id) REFERENCES seller(id)
);

INSERT INTO seller VALUES
(1001, "Foo Bar", "foo@bar.com", 1234567890),
(1002, "Bar Foo", "bar@foo.com", 9987654321);

INSERT INTO propierties (title, price, image, description, rooms, wc, garage, id_seller)
VALUES
('Casa en el centro', 250000.00, NULL, 'Casa en el centro de la ciudad', 3, 2, 1, 1001),
('Departamento en la playa', 180000.00,NULL, 'Departamento en la playa con vista al mar', 2, 1, 0,1002),
('Casa en el campo', 350000.00, NULL, 'Casa en el campo con gran jardín', 4, 3, 2, 1001),
('Apartamento en la ciudad', 120000.00, NULL, 'Apartamento en la ciudad cerca del centro', 1, 1, 0,1001),
('Chalet en la montaña', 500000.00, NULL, 'Chalet en la montaña con vistas impresionantes', 5, 4, 3,1002);


show tables from bienesraices


select * from seller

select * from propierties

DESCRIBE propierties

SELECT * from sales