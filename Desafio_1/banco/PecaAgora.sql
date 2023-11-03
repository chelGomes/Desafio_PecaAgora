-- Table: public.cargo

-- DROP TABLE IF EXISTS public.cargo;

CREATE TABLE IF NOT EXISTS public.cargo
(
    cargo_id integer NOT NULL,
    cargo_nome varchar(200) COLLATE pg_catalog."default" NOT NULL,
    salario double precision DEFAULT 0,
    descricao varchar(200) COLLATE pg_catalog."default" NOT NULL,
    departamento varchar(200) COLLATE pg_catalog."default",
    CONSTRAINT cargo_pkey PRIMARY KEY (cargo_id),
    CONSTRAINT cargo_salario_check CHECK (salario >= 0::double precision)
)


INSERT INTO cargo VALUES (1,'estagiario','850','apoio na parte do TI','tecnologia');
INSERT INTO cargo VALUES (2,'inanceiro','900','Controla o fluxo de caixa','financeiro');
INSERT INTO cargo VALUES (3,'administrativo','1000','funcionamento das rotinas administrativas','adminitrativo');
INSERT INTO cargo VALUES (1,'estagiario administrativo','850','funcionamento das rotinas administrativas','adminitrativo');

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.cargo
    OWNER to postgres;