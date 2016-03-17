drop table if exists forumContent;
create table forumContent
  (
    commentId int(11) primary key auto_increment,
    articleId int(11),
    comment varchar(32),
    userId int(11)
    
  );