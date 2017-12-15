-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 15 dec 2017 om 14:44
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `platform_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `description` varchar(245) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`id`, `platform_id`, `name`, `price`, `description`, `image`) VALUES
(1, 1, 'Assasins Creed: Origins', '60.00', 'Assassin\'s Creed Origins is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft.The game is set in Egypt during the Ptolemaic period (48 BC) and recounts the secret fictional history of real-world events.', 'aco'),
(3, 3, 'Assasins Creed: Syndicate', '50.00', 'Assassin\'s Creed Origins is an action-adventure video game developed by Ubisoft Montreal and published by Ubisoft.The game is set in Egypt during the Ptolemaic period (48 BC) and recounts the secret fictional history of real-world events.', 'acs'),
(4, 1, 'Call Of Duty: World At War', '10.00', 'Call of Duty: World at War is a 2008 first-person shooter game.\r\nWorld at War [5] features more mature themes than previous Call of Duty installments.', 'codwaw'),
(5, 2, 'Need For Speed: Undercover', '5.00', 'Need for Speed: Undercover is a racing video game, developed/published by EA. It was released on PlayStation 2, PlayStation 3, Xbox 360, Wii, PC, PSP, Nintendo DS, and mobile phone in November 2008.', 'nfsu'),
(6, 3, 'Overwatch', '40.00', 'Overwatch is a fantasy first person shooter game. 2 teams of 6 People will play in a random map. The game needs alot of coördination and teamwork to win the match.', 'ow'),
(7, 2, 'Horizon: Zero Dawn', '65.00', 'The plot revolves around Aloy, a hunter and archer living in a world overrun by robots. Having been an outcast her whole life, she sets out to discover the dangers that kept her sheltered.', 'hzd'),
(8, 1, 'League of Legends', '0.00', 'Free-to-play MOBA game. Strategic gameplay along with a team of 5 persons, versus 5 other matchmade enemies. Defeat their team and destroy their \"Nexus\".', 'lol'),
(9, 2, 'Fifa 18', '55.00', 'FIFA 18 is a football simulation video game, developed and published by EA and was released worldwide on 29 September 2017. Basically it\'s trash since it\'s from EA and it\'s about football.', 'fifa18'),
(10, 1, 'PUBG', '30.00', 'A.k.a. Playerunknown\'s Battleground is a Battle Royale game. 100 players will drop on the same battlefield, the warzone keeps shrinking until there\'s only one winner left.', 'pubg'),
(12, 3, 'Halo 5', '60.00', 'Halo 5\'s plot follows two fireteams of human supersoldiers: Blue Team, led by Master Chief, and Fireteam Osiris, led by Spartan Locke. Master Chief\'s loyalty is called into question, and Fireteam Osiris is sent to retrieve him.', 'halo5'),
(13, 1, 'Minecraft', '20.00', 'Minecraft is a sandbox video game where you can build as you please. The creative and building aspects of Minecraft allow players to build with a variety of different cubes in a 3D procedurally generated world.', 'minecraft'),
(14, 1, 'Fortnite', '30.00', 'Fortnite is a co-op sandbox survival video game. Players will be dropped inside the battlezone, the players kill each other until there\'s only 1 player/team left.', 'fortnite'),
(15, 1, 'Rocket League', '30.00', 'Play soccer with rocket powered cars.  Team versus team.', 'rocketleague'),
(16, 2, 'Overwatch', '40.00', 'Overwatch is a fantasy first person shooter game. 2 teams of 6 People will play in a random map. The game needs alot of coördination and teamwork to win the match.', 'ow'),
(17, 3, 'Rocket League', '30.00', 'Play soccer with rocket powered cars.  Team versus team.', 'rocketleague'),
(18, 2, 'Rocket League', '30.00', 'Play soccer with rocket powered cars.  Team versus team.', 'rocketleague'),
(19, 2, 'Minecraft: PS4 Edition', '20.00', 'Minecraft is a sandbox video game where you can build as you please. The creative and building aspects of Minecraft allow players to build with a variety of different cubes in a 3D procedurally generated world.', 'minecraft'),
(20, 1, 'World of Warcraft', '50.00', 'World of Warcraft (WoW) is a massively multiplayer online role-playing game (MMORPG) released in 2004 by Blizzard Entertainment. World of Warcraft takes place within the Warcraft world of Azeroth.', 'wow'),
(21, 3, 'Forza: Motorsport 7', '60.00', 'A racing simulation game. Forza is one of the best racing game brands out on the market.', 'forzah3'),
(22, 3, 'Minecraft: Xbox Edition', '20.00', 'Minecraft is a sandbox video game where you can build as you please. The creative and building aspects of Minecraft allow players to build with a variety of different cubes in a 3D procedurally generated world.', 'minecraft');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `platform`
--

CREATE TABLE `platform` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `color` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `platform`
--

INSERT INTO `platform` (`id`, `name`, `color`) VALUES
(1, 'PC', '#333'),
(2, 'PS4', '#0000FF'),
(3, 'XBOX', '#00FF00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(2, 'Kars', 'Classified', 'boi'),
(3, 'Andre', 'Narutouchi', 'Hentai'),
(4, 'Elmerick', 'UsainBoltx34', 'FastAF'),
(5, 'Alper', 'Superturk', 'kief'),
(6, 'Job', 'Sk4terb0y', 'Supreme'),
(7, 'Umair', 'Jongehhh', 'Albion'),
(8, 'Ferdy', '', ''),
(9, 'Ricardo', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_games`
--

CREATE TABLE `user_games` (
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_games`
--

INSERT INTO `user_games` (`user_id`, `game_id`) VALUES
(1, 1),
(2, 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT voor een tabel `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
