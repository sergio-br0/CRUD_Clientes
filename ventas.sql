create table ventas(
    venta_id serial not null,
    venta_cliente varchar(50) not null,
    venta_fecha   not null,
    venta_situacion smallint not null default 1,
    primary key (venta_id)
)
