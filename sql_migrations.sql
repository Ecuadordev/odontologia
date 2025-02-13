ALTER TABLE paciente_exploracion
ADD COLUMN estomgtc_exp VARCHAR(255);

ALTER TABLE paciente_consulta
ADD COLUMN health_piece VARCHAR(255);

ALTER TABLE paciente_consulta
ADD COLUMN pcg VARCHAR(255);
