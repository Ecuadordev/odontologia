ALTER TABLE paciente_exploracion
ADD COLUMN estomgtc_exp VARCHAR(255);

ALTER TABLE paciente_consulta
ADD COLUMN health_piece VARCHAR(255);

ALTER TABLE paciente_consulta
ADD COLUMN pcg VARCHAR(255);

ALTER TABLE paciente_consulta
ADD COLUMN periodontal VARCHAR(50);

ALTER TABLE paciente_consulta
ADD COLUMN oclusion VARCHAR(50);

ALTER TABLE paciente_consulta
ADD COLUMN flourosis VARCHAR(50);

ALTER TABLE paciente_consulta
ADD COLUMN cpo VARCHAR(255);

CREATE TABLE
  `paciente_planes_diagnostico` (
    `pacplandiag_id` int (8) NOT NULL AUTO_INCREMENT,
    `codi_pac` int (8) DEFAULT NULL,
    `enfermedades` varchar(255) CHARACTER
    SET
      utf8 DEFAULT NULL,
      `observaciones` varchar(255) CHARACTER
    SET
      utf8 DEFAULT NULL,
      PRIMARY KEY (`pacplandiag_id`),
      KEY `codi_pac` (`codi_pac`),
      CONSTRAINT `paciente_plan_diagnostico_ibfk_1` FOREIGN KEY (`codi_pac`) REFERENCES `paciente` (`codi_pac`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARSET = utf8 COLLATE = utf8_spanish_ci;

ALTER TABLE paciente_diagnostico
ADD COLUMN predef VARCHAR(255);
