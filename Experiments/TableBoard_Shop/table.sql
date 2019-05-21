create table tableboard_shop(
  num int auto_increment,
  date text,
  order_id int,
  name char(100),
  price int,
  quantity int,
  primary key(num)
);

insert into tableboard_shop(date, order_id, name, price, quantity)values('2017-09-29 01:22', 200398, 'iPhone X 64Gb Grey', 999.00, 1);
insert into tableboard_shop(date, order_id, name, price, quantity)values('2017-09-28 05:57', 200397, 'Samsung S8 Black', 756.00, 1);