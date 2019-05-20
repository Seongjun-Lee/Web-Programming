# boardz
게시판 검색 기능 완성하기

## 기존 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.html
```

## 추가 및 수정된 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.php (수정)
[만약 추가한 파일이 있으면, 내용 추가! 없으면 이 문구 삭제!]
```

## board.php

- mysql_connect와 mysql_connect_db를 이용하여 데이터베이스를 불러온다.
- form을 method='POST'로 하여 검색창에 입력하는 값을 $_POST로 가져올 수 있도록 한다.
- select image_url, title, contents from boardz where title like '%$name%'과 mysql_fetch_array를 이용하여
   검색창에 입력받은 문자열로 시작되는 단어와 끝나는 단어, 그리고 그 문자열이 포함되어있는 단어가
   제목으로 저장되어있는 레코드를 데이터베이스에서 배열형태로 가져온다.
   - 만약 boardz 테이블이 존재하지않는다면 에러메시지를 출력한다.
- echo문을 사용하여 입력받은 문자열에 해당하는 이미지를 출력한다.
   - 만약 레코드에 title이 저장되어있다면 타이틀과 이미지를 출력한다.
   - 만약 레코드에 title이 저장되어있지않다면 이미지만 출력하고 </ul>로
   그 다음 레코드는 홈페이지 상에서 우측으로 한 줄 이동하여 출력하도록 한다.
   - 만약 content에 값이 저장되어있다면 홈페이지에 출력한 다음 한 줄을 띈 다음
   이미지를 출력한다.