create database minesweeper;

use minesweeper;

create table leaderboard(
    game_id int,
    player_name varchar(50),
    game_time int,
    board_dimensions varchar(10),
    bomb_amount int,
    score int
);

create table users(
    player_name varchar(50),
    passwords varchar(50)
);

-- time in seconds