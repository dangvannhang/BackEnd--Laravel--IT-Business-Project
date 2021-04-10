
drop database if exists piccine;
create database piccine;
use piccine;


create table roles(
	id int auto_increment,
    roles varchar(10),
    descr varchar(255),
    primary key(id)
);
create table voucher(
	id int auto_increment,
    codee varchar(50),
    descr varchar(255),
    count int,
    denominations float,
    is_expired boolean,
	create_date datetime,
    update_date datetime,
    primary key(id)
);

create table combo(
	id int auto_increment,
    name_style varchar(50),
    descr varchar(255),
    img varchar(255),
    price float,
    primary key(id)
);


create table users(
	id int auto_increment,
    username varchar(50),
	email varchar(70),
    passwordd varchar(255),
    id_roles int,
    phone numeric,
    token varchar(255),
	create_date datetime,
    update_date datetime,
    primary key(id),
    foreign key (id_roles) references roles(id)
);

create table booking(
	id int auto_increment,
    id_user int,
    id_photographer int,
    id_combo int,
    is_cancel boolean,
    id_voucher int,
    create_date datetime,
    update_date datetime,
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_photographer) references users(id),
	foreign key(id_combo) references combo(id),
    foreign key(id_voucher) references voucher(id)
    
);

create table booking_detail(
	id int auto_increment,
    id_booking int,
    address varchar(200),
    start_time datetime,
    end_time datetime,
    price float,
    primary key(id),
    foreign key(id_booking) references booking(id)
);


create table posts(
	id int auto_increment,
	id_photographer int,
    title varchar(50),
    content varchar(255),
    img varchar(255),
	create_date datetime,
    update_date datetime,
    primary key(id),
	foreign key(id_photographer) references users(id)
);

create table main_style(
	id int auto_increment,
    namee varchar(50),
    descr varchar(255),
    primary key(id)
);
create table follow_styles(
	id int auto_increment,
    id_user int,
    id_style int ,
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_style) references main_style(id)
);

create table follow_photographer(
	id int auto_increment,
    id_user int,
	id_photographer int,
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_photographer) references users(id)
);

create table rating(
	id int auto_increment,
    id_photographer int,
    total_booking int,
    total_star int,
    average_star float,
    primary key(id),
    foreign key(id_photographer) references users(id)
);




