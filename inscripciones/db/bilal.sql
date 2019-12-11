-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2018 a las 04:44:47
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bilal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`activity_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(1, 'noel.titus', '2016-10-24 09:12:05', 'Add Class Form 6'),
(2, 'noel.titus', '2016-10-24 09:12:58', 'Edit Class Form 6'),
(3, 'noel.titus', '2016-10-24 09:15:07', 'Add Student aaa bbb'),
(4, 'noel.titus', '2016-10-24 09:15:36', 'Updated Student aaa bbb'),
(5, 'noel.titus', '2016-10-24 09:17:50', 'Add Student buel bol'),
(6, 'noel.titus', '2016-10-24 09:23:17', 'Add User abdul.hemedy'),
(7, 'noel.titus', '2018-03-26 19:15:47', 'Add Class ICT - Computer Programming'),
(8, 'noel.titus', '2018-03-26 19:18:01', 'Edit Class ICT - Computer Programming'),
(9, 'noel.titus', '2018-03-26 19:18:35', 'Edit Class Form 6'),
(10, 'noel.titus', '2018-03-26 19:18:43', 'Edit Class ICT - Computer Programming'),
(11, 'yna.ecole', '2018-03-26 19:51:24', 'Add User quinie.dungog'),
(12, 'yna.ecole', '2018-03-26 20:14:52', 'Add Student Ronel G.'),
(13, 'yna.ecole', '2018-09-05 20:41:37', 'Deleted Student aaa bbb'),
(14, 'yna.ecole', '2018-09-05 20:44:09', 'Add Class PHP'),
(15, 'yna.ecole', '2018-09-05 20:49:18', 'Agregar Usuario gorchor.platea21'),
(16, 'yna.ecole', '2018-09-05 20:54:11', 'Add Student gorchor p'),
(17, 'yna.ecole', '2018-09-05 20:56:39', 'Deleted Student gorchor p'),
(18, 'yna.ecole', '2018-09-05 20:57:04', 'Add Student gorchor p'),
(19, 'gorchor.platea21', '2018-09-05 21:07:47', 'Updated Student gorchor p'),
(20, 'gorchor.platea21', '2018-09-05 21:08:11', 'Updated Student gorchor p'),
(21, 'gorchor.platea21', '2018-09-05 21:08:37', 'Updated Student gorchor p'),
(22, 'gorchor.platea21', '2018-09-05 21:08:48', 'Updated Student gorchor p'),
(23, 'gorchor.platea21', '2018-09-05 21:10:11', 'Updated Student gorchor p'),
(24, 'gorchor.platea21', '2018-09-05 21:13:51', 'Updated Student gorchor p'),
(25, 'gorchor.platea21', '2018-09-05 21:15:49', 'Updated Student gorchor p'),
(26, 'gorchor.platea21', '2018-09-05 21:16:02', 'Updated Student gorchor p'),
(27, 'gorchor.platea21', '2018-09-05 21:17:22', 'Updated Student gorchor p'),
(28, 'gorchor.platea21', '2018-09-05 21:18:13', 'Updated Student gorchor p'),
(29, 'gorchor.platea21', '2018-09-05 21:18:19', 'Updated Student gorchor p'),
(30, 'gorchor.platea21', '2018-09-05 21:18:26', 'Updated Student gorchor p'),
(31, 'gorchor.platea21', '2018-09-05 21:18:39', 'Updated Student gorchor p'),
(32, 'gorchor.platea21', '2018-09-05 21:20:33', 'Updated Student gorchor p'),
(33, 'gorchor.platea21', '2018-09-05 21:21:25', 'Updated Student gorchor p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprjun`
--

