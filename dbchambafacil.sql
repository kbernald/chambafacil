
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-11-2014 a las 09:43:35
-- Versión del servidor: 5.1.67
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u317852851_cf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad_ciu`
--

CREATE TABLE IF NOT EXISTS `ciudad_ciu` (
  `id_ciu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prov` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_dep` int(11) NOT NULL,
  PRIMARY KEY (`id_ciu`),
  UNIQUE KEY `id_ciu_UNIQUE` (`id_ciu`),
  KEY `id_dep` (`id_dep`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ciudad_ciu`
--

INSERT INTO `ciudad_ciu` (`id_ciu`, `nom_prov`, `id_dep`) VALUES
(1, 'Lima', 15),
(2, 'Barranca', 15),
(3, 'Cajatambo', 15),
(4, 'Cañete', 15),
(5, 'Canta', 15),
(6, 'Huaral', 15),
(7, 'Huarochiri', 15),
(8, 'Huaura', 15),
(9, 'Oyon', 15),
(10, 'Yauyos', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Departamento_dep`
--

CREATE TABLE IF NOT EXISTS `Departamento_dep` (
  `id_dep` int(11) NOT NULL AUTO_INCREMENT,
  `nom_dep` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `idpai` int(11) NOT NULL,
  PRIMARY KEY (`id_dep`),
  UNIQUE KEY `id_dep_UNIQUE` (`id_dep`),
  KEY `idpai` (`idpai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `Departamento_dep`
--

INSERT INTO `Departamento_dep` (`id_dep`, `nom_dep`, `idpai`) VALUES
(1, 'Amazonas', 1),
(2, 'Ancash', 1),
(3, 'Apurimac', 1),
(4, 'Arequipa', 1),
(5, 'Ayacucho', 1),
(6, 'Cajamarca', 1),
(7, 'Callao', 1),
(8, 'Cusco', 1),
(9, 'Huancavelica', 1),
(10, 'Huanuco', 1),
(11, 'Ica', 1),
(12, 'Junin', 1),
(13, 'La Libertad', 1),
(14, 'Lambayeque', 1),
(15, 'Lima', 1),
(16, 'Loreto', 1),
(17, 'Madre De Dios', 1),
(18, 'Moquegua', 1),
(19, 'Pasco', 1),
(20, 'Piura', 1),
(21, 'Puno', 1),
(22, 'San Martin', 1),
(23, 'Tacna', 1),
(24, 'Tumbes', 1),
(25, 'Ucayali', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Detalle_oferta_usuario_ofusu`
--

CREATE TABLE IF NOT EXISTS `Detalle_oferta_usuario_ofusu` (
  `id_deta_ofusu` int(11) NOT NULL AUTO_INCREMENT,
  `id_usr` int(11) NOT NULL,
  `id_oft` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_ote` int(11) NOT NULL,
  `id_sit` int(11) NOT NULL,
  PRIMARY KEY (`id_deta_ofusu`),
  KEY `id_usr_idx` (`id_usr`),
  KEY `id_oft_idx` (`id_oft`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito_dist`
--

CREATE TABLE IF NOT EXISTS `distrito_dist` (
  `id_dist` int(11) NOT NULL AUTO_INCREMENT,
  `distritonom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_ciu` int(11) NOT NULL,
  PRIMARY KEY (`id_dist`),
  UNIQUE KEY `id_dist_UNIQUE` (`id_dist`),
  KEY `id_ciu` (`id_ciu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empresa_emp`
--

CREATE TABLE IF NOT EXISTS `Empresa_emp` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `ruc_emp` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre_emp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Rubro_emp` int(11) NOT NULL,
  `dir_emp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Tray_emp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estado_formacion`
--

CREATE TABLE IF NOT EXISTS `Estado_formacion` (
  `id_estadof` int(11) NOT NULL AUTO_INCREMENT,
  `desc_estadof` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_estadof`),
  UNIQUE KEY `id_estadof_UNIQUE` (`id_estadof`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Evaluacion_eva`
--

CREATE TABLE IF NOT EXISTS `Evaluacion_eva` (
  `id_eva` int(11) NOT NULL AUTO_INCREMENT,
  `Descrip_eva` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_eva`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_laboral`
--

CREATE TABLE IF NOT EXISTS `experiencia_laboral` (
  `id_explab` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `funciones` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `fech_ini` date NOT NULL,
  `fech_fin` date NOT NULL,
  `Contacto` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `num_contacto` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Moti_fin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Documentor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `experiencia_laboralcol` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_explab`),
  UNIQUE KEY `id_explab_UNIQUE` (`id_explab`),
  KEY `id_usu_idx` (`id_usu`),
  KEY `id_perfil_idx` (`id_perfil`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Formac_academ_formac`
--

CREATE TABLE IF NOT EXISTS `Formac_academ_formac` (
  `id_formac` int(11) NOT NULL AUTO_INCREMENT,
  `desc_formac` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_formac`),
  UNIQUE KEY `idFormac_academ_formac_UNIQUE` (`id_formac`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informac_personal_infp`
--

CREATE TABLE IF NOT EXISTS `informac_personal_infp` (
  `id_inf_basica` int(11) NOT NULL AUTO_INCREMENT,
  `docid` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipdoc` int(11) NOT NULL,
  `num_doc` int(9) NOT NULL,
  `Nombre_usr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Apel_pat_usr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Apel_mat_usr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Sex_usr` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `fec_nac_usr` date NOT NULL,
  `Tel_celular_usr` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Tel_fijo_usr` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `id_paisnac` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_dist` int(11) NOT NULL,
  `Direccion_usr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_sitlab` int(11) NOT NULL,
  `Años_exp` int(11) NOT NULL,
  `Sueldo_esperado` int(11) NOT NULL,
  `idusr` int(11) NOT NULL,
  PRIMARY KEY (`id_inf_basica`),
  UNIQUE KEY `id_inf_basica_UNIQUE` (`id_inf_basica`),
  KEY `id_tipdoc_idx` (`id_tipdoc`),
  KEY `id_paisnac_idx` (`id_paisnac`),
  KEY `id_dep_idx` (`id_dep`),
  KEY `id_ciu_idx` (`id_ciu`),
  KEY `id_dist_idx` (`id_dist`),
  KEY `id_sitlab_idx` (`id_sitlab`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Oferta_oft`
--

CREATE TABLE IF NOT EXISTS `Oferta_oft` (
  `id_oft` int(11) NOT NULL AUTO_INCREMENT,
  `descrip_oft` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_pai` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_ciu` int(11) NOT NULL,
  `id_dist` int(11) NOT NULL,
  `fec_public_oft` datetime NOT NULL,
  `fec_inicio_oft` datetime NOT NULL,
  `fec_fin_oft` datetime NOT NULL,
  `id_base` int(11) NOT NULL,
  `id_sta` int(11) NOT NULL,
  `id_per` int(11) NOT NULL,
  `id_tiph` int(11) NOT NULL,
  `salario` int(11) NOT NULL,
  PRIMARY KEY (`id_oft`),
  UNIQUE KEY `id_oft_UNIQUE` (`id_oft`),
  KEY `id_pai_idx` (`id_pai`),
  KEY `id_dep_idx` (`id_dep`),
  KEY `id_ciu_idx` (`id_ciu`),
  KEY `id_dist_idx` (`id_dist`),
  KEY `id_per_idx` (`id_per`),
  KEY `id_tiph_idx` (`id_tiph`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_op`
--

CREATE TABLE IF NOT EXISTS `opciones_op` (
  `id_op` int(11) NOT NULL AUTO_INCREMENT,
  `Descrip_op` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_op`),
  UNIQUE KEY `id_op_UNIQUE` (`id_op`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais_pai`
--

CREATE TABLE IF NOT EXISTS `pais_pai` (
  `idpai` int(11) NOT NULL AUTO_INCREMENT,
  `pais_nom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idpai`),
  UNIQUE KEY `idpai_UNIQUE` (`idpai`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `pais_pai`
--

INSERT INTO `pais_pai` (`idpai`, `pais_nom`) VALUES
(1, 'Peru'),
(2, 'Ecuador'),
(3, 'Bolivia'),
(4, 'Chile'),
(5, 'Venezuela'),
(6, 'Brazil'),
(7, 'E.E.U.U');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_puesto_per`
--

CREATE TABLE IF NOT EXISTS `perfil_puesto_per` (
  `id_per` int(11) NOT NULL AUTO_INCREMENT,
  `Descrip_per` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_per`),
  UNIQUE KEY `id_per_UNIQUE` (`id_per`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios_priv`
--

CREATE TABLE IF NOT EXISTS `privilegios_priv` (
  `id_priv` int(11) NOT NULL AUTO_INCREMENT,
  `descrip_priv` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_priv`),
  UNIQUE KEY `id_priv_UNIQUE` (`id_priv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proceso_evaluacion_peva`
--

CREATE TABLE IF NOT EXISTS `Proceso_evaluacion_peva` (
  `id_peva` int(11) NOT NULL AUTO_INCREMENT,
  `id_ofeva` int(11) NOT NULL,
  `id_postu` int(11) NOT NULL,
  `id_eval` int(11) NOT NULL,
  `fec_evaluacion` datetime NOT NULL,
  `puntaje` tinyint(1) NOT NULL,
  `sit_postu` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_peva`),
  KEY `id_ofeva_idx` (`id_ofeva`),
  KEY `id_postu_idx` (`id_postu`),
  KEY `id_eval_idx` (`id_eval`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_eval_x_oferta_ofeva`
--

CREATE TABLE IF NOT EXISTS `registro_eval_x_oferta_ofeva` (
  `id_ofeva` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_ini` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `punt_min_req` tinyint(1) NOT NULL,
  `id_eva` int(11) NOT NULL,
  `id_oft` int(11) NOT NULL,
  `id_base_ofe` int(11) NOT NULL,
  PRIMARY KEY (`id_ofeva`),
  UNIQUE KEY `id_ofeva_UNIQUE` (`id_ofeva`),
  KEY `id_eva_idx` (`id_eva`),
  KEY `id_oft_idx` (`id_oft`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro_formac`
--

CREATE TABLE IF NOT EXISTS `Registro_formac` (
  `id_reg_formac` int(11) NOT NULL AUTO_INCREMENT,
  `id_formac` int(11) NOT NULL,
  `id_estadof` int(11) NOT NULL,
  `id_usr` int(11) NOT NULL,
  `documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_institucion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fec_ini` date NOT NULL,
  `fec_fin` date NOT NULL,
  PRIMARY KEY (`id_reg_formac`),
  UNIQUE KEY `id_reg_formac_UNIQUE` (`id_reg_formac`),
  KEY `id_formac_idx` (`id_formac`),
  KEY `id_estadof_idx` (`id_estadof`),
  KEY `id_usr_idx` (`id_usr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_tipo_priv`
--

CREATE TABLE IF NOT EXISTS `reg_tipo_priv` (
  `id_reg_pyo` int(11) NOT NULL AUTO_INCREMENT,
  `id_priv` int(11) NOT NULL,
  `id_opc` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  PRIMARY KEY (`id_reg_pyo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Situacion_laboral_sitlab`
--

CREATE TABLE IF NOT EXISTS `Situacion_laboral_sitlab` (
  `id_sitlab` int(11) NOT NULL AUTO_INCREMENT,
  `Desc_sitlab` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sitlab`),
  UNIQUE KEY `id_sitlab_UNIQUE` (`id_sitlab`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_sit`
--

CREATE TABLE IF NOT EXISTS `situacion_sit` (
  `id_sit` int(11) NOT NULL AUTO_INCREMENT,
  `Descrip_sta` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sit`),
  UNIQUE KEY `id_sit_UNIQUE` (`id_sit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_doc_ident_tipdoc`
--

CREATE TABLE IF NOT EXISTS `Tipo_doc_ident_tipdoc` (
  `id_tipdoc` int(11) NOT NULL AUTO_INCREMENT,
  `desc_tipdoc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tipdoc`),
  UNIQUE KEY `id_tipdoc_UNIQUE` (`id_tipdoc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_horario_tiph`
--

CREATE TABLE IF NOT EXISTS `Tipo_horario_tiph` (
  `id_tiph` int(11) NOT NULL AUTO_INCREMENT,
  `descrip_tiph` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `hara_inic` time NOT NULL,
  `hara_fin` time NOT NULL,
  PRIMARY KEY (`id_tiph`),
  UNIQUE KEY `id_tiph_UNIQUE` (`id_tiph`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tip`
--

CREATE TABLE IF NOT EXISTS `tipo_tip` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `desc_tip` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tipo`),
  UNIQUE KEY `id_tipo_UNIQUE` (`id_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userimage`
--

CREATE TABLE IF NOT EXISTS `userimage` (
  `user` varchar(80) NOT NULL,
  `url` varchar(80) NOT NULL,
  `lastUpload` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_usr`
--

CREATE TABLE IF NOT EXISTS `usuario_usr` (
  `id_usr` int(11) NOT NULL AUTO_INCREMENT,
  `Email_usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Pass_usr` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `id_tip` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `semilla` char(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_usr`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuario_usr`
--

INSERT INTO `usuario_usr` (`id_usr`, `Email_usr`, `Pass_usr`, `id_tip`, `estado`, `semilla`) VALUES
(3, 'rosa_15_46@hotmail.com', '31e6789c8c6b238d8202290f4c614991514498bb64701f653b9cc2185b7da85b', 3, 0, '1d5b58a17b966e6d'),
(4, 'kisyfur666@hotmail.com', '010f90771fb4eef0c7043c467de866dd0f4d96a8b39f21d22c1c5d8bdd87d163', 3, 0, '1fe973ee50e4a9d4'),
(13, 'hansgianfranco@gmail.com', '03620a82903e58da79d37cb541422396ba5af77bb9a9024e084f883ed153ec05', 3, 0, '1faf404469cbf3d'),
(6, 'vicvic189@gmail.com', 'e8aafa3bdee7634377dfde19ac70816a4137fb8aa8f850c2633ad4f8623ed12e', 3, 0, '3eb6c56dca890d4'),
(7, 'yasmin.navarro.2304@gmail.com', '4c95bd206fa19824a15220617218b1627f70d866b96e6e1bbd352bc6b91caca3', 3, 0, '10105820537b79ef'),
(14, 'phermenegildoe@gmail.com', 'be127827d8d2e3cdfc0675aab1bc1a82d2dbc97b18a02644934243b604333cb1', 3, 0, '2e1178107bf4f45b'),
(12, 'eldo_1591@hotmail.com', 'e42286433aef9e943a1193d11cfae81b37a5bf097e886f3f67da220d09bedd47', 3, 0, '503c51fd5e1575df'),
(15, 'inge.bernal2393@gmail.com', '4e5a7c377b27c29bd2f0048f52c83bdd0fb480a9d87a900d8a5029a2a03a31fb', 3, 0, '56a026113ff44de2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
