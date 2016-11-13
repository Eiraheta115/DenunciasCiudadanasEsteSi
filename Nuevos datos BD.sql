INSERT INTO roles(nombre_rol) VALUES ('Evaluador de Denuncias');

INSERT INTO entidades(nombre_entidad) VALUES('PNC');
INSERT INTO entidades(nombre_entidad) VALUES('Bomberos');
INSERT INTO entidades(nombre_entidad) VALUES('Fiscalia');
INSERT INTO entidades(nombre_entidad) VALUES('Cruz Roja');
INSERT INTO entidades(nombre_entidad) VALUES('Comando de Salvamento');

INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Robo',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Asesinato',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Incendio',2);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Inundacion',5);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Pleito en lugar publico',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Actos inmorales',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Accidente de trancito',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Violencia Intrafamiliar',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Acoso sexual',1);
INSERT INTO acontecimientos(nombre_acontecimiento,id_entidad) VALUES('Partos',4);

INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Recibida','Denuncua recibida');
INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Aceptada','La denuncia da lugar a ser investigada');
INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Investigación','Denuncia en proceso de investigacion');
INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Documentada','Denuncia esta siendo documentada');
INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Procesada','Denuncia en proceso de resolverse de acuerdo a las evidencias');
INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Cerrada','Denuncia cerrada en su totalidad');
INSERT INTO estado_denuncias(nombre_estado,descripcion_estado) VALUES('Denegada','No se pudo recabar las evidencias necesarias o no da lugar');