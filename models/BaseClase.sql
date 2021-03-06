mysql -u root -p

DROP DATABASE IF EXISTS inventario;
CREATE DATABASE inventario;

USE inventario;


create table productos(
códigoartículo varchar(5)   not null  primary key,
sección varchar(50) not null,
nombreArtículo varchar(50) not null,
fecha date not null,
precio float not null,
importado bool not null,
paísdeorigen varchar(30),
foto varchar(100));


create table productosnuevos(
códigoartículo varchar(5)   not null  primary key,
sección varchar(50) not null,
nombreArtículo varchar(50) not null,
fecha date not null,
precio float not null,
importado bool not null,
paísdeorigen varchar(30),
foto varchar(100));


INSERT INTO `productosnuevos` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBREARTÍCULO`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`, `FOTO`) VALUES
('AR50', 'ALTA COSTURA', 'TRAJE CABALLERO', '1.284,58', '11/03/2002', 'VERDADERO', 'ITALIA', NULL),
('AR51', 'DEPORTES DE RIESGO', 'RAQUETA TENIS', '1.093,47', '20/03/2000', 'VERDADERO', 'USA', NULL),
('AR52', 'DEPORTES DE RIESGO', 'MANCUERNAS', '1.060,00', '13/09/2000', 'VERDADERO', 'USA', NULL),
('AR53', 'ALTA COSTURA', 'SERRUCHO', '1.030,20', '23/03/2001', 'VERDADERO', 'FRANCIA', NULL),
('AR54', 'ALTA COSTURA', 'PANTALÓN SEÑORA', '1.174,23', '10/01/2000', 'VERDADERO', 'MARRUECOS', NULL),
('AR55', 'ALTA COSTURA', 'CAMISA CABALLERO', '1.067,13', '11/08/2002', 'FALSO', 'ESPAÑA', NULL),
('AR56', 'DEPORTES DE RIESGO', 'PISTOLA OLÍMPICA', '1.046,73', '02/02/2001', 'VERDADERO', 'SUECIA', NULL),
('AR57', 'ALTA COSTURA', 'BLUSA SRA.', '1.101,06', '18/03/2000', 'VERDADERO', 'CHINA', NULL),
('AR58', 'ALTA COSTURA', 'CAZADORA PIEL', '1.522,69', '10/07/2001', 'VERDADERO', 'ITALIA', NULL),
('AR59', 'DEPORTES DE RIESGO', 'BALÓN RUGBY', '1.111,64', '11/11/2000', 'VERDADERO', 'USA', NULL),
('AR60', 'DEPORTES DE RIESGO', 'BALÓN BALONCESTO', '1.075,27', '25/06/2001', 'VERDADERO', 'JAPÓN', NULL),
('AR61', 'ALTA COSTURA', 'ABRIGO CABALLERO', '1.500,00', '05/04/2002', 'VERDADERO', 'ITALIA', NULL),
('AR62', 'DEPORTES DE RIESGO', 'BALÓN FÚTBOL', '1.043,91', '04/07/2002', 'FALSO', 'ESPAÑA', NULL),
('AR63', 'ALTA COSTURA', 'ABRIGO SRA', '1.360,07', '03/05/2001', 'VERDADERO', 'MARRUECOS', NULL),
('AR64', 'DEPORTES DE RIESGO', 'CRONÓMETRO', '1.439,18', '03/01/2002', 'VERDADERO', 'USA', NULL),
('AR65', 'ALTA COSTURA', 'CINTURÓN DE PIEL', '1.004,33', '12/05/2002', 'FALSO', 'ESPAÑA', NULL),
('AR66', 'DEPORTES DE RIESGO', 'CAÑA DE PESCA', '1.270,00', '14/02/2000', 'VERDADERO', 'USA', NULL),
('AR67', 'DEPORTES DE RIESGO', 'BOTA ALPINISMO', '1.144,00', '05/05/2002', 'FALSO', 'ESPAÑA', NULL),
('AR68', 'DEPORTES DE RIESGO', 'PALAS DE PING PONG', '1.021,60', '02/02/2002', 'FALSO', 'ESPAÑA', NULL);


