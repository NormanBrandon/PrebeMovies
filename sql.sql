CREATE TABLE `cartelera` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `descripcion` longchar(500) NOT NULL,
  `foto` longchar(500) NOT NULL   
);
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
);
SET NAMES 'utf8';
SET CHARACTER SET utf8;

INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1000   ', 'MAREA HUMANA
', '14:00 hrs. ', 'Ai Weiwei explora la crisis global de los refugiados a través de grabaciones y entrevistas en 22 países distintos: Afganistán, Bangladesh, Francia, Grecia, Alemania, Hungría, Irak, Israel, Italia, Jordania, Kenia, Líbano, Macedonia, Malasia, México, Pakistán, Palestina, Serbia, Suiza, Siria, Tailandia y Turquía. Ahí ha convivido con comunidades de inmigrantes y ha recogido sus experiencias.', 'http://cinetonala.mx/wp-content/uploads/2018/03/Poster-Marea-Humana-350-X-490.jpg');

INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1001', 'VIOLETA AL FIN
', '18:10 hrs', 'Violeta tiene 72 años. acaba de divorciarse y vive sola en la casa de su infancia, donde cuida del frondoso jardín y sueña con transformarla en una casa de huéspedes. al descubrir que el banco está a punto de rematar la propiedad, está dispuesta a todo para mantener su casa y su independencia.', 'https://2.bp.blogspot.com/-nI-dLB9zhWc/WG-BNHBJd-I/AAAAAAAAJnE/foiuvzMKBYQnsOL8_MP6EYarwm4nSBZkgCLcB/s1600/20541964.jpg');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1002   ', 'ROSTROS Y LUGARES
', '15:00 hrs', 'La veterana cineasta Agnès Varda y el artista urbano y fotógrafo JR, conocido por sus monumentales intervenciones gráficas en edificios y calles del mundo, se reúnen en este documental que retrata su improvisado paseo por algunos caminos y lugares de Francia.', 'http://lacasadelcine.mx/wp-content/uploads/2013/03/Rostros-y-Lugares-Poster-21x30-72dpi-210x300.jpg ');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1003   ', 'VERANO 1993
', '16:25 hrs', 'Frida, una niña de seis años, afronta el primer verano de su vida con su nueva familia adoptiva tras la muerte de su madre. Su nuevo entorno, conformado por sus tíos Esteve, Marga, y su pequeña prima Ana, serán una prueba de fuego para aprender a lidiar con las nuevas reglas y un duelo que Frida aún no comprende.', 'https://pics.filmaffinity.com/estiu_1993_verano_1993-275570297-large.jpg');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1004   ', 'LA CUARTA COMPAÑIA 
', '19:00 hrs. excepto jueves 17 ', 'Aclamado thriller basado en la historia real de Zambrano, joven que al ingresar a prisión quiere reivindicar la libertad perdida y pertenecer a Los perros, equipo penitenciario de futbol americano apadrinado por El negro, jefe de una policía capitalina marcada por el crimen, la ambición y el poder.

', 'http://www.fotogramas.es/var/ezflow_site/storage/images/peliculas/la-cuarta-compania/133022865-1-esl-ES/La-Cuarta-Compania.jpg');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1005   ', 'HOGAR
', '20:00 hrs', 'Kevin, un chico que acaba de salir de un centro de detención, se instala en la casa de sus tíos, los padres de Sammy, quien fuma en la cocina de su casa. Por otra parte, Lina lidia con las recriminaciones del director de su colegio, mientras John ignora las amonestaciones del vigilante del instituto. La madurez y el halo delincuente de Kevin impresiona a esta pequeña pandilla, cuya amistad crece y se conduce, inevitablemente, a un destino trágico.', 'http://filmoteca.unam.mx/resources/Filmoteca/Models/Exhibitions/Film/images/000/001/887/medium/hogar.jpg');

INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1006   ', 'Isla de Perros
', '11:40 hrs', 'ISLA DE PERROS cuenta la historia de ATARI KOBAYASHI, un chico de doce años pupilo del corrupto alcalde Kobayashi. Cuando, por decreto ejecutivo, todas las mascotas caninas de MegasakiCity son exiliadas a un gran basurero, Atari parte solo en una pequeña avioneta Junior-Turbo Prop y vuela a la isla de basura en busca de su perro guardián, Spots. Ahí, con la ayuda de una jauría de perros callejeros, que se convierten en sus nuevos amigos, comienza un viaje épico que decidirá el destino y futuro de toda la provincia.', 'http://es.web.img3.acsta.net/c_215_290/pictures/18/02/05/13/19/0374027.jpg');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1007   ', 'Promesa al Amanecer
', '17:00 hrs', 'Adaptación de la novela autobiográfica de Romain Gary, en el que recuerda su infancia en Polonia, su éxodo con su familia al sur de Francia para escapar de las consecuencias de la llegada al poder de Hitler en Alemania y como piloto durante la Segunda Guerra Mundial.', 'https://static.cinepolis.com/img/peliculas/27603/1/1/27603.jpg');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1008   ', 'Aún más Bella
', '10:00 hrs', 'Recién curada de cáncer de seno, Lucie trata de retomar su vida. Sin embargo, aunque su familia y amigos la alientan para que siga adelante, ella no encuentra la fuerza para hacerlo. Cuando conoce a Dalila, una profesora de danza que invita a mujeres como Lucie a vivir plenamente, a quererse, aceptarse y amarse de nuevo, se trasforma su perspectiva de sí misma y de la vida. En medio de éste proceso conoce a Clovis, un hombre atractivo y seductor que intrigado por el carácter de Lucie, hará todo lo posible por conquistarla pese a sus constantes negativas.', 'https://static.cinepolis.com/img/peliculas/26955/1/1/26955.jpg');
INSERT INTO `cartelera` (`id`, `nombre`, `hora`, `descripcion`, `foto`) VALUES ('1009   ', 'Nunca Estarás a Salvo
', '23:00 hrs', 'Un veterano de guerra (Joaquin Phoenix), sin miedo a la violencia, es contratado para encontrar a la hija desaparecida de un gobernador. Las pesadillas de Joe se vuelven realidad al descubrir una conspiración que lo conduce a la misión de rescate más peligrosa de su vida.', 'https://static.cinepolis.com/img/peliculas/27338/1/1/27338.jpg')

