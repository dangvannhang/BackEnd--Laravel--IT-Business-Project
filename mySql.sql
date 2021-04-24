drop database if exists piccine;
create database piccine;
use piccine;

create table roles(
	id int auto_increment,
    roles varchar(20),
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
	create_at datetime,
    update_at datetime,
    primary key(id)
);



create table users(
	id int auto_increment,
    username varchar(50),
	email varchar(70) default null,
    first_name varchar(50) default null,
    last_name varchar(40) default null,
    passwordd varchar(255),
    phone numeric default null,
    address varchar(255) default null,
    remember_token varchar(255) default null,
	create_at datetime,
    update_at datetime,
    primary key(id)
    
);

create table combo(
	id int auto_increment,
    id_photographer int,
    name_style varchar(50),
    descr varchar(255),
    img varchar(255),
    price float,
    primary key(id),
    foreign key(id_photographer) references users(id)
);


create table users_role(
	id int auto_increment,
    id_user int,
    id_role int,
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_role) references roles(id)
);

-- Phần table này liên quan đến billing, mà hiện tại chưa có thời gian nên thôi.

-- create table customers(
-- 	id int auto_increment,
--     id_user int,
--     billing varchar(255),
--     -- Cái này định là sẽ lưu lại cái tài khoản payment của app, để kiểu như người dùng có thể nạp card vào để dùng. 
--     primary key(id),
--     foreign key(id_user) references users(id)
-- );
create table photographer(
	id int auto_increment,
    id_photographer int,
    nickname varchar(50),
    studio_address varchar(255),
    limitation_time varchar(255),
    descript varchar(255),
    primary key(id),
    foreign key(id_photographer) references users(id)
);

create table booking(
	id int auto_increment,
    id_user int,
    id_photographer int,
    id_combo int,
    is_cancel boolean,
    id_voucher int,
    start_time datetime,
    end_time datetime,
    price float,
    created_at datetime,
    updated_at datetime,
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_photographer) references users(id),
	foreign key(id_combo) references combo(id),
    foreign key(id_voucher) references voucher(id)
);

create table posts(
	id int auto_increment,
	id_photographer int,
    title varchar(50),
    content Text,
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
    foreign key(id_user) references users(id)
);
create table photography_followers(
	id int auto_increment,
    id_user int,
	id_photographer int,
    primary key(id),
    foreign key(id_user) references users(id),
    foreign key(id_photographer) references users(id)
);



