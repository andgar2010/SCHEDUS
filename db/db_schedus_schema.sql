-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 09-11-2018 a las 17:08:29
-- Versión del servidor: 10.3.9-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_schedus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_proyecto`
--

DROP TABLE IF EXISTS `actividad_proyecto`;
CREATE TABLE IF NOT EXISTS `actividad_proyecto` (
  `id_actividad_proyecto` int(10) NOT NULL AUTO_INCREMENT,
  `num_actividad_proyecto` varchar(5) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `name_actividad_proyecto` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_proyecto` int(10) DEFAULT NULL,
  `cod_fase` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_actividad_proyecto`),
  UNIQUE KEY `name_actividad_proyecto` (`name_actividad_proyecto`),
  KEY `actividad_proyecto` (`num_actividad_proyecto`),
  KEY `FK_cod_fase` (`cod_fase`),
  KEY `FK_cod_proyecto_actividad_proyecto` (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

DROP TABLE IF EXISTS `ambiente`;
CREATE TABLE IF NOT EXISTS `ambiente` (
  `id_ambiente` int(10) NOT NULL AUTO_INCREMENT,
  `num_ambiente` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_sede` int(10) DEFAULT NULL,
  `cod_estado_ambiente` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_ambiente`),
  UNIQUE KEY `num_ambiente` (`num_ambiente`),
  KEY `ambiente` (`num_ambiente`,`cod_sede`),
  KEY `FK_cod_sede` (`cod_sede`),
  KEY `FK_cod_estado_ambiente` (`cod_estado_ambiente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

