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

ALTER TABLE usuario
ADD COLUMN firma VARCHAR(255);

ALTER TABLE procedimiento
ADD COLUMN que VARCHAR(255);

ALTER TABLE procedimiento
ADD COLUMN como VARCHAR(255);

ALTER TABLE procedimiento
ADD COLUMN grafico VARCHAR(255);

ALTER TABLE procedimiento
ADD COLUMN duracion VARCHAR(255);

ALTER TABLE procedimiento
ADD COLUMN beneficios VARCHAR(1024);

ALTER TABLE procedimiento
ADD COLUMN riesgos_frecuentes VARCHAR(1024);

ALTER TABLE procedimiento
ADD COLUMN riesgos_poco_frecuentes VARCHAR(1024);

ALTER TABLE procedimiento
ADD COLUMN riesgos_especificos VARCHAR(1024);

ALTER TABLE procedimiento
ADD COLUMN consecuencias VARCHAR(1024);

ALTER TABLE procedimiento
ADD COLUMN alternativas VARCHAR(1024);

ALTER TABLE procedimiento
ADD COLUMN manejo VARCHAR(1024);
