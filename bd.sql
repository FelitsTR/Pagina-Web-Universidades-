CREATE DATABASE feria_u;
USE feria_u;

CREATE TABLE comentarios (
    id_falla int(5) NOT NULL AUTO_INCREMENT,
    falla varchar(300) NOT NULL,
    PRIMARY KEY (id_falla)
);

CREATE TABLE municipio (
    id_municipio int(3) NOT NULL,
    nombre_muni varchar(25) NOT NULL,
    PRIMARY KEY (id_municipio)
);

CREATE TABLE usuarios_uni (
    id_usu_uni int(6) NOT NULL AUTO_INCREMENT,
    correo_u varchar(50) NOT NULL,
    clave_uni varchar(16) NOT NULL,
    PRIMARY KEY (id_usu_uni)
);

CREATE TABLE universidades (
    id_universidad int(6) NOT NULL,
    nombre_uni varchar(50) NOT NULL,
    telefono_uni varchar(10) NOT NULL,
    correo_uni varchar(50) NOT NULL,
    id_municipio int(3) NOT NULL,
    logo_uni varchar(600) NOT NULL,
    id_usu_uni int(6) NOT NULL,
    latitud varchar(10) NOT NULL,
    longitud varchar(10) NOT NULL,
    facebook varchar(150) NOT NULL,
    whatsapp varchar(12) NOT NULL,
    src_video varchar(100) NOT NULL,
    img_uni_1 varchar(600) NOT NULL,
    img_uni_2 varchar(600) NOT NULL,
    img_uni_3 varchar(600) NOT NULL,
    PRIMARY KEY (id_universidad),
    FOREIGN KEY (id_municipio) REFERENCES municipio (id_municipio),
    FOREIGN KEY (id_usu_uni) REFERENCES usuarios_uni (id_usu_uni)
);

CREATE TABLE oferta_educativa (
    id_oferta int(7) NOT NULL AUTO_INCREMENT,
    id_universidad int(6) NOT NULL,
    periodo_academico varchar(25) NOT NULL,
    carrera varchar(50) NOT NULL,
    descripcion varchar(600) NOT NULL,
    objetivo varchar(600) NOT NULL,
    perfil_ingreso varchar(600) NOT NULL,
    perfil_egreso varchar(600) NOT NULL,
    plan_estudio varchar(100) NOT NULL,
    carrera_video varchar(100) NOT NULL,
    tipo_carrera varchar(25) NOT NULL,
    src_doc varchar(100) NOT NULL,
    years int(2) NOT NULL,
    meses int(2) NOT NULL,
    img_ofer_1 varchar(600) NOT NULL,
    img_ofer_2 varchar(600) NOT NULL,
    img_ofer_3 varchar(600) NOT NULL,
    PRIMARY KEY (id_oferta),
    FOREIGN KEY (id_universidad) REFERENCES universidades(id_universidad)
);

CREATE TABLE conferencias (
    id_conferencia int(6) NOT NULL,
    id_universidad int(6) NOT NULL,
    nombre_conferencia varchar(50) NOT NULL,
    src_conferencia varchar(40) NOT NULL,
    PRIMARY KEY (id_conferencia),
    FOREIGN KEY (id_universidad) REFERENCES universidades(id_universidad)
);

CREATE TABLE usuarios (
    id_usuario int(6) NOT NULL AUTO_INCREMENT,
    nombre_usu varchar(30) NOT NULL,
    telefono_usu varchar(30) NOT NULL,
    correo_usu varchar(30) NOT NULL,
    clave_usu varchar(16) NOT NULL,
    motivo_usu int(2) NOT NULL,
    PRIMARY KEY (id_usuario)
);


INSERT INTO municipio (id_municipio, nombre_muni) VALUES
(1, 'Cozumel'),
(2, 'Felipe Carrillo Puerto'),
(3, 'Isla Mujeres'),
(4, 'Othón P. Blanco'),
(5, 'Benito Juárez'),
(6, 'José María Morelos'),
(7, 'Lázaro Cárdenas'),
(8, 'Solidaridad'),
(9, 'Tulum'),
(10, 'Bacalar'),
(11, 'Puerto Morelos');


INSERT INTO usuarios_uni (id_usu_uni, correo_u, clave_uni) VALUES
(1, 'upqrooferia@gmail.com', 'upqroo');

INSERT INTO usuarios (id_usuario, nombre_usu, telefono_usu, correo_usu, clave_usu, motivo_usu) VALUES
(1, 'Pepe', '9884096915', 'sgr', 'pepe', 1);