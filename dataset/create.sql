DROP DATABASE IF EXISTS `baseball`;
CREATE DATABASE IF NOT EXISTS `baseball`;
USE baseball;

CREATE TABLE IF NOT EXISTS MASTER(

    playerID varchar(20) not null,
    birthYear int,
    birthMonth int,
    birthDay int,
    birthCountry varchar(10),
    birthState varchar(10),
    birthCity varchar(20),
    deathYear int,
    deathMonth int,
    deathDay int,
    deathCounry varchar(10),
    deathState varchar(10),
    deathCity varchar(20),
    nameFirst varchar(20),
    nameLast varchar(20),
    nameGiven varchar(20),
    weight int,
    height int,
    bats varchar(5),
    throws varchar(5),
    debut date,
    finalGame date,
    retroID varchar(20),
    bbrefID varchar(20),
    PRIMARY KEY (playerID)
);

create table if not exists Batting(
    playerID varchar(20) not null,
    yearID int,
    stint int,
    teamID varchar(10),
    lgID varchar(5),
    G int,
    AB int,
    R int,
    H int,
    2B int,
    3B int,
    HR int,
    RBI int,
    SB int,
    CS int,
    BB int,
    SO int,
    IBB int,
    HBP int,
    SH int,
    SF int,
    GIDP int,
    primary key (playerID,yearID,teamID)
);

create table if not exists Pitching(
    playerID varchar(20) not null,
    yearID int,
    stint int,
    teamID varchar(10),
    lgID varchar(5),
    W int,
    L int,
    G int,
    GS int,
    CG int,
    SHO int,
    SV int,
    IPouts int,
    H int,
    ER int,
    HR int,
    BB int,
    SO int,
    BAOpp int,
    ERA float,
    IBB int,
    WP int,
    HBP int,
    BK int,
    BFP int,
    GF int,
    R int,
    SH int,
    SF int,
    GIDP int,
    primary key (playerID,yearID,teamID)
);

create table if not exists salaries(
    yearID int, 
    teamID varchar(10), 
    lgID varchar(5), 
    playerID varchar(20) not null, 
    salary int, 
    primary key (playerID, yearID)
);

create table if not exists Fielding(
    playerID varchar(20) not null, 
    yearID int, 
    stint int, 
    teamID varchar(10), 
    lgID varchar(5), 
    POS varchar(5), 
    G int, 
    GS int, 
    InnOuts int, 
    PO int, 
    A int, 
    E int, 
    DP int, 
    PB int, 
    WP int, 
    SB int, 
    CS int, 
    ZR int,
    primary key (playerID, yearID, POS)
);

create table if not exists AwardsSharePlayers(
    awardID varchar(10) not null, 
    yearID int, 
    lgID varchar(5), 
    playerID varchar(20), 
    pointsWon int, 
    pointsMax int, 
    votesFirst int,
    primary key (awardID,yearID,playerID) 
);





SHOW TABLES;
