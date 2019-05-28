create table Register(
  num int auto_increment,
  name text,
  user_id text,
  user_pw text,
  email text,
  user_name text,
  primary key(num)
);

insert into Register(name, user_id, user_pw, email, user_name)values('성준', 'lsj', '2015136093', 'yuhancam1@naver.com', 'serpentra');
