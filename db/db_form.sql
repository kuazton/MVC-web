
DELETE DATABASE IF EXISTS db_form;
CREATE DATABASE db_form;
USE DATABASE db_form;

-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idemp` int(11) DEFAULT NULL,
  `nomemp` varchar(50) DEFAULT NULL,
  `nit` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `idpag` int(11) NOT NULL,
  `nompag` varchar(50) DEFAULT NULL,
  `idmod` int(11) DEFAULT NULL,
  `rutpag` varchar(50) DEFAULT NULL,
  `mospag` int(11) DEFAULT NULL,
  `icopag` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`idpag`, `nompag`, `idmod`, `rutpag`, `mospag`, `icopag`) VALUES
(1, 'Usuarios', NULL, 'views/usu.php', NULL, 'fa-solid fa-user'),
(2, 'Empresa', NULL, 'views/emp.php', NULL, 'fa-solid fa-building');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusu` int(11) NOT NULL,
  `idemp` int(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusu`, `idemp`, `nombre`, `apellido`, `correo`, `sexo`) VALUES
(1, NULL, 'esteban', 'gay', 'pepe@gmail.com', 1),
(2, NULL, 'esteban', 'Gay', 'pepe@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usxpag`
--

CREATE TABLE `usxpag` (
  `idusu` int(11) DEFAULT NULL,
  `idpag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`idpag`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `idpag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

