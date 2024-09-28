use maskarino;

create table users (
id int not null primary key auto_increment,
firstname varchar(100),
lastname varchar(100),
section varchar(10),
email varchar(255),
password varchar(255),
date_register timestamp default current_timestamp
);

select * from users;