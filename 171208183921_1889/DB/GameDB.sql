create table GameDB(
  num int auto_increment,
  title text not null,
  device text not null,
  point int,
  genre text,
  company text,
  location text,
  primary key(num)
);

