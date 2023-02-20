-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lut 2023, 11:48
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `4tie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane`
--

CREATE TABLE `dane` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `pesel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dane`
--

INSERT INTO `dane` (`id`, `imie`, `nazwisko`, `pesel`) VALUES
(1, 'as', '', ''),
(2, 'as', '', ''),
(3, 'fdsf', '', ''),
(4, 'Paweł', 'Żyła', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obecnosc`
--

CREATE TABLE `obecnosc` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `idosoby` int(11) NOT NULL,
  `obecny` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `obecnosc`
--

INSERT INTO `obecnosc` (`id`, `data`, `idosoby`, `obecny`) VALUES
(1, '2023-02-14', 1, 1),
(2, '2023-02-14', 2, 1),
(3, '2023-02-14', 3, 1),
(4, '2023-02-14', 4, 1),
(5, '2023-02-14', 1, 0),
(6, '2023-02-14', 2, 0),
(7, '2023-02-14', 3, 1),
(8, '2023-02-14', 4, 1),
(9, '2023-02-23', 1, 0),
(10, '2023-02-23', 2, 1),
(11, '2023-02-23', 3, 1),
(12, '2023-02-23', 4, 1),
(13, '2023-02-06', 1, 1),
(14, '2023-02-06', 2, 0),
(15, '2023-02-06', 3, 1),
(16, '2023-02-06', 4, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id` int(11) NOT NULL,
  `idosoby` int(11) NOT NULL,
  `idprzedmiotu` int(11) NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id`, `idosoby`, `idprzedmiotu`, `ocena`) VALUES
(1, 1, 1, 3),
(2, 3, 2, 4),
(3, 3, 4, 4),
(4, 2, 2, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmiot`
--

CREATE TABLE `przedmiot` (
  `ID` int(11) NOT NULL,
  `przedmiot` varchar(45) NOT NULL,
  `nauczyciel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `przedmiot`
--

INSERT INTO `przedmiot` (`ID`, `przedmiot`, `nauczyciel`) VALUES
(1, 'matematyka', 'Agata Zabadaj'),
(2, 'język angielski', 'Bożena Czakon'),
(3, 'informatyka', 'Barbara Woszczycka'),
(4, 'język polski', 'Monika Kowalska'),
(5, 'chemia', 'Magdalena Woźnica');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `obecnosc`
--
ALTER TABLE `obecnosc`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dane`
--
ALTER TABLE `dane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `obecnosc`
--
ALTER TABLE `obecnosc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `oceny`
--
ALTER TABLE `oceny`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `przedmiot`
--
ALTER TABLE `przedmiot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
