drop table if exists friends;
create table friends
  (
      userId int(11),
      userName varchar(32),
      friendId int(11),
      friendName varchar(32)
  );