/*Creación de la tabla persona*/
CREATE TABLE persona (
    id serial NOT NULL,
    nombre character varying(100) NOT NULL,
    email character varying(100) NOT NULL,
    edad integer NOT NULL,
    PRIMARY KEY(id)
);

/*Consulta obtiene todos los campos en la tabla persona*/
SELECT * FROM persona;