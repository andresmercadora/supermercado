CREATE DATABASE supermercado DEFAULT CHARACTER SET utf8;

USE supermercado;

CREATE TABLE administrador(
cedula VARCHAR(10) NOT NULL UNIQUE,
nombre1 VARCHAR(15) NOT NULL,
nombre2 VARCHAR(15),
apellido1 VARCHAR(15) NOT NULL,
apellido2 VARCHAR(15) NOT NULL,
direccion VARCHAR(55) NOT NULL,
telefono VARCHAR(10) NOT NULL,
email VARCHAR(225) NOT NULL UNIQUE,
password VARCHAR(225) NOT NULL,
PRIMARY KEY(cedula)
);


CREATE TABLE producto(
	cod_producto INT NOT NULL AUTO_INCREMENT UNIQUE,
	nombre_producto VARCHAR(55) NOT NULL,
	cantidad_producto INT(5) NOT NULL,
	precio_unidad INT(5) NOT NULL,
	descripcion VARCHAR(1000) NOT NULL,
	marca VARCHAR(55) NOT NULL,
	t_producto INT(2) NOT NULL,
        cedula_adm VARCHAR(10) NOT NULL,
	PRIMARY KEY(cod_producto),
        FOREIGN KEY(cedula_adm)
        REFERENCES administrador(cedula) 
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);

CREATE TABLE proveedor(
nit INT NOT NULL AUTO_INCREMENT UNIQUE,
nombre VARCHAR(55) NOT NULL,
direccion VARCHAR(55) NOT NULL,
telefono VARCHAR(10) NOT NULL,
email VARCHAR(225) NOT NULL UNIQUE,
cedula_adm VARCHAR(10) NOT NULL,
PRIMARY KEY(nit),
FOREIGN KEY(cedula_adm)
REFERENCES administrador(cedula) 
ON UPDATE CASCADE
ON DELETE RESTRICT
);

CREATE TABLE prod_prov(
id_pp INT NOT NULL AUTO_INCREMENT UNIQUE,
producto_cod INT NOT NULL,
nit_p INT NOT NULL,
PRIMARY KEY(id_pp),
FOREIGN KEY(producto_cod)
REFERENCES producto(cod_producto) 
ON UPDATE CASCADE
ON DELETE RESTRICT,
FOREIGN KEY(nit_p)
REFERENCES proveedor(nit) 
ON UPDATE CASCADE
ON DELETE RESTRICT
);

CREATE TABLE adm_prod(
id_ap INT NOT NULL AUTO_INCREMENT UNIQUE,
cedula_a VARCHAR(10) NOT NULL,
producto_codigo INT NOT NULL,
PRIMARY KEY(id_ap),
FOREIGN KEY(cedula_a)
REFERENCES administrador(cedula) 
ON UPDATE CASCADE
ON DELETE RESTRICT,
FOREIGN KEY(producto_codigo)
REFERENCES producto(cod_producto) 
ON UPDATE CASCADE
ON DELETE RESTRICT
);

INSERT INTO `administrador` (`cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `direccion`, `telefono`, `email`, `password`) VALUES ('1234567890', 'admin_1', '', 'lopez', 'sierra', 'Cl 24 No 56 - 567', '3214366', 'admin_1@email.com', '$2y$10$F9cHkukiywxIasx2aI83SeMxiyywSGEq3jAKZhcMVaD0g1YusaJoy');