create table clientes(
    cliente_id SERIAL not null,
    cliente_nombre VARCHAR(50) not null,
    cliente_apellido VARCHAR(50) not null,
    cliente_nit VARCHAR(50) not null,
    cliente_situacion char (1) DEFAULT '1',
    primary key (cliente_id)
)

create table productos(
    producto_id serial not null,
    producto_nombre varchar(50) not null,
    producto_precio decimal(10,2) not null,
    producto_situacion smallint not null default 1,
    primary key (producto_id)
)

Create Table detalle_ventas (

    detalle_id serial not null,
    detalle_venta integer not null,
    detalle_producto integer not null,
    detalle_cantidad smallint not null,
    detalle_situación char (1) DEFAULT '1',
    primary key (detalle_id),
    foreign key (detalle_venta) REFERENCES ventas (venta_id),
    foreign key (detalle_producto) REFERENCES productos (producto_id)
);



Create table ventas (

    venta_id serial not null,
    venta_cliente integer not null,
    venta_fecha datetime year to minute not null,
    venta situacion char (1) DEFAULT '1',
    primary key (venta_id),
    foreign key (venta_cliente) REFERENCES clientes (cliente_id) 
);

