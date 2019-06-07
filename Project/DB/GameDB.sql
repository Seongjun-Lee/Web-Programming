create table GameDB(
  num int auto_increment,
  title text not null,
  device text not null,
  point int,
  company text,
  location text,
  image text,
  primary key(num)
);

insert into GameDB(title, device, point, company, location, image)values('Total War: THREE KINGDOMS', 'PC', 85, 'CREATIVE ASSEMBLY', 'https://store.steampowered.com/app/779340/Total_War_THREE_KINGDOMS/', 'https://upload.wikimedia.org/wikipedia/en/3/32/Total_War_Three_Kingdoms_cover_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('PLAYERUNKNOWNS BATTLEGROUNDS', 'PC', 86, 'PUBG Corporation', 'https://store.steampowered.com/app/578080/PLAYERUNKNOWNS_BATTLEGROUNDS/', 'https://upload.wikimedia.org/wikipedia/en/3/3d/PlayerUnknown%27s_Battlegrounds_Steam_Logo.jpg');
insert into GameDB(title, device, point, company, location, image)values('Grand Theft Auto V', 'PC', 96, 'Rockstar North', 'https://store.steampowered.com/app/271590/Grand_Theft_Auto_V/', 'https://upload.wikimedia.org/wikipedia/en/a/a5/Grand_Theft_Auto_V.png');
insert into GameDB(title, device, point, company, location, image)values('MONSTER HUNTER: WORLD', 'PC', 88, 'CAPCOM Co., Ltd.', 'https://store.steampowered.com/app/582010/MONSTER_HUNTER_WORLD/', 'https://upload.wikimedia.org/wikipedia/en/1/1b/Monster_Hunter_World_cover_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('Sekiro: Shadows Die Twice', 'PC', 88, 'FromSoftware', 'https://store.steampowered.com/app/814380/Sekiro_Shadows_Die_Twice/', 'https://upload.wikimedia.org/wikipedia/en/6/6e/Sekiro_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('Borderlands 2', 'PC', 89, 'Gearbox Software', 'https://store.steampowered.com/app/49520/Borderlands_2/', 'https://upload.wikimedia.org/wikipedia/en/7/77/Borderlands2boxart3.jpg');
insert into GameDB(title, device, point, company, location, image)values('Terraria', 'PC', 83, 'Re-Logic', 'https://store.steampowered.com/app/105600/Terraria/?snr=1_7_7_globaltopsellers_150_3', 'https://upload.wikimedia.org/wikipedia/en/4/42/TerrariaLogo2.png');
insert into GameDB(title, device, point, company, location, image)values('Frostpunk', 'PC', 84, '11 bit studios', 'https://store.steampowered.com/app/323190/Frostpunk/', 'https://upload.wikimedia.org/wikipedia/en/a/a3/Frostpunk_cover_art.jpg');

insert into GameDB(title, device, point, company, location, image)values('Days Gone', 'PS4', 71, 'Bend Studio', 'https://store.playstation.com/ko-kr/product/HP9000-CUSA09115_00-ASIAFULLGAME0000', 'https://upload.wikimedia.org/wikipedia/en/1/16/Days_Gone_cover_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('Red Dead Redemption 2', 'PS4', 97, 'Rockstar Games', 'https://store.playstation.com/ko-kr/product/UP1004-CUSA03041_00-ASIAPLACEHOLDER0?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/4/44/Red_Dead_Redemption_II.jpg');
insert into GameDB(title, device, point, company, location, image)values('God of War', 'PS4', 94, 'Santa Monica Studio', 'https://store.playstation.com/ko-kr/product/HP9000-CUSA07413_00-00000000GODOFWAR?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/a/a7/God_of_War_4_cover.jpg');
insert into GameDB(title, device, point, company, location, image)values('KINGDOM HEARTS III', 'PS4', 83, 'SQUARE ENIX CO., LTD.', 'https://store.playstation.com/ko-kr/product/HP0082-CUSA15072_00-ASIAFULLGAME0000?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Kingdom_Hearts_III_box_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('Sekiro: Shadows Die Twice', 'PS4', 90, 'FromSoftware', 'https://store.playstation.com/ko-kr/product/HP0506-CUSA13910_00-ASIAFULLGAME0000?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/6/6e/Sekiro_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('Tom Clancys The Division 2', 'PS4', 82, 'Massive Entertainment', 'https://store.playstation.com/ko-kr/product/JP0001-CUSA12615_00-ASIAPLACEHOLDER0?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/a/af/The_Division_2_art.jpg');
insert into GameDB(title, device, point, company, location, image)values('Marvels Spider-Man', 'PS4', 87, 'Insomniac Games', 'https://store.playstation.com/ko-kr/product/HP9000-CUSA09893_00-ASIAPLACEHOLDER0?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/e/e1/Spider-Man_PS4_cover.jpg');
insert into GameDB(title, device, point, company, location, image)values('The Last of Us Remastered', 'PS4', 95, 'Naughty Dog', 'https://store.playstation.com/ko-kr/product/HP9000-CUSA00559_00-THELASTOFUS00000?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg');

insert into GameDB(title, device, point, company, location, image)values('BEYOND: Two Souls', 'PS3', 70, 'Quantic Dream', 'https://store.playstation.com/ko-kr/product/HP9000-NPHA80260_00-GBEYONDTWO000001?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/d/da/Beyond_Two_Souls_final_cover.jpg');
insert into GameDB(title, device, point, company, location, image)values('Grand Theft Auto V', 'PS3', 98, 'Rockstar North', 'https://store.playstation.com/ko-kr/product/UP1004-NPUB31154_00-ASIAGTAVFULLGAME?smcid=web%3Apsn%3Aprimary%20nav%3Asearch%3Ared%20dead%20redemption%202', 'https://upload.wikimedia.org/wikipedia/en/a/a5/Grand_Theft_Auto_V.png');
insert into GameDB(title, device, point, company, image)values('Uncharted 3: Drakes Deception', 'PS3', 92, 'Naughty Dog', 'https://upload.wikimedia.org/wikipedia/en/0/02/Uncharted_3_Boxart.jpg');
insert into GameDB(title, device, point, company, image)values('Heavy Rain', 'PS3', 87, 'Quantic Dream', 'https://upload.wikimedia.org/wikipedia/en/c/c1/Heavy_Rain_Cover_Art.jpg');

insert into GameDB(title, device, point, company, location, image)values('Super Mario Odyssey', 'SWITCH', 97, 'Nintendo EPD', 'http://www.nintendo.co.kr/software/switch/aaaca/', 'https://upload.wikimedia.org/wikipedia/en/8/8d/Super_Mario_Odyssey.jpg');
insert into GameDB(title, device, point, company, location, image)values('The Legend of Zelda: Breath of the Wild', 'SWITCH', 97, 'Nintendo EPD', 'http://www.nintendo.co.kr/software/switch/detail/aaaaa/', 'https://upload.wikimedia.org/wikipedia/en/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg');
insert into GameDB(title, device, point, company, location, image)values('Super Mario Party', 'SWITCH', 76, 'NDcube', 'http://www.nintendo.co.kr/software/switch/adfja/pc/', 'https://upload.wikimedia.org/wikipedia/en/6/6c/Super_Mario_Party.jpg');
insert into GameDB(title, device, point, company, location, image)values('Tetris 99', 'SWITCH', 83, '11 bit studios', 'http://www.nintendo.co.kr/switch/games/tetris99/', 'https://upload.wikimedia.org/wikipedia/en/7/76/Tetris99-coverart.png');

insert into GameDB(title, device, point, company, location, image)values('Tetris 99', 'XBOXONE', 83, '11 bit studios', 'http://www.nintendo.co.kr/switch/games/tetris99/', 'https://upload.wikimedia.org/wikipedia/en/7/76/Tetris99-coverart.png');
insert into GameDB(title, device, point, company, location, image)values('Tetris 99', 'XBOXONE', 83, '11 bit studios', 'http://www.nintendo.co.kr/switch/games/tetris99/', 'https://upload.wikimedia.org/wikipedia/en/7/76/Tetris99-coverart.png');
insert into GameDB(title, device, point, company, location, image)values('Tetris 99', 'XBOXONE', 83, '11 bit studios', 'http://www.nintendo.co.kr/switch/games/tetris99/', 'https://upload.wikimedia.org/wikipedia/en/7/76/Tetris99-coverart.png');
insert into GameDB(title, device, point, company, location, image)values('Tetris 99', 'XBOXONE', 83, '11 bit studios', 'http://www.nintendo.co.kr/switch/games/tetris99/', 'https://upload.wikimedia.org/wikipedia/en/7/76/Tetris99-coverart.png');
