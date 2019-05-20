# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!

[여기에 테이블 생성 시, 사용한 Query 를 작성하세요.]
- Note: create table tableboard_shop(
              num int auto_increment,
              date text,
              order_id int,
              name char(100),
              price int,
              quantity int,
              primary key(num)
            );
- table 이름은 tableboard_shop 으로 생성
- 기본키는 num 으로, 그 외의 속성은 board_form.php 의 input 태그 name 에 표시된 속성 이름으로 생성
- 각 속성의 type 은 자유롭게 설정 (단, 입력되는 값의 타입과 일치해야 함)
    - ex) price -> int
    - ex) name -> char or varchar
    
## index.php 수정
[여기에 index.php 를 어떻게 수정했는지, 설명을 작성하세요.]

- mysql_connect와 mysql_connect_db를 이용하여 데이터베이스를 불러온다.
- select * from tableboard_shop으로 테이블에 저장되어있던 데이터를 불러온 다음
   mysql_fetch_array로 데이터를 배열 형태로 가져온다.
- while문으로 데이터베이스에서 가져온 데이터 배열의 처음부터 끝까지를 echo문으로 출력한다.


## board_form.php 수정
[여기에 board_form.php 를 어떻게 수정했는지, 설명을 작성하세요.]

- mysql_connect와 mysql_connect_db를 이용하여 데이터베이스를 불러온다.
- 만약 새로운 레코드를 추가하는 경우엔 입력창이 나왔을 때 입력하는 칸이 비어있지만,
   기존에 있던 레코드를 수정하는 경우엔 이미 레코드에 저장되어있는 값이 있으므로,
   입력하는 칸에 기존에 저장되어있는 값이 출력되어야 한다. 그러기 위해선
   
   - $_GET[num]으로 원하는 레코드의 num을 가져온다.
   - select * from tableboard_shop where num='$_GET[num]'와 mysql_fetch_array로
    num에 해당하는 레코드의 정보를 배열 형태로 가져온다.
   -  echo문을 사용하여 레코드에 저장되어있는 값을 출력한다.

## function
### insert.php 수정
[여기에 insert.php 를 어떻게 수정했는지, 설명을 작성하세요.]

- mysql_connect와 mysql_connect_db를 이용하여 데이터베이스를 불러온다.
- board_form.php에서 method=post로 되어있었으므로 $_POST를 사용하여 입력받은 데이터를 읽어온 다음
   각각의 변수에 저장한다.
- insert into tableboard_shop (date, order_id, name, price, quantity) values('$date', $order, '$name', $price, $quantity)로
   변수에 저장한 각 데이터를 db에 입력하고 저장한다.

### update.php 수정
[여기에 update.php 를 어떻게 수정했는지, 설명을 작성하세요.]

- mysql_connect와 mysql_connect_db를 이용하여 데이터베이스를 불러온다.
- $_GET[num]을 사용하여 수정하고자 하는 레코드의 num을 확인하고
   insert.php와 같이 $_POST를 사용하여 입력받은 데이터를 읽어온 다음 각각의 변수에 저장한다.
- update tableboard_shop set date = '$date', order_id = '$order', name = '$name', price = '$price', quantity = '$quantity' where num='$num'을 사용하여
   수정하고자 하는 레코드에 저장되어있는 값을 새로 입력받은 값으로 변경한다.


### delete.php 수정
[여기에 delete.php 를 어떻게 수정했는지, 설명을 작성하세요.]

- mysql_connect와 mysql_connect_db를 이용하여 데이터베이스를 불러온다.
- $_GET[num]으로 레코드의 num값을 받아온다음 $num에 저장한다.
- delete from tableboard_shop where num='$num'를 사용하여 $_GET[num]으로 받아온 num의 값을 가진 레코드를 삭제한다.
