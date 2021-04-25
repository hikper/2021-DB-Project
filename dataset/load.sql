LOAD DATA LOCAL infile './Salaries.csv' INTO TABLE salaries
fields terminated by ','
enclosed by '"'
lines terminated by '\n'
ignore 1 lines;

LOAD DATA LOCAL infile './Master.csv' INTO TABLE MASTER
fields terminated by ','
enclosed by ''
lines terminated by '\n'
ignore 1 lines;

LOAD DATA LOCAL infile './Batting.csv' INTO TABLE Batting
fields terminated by ','
enclosed by ''
lines terminated by '\n'
ignore 1 lines;

LOAD DATA LOCAL infile './AwardsSharePlayers.csv' INTO TABLE AwardsSharePlayers
fields terminated by ','
enclosed by ''
lines terminated by '\n'
ignore 1 lines;

LOAD DATA LOCAL infile './Pitching.csv' INTO TABLE Pitching
fields terminated by ','
enclosed by ''
lines terminated by '\n'
ignore 1 lines;

LOAD DATA LOCAL infile './Fielding.csv' INTO TABLE Fielding
fields terminated by ','
enclosed by ''
lines terminated by '\n'
ignore 1 lines;
