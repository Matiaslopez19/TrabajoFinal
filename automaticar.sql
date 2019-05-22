-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2019 a las 15:14:26
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `automaticar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `ADMINISTRADOR_id` int(11) DEFAULT NULL,
  `ADMINISTRADOR_nombre` varchar(45) NOT NULL,
  `ADMINISTRADOR_apellido_p` varchar(45) NOT NULL,
  `ADMINISTRADOR_apellido_m` varchar(45) NOT NULL,
  `ADMINISTRADOR_mail` varchar(45) NOT NULL,
  `ADMINISTRADOR_contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agendar`
--

CREATE TABLE IF NOT EXISTS `agendar` (
  `AGENDAR_id` int(11) DEFAULT NULL,
  `AGENDAR_hora` varchar(45) NOT NULL,
  `AGENDAR_fecha` date NOT NULL,
  `AGENDAR_tipo_servicio` varchar(45) NOT NULL,
  `AGENDAR_patente` varchar(45) NOT NULL,
  `AGENDAR_direccion` varchar(45) NOT NULL,
  `AGENDAR_ruta_foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
  `CUENTA_id` int(11) DEFAULT NULL,
  `CUENTA_tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `HISTORIAL_patente` int(11) DEFAULT NULL,
  `HISTORIAL_ruta_pdf` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `SERVICIOS_id` int(11) DEFAULT NULL,
  `SERVICIOS_tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE IF NOT EXISTS `trabajador` (
  `TRABAJADOR_id` int(11) DEFAULT NULL,
  `TRABAJADOR_nombre` varchar(45) NOT NULL,
  `TRABAJADOR_apellido_p` varchar(45) NOT NULL,
  `TRABAJADOR_apellido_m` varchar(45) NOT NULL,
  `TRABAJADOR_mail` varchar(45) NOT NULL,
  `TRABAJADOR_contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `USUARIO_id` int(11) DEFAULT NULL,
  `USUARIO_nombre` varchar(45) NOT NULL,
  `USUARIO_apellido_p` varchar(45) NOT NULL,
  `USUARIO_apellido_m` varchar(45) NOT NULL,
  `USUARIO_mail` varchar(45) NOT NULL,
  `USUARIO_contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
