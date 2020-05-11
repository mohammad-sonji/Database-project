create database onlineShop;

create table owner (id int primary key not null, b_date date, address varchar(50), phone varchar(50));

create table customer (id int primary key not null, b_date date, address varchar(50), phone varchar(50));

create table shop (id int primary key not null auto_increment, owner_id  int, name varchar(50), address varchar(50), phone varchar(50));

create table product (id int primary key not null auto_increment,store_id int, name varchar(50), price int, picture BLOB, description varchar(50), cost int);

create table discounts (product_id int, discont int);

create table likes (customer_id int, store_id int);

create table login (id int primary key auto_increment, username varchar(50), password varchar(50));

create table Orders (id int primary key auto_increment, customer_id int, date date, order_time time, sent bit);

create table orderDetails (order_id int, quantiy int, product_ID int, Store_id int, discount int);

create table shoppingCart (customer_id int, product_ID int, quantiy int);

create table rating (storeid varchar, customer_id int, rate int);
