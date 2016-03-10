drop table if exists users;
create table users
  (
    userId int(11) primary key auto_increment,
    userName varchar(32),
    userPW varchar(64),
    activeSession varchar(128),
    firstLogin datetime,
    lastLogin datetime
    
  );