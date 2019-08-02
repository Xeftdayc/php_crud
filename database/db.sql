CREATE DATABASE php_mysql;

use php_mysql;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  primary key(id)
)engine=InnoDB;

create table ticket(
  id INT(8) primary key AUTO_INCREMENT,
  title varchar(50) not null,
  descripcion text,
  priority varchar(10) not null,
  create_at timestamp default current_timestamp,
  primary key(id)
)engine=InnoDB;

create table area(
  id int(8) primary key auto_increment,
  name varchar(50) not null,
  descripcion text,
)engine=InnoDB;

insert into area values
  (null,'Almacen','El area de almacen de los paquetes'),
  (null,'Recepcion','El area de recepcion de paquetes');

insert into category values
  (null,'Reportes','bajo','Este tipo de prioridad baja'),
  (null,'Reportes','')