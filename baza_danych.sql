create database saper;
use saper;
create table leaderboard(
    id_gry int,
    nazwa_gracza varchar(50),
    czas int,
    wymiar_planszy varchar(10),
    ilosc_bomb int,
    wynik int
);
create table uzytkownicy(
    nazwa varchar(50),
    haslo varchar(50)
)
//czas jest w sekundach 