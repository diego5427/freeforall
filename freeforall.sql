
comentarios 

CREATE TABLE `comentarios` (
  `idComentario` int(10) NOT NULL,
  `fechaIngreso` varchar(20) DEFAULT NULL,
  `horaIngreso` varchar(20) DEFAULT NULL,
  `idEvento` int(10) DEFAULT NULL,
  `idUsuario` int(10) DEFAULT NULL
) 

 

evento


CREATE TABLE `evento` (
  `idEvento` int(10) NOT NULL,
  `nombreEvento` varchar(100) NOT NULL,
  `idTipoUsuario` int(10) DEFAULT NULL,
  `FechaInicio` varchar(10) DEFAULT NULL,
  `FechaFin` varchar(10) DEFAULT NULL,
  `Tematica` varchar(20) DEFAULT NULL,
  `Ubicacion` varchar(20) DEFAULT NULL,
  `idUsuario` int(10) DEFAULT NULL,
  `idLiga` int(10) DEFAULT NULL,
  `idInvitaciones` int(10) DEFAULT NULL
) 

 

invtaciones


CREATE TABLE `invtaciones` (
  `idInvitacion` int(10) NOT NULL,
  `nombreInvitacion` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) 

 

liga


CREATE TABLE `liga` (
  `idLiga` int(10) NOT NULL,
  `nombreDeLiga` varchar(20) DEFAULT NULL
) 

 


 login


CREATE TABLE `login` (
  `idUsuario` int(10) DEFAULT NULL
) 

 

usuario


CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL,
  `primerNombre` varchar(20) DEFAULT NULL,
  `segudoNombre` varchar(20) DEFAULT NULL,
  `primerApellido` varchar(20) DEFAULT NULL,
  `segudoApellido` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fechaDeNacimiento` varchar(20) DEFAULT NULL
) 




comentarios

ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `comentarios-evento` (`idEvento`),
  ADD KEY `comentarios-usuarios` (`idUsuario`);


evento

ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `usuario-evento` (`idUsuario`),
  ADD KEY `liga-evento` (`idLiga`),
  ADD KEY `invitaciones-usuario` (`idInvitaciones`);


invtaciones`

ALTER TABLE `invtaciones`
  ADD PRIMARY KEY (`idInvitacion`);


liga

ALTER TABLE `liga`
  ADD PRIMARY KEY (`idLiga`);


login

ALTER TABLE `login`
  ADD KEY `login-usuario` (`idUsuario`);


usuario

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);