DROP TABLE IF EXISTS `competencia`;
CREATE TABLE IF NOT EXISTS `competencia` (
  `id_competencia` int(10) NOT NULL,
  `cod_programa_formacion` int(10) DEFAULT NULL,
  `codigo_competencia` int(10) NOT NULL,
  `num_competencia2` varchar(20) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `name_competencia` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`codigo_competencia`),
  UNIQUE KEY `name_competencia` (`name_competencia`),
  KEY `competencia` (`codigo_competencia`),
  KEY `FK_cod_programa_formacion` (`cod_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

DROP TABLE IF EXISTS `dias`;
CREATE TABLE IF NOT EXISTS `dias` (
  `id_dias` int(10) NOT NULL AUTO_INCREMENT,
  `name_dias` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_dias`),
  UNIQUE KEY `name_dias` (`name_dias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ambiente`
--

DROP TABLE IF EXISTS `estado_ambiente`;
CREATE TABLE IF NOT EXISTS `estado_ambiente` (
  `id_estado_ambiente` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_ambiente` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_ambiente`),
  UNIQUE KEY `name_estado_ambiente` (`name_estado_ambiente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ficha`
--

DROP TABLE IF EXISTS `estado_ficha`;
CREATE TABLE IF NOT EXISTS `estado_ficha` (
  `id_estado_ficha` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_ficha` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_ficha`),
  UNIQUE KEY `name_estado_ficha` (`name_estado_ficha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_horario_asignada`
--

DROP TABLE IF EXISTS `estado_horario_asignada`;
CREATE TABLE IF NOT EXISTS `estado_horario_asignada` (
  `id_estado_horario_asignada` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_horario_asignada` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_horario_asignada`),
  UNIQUE KEY `name_estado_horario_asignada` (`name_estado_horario_asignada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_programa_formacion`
--

DROP TABLE IF EXISTS `estado_programa_formacion`;
CREATE TABLE IF NOT EXISTS `estado_programa_formacion` (
  `id_estado_programa_formacion` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_programa_formacion` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_programa_formacion`),
  UNIQUE KEY `name_estado_programa_formacion` (`name_estado_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

DROP TABLE IF EXISTS `estado_usuario`;
CREATE TABLE IF NOT EXISTS `estado_usuario` (
  `id_estado_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `name_estado_usuario` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_estado_usuario`),
  UNIQUE KEY `name_estado_usuario` (`name_estado_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fase`
--

DROP TABLE IF EXISTS `fase`;
CREATE TABLE IF NOT EXISTS `fase` (
  `id_fase` int(10) NOT NULL AUTO_INCREMENT,
  `name_fase` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_fase`),
  UNIQUE KEY `name_fase` (`name_fase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

DROP TABLE IF EXISTS `ficha`;
CREATE TABLE IF NOT EXISTS `ficha` (
  `id_ficha` int(10) NOT NULL AUTO_INCREMENT,
  `num_ficha` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `cod_estado_ficha` int(10) DEFAULT NULL,
  `cod_programa_formacion` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_ficha`),
  UNIQUE KEY `num_ficha` (`num_ficha`),
  KEY `FK_cod_estado_ficha` (`cod_estado_ficha`),
  KEY `FK_cod_programa_formacion_ficha` (`cod_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id_grupo` int(10) NOT NULL AUTO_INCREMENT,
  `cod_ficha` int(10) DEFAULT NULL,
  `num_grupo` varchar(3) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_ruta_ficha` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`),
  KEY `grupo` (`cod_ficha`,`num_grupo`,`cod_ruta_ficha`),
  KEY `FK_cod_ruta_ficha` (`cod_ruta_ficha`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_asignada`
--

DROP TABLE IF EXISTS `horario_asignada`;
CREATE TABLE IF NOT EXISTS `horario_asignada` (
  `id_horas_asignadas` int(10) NOT NULL AUTO_INCREMENT,
  `cod_trimestre_horario` int(10) DEFAULT NULL,
  `cod_modo` int(10) DEFAULT NULL,
  `cod_ruta_ficha` int(10) DEFAULT NULL,
  `trimestre_ficha` varchar(4) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_resultado_aprendizaje` int(10) DEFAULT NULL,
  `cod_instructor` int(10) DEFAULT NULL,
  `cod_dias` int(10) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `cod_ambiente` int(10) DEFAULT NULL,
  `completado` bit(1) DEFAULT NULL,
  `cod_estado_horario` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_horas_asignadas`),
  KEY `FK_cod_estado_horario_asignado` (`cod_estado_horario`),
  KEY `FK_cod_dias` (`cod_dias`),
  KEY `FK_cod_trimestre` (`cod_trimestre_horario`),
  KEY `FK_cod_modo` (`cod_modo`),
  KEY `FK_cod_instructor` (`cod_instructor`),
  KEY `FK_cod_resultado_aprendizaje` (`cod_resultado_aprendizaje`),
  KEY `FK_cod_ruta_ficha_horario_asignada` (`cod_ruta_ficha`),
  KEY `FK_cod_ambiente` (`cod_ambiente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

DROP TABLE IF EXISTS `jornada`;
CREATE TABLE IF NOT EXISTS `jornada` (
  `id_jornada` int(10) NOT NULL AUTO_INCREMENT,
  `name_jornada` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_jornada`),
  UNIQUE KEY `name_jornada` (`name_jornada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo`
--

DROP TABLE IF EXISTS `modo`;
CREATE TABLE IF NOT EXISTS `modo` (
  `id_modo` int(10) NOT NULL AUTO_INCREMENT,
  `name_modo` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_modo`),
  UNIQUE KEY `name_modo` (`name_modo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_programa_formacion`
--

DROP TABLE IF EXISTS `nivel_programa_formacion`;
CREATE TABLE IF NOT EXISTS `nivel_programa_formacion` (
  `id_nivel_programa_formacion` int(10) NOT NULL AUTO_INCREMENT,
  `name_nivel_programa_formacion` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `duracion` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_nivel_programa_formacion`),
  UNIQUE KEY `name_nivel_programa_formacion` (`name_nivel_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_formacion`
--

DROP TABLE IF EXISTS `programa_formacion`;
CREATE TABLE IF NOT EXISTS `programa_formacion` (
  `id_programa_formacion` int(10) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `short_name_programa_formacion` varchar(5) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `name_programa_formacion` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `version_programa` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_nivel_programa_formacion` int(10) DEFAULT NULL,
  `cod_proyecto` int(10) DEFAULT NULL,
  `cod_estado_programa_formacion` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_programa_formacion`),
  UNIQUE KEY `name_programa_formacion` (`name_programa_formacion`),
  KEY `programa_formacion` (`codigo`),
  KEY `FK_cod_estado_programa_formacion` (`cod_estado_programa_formacion`),
  KEY `FK_cod_nivel_programa_formacion` (`cod_nivel_programa_formacion`),
  KEY `FK_cod_proyecto_programa_formacion` (`cod_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id_proyecto` int(10) NOT NULL AUTO_INCREMENT,
  `name_proyecto` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_proyecto`),
  UNIQUE KEY `name_proyecto` (`name_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_aprendizaje`
--

DROP TABLE IF EXISTS `resultado_aprendizaje`;
CREATE TABLE IF NOT EXISTS `resultado_aprendizaje` (
  `id_resultado_aprendizaje` int(10) NOT NULL AUTO_INCREMENT,
  `num_resultado_aprendizaje1` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `num_resultado_aprendizaje2` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_competencia` int(10) DEFAULT NULL,
  `name_resultado_aprendizaje` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_resultado_aprendizaje`),
  UNIQUE KEY `name_resultado_aprendizaje` (`name_resultado_aprendizaje`),
  KEY `resultado_aprendizaje` (`num_resultado_aprendizaje1`,`num_resultado_aprendizaje2`),
  KEY `FK_cod_competencia` (`cod_competencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `name_rol` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_rol`),
  UNIQUE KEY `name_rol` (`name_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta_ficha`
--

DROP TABLE IF EXISTS `ruta_ficha`;
CREATE TABLE IF NOT EXISTS `ruta_ficha` (
  `id_ruta_ficha` int(10) NOT NULL AUTO_INCREMENT,
  `name_ruta_ficha` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `num_ruta_ficha` varchar(10) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_jornada` int(10) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_ruta_ficha`),
  UNIQUE KEY `name_ruta_ficha` (`name_ruta_ficha`),
  KEY `ruta_ficha` (`name_ruta_ficha`,`num_ruta_ficha`),
  KEY `FK_cod_jornada` (`cod_jornada`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

DROP TABLE IF EXISTS `sede`;
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(10) NOT NULL AUTO_INCREMENT,
  `name_sede` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_sede`),
  UNIQUE KEY `name_sede` (`name_sede`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

DROP TABLE IF EXISTS `trimestre`;
CREATE TABLE IF NOT EXISTS `trimestre` (
  `id_trimestre` int(10) NOT NULL AUTO_INCREMENT,
  `name_trimestre` varchar(100) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_trimestre`),
  UNIQUE KEY `name_trimestre` (`name_trimestre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `dni` varchar(15) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `apellido` varchar(60) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_520_nopad_ci DEFAULT NULL,
  `cod_rol` int(10) DEFAULT NULL,
  `cod_estado_usuario` int(10) DEFAULT NULL,
  `version` int(10) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `documento` (`dni`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `token` (`token`),
  KEY `FK_cod_estado_usuario` (`cod_estado_usuario`),
  KEY `FK_cod_rol` (`cod_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_nopad_ci COMMENT='Este tabla del usuario para accede el sistema SCHEDUS' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ambientes`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ambientes`;
CREATE TABLE IF NOT EXISTS `v_ambientes` (
`id_ambiente` int(10)
,`num_ambiente` varchar(100)
,`name_sede` varchar(100)
,`direccion` varchar(191)
,`name_estado_ambiente` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_competencias_resultado_aprendizaje_programa_formacion`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_competencias_resultado_aprendizaje_programa_formacion`;
CREATE TABLE IF NOT EXISTS `v_competencias_resultado_aprendizaje_programa_formacion` (
`id_resultado_aprendizaje` int(10)
,`cod_competencia` int(10)
,`num_resultado_aprendizaje1` varchar(10)
,`num_resultado_aprendizaje2` varchar(10)
,`name_resultado_aprendizaje` varchar(100)
,`cod_programa_formacion` int(10)
,`codigo_competencia` int(10)
,`num_competencia2` varchar(20)
,`name_competencia` varchar(100)
,`id_programa_formacion` int(10)
,`codigo` varchar(10)
,`short_name_programa_formacion` varchar(5)
,`name_programa_formacion` varchar(191)
,`version_programa` varchar(10)
,`id_nivel_programa_formacion` int(10)
,`name_nivel_programa_formacion` varchar(100)
,`duracion` varchar(100)
,`id_estado_programa_formacion` int(10)
,`name_estado_programa_formacion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ficha_grupo_programa_nivel_estado`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ficha_grupo_programa_nivel_estado`;
CREATE TABLE IF NOT EXISTS `v_ficha_grupo_programa_nivel_estado` (
`id_ficha` int(10)
,`num_ficha` varchar(100)
,`num_grupo` varchar(3)
,`name_programa_formacion` varchar(191)
,`name_nivel_programa_formacion` varchar(100)
,`name_estado_ficha` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ficha_programa_nivel_estado`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ficha_programa_nivel_estado`;
CREATE TABLE IF NOT EXISTS `v_ficha_programa_nivel_estado` (
`id_ficha` int(10)
,`num_ficha` varchar(100)
,`id_programa_formacion` int(10)
,`name_programa_formacion` varchar(191)
,`id_nivel_programa_formacion` int(10)
,`name_nivel_programa_formacion` varchar(100)
,`id_estado_ficha` int(10)
,`name_estado_ficha` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_horario_asignado`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_horario_asignado`;
CREATE TABLE IF NOT EXISTS `v_horario_asignado` (
`name_trimestre` varchar(100)
,`fecha_inicio` date
,`fecha_fin` date
,`name_ruta_ficha` varchar(100)
,`num_ruta_ficha` varchar(10)
,`name_jornada` varchar(100)
,`short_name_programa_formacion` varchar(5)
,`name_programa_formacion` varchar(191)
,`fecha_inicio2` date
,`fecha_fin2` date
,`cod_competencia` int(10)
,`num_resultado_aprendizaje1` varchar(10)
,`num_resultado_aprendizaje2` varchar(10)
,`name_resultado_aprendizaje` varchar(100)
,`cod_programa_formacion` int(10)
,`codigo_competencia` int(10)
,`num_competencia2` varchar(20)
,`name_competencia` varchar(100)
,`nombre` varchar(60)
,`apellido` varchar(60)
,`name_modo` varchar(100)
,`name_dias` varchar(100)
,`hora_inicio` time
,`hora_fin` time
,`num_ambiente` varchar(100)
,`name_sede` varchar(100)
,`direccion` varchar(191)
,`name_estado_horario_asignada` varchar(100)
,`num_actividad_proyecto` varchar(5)
,`name_actividad_proyecto` varchar(100)
,`observaciones` varchar(191)
,`name_fase` varchar(100)
,`name_proyecto` varchar(191)
,`name_nivel_programa_formacion` varchar(100)
,`duracion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_programa_formacion`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_programa_formacion`;
CREATE TABLE IF NOT EXISTS `v_programa_formacion` (
`id_programa_formacion` int(10)
,`codigo` varchar(10)
,`short_name_programa_formacion` varchar(5)
,`name_programa_formacion` varchar(191)
,`version_programa` varchar(10)
,`id_nivel_programa_formacion` int(10)
,`name_nivel_programa_formacion` varchar(100)
,`duracion` varchar(100)
,`id_estado_programa_formacion` int(10)
,`name_estado_programa_formacion` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_ruta_ficha`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_ruta_ficha`;
CREATE TABLE IF NOT EXISTS `v_ruta_ficha` (
`id_ruta_ficha` int(10)
,`name_ruta_ficha` varchar(100)
,`num_ruta_ficha` varchar(10)
,`fecha_inicio` date
,`fecha_fin` date
,`observaciones` varchar(191)
,`id_jornada` int(10)
,`name_jornada` varchar(100)
,`id_ficha` int(10)
,`num_ficha` varchar(100)
,`num_grupo` varchar(3)
,`id_estado_ficha` int(10)
,`name_estado_ficha` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `v_usuarios`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `v_usuarios`;
CREATE TABLE IF NOT EXISTS `v_usuarios` (
`id_usuario` int(10)
,`dni` varchar(15)
,`nombre` varchar(60)
,`apellido` varchar(60)
,`email` varchar(60)
,`password` varchar(128)
,`id_rol` int(10)
,`name_rol` varchar(100)
,`id_estado_usuario` int(10)
,`name_estado_usuario` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ambientes`
--
DROP TABLE IF EXISTS `v_ambientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambientes`  AS  select `ambiente`.`id_ambiente` AS `id_ambiente`,`ambiente`.`num_ambiente` AS `num_ambiente`,`sede`.`name_sede` AS `name_sede`,`sede`.`direccion` AS `direccion`,`estado_ambiente`.`name_estado_ambiente` AS `name_estado_ambiente` from ((`ambiente` join `sede` on(`ambiente`.`cod_sede` = `sede`.`id_sede`)) join `estado_ambiente` on(`ambiente`.`cod_estado_ambiente` = `estado_ambiente`.`id_estado_ambiente`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_competencias_resultado_aprendizaje_programa_formacion`
--
DROP TABLE IF EXISTS `v_competencias_resultado_aprendizaje_programa_formacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_competencias_resultado_aprendizaje_programa_formacion`  AS  select `resultado_aprendizaje`.`id_resultado_aprendizaje` AS `id_resultado_aprendizaje`,`resultado_aprendizaje`.`cod_competencia` AS `cod_competencia`,`resultado_aprendizaje`.`num_resultado_aprendizaje1` AS `num_resultado_aprendizaje1`,`resultado_aprendizaje`.`num_resultado_aprendizaje2` AS `num_resultado_aprendizaje2`,`resultado_aprendizaje`.`name_resultado_aprendizaje` AS `name_resultado_aprendizaje`,`competencia`.`cod_programa_formacion` AS `cod_programa_formacion`,`competencia`.`codigo_competencia` AS `codigo_competencia`,`competencia`.`num_competencia2` AS `num_competencia2`,`competencia`.`name_competencia` AS `name_competencia`,`programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`codigo` AS `codigo`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`programa_formacion`.`version_programa` AS `version_programa`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion`,`estado_programa_formacion`.`id_estado_programa_formacion` AS `id_estado_programa_formacion`,`estado_programa_formacion`.`name_estado_programa_formacion` AS `name_estado_programa_formacion` from ((((`competencia` join `resultado_aprendizaje` on(`competencia`.`codigo_competencia` = `resultado_aprendizaje`.`cod_competencia`)) join `programa_formacion` on(`competencia`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `estado_programa_formacion` on(`programa_formacion`.`cod_estado_programa_formacion` = `estado_programa_formacion`.`id_estado_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ficha_grupo_programa_nivel_estado`
--
DROP TABLE IF EXISTS `v_ficha_grupo_programa_nivel_estado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ficha_grupo_programa_nivel_estado`  AS  select `ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`grupo`.`num_grupo` AS `num_grupo`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from ((((`ficha` join `grupo` on(`ficha`.`id_ficha` = `grupo`.`cod_ficha`)) join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `programa_formacion` on(`ficha`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ficha_programa_nivel_estado`
--
DROP TABLE IF EXISTS `v_ficha_programa_nivel_estado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ficha_programa_nivel_estado`  AS  select `ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`estado_ficha`.`id_estado_ficha` AS `id_estado_ficha`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from (((`ficha` join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `programa_formacion` on(`ficha`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_horario_asignado`
--
DROP TABLE IF EXISTS `v_horario_asignado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_horario_asignado`  AS  select `trimestre`.`name_trimestre` AS `name_trimestre`,`trimestre`.`fecha_inicio` AS `fecha_inicio`,`trimestre`.`fecha_fin` AS `fecha_fin`,`ruta_ficha`.`name_ruta_ficha` AS `name_ruta_ficha`,`ruta_ficha`.`num_ruta_ficha` AS `num_ruta_ficha`,`jornada`.`name_jornada` AS `name_jornada`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`ruta_ficha`.`fecha_inicio` AS `fecha_inicio2`,`ruta_ficha`.`fecha_fin` AS `fecha_fin2`,`resultado_aprendizaje`.`cod_competencia` AS `cod_competencia`,`resultado_aprendizaje`.`num_resultado_aprendizaje1` AS `num_resultado_aprendizaje1`,`resultado_aprendizaje`.`num_resultado_aprendizaje2` AS `num_resultado_aprendizaje2`,`resultado_aprendizaje`.`name_resultado_aprendizaje` AS `name_resultado_aprendizaje`,`competencia`.`cod_programa_formacion` AS `cod_programa_formacion`,`competencia`.`codigo_competencia` AS `codigo_competencia`,`competencia`.`num_competencia2` AS `num_competencia2`,`competencia`.`name_competencia` AS `name_competencia`,`usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido`,`modo`.`name_modo` AS `name_modo`,`dias`.`name_dias` AS `name_dias`,`horario_asignada`.`hora_inicio` AS `hora_inicio`,`horario_asignada`.`hora_fin` AS `hora_fin`,`ambiente`.`num_ambiente` AS `num_ambiente`,`sede`.`name_sede` AS `name_sede`,`sede`.`direccion` AS `direccion`,`estado_horario_asignada`.`name_estado_horario_asignada` AS `name_estado_horario_asignada`,`actividad_proyecto`.`num_actividad_proyecto` AS `num_actividad_proyecto`,`actividad_proyecto`.`name_actividad_proyecto` AS `name_actividad_proyecto`,`ruta_ficha`.`observaciones` AS `observaciones`,`fase`.`name_fase` AS `name_fase`,`proyecto`.`name_proyecto` AS `name_proyecto`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion` from (((((((((((((((((((`ficha` join `grupo` on(`ficha`.`id_ficha` = `grupo`.`cod_ficha`)) join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `ruta_ficha` on(`grupo`.`cod_ruta_ficha` = `ruta_ficha`.`id_ruta_ficha`)) join `horario_asignada` on(`ruta_ficha`.`id_ruta_ficha` = `horario_asignada`.`cod_ruta_ficha`)) join `jornada` on(`ruta_ficha`.`cod_jornada` = `jornada`.`id_jornada`)) join `usuario` on(`horario_asignada`.`cod_instructor` = `usuario`.`id_usuario`)) join `dias` on(`horario_asignada`.`cod_dias` = `dias`.`id_dias`)) join `modo` on(`horario_asignada`.`cod_modo` = `modo`.`id_modo`)) join `ambiente` on(`horario_asignada`.`cod_ambiente` = `ambiente`.`id_ambiente`)) join `resultado_aprendizaje` on(`horario_asignada`.`cod_resultado_aprendizaje` = `resultado_aprendizaje`.`id_resultado_aprendizaje`)) join `trimestre` on(`horario_asignada`.`cod_trimestre_horario` = `trimestre`.`id_trimestre`)) join `estado_horario_asignada` on(`horario_asignada`.`cod_estado_horario` = `estado_horario_asignada`.`id_estado_horario_asignada`)) join `sede` on(`ambiente`.`cod_sede` = `sede`.`id_sede`)) join `competencia` on(`resultado_aprendizaje`.`cod_competencia` = `competencia`.`codigo_competencia`)) join `programa_formacion` on(`competencia`.`cod_programa_formacion` = `programa_formacion`.`id_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) join `proyecto` on(`programa_formacion`.`cod_proyecto` = `proyecto`.`id_proyecto`)) join `actividad_proyecto` on(`proyecto`.`id_proyecto` = `actividad_proyecto`.`cod_proyecto`)) join `fase` on(`actividad_proyecto`.`cod_fase` = `fase`.`id_fase`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_programa_formacion`
--
DROP TABLE IF EXISTS `v_programa_formacion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_programa_formacion`  AS  select `programa_formacion`.`id_programa_formacion` AS `id_programa_formacion`,`programa_formacion`.`codigo` AS `codigo`,`programa_formacion`.`short_name_programa_formacion` AS `short_name_programa_formacion`,`programa_formacion`.`name_programa_formacion` AS `name_programa_formacion`,`programa_formacion`.`version_programa` AS `version_programa`,`nivel_programa_formacion`.`id_nivel_programa_formacion` AS `id_nivel_programa_formacion`,`nivel_programa_formacion`.`name_nivel_programa_formacion` AS `name_nivel_programa_formacion`,`nivel_programa_formacion`.`duracion` AS `duracion`,`estado_programa_formacion`.`id_estado_programa_formacion` AS `id_estado_programa_formacion`,`estado_programa_formacion`.`name_estado_programa_formacion` AS `name_estado_programa_formacion` from ((`programa_formacion` join `estado_programa_formacion` on(`programa_formacion`.`cod_estado_programa_formacion` = `estado_programa_formacion`.`id_estado_programa_formacion`)) join `nivel_programa_formacion` on(`programa_formacion`.`cod_nivel_programa_formacion` = `nivel_programa_formacion`.`id_nivel_programa_formacion`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_ruta_ficha`
--
DROP TABLE IF EXISTS `v_ruta_ficha`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ruta_ficha`  AS  select `ruta_ficha`.`id_ruta_ficha` AS `id_ruta_ficha`,`ruta_ficha`.`name_ruta_ficha` AS `name_ruta_ficha`,`ruta_ficha`.`num_ruta_ficha` AS `num_ruta_ficha`,`ruta_ficha`.`fecha_inicio` AS `fecha_inicio`,`ruta_ficha`.`fecha_fin` AS `fecha_fin`,`ruta_ficha`.`observaciones` AS `observaciones`,`jornada`.`id_jornada` AS `id_jornada`,`jornada`.`name_jornada` AS `name_jornada`,`ficha`.`id_ficha` AS `id_ficha`,`ficha`.`num_ficha` AS `num_ficha`,`grupo`.`num_grupo` AS `num_grupo`,`estado_ficha`.`id_estado_ficha` AS `id_estado_ficha`,`estado_ficha`.`name_estado_ficha` AS `name_estado_ficha` from ((((`ficha` join `grupo` on(`ficha`.`id_ficha` = `grupo`.`cod_ficha`)) join `estado_ficha` on(`ficha`.`cod_estado_ficha` = `estado_ficha`.`id_estado_ficha`)) join `ruta_ficha` on(`grupo`.`cod_ruta_ficha` = `ruta_ficha`.`id_ruta_ficha`)) join `jornada` on(`ruta_ficha`.`cod_jornada` = `jornada`.`id_jornada`)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `v_usuarios`
--
DROP TABLE IF EXISTS `v_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_usuarios`  AS  select `usuario`.`id_usuario` AS `id_usuario`,`usuario`.`dni` AS `dni`,`usuario`.`nombre` AS `nombre`,`usuario`.`apellido` AS `apellido`,`usuario`.`email` AS `email`,`usuario`.`password` AS `password`,`rol`.`id_rol` AS `id_rol`,`rol`.`name_rol` AS `name_rol`,`estado_usuario`.`id_estado_usuario` AS `id_estado_usuario`,`estado_usuario`.`name_estado_usuario` AS `name_estado_usuario` from ((`estado_usuario` join `usuario` on(`estado_usuario`.`id_estado_usuario` = `usuario`.`cod_estado_usuario`)) join `rol` on(`usuario`.`cod_rol` = `rol`.`id_rol`)) ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_proyecto`
--
ALTER TABLE `actividad_proyecto`
  ADD CONSTRAINT `FK_cod_fase` FOREIGN KEY (`cod_fase`) REFERENCES `fase` (`id_fase`),
  ADD CONSTRAINT `FK_cod_proyecto_actividad_proyecto` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `FK_cod_estado_ambiente` FOREIGN KEY (`cod_estado_ambiente`) REFERENCES `estado_ambiente` (`id_estado_ambiente`),
  ADD CONSTRAINT `FK_cod_sede` FOREIGN KEY (`cod_sede`) REFERENCES `sede` (`id_sede`);

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `FK_cod_programa_formacion` FOREIGN KEY (`cod_programa_formacion`) REFERENCES `programa_formacion` (`id_programa_formacion`);

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `FK_cod_estado_ficha` FOREIGN KEY (`cod_estado_ficha`) REFERENCES `estado_ficha` (`id_estado_ficha`),
  ADD CONSTRAINT `FK_cod_programa_formacion_ficha` FOREIGN KEY (`cod_programa_formacion`) REFERENCES `programa_formacion` (`id_programa_formacion`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `FK_cod_ficha` FOREIGN KEY (`cod_ficha`) REFERENCES `ficha` (`id_ficha`),
  ADD CONSTRAINT `FK_cod_ruta_ficha` FOREIGN KEY (`cod_ruta_ficha`) REFERENCES `ruta_ficha` (`id_ruta_ficha`);

--
-- Filtros para la tabla `horario_asignada`
--
ALTER TABLE `horario_asignada`
  ADD CONSTRAINT `FK_cod_ambiente` FOREIGN KEY (`cod_ambiente`) REFERENCES `ambiente` (`id_ambiente`),
  ADD CONSTRAINT `FK_cod_dias` FOREIGN KEY (`cod_dias`) REFERENCES `dias` (`id_dias`),
  ADD CONSTRAINT `FK_cod_estado_horario_asignado` FOREIGN KEY (`cod_estado_horario`) REFERENCES `estado_horario_asignada` (`id_estado_horario_asignada`),
  ADD CONSTRAINT `FK_cod_instructor` FOREIGN KEY (`cod_instructor`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `FK_cod_modo` FOREIGN KEY (`cod_modo`) REFERENCES `modo` (`id_modo`),
  ADD CONSTRAINT `FK_cod_resultado_aprendizaje` FOREIGN KEY (`cod_resultado_aprendizaje`) REFERENCES `resultado_aprendizaje` (`id_resultado_aprendizaje`),
  ADD CONSTRAINT `FK_cod_ruta_ficha_horario_asignada` FOREIGN KEY (`cod_ruta_ficha`) REFERENCES `ruta_ficha` (`id_ruta_ficha`),
  ADD CONSTRAINT `FK_cod_trimestre` FOREIGN KEY (`cod_trimestre_horario`) REFERENCES `trimestre` (`id_trimestre`);

--
-- Filtros para la tabla `programa_formacion`
--
ALTER TABLE `programa_formacion`
  ADD CONSTRAINT `FK_cod_estado_programa_formacion` FOREIGN KEY (`cod_estado_programa_formacion`) REFERENCES `estado_programa_formacion` (`id_estado_programa_formacion`),
  ADD CONSTRAINT `FK_cod_nivel_programa_formacion` FOREIGN KEY (`cod_nivel_programa_formacion`) REFERENCES `nivel_programa_formacion` (`id_nivel_programa_formacion`),
  ADD CONSTRAINT `FK_cod_proyecto_programa_formacion` FOREIGN KEY (`cod_proyecto`) REFERENCES `proyecto` (`id_proyecto`);

--
-- Filtros para la tabla `resultado_aprendizaje`
--
ALTER TABLE `resultado_aprendizaje`
  ADD CONSTRAINT `FK_cod_competencia` FOREIGN KEY (`cod_competencia`) REFERENCES `competencia` (`codigo_competencia`);

--
-- Filtros para la tabla `ruta_ficha`
--
ALTER TABLE `ruta_ficha`
  ADD CONSTRAINT `FK_cod_jornada` FOREIGN KEY (`cod_jornada`) REFERENCES `jornada` (`id_jornada`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_cod_estado_usuario` FOREIGN KEY (`cod_estado_usuario`) REFERENCES `estado_usuario` (`id_estado_usuario`),
  ADD CONSTRAINT `FK_cod_rol` FOREIGN KEY (`cod_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