CREATE TABLE IF NOT EXISTS `aprjun` (
  `aprjun_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`aprjun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `aprjun`
--

INSERT INTO `aprjun` (`aprjun_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'CSharp', 250000, 'media', 125000, 0),
(2, 2, 'CSharp', 250000, 'pagado', 250000, 250000),
(3, 3, 'ICT - Computer Programmin', 20000, 'media', 10000, 0),
(4, 4, 'PHP', 300, 'pagado', 300, 0),
(5, 5, 'PHP', 300, 'exonerado', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `fee` int(20) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `category`, `fee`) VALUES
(1, 'CSharp', 'Junior High', 250000),
(2, 'ICT - Computer Programming', 'Senior High', 20000),
(3, 'PHP', 'Secundaria Avanzada', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `janmar`
--

CREATE TABLE IF NOT EXISTS `janmar` (
  `janmar_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`janmar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `janmar`
--

INSERT INTO `janmar` (`janmar_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'CSharp', 250000, 'media', 125000, 0),
(2, 2, 'CSharp', 250000, 'pagado', 250000, 250000),
(3, 3, 'ICT - Computer Programmin', 20000, 'media', 10000, 0),
(4, 4, 'PHP', 300, 'pagado', 300, 0),
(5, 5, 'PHP', 300, 'exonerado', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `julsep`
--

CREATE TABLE IF NOT EXISTS `julsep` (
  `julsep_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`julsep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `julsep`
--

INSERT INTO `julsep` (`julsep_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'CSharp', 250000, 'media', 125000, 0),
(2, 2, 'CSharp', 250000, 'pagado', 250000, 0),
(3, 3, 'ICT - Computer Programmin', 20000, 'media', 10000, 0),
(4, 4, 'PHP', 300, 'pagado', 300, 0),
(5, 5, 'PHP', 300, 'exonerado', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `octdec`
--

CREATE TABLE IF NOT EXISTS `octdec` (
  `octdec_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `class` varchar(25) NOT NULL,
  `class_fee` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `status_fee` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  PRIMARY KEY (`octdec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `octdec`
--

INSERT INTO `octdec` (`octdec_id`, `student_id`, `class`, `class_fee`, `status`, `status_fee`, `fee`) VALUES
(1, 1, 'CSharp', 250000, 'media', 125000, 0),
(2, 2, 'CSharp', 250000, 'pagado', 250000, 0),
(3, 3, 'ICT - Computer Programmin', 20000, 'media', 10000, 0),
(4, 4, 'PHP', 300, 'pagado', 300, 0),
(5, 5, 'PHP', 300, 'exonerado', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_made`
--

CREATE TABLE IF NOT EXISTS `payment_made` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `period` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `receipt` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `payment_made`
--

INSERT INTO `payment_made` (`pay_id`, `student_id`, `period`, `amount`, `date_of_payment`, `receipt`) VALUES
(1, 2, 'janmar', 250000, '2016-10-24', 23444),
(2, 2, 'aprjun', 250000, '2016-10-24', 90909887);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `gfirstname` varchar(25) NOT NULL,
  `gmiddlename` varchar(25) NOT NULL,
  `glastname` varchar(25) NOT NULL,
  `rship` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `transport` varchar(60) NOT NULL,
  `route` varchar(50) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `address`, `class`, `gfirstname`, `gmiddlename`, `glastname`, `rship`, `tel`, `status`, `transport`, `route`) VALUES
(2, 'buel', 'bol', 'buel', 'Femenino', '2016-10-26', 'stonetown', 'CSharp', 'bun', 'bol', 'buel', 'mother', '0717884452', 'pagado', 'no', ''),
(3, 'Ronel', 'G.', 'Ortega', 'Masculino', '1999-06-16', 'Prk.1 brgy.banago bacolod city', 'ICT - Computer Programming', 'Juanita', 'S.', 'Ortega', 'Mother', '0912312445', 'media', 'si', 'Banago - Libertad'),
(5, 'gorchor', 'p', 'platea21', 'Masculino', '1991-07-22', 'Tacna', 'PHP', 'Ramiro', 'B', 'Platea21', 'Padre', '12345678', 'exonerado', 'si', 'casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(3, 'yna.ecole', '12345', 'yna', 'ecole', 'administrator'),
(4, 'lovely.dumasig', '12345', 'lovely', 'dumasig', 'normal'),
(5, 'quinie.dungog', '12345', 'quinie', 'dungog', 'normal'),
(6, 'gorchor.platea21', '12345', 'gorchor', 'platea21', 'administrator');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(1, 'noel.titus', '2016-10-24 09:10:07', '2018-09-06 21:05:59', 3),
(2, 'noel.titus', '2016-10-24 09:11:10', '2018-09-06 21:05:59', 3),
(3, 'noel.titus', '2016-10-24 09:23:04', '2018-09-06 21:05:59', 3),
(4, 'abdul.hemedy', '2016-10-24 09:23:30', '2018-03-26 20:10:41', 4),
(5, 'noel.titus', '2018-03-23 22:28:25', '2018-09-06 21:05:59', 3),
(6, 'noel.titus', '2018-03-23 22:28:31', '2018-09-06 21:05:59', 3),
(7, 'noel.titus', '2018-03-26 15:59:08', '2018-09-06 21:05:59', 3),
(8, 'noel.titus', '2018-03-26 16:03:29', '2018-09-06 21:05:59', 3),
(9, 'noel.titus', '2018-03-26 16:04:56', '2018-09-06 21:05:59', 3),
(10, 'noel.titus', '2018-03-26 16:20:09', '2018-09-06 21:05:59', 3),
(11, 'noel.titus', '2018-03-26 18:18:51', '2018-09-06 21:05:59', 3),
(12, 'noel.titus', '2018-03-26 18:18:52', '2018-09-06 21:05:59', 3),
(13, 'lovely.dumasig', '2018-03-26 19:56:44', '2018-03-26 20:10:41', 4),
(14, 'yna.ecole', '2018-03-26 20:10:57', '2018-09-06 21:05:59', 3),
(15, 'yna.ecole', '2018-08-02 21:48:56', '2018-09-06 21:05:59', 3),
(16, 'yna.ecole', '2018-08-02 21:51:21', '2018-09-06 21:05:59', 3),
(17, 'yna.ecole', '2018-08-04 15:43:10', '2018-09-06 21:05:59', 3),
(18, 'yna.ecole', '2018-09-05 16:49:08', '2018-09-06 21:05:59', 3),
(19, 'yna.ecole', '2018-09-05 16:51:03', '2018-09-06 21:05:59', 3),
(20, 'yna.ecole', '2018-09-05 16:51:20', '2018-09-06 21:05:59', 3),
(21, 'yna.ecole', '2018-09-05 20:53:38', '2018-09-06 21:05:59', 3),
(22, 'yna.ecole', '2018-09-05 20:53:41', '2018-09-06 21:05:59', 3),
(23, 'gorchor.platea21', '2018-09-05 20:59:58', '2018-09-06 21:10:33', 6),
(24, 'gorchor.platea21', '2018-09-05 21:09:54', '2018-09-06 21:10:33', 6),
(25, 'gorchor.platea21', '2018-09-05 22:25:07', '2018-09-06 21:10:33', 6),
(26, 'yna.ecole', '2018-09-06 20:55:28', '2018-09-06 21:05:59', 3),
(27, 'gorchor.platea21', '2018-09-06 21:06:09', '2018-09-06 21:10:33', 6),
(28, 'gorchor.platea21', '2018-09-06 21:09:59', '2018-09-06 21:10:33', 6),
(29, 'gorchor.platea21', '2018-09-06 21:17:52', '', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
