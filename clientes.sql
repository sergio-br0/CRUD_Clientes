create table clientes(
    cliente_id SERIAL not null,
    cliente_nombre VARCHAR(50) not null,
    cliente_apellido VARCHAR(50) not null,
    cliente_nit VARCHAR(50) not null,
    cliente_situacion smallint not null default 1,
    primary key (cliente_id)
)
