CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mensaje` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `contacto` (`id`, `nombre`, `email`, `mensaje`) VALUES
(2, 'Anyelo', 'anyelo@uvm.edu.ve', 'Excelente sitio web. Me gustaría saber si tiene disponibles relojes de caballero en plata. Gracias!');

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `imagen_grande` varchar(60) NOT NULL,
  `imagen_mini` varchar(60) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `descripcion` longtext NOT NULL,
  `descripcion_corta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `productos` (`id`, `nombre`, `imagen_grande`, `imagen_mini`, `precio`, `descripcion`, `descripcion_corta`) VALUES
(1, 'Collar de Plata chapado en oro', 'producto_1.jpg', 'producto_mini_1.jpg', '25.00', 'Un collar de corazon con un recortado más pequeño que se vuelven en uno solo, una flecha con forma de corazon. Ambos collares se pueden personalizar con una palabra o inscripcion especial. Personaliza el tuyo ahora y haz que este collar sea único, solo para ustedes 2. Material plata de ley chapado en oro y AAA circonita cubica. exquisita artesania. Especificaciones: Colgante Tamaño: 0,77 pul x 0,73 pul, mama doble corazón. Tamaño de la cadena: 16 + 2 pul, super fuerte cadena de cable con un mosqueton ajustable cm. Peso: 0.18oz. color: blanco y oro rosa, adorable, diseño de moda, pulido a mano, simple pero elegante. Descripción: esta adorable mamá corazón doble diseño estó destinado a ganar un corazón. engastado en plata de ley chapado en oro de la madre, de esta manera collar tiene un doble en forma de corazón Colgante Attached y un brillantes AAA circonitas cúbicas Gemstone. pulido a un brillo brillante, el colgante suspende sobre un cable 18.0-inch cadena y asegura con un mosqueton. regalo ideal elección: Viene con una elegante caja regalo. es un regalo ideal para sus, madre, esposa, amante, prometida, novia, hija, hermana o amigo en el día de Navidad, Dia de Acción de Gracias, día de la madre, día de San Valentin, boda, aniversario, cumpleaños o una ocasión especial, la mejor confesión de amor. Regalo de Navidad perfecto para mama, suegra Un corazón MOM colgante collar como una conexión especial hace un regalo perfecto para mama para expresar su amor. Regalos Sorprendentes Sorpresa Nada es más maravilloso que la mente.', 'Collar de Corazon y Flecha es la manera perfecta de sorprender a tu pareja! Tu y tu pareja atesoraran este collar para siempre'),
(2, 'Anillo de Diamante', 'producto_2.jpg', 'producto_mini_2.jpg', '50.00', 'Anillo \"Piamonte\" Oro Blanco 18k y Diamante 0.20 cts: Con cuerpo de sección rectangular, \"Piamonte\" engasta en garra de cuatro patillas un espectacular diamante de 0.20 quilates de peso, color Blanco Wesselton H y Pureza VS1. Fabricado en oro de primera ley\r\nes un anillo de dama, colocado en la mano, que comprende una banda de metales preciosos (por lo general de oro) creado con una línea continua de gemas idénticas (por lo general de diamantes) para simbolizar el amor sin fin, usualmente dado por el esposo a su esposa en la ocasión de un aniversario importante.\r\n\r\nDebido a la presencia de piedras alrededor del anillo que puede ser complicado de usar, la alternativa es tener las piedras sólo en la parte superior del anillo. Esto se refiere a veces como un anillo de \"media eternidad\" en lugar un anillo de eternidad \"completo\".1​\r\n\r\nTodas nuestras joyas son fabricadas de forma artesanal, siguiendo una tradición que se remonta a 1957. Nuestros talleres se encuentran en el territorio nacional, en una clara apuesta por la marca España.\r\n\r\n1Di 0,15 y 10 Di 0.15 cts.\r\nMedidas: detalle 3 mm , ancho 2 mm y grosor 1,7 mm\r\nTalla brillante de calidad certificada\r\nBlanco Wesselton H \r\n\r\nAnillo \"Lombardía\" Oro Blanco 18k y Diamantes 0.45 cts: 13 diamantes talla brillante con el central de mayor tamaño componen nuestro modelo \"Lombardía\", todos ellos color Blanco Wesselton H y Pureza VS1.', 'Anillo \"Piamonte\" Oro Blanco 18k y Diamante 0.20 cts: Con cuerpo de seccion rectangular'),
(3, 'Anillo zafiro ovalado\r\n', 'producto_3.jpg', 'producto_mini_3.jpg', '15.00', 'Anillo con cuerpo dividido, halo de diamantes y zafiro ovalado\r\n\r\nbundancia, paciencia y equilibrio son parte de sus significados. Lo más interesante es que la esmeralda tiene muy buenos efectos en la salud física y espiritual, así que puedes estar segura de que alejarás las vibras negativas ¡por completo! Por supuesto no podemos dejar de lado que el color verde encendido de su forma conquista a cualquiera.\r\nLos accesorio se cuentan entre los mejores amigos de toda mujer, unos que nos acompañan de día, de noche, en el trabajo y la playa. Tal como ocurre con la ropa, los los collares, anillos y pulceras también van cambiando y, sin duda, esta temporada toda la atención está en las orejas y en los aretes que las adornan.\r\n\r\nEl material es alloy o fantasía. Es de buena calidad. Recuerde que se trata de fantasía hecha con materiales que quizás no tengan la resistencia y durabilidad de un material noble como el oro, la plata, etc.\r\n\r\nEste tipo de productos alargarán su vida útil si se les trata con cuidado y se evita el contacto con el agua y otras sustancias fuertes como perfumes, sudores, \r\nLa plata es un material bastante maleable, es decir, blando. Por esta razón, para realizar objetos de joyería como colgantes de plata, los artesanos han tenido que realizar aleación con otros materiales. Solo de esta forma es posible conseguir piezas resistentes y adecuadas para el uso. Es, por tanto, casi imposible que nos encontremos con una pieza 100% de plata o, como corresponde a su unidad de medida, 1000 milésimas. Lo más común es que en el mercado obtengamos objetos de plata 950, 925, 900 y 800.\r\n\r\nEs de esta forma como llegamos a la famosa Plata 925. Una pieza compuesta por 925 milésimas de plata, o un porcentaje de 92,5% de plata pura, y 75 milésimas de cobre, o 7,5% de cobre expresado en tanto por ciento, será un objeto de Plata de ley 925. Los objetos de Plata 925 están considerados como plata de primera ley. Su calidad y sus características se encuentran entre las mejores que podemos encontrar en el mercado.\r\nTodas las joyas están muy bien presentadas y listas para regalar, con pequeñas estrellas de plata y colocadas en una bolsa de regalo de organza o caja de regalo.\r\n\r\n', 'Abundancia, paciencia y equilibrio son parte de sus significados'),
(4, 'Pulsera de Gemas\r\n', 'producto_4.jpg', 'producto_mini_4.jpg', '15.00', 'Esta pulsera ha sido fabricada a partir de siete colores de gemas chakra que se corresponden con los siete chakras principales del cuerpo entrelazados con cuentas de plata de ley maciza de 3 mm. Cada lasca de las gema se elige para que complemente perfectamente en forma y tamaño las demás lascas de la pulsera.\r\nEsta pulsera tiene un poco menos de 19 cm de longitud y tiene un extensor.El extensor mide 2,5 cm lo que permite aumentar el tamaño de estas pulseras hasta casi 21,5 cm en total.\r\n\r\nInformación de la piedra: Chakra (pronunciada sha-kra) en sánscrito significa \'rueda\'; son espirales de energía en el cuerpo, cada una de las cuales se relaciona con las demás y están asociadas con ciertos colores, gemas y funciones. Las piedras utilizadas son las siguientes: jaspe rojo, cornalina, citrino, aventurina, ágata de cinta azul, amatista y lapislázuli.\r\n', 'Esta pulsera ha sido fabricada a partir de siete colores de gemas chakra que se corresponden con los siete chakras principales del cuerpo'),
(5, 'Anillo de Bodas', 'producto_5.jpg', 'producto_mini_5.jpg', '45.00', 'Un anillo de boda es un anillo usado como símbolo en la celebración de una boda. Representa el compromiso entre las personas contrayentes. También recibe el nombre de alianza. Generalmente, en los anillos de la pareja, se graban los nombres. Por ejemplo: el anillo de uno lleva el nombre del otro, o bien los nombres de los dos con la alguna fecha conmemorativa.\r\n\r\nEstos anillos tradicionalmente son de oro y en menor medida de platino o plata. Suelen ser lisos y cómodos de llevar pues la mayor parte de las personas los llevan siempre puestos.\r\n\r\nEn la Edad Moderna, sobre todo en los siglos XVI y XVII, se utilizaron collares de gruesas bolas huecas y afiligranadas o caladas, siempre como adorno femenino.\r\n\r\n\r\nLa costumbre establece que la pareja debe entregarse mutuamente anillos como símbolo de alianza matrimonial, colocándoselos en la ceremonia nupcial. El anillo matrimonial se coloca en el dedo anular de la mano izquierda. Distintas tradiciones hacen uso de una u otra mano, variando este uso de acuerdo a las zonas.\r\n\r\nSin embargo, se trata simplemente de una costumbre (al igual que la entrega previa del anillo de compromiso), la cual aunque es tradicional, no es esencial en la celebración del matrimonio: ya que su ausencia no invalida el consentimiento dado en la ceremonia y, por lo tanto, el matrimonio celebrado sin el intercambio de los anillos sería perfectamente válido. Hay varios dichos sobre los anillos de boda pero en diferentes puntos no es necesario llevar uno para que se sepa que están casados; por lo tanto hay varias costumbres sobre el usar la alianza (anillo) en diferentes comunidades.\r\n\r\n\r\nLos elementos que más belleza aportan a tus alianzas son el acabado: espejo, satinado, mate, arenado, martillado; la forma: redonda, cuadrada, cóncava o plana y las piedras: con o sin piedras incrustadas o bien tipo churumbela.Nos cuenta que los anillos en oro blanco y oro amarillo, por ejemplo; son los más solicitados en esta prestigiosa joyería. Pero hay muchas posibilidades más: algunos más costosos como el platino o el titanio y unos más económicos como la plata. Si es oro, toma en cuenta que sea de entre 14 y 18 kilates para garantizar el color y la durabilidad.\r\n', 'Hermoso anillo de bodas en oro de 18 kilates con esencia de diamantes'),
(6, 'Gargantilla de Boda Especial', 'producto_6.jpg', 'producto_mini_6.jpg', '30.00', 'Si te gusta la elegancia clásica y los complementos sencillos, la gargantilla te encantará. Se trata de un fino collar ajustado al cuello, que puede estar formado por diferentes piezas, generalmente brillantes, o por una sola en el centro. Te ayudará a resaltar tu cuello y, además, encajará a la perfección con vestidos de novia con escote en V o palabra de honor.\r\n\r\n\r\nLas gargantillas miden entre 40 y 45 centímetros y caen sobre las clavículas. Son un poco más largas que los chokers, pero siguen siendo collares cortos. Suelen estar más ornamentadas que los chokers y, sin duda, son bastante más clásicas, con diseños ricos que pueden incluir colgantes y están completamente hechos de metales y gemas. Como son una joya discreta, versátil y elegante, son uno de los collares favoritos de las novias.\r\n\r\nAl estar en la base del cuello, lo alargan y consiguen que los hombros parezcan un poco más estrechos. Asimismo, llevan la atención al busto. Para lucirlas mejor, es ideal escoger un peinado recogido y complementarlas con aretes pequeños o medianos para no saturar el look. En lo que respecta al vestido, se verán muy bien con cuellos barco, hombros caídos, en V y cualquier otro que deje moderadamente expuesto el escote.\r\n\r\nEl collar tipo princesa mide más o menos entre 43 y 48 centímetros y termina por debajo de la clavícula y encima del busto. Puede tener diseños ligeros o pesados, aunque, generalmente, tiene una pieza central acompañada por adornos laterales más pequeños. Mantiene el estilo formal y exquisito de la gargantilla, pero con dimensiones algo más largas.\r\n\r\n\r\n', 'Si te gusta la elegancia clasica y los complementos sencillos, la gargantilla te encantara'),
(7, 'Anillo de 3 Oro & Diamante', 'producto_7.jpg', 'producto_mini_7.jpg', '50.00', 'Los términos “dorado” y “baño de oro” se usan para describir el material de los productos que tienen una capa extremadamente fina de oro aplicada por medio de un proceso de electro-enchapado (menos de .175 micrones de espesor). El efecto dorado de estos productos se desgasta más rápidamente que el enchapado de oro, el oro laminado o el oro electro-enchapado.\r\n\r\nEl oro puro – oro 24 quilates (24K) – es un metal blando, y usualmente se lo mezcla con otros metales para aumentar su dureza y durabilidad. El total de la cantidad de oro puro y los demás metales suma 24, por lo tanto:\r\n\r\nEl oro 18 quilates (18k) contiene 18 partes de oro fundido con 6 partes de otro metal.\r\nEl oro 14 quilates (14K) contiene 14 partes de oro fundido con 10 partes de otro metal.\r\nCerca de la marca de calidad de los quilates, debería ver el nombre de la compañía que respalda la marca o de la marca registrada en Estados Unidos. La marca registrada puede estar indicada con un nombre, un símbolo o con iniciales. Si está pensando en comprar una pieza de oro pero no ve la marca registrada junto a la marca de quilates, no la compre.\r\n\r\n\r\nEl anillo es un accesorio para la mano que los seres humanos han utilizado desde remotísimos tiempos y lo han hecho con diferentes propósitos. Ya desde el antiguo Imperio Egipcio se encuentran registros de su utilización, la mayoría de ellos han sido hallados en las tumbas en oportunidad de las diversas exploraciones que el hombre viene haciendo con motivo de descubrir cómo vivían sus antepasados.\r\n', 'Anillo de oro 14 quilates (14K) contiene 14 partes de oro fundido con 10 partes de otro metal'),
(8, 'Gargantilla plata esterlina 925\r\n', 'producto_8.jpg', 'producto_mini_8.jpg', '29.00', 'Elegante collar de gargantilla de cristal de plata esterlina 925\r\nLargo de la cadena 45 cm aprox.\r\n\r\nCollares de cadenas. Nuevos.\r\nPara colocar tipo gargantilla.\r\nLargos y modelos variados (en las fotos)\r\nPlateados (uno con zarcillos) y uno Dorado/Marrón (con zarcillos). Ver fotos. según color sobre casiila azul.\r\nPrecios desde 3,00 hasta 10,00 en cambio circulante.\r\nFavor confirmar precio y disponibilidad de cada pieza, forma de pago y de entrega antes de ofertar.\r\nEntrega personal en sitio a convenir.\r\n\r\nEl collar es un complemento en forma de sarta o cadena más o menos larga que rodea el cuello o parte superior del pecho como adorno. También se ha utilizado como objeto de distinción ya solo, ya complementado con alguna cruz o medalla colgante propia de condecoraciones. Si es ceñido al cuello y no pende, se denomina gargantilla.\r\n\r\nLos collares prehistóricos de la Edad de piedra consisten siempre en sartas de conchas, huesecillos, dientes y piedrecillas. Los de la Edad de los metales agregan a los anteriores elementos algunas cuentas de oro y cobre, de barro cocido y de pasta vítrea o bien se transforman en torques (collares rígidos) a manera de trenzas y de argollas o se componen de cerquillos metálicos de los cuales penden pequeñas anillas del mismo material. De todas las formas indicadas, se han exhumado ejemplares preciosos en diferentes sepulturas prehistóricas, ibéricas y celtíberas de España entre los cuales ofrece no poco interés por su simbolismo el collar de diferentes piezas de barro cocido que se halló en una sepultura de la necrópolis celtibérica de Navafría, en Clares (Guadalajara, hoy en día en el M.A.N.).\r\n\r\n', 'Elegante collar de gargantilla de cristal de plata esterlina 925 Largo de la cadena 45 cm aprox');



CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `rol` (`idrol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Supervisor'),
(3, 'Vendedor');

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `usuario` (`idusuario`, `nombre`, `correo`, `usuario`, `clave`, `rol`, `estatus`) VALUES
(1, 'Yovana', 'yovana@novajoyeria.com', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1, 1);

ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `rol` (`rol`);

ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

