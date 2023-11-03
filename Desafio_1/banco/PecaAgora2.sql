-- Table: public.funcionario

-- DROP TABLE IF EXISTS public.funcionario;

CREATE TABLE IF NOT EXISTS public.funcionario
(
    id_funcionario integer NOT NULL,
    nome character varying(100) COLLATE pg_catalog."default",
    cpf character varying(14) COLLATE pg_catalog."default",
    logradouro character varying(255) COLLATE pg_catalog."default",
    cep character varying(9) COLLATE pg_catalog."default",
    cidade character varying(100) COLLATE pg_catalog."default",
    estado character varying(100) COLLATE pg_catalog."default",
    numero character varying(20) COLLATE pg_catalog."default",
    complemento character varying(100) COLLATE pg_catalog."default",
    cargo_id integer,
    CONSTRAINT funcionario_pkey PRIMARY KEY (id_funcionario)
)

INSERT INTO funcionario VALUES (1,'jose',111111,'av rio branco',101010,'juiz de fora','mg',120,'casa',1);
INSERT INTO funcionario VALUES (5,'ana',5461111,'av santa luzia',5501010,'juiz de fora','mg',9840,'casa',1);

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.funcionario
    OWNER to postgres;