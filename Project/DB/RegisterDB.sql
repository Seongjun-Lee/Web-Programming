create table RegisterDB(
  num int auto_increment,
  name text not null,
  user_id text not null,
  user_pw text not null,
  email text not null,
  user_name text not null,
  primary key(num)
);

-- insert into RegisterDB(name, user_id, user_pw, email, user_name)values('성준', 'lsj', '2015136093', 'yuhancam1@naver.com', 'serpentra');
