CREATE TABLE users (
    id int not null auto_increment,
    name varchar(255) not null,
    email varchar(255) not null unique,
    password varchar(255) not null,
    primary key (id)
);