# 2021-DB-Project
2021 database team project 


load csv file 
```
source create.sql; source load.sql;
create user 'dbweb'@'localhost' identified by 'dbweb';
grant all on db.* to 'dbweb'@'localhost';
```
