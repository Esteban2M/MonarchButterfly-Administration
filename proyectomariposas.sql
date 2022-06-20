-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2021 a las 01:36:45
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

DROP DATABASE IF EXISTS bd_mariposas;
CREATE DATABASE bd_mariposas;
USE bd_mariposas;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectomariposas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mariposas`
--

CREATE TABLE `mariposas` (
  `id_mariposa` int(11) NOT NULL,
  `nom_mariposa` varchar(20) NOT NULL,
  `mes_recorrido` varchar(10) NOT NULL,
  `pos_recorrido` varchar(50) NOT NULL,
  `est_mariposa` int(11) NOT NULL,
  `idSantuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mariposas`
--

INSERT INTO `mariposas` (`id_mariposa`, `nom_mariposa`, `mes_recorrido`, `pos_recorrido`, `est_mariposa`, `idSantuario`) VALUES
(2, 'Mariposa Monarca', 'Agosto', 'Península de Nueva Escocia, Canadá.', 0, 1),
(3, 'Mariposa Monarca', 'Octubre', 'Texas, Estados Unidos de América.', 0, 1),
(4, 'Mariposa Monarca', 'Noviembre', 'Guanajuato, México. ', 0, 1),
(5, 'Mariposa Monarca', 'Noviembre', 'Sierra Campanario, Michoacán.', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinto`
--

CREATE TABLE `recinto` (
  `id_recinto` int(11) NOT NULL,
  `nombre_recinto` varchar(20) NOT NULL,
  `status_recinto` int(11) NOT NULL,
  `horario_recinto` varchar(20) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `idSantuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recinto`
--

INSERT INTO `recinto` (`id_recinto`, `nombre_recinto`, `status_recinto`, `horario_recinto`, `descripcion`, `idSantuario`) VALUES
(2, 'El Rosario', 0, '10:00-19:00', 'Este santuario se caracteriza por ser el único con andador turístico.La distancia del recorrido para llegar a donde están las colonias varia entre 1.2 y 1.6 km, dependiendo de su ubicación. Servicios con los que cuenta: Visita guiada a grupos, museo proyección de videos de la mariposa Monarca, estacionamiento formal –gratuito, sanitarios ecológicos. ', 1),
(3, 'Senguio', 0, '11:00-19:00', 'El Santuario Senguio es uno de los lugares donde se puede contemplar el espectáculo de la mariposa monarca. Para llegar a la zona de la monarca el recorrido se puede realizar a pie, en caballo o en camioneta; toma aproximadamente dos horas. Para ver la migración debes visitarlo de noviembre a marzo que es cuando llega la mariposa monarca. ', 1),
(4, 'Sierra Chincua', 0, '10:00-19:00', 'Ubicado a escasos kilómetros del Pueblo Mágico de Angangueo, el santuario de Sierra Chincua está en el corazón de la Reserva de la Biósfera de la Mariposa Monarca. El santuario cuenta con un centro de visitantes con modernas instalaciones ecológicas, restaurantes, tiendas de artesanías y actividades de aventura para que pases un día inolvidable en naturaleza. ', 1),
(5, 'Capulín y Macheros', 0, '11:00-19:00', ' En este santuario se puede observar el llano más grande y hermoso de la región de la Monarca llamado de Los Tres Gobernadores, y debido a la posición del acceso y de las colonias de hibernación es posible observar una transición impresionante de la vegetación que resulta atractiva para quienes gustan de la naturaleza.', 2),
(6, 'La Mesa', 0, '10:00-19:00', 'El recorrido se realiza entre hermosos bosques de oyamel. La visita a las colonias de hibernación es guiada, y el ejido posee un criadero de venado abierto a los turistas. Las noches en este santuario son inigualables y la ubicación de las cabañas para observar el cielo es ideal.Servicios con los que cuenta: salón de usos múltiples, cabañas rústicas a precios módicos', 2),
(7, 'Piedra Herrada', 0, '10:00-19:00', 'Piedra Herrada es uno de los tres santuarios de la Reserva de la Biosfera de la Mariposa Monarca que se localizan en el Estado de México. Es un ejido ubicado entre Temascaltepec y Valle de Bravo, en el que según los visitantes pueden vivir la experiencia más espiritual que la naturaleza llega a ofrecer.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `santuario`
--

CREATE TABLE `santuario` (
  `idSantuario` int(11) NOT NULL,
  `nomSant` varchar(20) NOT NULL,
  `fecInicio` varchar(10) NOT NULL,
  `fecfin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `santuario`
--

INSERT INTO `santuario` (`idSantuario`, `nomSant`, `fecInicio`, `fecfin`) VALUES
(1, 'Michoacán', '07/01/2021', '27/02/2021'),
(2, 'Estado de México', '10/01/2021', '25/03/2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(15) NOT NULL,
  `rol` int(11) NOT NULL,
  `id_recinto` int(11) NOT NULL,
  `idSantuario` int(11) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `rol`, `id_recinto`, `idSantuario`, `pass`) VALUES
(3, 'Esteban', 'Medina', 0, 2, 1, 'ventas'),
(4, 'Braulio', 'Flores', 1, 2, 1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `monto` varchar(10) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `descripcion`, `monto`, `id_usuario`) VALUES
(21, 'Los boletos adquiridos fuerón 2 , con un descuento de tipo Estudiante del precio original: $50.00', '50', 3),
(22, 'Los boletos adquiridos fuerón 2 , con un descuento de tipo Ninguno del precio original: $50.00', '100', 3),
(23, 'Los boletos adquiridos fuerón 4 , con un descuento de tipo Docente del precio original: $50.00', '120', 3),
(24, 'Los boletos adquiridos fuerón 7 , con un descuento de tipo Estudiante del precio original: $50.00', '175', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mariposas`
--
ALTER TABLE `mariposas`
  ADD PRIMARY KEY (`id_mariposa`),
  ADD KEY `santuario_ibfk` (`idSantuario`);

--
-- Indices de la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD PRIMARY KEY (`id_recinto`),
  ADD KEY `idsantuario_ibfk` (`idSantuario`);

--
-- Indices de la tabla `santuario`
--
ALTER TABLE `santuario`
  ADD PRIMARY KEY (`idSantuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_recinto` (`id_recinto`),
  ADD KEY `idSantuario` (`idSantuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mariposas`
--
ALTER TABLE `mariposas`
  MODIFY `id_mariposa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `recinto`
--
ALTER TABLE `recinto`
  MODIFY `id_recinto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `santuario`
--
ALTER TABLE `santuario`
  MODIFY `idSantuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mariposas`
--
ALTER TABLE `mariposas`
  ADD CONSTRAINT `santuario_ibfk` FOREIGN KEY (`idSantuario`) REFERENCES `santuario` (`idSantuario`);

--
-- Filtros para la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD CONSTRAINT `idsantuario_ibfk` FOREIGN KEY (`idSantuario`) REFERENCES `santuario` (`idSantuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_recinto`) REFERENCES `recinto` (`id_recinto`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idSantuario`) REFERENCES `santuario` (`idSantuario`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