INSERT INTO `inventario`.`PRODUCTOS` (`CÓDIGOARTÍCULO`, `SECCIÓN`, `NOMBREARTÍCULO`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAÍSDEORIGEN`, `FOTO`) VALUES ('AR01', 'FERRETERÍA', 'DESTORNILLADOR', '6,63', '22/10/2000', 'FALSO', 'ESPAÑA', NULL),
 ('AR02', 'CONFECCIÓN', 'TRAJE CABALLERO', '284,58', '11/03/2002', 'VERDADERO', 'ITALIA', NULL),
 ('AR03', 'JUGUETERÍA', 'COCHE TELEDIRIGIDO', '159,45', '26/05/2002', 'VERDADERO', 'MARRUECOS', NULL),
 ('AR04', 'DEPORTES', 'RAQUETA TENIS', '93,47', '20/03/2000', 'VERDADERO', 'USA', NULL),
 ('AR06', 'DEPORTES', 'MANCUERNAS', '60,00', '13/09/2000', 'VERDADERO', 'USA', NULL),
 ('AR07', 'CONFECCIÓN', 'SERRUCHO', '30,20', '23/03/2001', 'VERDADERO', 'FRANCIA', NULL),
 ('AR08', 'JUGUETERÍA', 'CORREPASILLOS', '103,34', '11/04/2000', 'VERDADERO', 'JAPÓN', NULL),
 ('AR09', 'CONFECCIÓN', 'PANTALÓN SEÑORA', '174,23', '10/01/2000', 'VERDADERO', 'MARRUECOS', NULL),
 ('AR10', 'JUGUETERÍA', 'CONSOLA VIDEO', '442,54', '24/09/2002', 'VERDADERO', 'USA', NULL),
 ('AR11', 'CERÁMICA', 'TUBOS', '168,43', '04/02/2000', 'VERDADERO', 'CHINA', NULL),
 ('AR12', 'FERRETERÍA', 'LLAVE INGLESA', '24,40', '23/05/2001', 'VERDADERO', 'USA', NULL),
 ('AR13', 'CONFECCIÓN', 'CAMISA CABALLERO', '67,13', '11/08/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR14', 'JUGUETERÍA', 'TREN ELÉCTRICO', '1.505,38', '03/07/2001', 'VERDADERO', 'JAPÓN', NULL),
 ('AR15', 'CERÁMICA', 'PLATO DECORATIVO', '54,09', '07/06/2000', 'VERDADERO', 'CHINA', NULL),
 ('AR16', 'FERRETERÍA', 'ALICATES', '6,74', '17/04/2000', 'VERDADERO', 'ITALIA', NULL),
 ('AR17', 'JUGUETERÍA', 'MUÑECA ANDADORA', '105,06', '04/01/2001', 'FALSO', 'ESPAÑA', NULL),
 ('AR18', 'DEPORTES', 'PISTOLA OLÍMPICA', '46,73', '02/02/2001', 'VERDADERO', 'SUECIA', NULL),
 ('AR19', 'CONFECCIÓN', 'BLUSA SRA.', '101,06', '18/03/2000', 'VERDADERO', 'CHINA', NULL),
 ('AR20', 'CERÁMICA', 'JUEGO DE TE', '43,27', '15/01/2001', 'VERDADERO', 'CHINA', NULL),
 ('AR21', 'CERÁMICA', 'CENICERO', '19,75', '02/07/2001', 'VERDADERO', 'JAPÓN', NULL),
 ('AR22', 'FERRETERÍA', 'MARTILLO', '11,40', '04/09/2001', 'FALSO', 'ESPAÑA', NULL),
 ('AR23', 'CONFECCIÓN', 'CAZADORA PIEL', '522,69', '10/07/2001', 'VERDADERO', 'ITALIA', NULL),
 ('AR24', 'DEPORTES', 'BALÓN RUGBY', '111,64', '11/11/2000', 'VERDADERO', 'USA', NULL),
 ('AR25', 'DEPORTES', 'BALÓN BALONCESTO', '75,27', '25/06/2001', 'VERDADERO', 'JAPÓN', NULL),
 ('AR26', 'JUGUETERÍA', 'FUERTE DE SOLDADOS', '143,70', '25/11/2000', 'VERDADERO', 'JAPÓN', NULL),
 ('AR27', 'CONFECCIÓN', 'ABRIGO CABALLERO', '500.000,00', '05/04/2002', 'VERDADERO', 'ITALIA', NULL),
 ('AR28', 'DEPORTES', 'BALÓN FÚTBOL', '43,91', '04/07/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR29', 'CONFECCIÓN', 'ABRIGO SRA', '360,07', '03/05/2001', 'VERDADERO', 'MARRUECOS', NULL),
 ('AR30', 'FERRETERÍA', 'DESTORNILLADOR', '9,06', '20/02/2002', 'VERDADERO', 'FRANCIA', NULL),
 ('AR31', 'JUGUETERÍA', 'PISTOLA CON SONIDOS', '57,25', '15/04/2001', 'FALSO', 'ESPAÑA', NULL),
 ('AR32', 'DEPORTES', 'CRONÓMETRO', '439,18', '03/01/2002', 'VERDADERO', 'USA', NULL),
 ('AR33', 'CERÁMICA', 'MACETA', '29,04', '23/02/2000', 'FALSO', 'ESPAÑA', NULL),
 ('AR34', 'OFICINA', 'PIE DE LÁMPARA', '39,76', '27/05/2001', 'VERDADERO', 'TURQUÍA', NULL),
 ('AR35', 'FERRETERÍA', 'LIMA GRANDE', '22,07', '10/08/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR36', 'FERRETERÍA', 'JUEGO DE BROCAS', '15,10', '04/07/2002', 'VERDADERO', 'TAIWÁN', NULL),
 ('AR37', 'CONFECCIÓN', 'CINTURÓN DE PIEL', '4,33', '12/05/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR38', 'DEPORTES', 'CAÑA DE PESCA', '270,00', '14/02/2000', 'VERDADERO', 'USA', NULL),
 ('AR39', 'CERÁMICA', 'JARRA CHINA', '127,77', '02/09/2002', 'VERDADERO', 'CHINA', NULL),
 ('AR40', 'DEPORTES', 'BOTA ALPINISMO', '144,00', '05/05/2002', 'FALSO', 'ESPAÑA', NULL),
 ('AR41', 'DEPORTES', 'PALAS DE PING PONG', '21,60', '02/02/2002', 'FALSO', 'ESPAÑA', NULL);