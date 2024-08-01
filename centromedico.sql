-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2024 a las 16:35:38
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centromedico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `citFecha` date NOT NULL,
  `citHora` time NOT NULL,
  `citPaciente` int(11) NOT NULL,
  `citMedico` int(11) NOT NULL,
  `citConsultorio` int(11) NOT NULL,
  `citEstado` enum('Asignado','Atendido') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Asignado',
  `citObservaciones` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `citFecha`, `citHora`, `citPaciente`, `citMedico`, `citConsultorio`, `citEstado`, `citObservaciones`) VALUES
(13, '2021-09-16', '16:08:00', 24, 21, 4, 'Asignado', 'Paciente necesita ya vino de vacaiones'),
(14, '2021-09-10', '08:20:00', 25, 27, 1, 'Atendido', ' Cita de prueba'),
(15, '2024-07-30', '08:55:00', 22, 21, 4, 'Atendido', 'Hola'),
(17, '2024-07-30', '08:00:00', 22, 21, 4, 'Atendido', 's'),
(18, '2024-07-30', '02:00:00', 22, 21, 6, 'Atendido', '2'),
(19, '2024-07-30', '09:12:00', 22, 21, 4, '', 'SSS'),
(20, '2024-08-06', '09:13:00', 22, 21, 4, '', 'asdaw'),
(21, '2024-07-30', '09:37:00', 22, 21, 4, 'Asignado', 'asdawd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `idConsultorio` int(11) NOT NULL,
  `conNombre` char(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`idConsultorio`, `conNombre`) VALUES
(1, 'CONSULTORIO-101'),
(2, 'CONSULTORIO-102'),
(3, 'CONSULTORIO-201'),
(4, 'CONSULTORIO-202'),
(5, 'Test'),
(6, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `idMedico` int(11) NOT NULL,
  `medIdentificacion` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medEspecialidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medTelefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medCorreo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`idMedico`, `medIdentificacion`, `medNombres`, `medApellidos`, `medEspecialidad`, `medTelefono`, `medCorreo`) VALUES
(20, '75097575', 'Andres Camilo', 'Hoyos CarlosAmparo', 'Medico General', '320569850', 'camiloandres@hotmail.com'),
(21, '01425', 'Carlos', 'Aguirre', 'Pediatra', '312569780', 'carlosa@gmail.com'),
(22, '8965', 'David', 'Hoyos', 'Dermatologo', '3107324131', 'davidha20@gmail.com'),
(24, '1053', 'Yuliana', 'Arbelaez', 'Medico General', '3107327432', 'yulianitaac@hotmail.com'),
(25, '10232', 'gonzalo', 'Arbelaez', 'Medico General', '3107327432', 'yulianitaac@hotmail.com'),
(26, '24323', 'Julieth', 'Caicedo', 'Pediatra', '315353', 'ati@gmail.com'),
(27, '12355', 'juan', 'nicolas', 'Medico General', '3107324131', 'ati@gmail.com'),
(29, '75097577', 'David', 'Arbelaez', 'Medico General', '3107324131', 'ati@gmail.com'),
(30, '75097578', 'David', 'Arbelaez', 'Medico General', '3107324131', 'yulianitaac@hotmail.com'),
(31, '75097575777', 'Andres Julian ', 'Hoyos Caicedo', 'Medico General', '3107324131', 'davidha20@gmail.com'),
(32, '102328985', 'Juan Carlos', 'Henao Vaencia', 'Medico General', '3587456741', 'jchenado@htomailc.om'),
(33, '2365', 'Claudia', 'Caicedo', 'Medico General', '3248718578', 'claudia@hotmail.com'),
(34, '896500', 'David', 'Arbelaez', 'Medico General', '3248718578', 'carlosa@gmail.com'),
(35, '123344', 'David', 'Hoyos Caicedo', 'Medico General', '3587456741', 'ati@gmail.com'),
(36, '75097575wwww', 'David', 'Arbelaez', 'Medico General', '3107327432', 'andresjhc@hotmail.com.co'),
(38, '7509757523443', 'David', 'Arbelaez', 'Medico General', 'sdfsd', 'andresjhc@hotmail.com'),
(39, '00001', 'Pepito', 'Pérez', 'Medico General', '3205693215', 'pepitoperez@gmail.com'),
(41, '9874', 'Andres Julian', 'Hoyos Caicedo', 'Medico General', '31025698', 'andres@hotmail.com'),
(42, '78988', 'Carlos', 'Arboleda', 'Medico General', '2117944', 'carlos@gmail.com'),
(44, '9999', 'Yuliana', 'Alzate', 'Medico General', '3254426', 'yuliana@gmail.com'),
(45, '785478', 'Javier', 'Londoño', 'Medico General', '325487874', 'javi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` int(11) NOT NULL,
  `pacIdentificacion` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `pacNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pacApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pacFechaNacimiento` date NOT NULL,
  `pacSexo` enum('Femenino','Masculino') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `pacIdentificacion`, `pacNombres`, `pacApellidos`, `pacFechaNacimiento`, `pacSexo`) VALUES
(22, '105613', 'Valentina', 'HernÃ¡ndez', '2011-05-27', 'Femenino'),
(23, '5698', 'Sofia', 'DÃ­az Montoya', '1998-12-14', 'Femenino'),
(24, '123', 'Pepito Juarez', 'Martinez Osa', '1989-06-01', 'Masculino'),
(25, '987', 'Don Fulanito', 'De Tales', '1981-06-14', 'Masculino'),
(26, '007', 'Fulanito', 'De Tal', '1995-04-21', 'Masculino'),
(27, '008', 'RamÃ³n E.', 'RamÃ­rez', '2000-12-31', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamiento`
--

CREATE TABLE `tratamiento` (
  `tratDuracion` char(15) COLLATE utf16_spanish_ci NOT NULL,
  `tratNombre` varchar(50) COLLATE utf16_spanish_ci NOT NULL,
  `tratCosto` char(15) COLLATE utf16_spanish_ci NOT NULL,
  `idTratamiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

--
-- Volcado de datos para la tabla `tratamiento`
--

INSERT INTO `tratamiento` (`tratDuracion`, `tratNombre`, `tratCosto`, `idTratamiento`) VALUES
('1', 'Test', '1', 1),
('2', '2', '2', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuLogin` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuPassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuEstado` enum('Activo','Inactivo') COLLATE utf8_spanish_ci NOT NULL,
  `usuRol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `usuRol`) VALUES
(1, 'Medico', '81dc9bdb52d04dc20036dbd8313ed055', 'Activo', 'Administrador'),
(2, 'Test', '0cbc6611f5540bd0809a388dc95a615b', 'Activo', 'Administrador'),
(16, 'Jugiro', '3806734b256c27e41ec2c6bffa26d9e7', 'Activo', 'Administrador'),
(17, 'Gerente', '81dc9bdb52d04dc20036dbd8313ed055', 'Activo', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `fk_paciente` (`citPaciente`),
  ADD KEY `fk_medico` (`citMedico`),
  ADD KEY `fk_consultorio` (`citConsultorio`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`idConsultorio`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`idMedico`),
  ADD UNIQUE KEY `medIdentificacion` (`medIdentificacion`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`),
  ADD UNIQUE KEY `pacIdentificacion` (`pacIdentificacion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  ADD PRIMARY KEY (`idTratamiento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `login` (`usuLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `idConsultorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `tratamiento`
--
ALTER TABLE `tratamiento`
  MODIFY `idTratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_consultorios_idConsultorio` FOREIGN KEY (`citConsultorio`) REFERENCES `consultorios` (`idConsultorio`),
  ADD CONSTRAINT `fk_medicos_idMedico` FOREIGN KEY (`citMedico`) REFERENCES `medicos` (`idMedico`),
  ADD CONSTRAINT `fk_pacientes_idPaciente` FOREIGN KEY (`citPaciente`) REFERENCES `pacientes` (`idPaciente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
