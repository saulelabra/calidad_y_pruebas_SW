INSERT INTO `mydb`.`carrera` (`codigo_carrera`, `nombre_carrera`) VALUES ('INT', 'Ingeniero en Negocios y Tecnologías de la Información');
INSERT INTO `mydb`.`carrera` (`codigo_carrera`, `nombre_carrera`) VALUES ('IIS', 'Ingeniero Industrial y en Sistemas');
INSERT INTO `mydb`.`carrera` (`codigo_carrera`, `nombre_carrera`) VALUES ('IDS', 'Ingeniero en Desarrollo Sustentable');

INSERT INTO `mydb`.`alumno` (`matricula`, `nombre`, `apellido`, `telefono`, `genero`, `correo`, `semestre`, `carrera`, `contraseña`) VALUES ('A01023212', 'Eduardo', 'Tricio', '5547658967', 'Masculino', 'eduardo@gmail.com', '2', 'INT', 'contraseña3');
INSERT INTO `mydb`.`alumno` (`matricula`, `nombre`, `apellido`, `telefono`, `genero`, `correo`, `semestre`, `carrera`, `contraseña`) VALUES ('A03457812', 'Juan', 'Perez', '5546903214', 'Masculino', 'juan@gmail.com', '3', 'IIS', 'contraseña7');
INSERT INTO `mydb`.`alumno` (`matricula`, `nombre`, `apellido`, `telefono`, `genero`, `correo`, `semestre`, `carrera`, `contraseña`) VALUES ('A08769234', 'Jorge', 'Lopez', '5567834567', 'Masculino', 'jorge@gmail.com', '4', 'IDS', 'contraseña9');

INSERT INTO `mydb`.`falta` (`codigo_falta`, `fecha`, `alumno_matricula`, `alumno_carrera`) VALUES ('0342', '2018-02-03', 'A01023212', 'INT');
INSERT INTO `mydb`.`falta` (`codigo_falta`, `fecha`, `alumno_matricula`, `alumno_carrera`) VALUES ('0876', '2018-03-02', 'A03457812', 'IIS');
INSERT INTO `mydb`.`falta` (`codigo_falta`, `fecha`, `alumno_matricula`, `alumno_carrera`) VALUES ('0768', '2018-05-02', 'A08769234', 'IDS');

INSERT INTO `mydb`.`profesor` (`matricula`, `nombre`, `apellido`, `correo`, `telefono`, `departamento`, `contraseña`) VALUES ('8765754', 'Maria', 'Martinez', 'maria@itesm.mx', '5537372689', 'Ingenieria', 'contraseña1');
INSERT INTO `mydb`.`profesor` (`matricula`, `nombre`, `apellido`, `correo`, `telefono`, `departamento`, `contraseña`) VALUES ('7964738', 'Jose Luis', 'Gonzalez', 'jose@itesm.mx', '5527987356', 'Ingenieria', 'contraseña2');
INSERT INTO `mydb`.`profesor` (`matricula`, `nombre`, `apellido`, `correo`, `telefono`, `departamento`, `contraseña`) VALUES ('0976549', 'Pedro', 'Ramirez', 'pedro@itesm.mx', '5521214536', 'Ingenieria', 'contraseña4');

INSERT INTO `mydb`.`materia` (`codigo_materia`, `grupo`, `nombre_materia`, `carrera`, `profesor_matricula`) VALUES ('IZT78', '3', 'Bases de Datos', 'INT', '0976549');
INSERT INTO `mydb`.`materia` (`codigo_materia`, `grupo`, `nombre_materia`, `carrera`, `profesor_matricula`) VALUES ('MX27', '1', 'Control Estadistico de la Calidad', 'IIS', '7964738');
INSERT INTO `mydb`.`materia` (`codigo_materia`, `grupo`, `nombre_materia`, `carrera`, `profesor_matricula`) VALUES ('HY67', '2', 'Cosas Sustentables', 'IDS', '8765754');

INSERT INTO `mydb`.`alumno_materia` (`alumno_matricula`, `materia_codigo_materia`, `puntaje_parcial1`, `puntaje_parcial2`, `puntaje_parcial3`) VALUES ('A01023212', 'IZT78', '90', '100', '98');
INSERT INTO `mydb`.`alumno_materia` (`alumno_matricula`, `materia_codigo_materia`, `puntaje_parcial1`, `puntaje_parcial2`, `puntaje_parcial3`) VALUES ('A03457812', 'MX27', '80', '70', '85');
INSERT INTO `mydb`.`alumno_materia` (`alumno_matricula`, `materia_codigo_materia`, `puntaje_parcial1`, `puntaje_parcial2`, `puntaje_parcial3`) VALUES ('A08769234', 'HY67', '70', '75', '80');

INSERT INTO `mydb`.`materia` (`codigo_materia`, `grupo`, `nombre_materia`, `carrera`, `profesor_matricula`) VALUES ('TCI01', '1', 'Redes I', 'ITC', '0976549');
INSERT INTO `mydb`.`materia` (`codigo_materia`, `grupo`, `nombre_materia`, `carrera`, `profesor_matricula`) VALUES ('TCL09', '2', 'Redes 2', 'ITC', '0976549');
UPDATE `mydb`.`materia` SET `nombre_materia`='Redes 1' WHERE `codigo_materia`='TCI01';
INSERT INTO `mydb`.`alumno_materia` (`alumno_matricula`, `materia_codigo_materia`, `puntaje_parcial1`, `puntaje_parcial2`, `puntaje_parcial3`) VALUES ('A01336418', 'TCI01', '72', '84', '89');
INSERT INTO `mydb`.`alumno_materia` (`alumno_matricula`, `materia_codigo_materia`, `puntaje_parcial1`, `puntaje_parcial2`, `puntaje_parcial3`) VALUES ('A08769234', 'TCI01', '85', '83', '87');

