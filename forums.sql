drop table if exists forums;
create table forums
  (
   threadId int(11) primary key auto_increment,
    opId int(11),
    opName varchar(32),
    threadName varchar(32)
    
    
  );