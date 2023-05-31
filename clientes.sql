create table cliente(
    cliente_id SERIAL not null,
    cliente_nombres VARCHAR(50) not null,
    cliente_apellidos VARCHAR(50) not null,
    cliente_nit VARCHAR(50) not null,
    cliente_situacion CHAR not null default 1,
    primary key (cliente_id)
)
