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
