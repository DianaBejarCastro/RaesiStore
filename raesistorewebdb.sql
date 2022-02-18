-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2022 a las 02:37:44
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `raesistorewebdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `estado`) VALUES
(19, 'Pantalones', 'Disponible'),
(20, 'Poleras', 'Disponible'),
(21, 'Gorros', 'Disponible'),
(22, 'Uniformes Medicos', 'Disponible'),
(23, 'Gorros Medicos', 'Disponible'),
(24, 'Pijamas', 'Disponible'),
(25, 'Overoles', 'No disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `especialidad`) VALUES
(1, 'Sin especialidad'),
(2, 'Pediatria'),
(4, 'Cirugia'),
(5, 'Anestesiología'),
(7, 'General'),
(8, 'Odontopediatria'),
(9, 'Alergología'),
(10, 'Cardiología'),
(11, 'Endocrinología'),
(12, 'Gastroenterología'),
(13, 'Geriatría'),
(14, 'Infectología'),
(15, 'veterinaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `color` text NOT NULL,
  `genero` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `imagenuno` varchar(1000) NOT NULL,
  `imagendos` varchar(1000) NOT NULL,
  `imagentres` varchar(1000) NOT NULL,
  `imagencuatro` varchar(1000) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `talla` varchar(255) NOT NULL,
  `id_tela` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `color`, `genero`, `precio`, `imagenuno`, `imagendos`, `imagentres`, `imagencuatro`, `estado`, `talla`, `id_tela`, `id_categoria`, `id_especialidad`) VALUES
(20, 'Pantalon', 'Pantalon', 'negro', 'Femenino', '180 Bs. ', '20220215034328.jpg', '202202150343282.jpg', '202202150343283.jpg', '202202150343284.jpg', 'Disponible', 'X,S', 1, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telas`
--

CREATE TABLE `telas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telas`
--

INSERT INTO `telas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Algodón ', 'El algodón es uno de los tejidos favoritos por excelencia, ya que es muy versátil y se utiliza para confeccionar todo tipo de prendas: jerséis, camisetas, pantalones, chaquetas y un largo etcétera. Además, si se combina con otros tejidos se obtienen diversos telas complementarias; tales como la tela de gabardina, el tejido denim o vaquero o el popelín, entre otros. El algodón es un tejido de origen vegetal, es muy económico y sus fibras son muy suaves al tacto, lo que la convierte en uno de los mejores tejidos del mercado. Por si fuese poco, es una opción muy asequible, ya que su coste no es elevado.\r\n\r\nEn la actualidad, muchas marcas han optado por utilizar algodón orgánico o reciclado. El algodón orgánico está libre de fertilizantes, tóxicos y químicos que perjudiquen la piel, por lo que es hipoalergénico e ideal para pieles sensibles. Además, es un producto respetuoso con el medio ambiente y con la salud de los agricultores que lo cultivan, ya que no se ven expuestos a productos tóxicos.'),
(3, 'Poliéster', 'El poliéster es una fibra sintética que se utiliza, mayoritariamente, en la industria textil. Está fabricado a partir de agua, aire, carbón y productos petrolíferos. Suele utilizarse como una alternativa al algodón, ya que es más económico y resistente, pero la calidad no es la misma. Este tipo de fibras no resisten altas temperaturas y, además, se puede quemar con facilidad, desprendiendo un fuerte olor a plástico.'),
(4, 'Lino', 'El lino es un tejido de origen vegetal de gran calidad y más resistente que el algodón. Además, es un tejido muy ligero y fresco, ideal para los días calurosos de verano. Una de sus principales desventajas es que no es muy elástico, lo que lo puede llevar a deformarse si no lo cuidamos como es debido. Este tejido se utiliza desde hace miles de años, y es uno de los más antiguos del mercado.\r\n\r\nEl lino se utiliza, principalmente, para elaborar prendas textiles de verano y ropa para el hogar: sábanas, colchas, alfombras y cortinas, entre otros. En el mundo de la moda se considera un tejido bastante lujoso y elegante, por lo que su coste puede ser bastante elevado.'),
(5, 'Lana', 'La lana es un tejido que se obtiene del pelaje de las ovejas. Es una tela de gran calidad, resistente y elástica. Además, es muy cálida y mantiene el calor a la perfección, por lo que es ideal para los meses de otoño e invierno. En función de la calidad de la lana, tendrá un coste u otro, pero cabe destacar que por norma general es elevado. Sin embargo, al ser prendas muy duraderas, constituyen una inversión de futuro.'),
(6, 'Mohair', 'El Mohair es un tipo de tela que procede del pelo de las cabras de angora, originarias de Ankara, en Turquía. Este tejido es muy apreciado por su suavidad y su brillo natural. Además, es muy cálido y tiene una alta retención de la humedad, lo que lo convierte en un tejido ideal para prendas de abrigo. Al igual que la lana, tiene un coste elevado.'),
(7, 'Seda', 'La seda es un tejido de origen animal que se obtiene gracias a los gusanos de seda. Es una de las telas más caras; sin embargo, sus características la convierten en una buena opción si queremos lucir una prenda refinada, elegante y de gran calidad. La seda destaca por ser un tejido ligero y transpirable. De la seda se elaboran tejidos más complejos como el tul o el encaje, ideales para vestidos, camisas y ropa interior.\r\n\r\nAlgunos de sus inconvenientes radican en que es muy delicada y necesita un lavado especial. Si no se cuida como es debido, se estropea con facilidad.'),
(8, 'Piel y cuero', 'La piel y el cuero son tejidos de gran calidad, pero su origen es estrictamente animal, y procede de zorros, bueyes, vacas, serpientes y animales exóticos, entre otros. Esto significa que para confeccionar una prenda textil de piel o de cuero hay un animal que tiene que morir. Por norma general es un tejido muy resistente y cálido, y su precio no suele ser económico.\r\n\r\nEn la actualidad, y gracias al auge del veganismo y otras tendencias medioambientales que quieren proteger la vida de millones de animales, muchas marcas prefieren fabricar sus productos con tejidos alternativos. Uno de estos tejidos es la piel sintética, además de otros materiales reciclados como el algodón o el poliéster.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`) VALUES
(1, 'admin', 'Raesi', 'c15410284ffc82684086d8d99ba99a43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_especialidad` (`id_especialidad`),
  ADD KEY `id_tela` (`id_tela`);

--
-- Indices de la tabla `telas`
--
ALTER TABLE `telas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `telas`
--
ALTER TABLE `telas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_tela`) REFERENCES `telas` (`id`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
