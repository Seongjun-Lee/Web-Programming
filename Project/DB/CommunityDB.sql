create table gesipan(
Board_Num int not null auto_increment,
Board_score int,
Board_title text,
Board_writer text,
Board_views int not null,
Board_contents text,
Board_console text,
Board_game text,
Board_wdate datetime,
primary key(Board_Num));
