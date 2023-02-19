-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Feb 19, 2023 at 11:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanaco`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikal`
--

CREATE TABLE `artikal` (
  `ArtikalId` int(11) NOT NULL,
  `Sifra` varchar(50) DEFAULT NULL,
  `Naziv` varchar(50) DEFAULT NULL,
  `slika` blob DEFAULT NULL,
  `opis` text NOT NULL,
  `cijena` int(50) NOT NULL,
  `velicina` int(50) NOT NULL DEFAULT 46,
  `Barkod` varchar(50) DEFAULT NULL,
  `PLU_KOD` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikal`
--

INSERT INTO `artikal` (`ArtikalId`, `Sifra`, `Naziv`, `slika`, `opis`, `cijena`, `velicina`, `Barkod`, `PLU_KOD`) VALUES
(8, '123', 'Nike Wildhorse 7', 0x66393739303365662d353532632d346531342d616563622d3463306430303830326165332e6a7067, 'Nike Wildhorse 7 su ekstremno izdržljive muške patike za outdoor trčanje.\r\n\r\nOvaj model izuzetne čvrstine i dugotrajnosti pogoduje trčanju na zahtjevnim i nepristupačnim trejl stazama. Ostanite stabilni i sigurni dok prelazite kilometre, zahvaljujući višesmjernom šablonu šara koji omogućava pouzdanu trakciju na različitim vrstama podloge. Đon je izrađen od visoko abrazivne gume koja dobro podnosi pritisak oštrog i neravnog kamenja. Nike React pjena u srednjem đonu pruža odzivnost i udobnost mekanih jastučića, dok dodatno omekšanje na peti osigurava stopalo. Mrežasto gornjište nudi prozračnost tokom intenzivnog zagrijevanja i ima ojačane slojeve na prstima koji povećavaju otpornost materijala.&quot;&quot;&quot;&quot;', 500, 46, 'dgerge4rt43534', 'ert44'),
(10, '345', 'Nike Air Max 97', 0x62343665636332372d363832302d343439662d623662622d6230636234663239393263382e6a7067, 'Ubaci svoj stil u punu brzinu sa Nike Air Max 97 ženskim lifestyle patikama.\r\n\r\nNjihov kultni dizajn je inspirisan kapljicama vode i japanskim mecima. Njihov Nike Air jastučić pune dužine ti omogućava udobne performanse. Prvobitno dizajnirani za trkačke performanse, ovi vazdušni jastučići spajaju najbolju udobnost u klasi i sportski stil. Skriveni sistem pertlanja nudi aerodinamičan izgled. Pjenasti srednji đon pruža plišanu amortizaciju dok gumeni đon dodaje odličnu vuču i izdržljivost.&quot;', 450, 46, 'dgerge4rt435343', 'ert444'),
(11, '333', 'Nike Air Zoom Tempo NEXT%', 0x62636563353339612d373034662d346137352d613432302d3566356163303931653965642e6a7067, 'Nike Air Zoom Tempo NEXT% su muške patike za trčanje sa vrhunskim trkačkim performansama.\r\n\r\nPrilikom dizajniranja ovih patika korišćena su iskustva stotine atletičara. Gornjište od sintetike savršeno obavija vaše stopalo, a Flyknit tkanina donosi prozračnost i daje moderan izgled brzine. Srednji đon sadrži Nike ZoomX pjenu koja vam daje optimalan povrat energije i oslobađa pritisak na stopala. Vidljiva Zoom Air jedinica omogućava visoku responzivnost, a Nike React tehnologija na peti je lagana i izdržljiva, kako bi stopalo bilo udobno i sigurno. Asimetrično pertlanje daje sigurnost peti, a jezičak na peti omogućava lako obuvanje. Gumeni đon nudi odlično prianjanje na različitim podlogama. Ove udobne patike za svakodnevne treninge su dovoljno izdržljive da u njima pretrčite i veliki broj kilometara.&quot;', 600, 46, 'e45ty345t45', '3d22'),
(12, '453', 'Nike Air Winflo 9', 0x34613736636434342d646662382d343261382d383139622d6634336565643663663335362e6a7067, 'Nike Air Winflo 9 ženske patike za trčanje su dovoljno brze za svakodnevno trčanje i dovoljno lagane, da vam održavaju tempo.\r\n\r\nNjihovo sigurno prianjanje drži vaše stopalo na mjestu tokom svih pređenih kilometara. Veća količina pjene u srednjem đonu pruža dodatnu snagu svakom koraku. Vežite Nike Air Winflo 9 ženske patike za trčanje, osigurajte svoja stopala i osvojite svoje ciljeve.&quot;', 550, 46, '34rt34f3434r', '34f2'),
(13, 'e345gg345eg45', 'Adidas PERFORMANCE flašica', 0x36393036623066632d303531382d343661372d383435652d3661346339323635333064652e6a7067, 'adidas PERFORMANCE flašica za vodu je veoma praktična i korisna.\r\n\r\nDizajn flašice je prilagođen vašim potrebama, jednostavno se otvara, puni i ima pristupačan oblik za lakše držanje u ruci. Sa ovom flašicom za vodu uvijek ćete znati koliko vode pijete zahvaljujući bočnom mjeraču zapremine koji olakšava praćenje unosa tečnosti. Praktična je za održavanje jer je izrađena od izdržljive plastike koja ne sadrži bisfenol (BPA) i može bez problema da se pere u mašini za sudove. Sa ovom adidas PERFORMANCE flašicom za vodu unosite uvijek dovoljno tečnosti u svoj organizam.&quot;', 50, 46, 'g3434ff34', 'f34v'),
(14, 'ev45ev45egv45e4', 'Adidas PERFORMANCE flašica', 0x35336130336234652d346161302d343765622d616435622d3165626436373562303238642e6a7067, 'adidas PERFORMANCE flašica za vodu je veoma praktična i korisna.\r\n\r\nDizajn flašice je prilagođen vašim potrebama, jednostavno se otvara, puni i ima pristupačan oblik za lakše držanje u ruci. Sa ovom flašicom za vodu uvijek ćete znati koliko vode pijete zahvaljujući bočnom mjeraču zapremine koji olakšava praćenje unosa tečnosti. Praktična je za održavanje jer je izrađena od izdržljive plastike koja ne sadrži bisfenol (BPA) i može bez problema da se pere u mašini za sudove. Sa ovom adidas PERFORMANCE flašicom za vodu unosite uvijek dovoljno tečnosti u svoj organizam.&quot;', 50, 46, 'jtyftjj667', 'ky78'),
(15, 'hr456hr6hr6hr56', 'Under Armour Undeniable 5.0', 0x37336139316436302d653761302d346538302d616363642d3861313865313366656439652e6a7067, 'Naša isprobana Under Armour Undeniable 5.0 uniseks torba za trening postaje sve bolja.\r\n\r\nLagana, napravljena od nevjerovatno izdržljivog materijala, ovo je vaša torba za svakodnevne performanse. UA Storm tehnologija nudi visoko vodootpornu završnu obradu. Čvrsti donji i bočni paneli obloženi TPU-om i pjenom pružaju dodatnu izdržljivost i strukturu. Veliki prozračni odjeljak je idealan za obuću i mokar veš. Brojni džepovi vam omogućavaju idealnu organizaciju a podesivi HeatGear® kaiš za rame se lako odlaže u bočni džep.&quot;', 200, 46, 'nu56ijnu6767', 'ky78m'),
(16, 'hy56h456hr6hr56', 'Tegovi', 0x33343934336637342d626631342d343537662d616233322d3935313862646266393066302e6a7067, 'Tegovi za trening kod kuce&quot;', 30, 46, 'k789k78jy78456', '45bh5'),
(17, 'hr56hr56hr5rbt', 'Nike helanke za trening', 0x66336431646165332d333164642d343365382d623433312d3864656530323333613137662e6a7067, 'Nike helanke za trening lake , udobne i elasticne.Pogodne za sve vrste treninga.&quot;', 200, 46, '56hnty6tn6hj6', '45gh'),
(18, 'j67jt567ht56hrt6', 'Nike duks', 0x30363337666164322d346162372d346565342d393532632d3763636134396562323863312e6a7067, 'Nike duks pogodan za sve prilike udoban.&quot;', 300, 46, 'jt67hrt6hrt6jt7hjrt6', 'g45e');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `KorisnikId` int(11) NOT NULL,
  `KorisnickoIme` varchar(50) DEFAULT NULL,
  `email` varchar(225) NOT NULL,
  `Sifra` varbinary(225) DEFAULT NULL,
  `SecretQ` varchar(30) NOT NULL,
  `SecretA` varchar(30) NOT NULL,
  `RolaId` int(11) NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`KorisnikId`, `KorisnickoIme`, `email`, `Sifra`, `SecretQ`, `SecretA`, `RolaId`) VALUES
(2, 'duca', 'riventocelendzer@gmail.com', 0x243279243130244d5258714c77773679497a633458495151693675772e5154494478714738472f573947504b54545332614676544d4b3248382f6436, 'duca', 'duca', 1),
(3, 'duca1', 'griugriug@gmail.com', 0x2432792431302430666f777136416e6d783674492e5372532e4759304f51692e3970644552554252414b5a79554d7635447537472f7849417342394f, 'duca', 'duca', 3),
(4, 'kalu', 'dusanstojanovic12345@yahoo.com', 0x243279243130247a6a4e36623177304b614269352e742e4652717256756545312f337036596176796a3571725761326a682f7476716f507768393361, 'duca', 'duca', 3),
(6, 'sladja', 'sasagaga805@yahoo.com', 0x243279243130243155366a6d7342464861706961485a417234506c617546456a7530614c78526f335562417773397778707439697a3167722e6c4a2e, 'dc', 'dc', 4),
(7, 'djasla', 'gngfjggjgjgj@gmail.com', 0x24327924313024676b6f307947666a33323261474f6c47336d6c706b2e6b696d422e4f2e49754161464d4b4553376243697a754235336d41786e7a47, 'dc', '', 4),
(8, 'Stefan', 'esfgienfienf@gmail.com', 0x243279243130243848526944643956625a33645953366d6b353744414f4b45333555444a556e394a6846734964424d724b425956536c564c58584e32, 'dc', 'dc', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lager`
--

CREATE TABLE `lager` (
  `LagerId` int(11) NOT NULL,
  `ArtikalId` int(11) DEFAULT NULL,
  `RaspolozivaKolicina` decimal(18,2) DEFAULT NULL,
  `Lokacija` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lager`
--

INSERT INTO `lager` (`LagerId`, `ArtikalId`, `RaspolozivaKolicina`, `Lokacija`) VALUES
(5, 8, '51.00', 'Banja Luka'),
(6, 10, '50.00', 'Banja Luka'),
(7, 11, '50.00', 'Banja Luka'),
(8, 12, '50.00', 'Banja Luka'),
(9, 13, '50.00', 'Banja Luka'),
(10, 14, '52.00', 'Banja Luka'),
(11, 15, '50.00', 'Banja Luka'),
(12, 16, '50.00', 'Banja Luka'),
(13, 18, '50.00', 'Banja Luka'),
(14, 17, '50.00', 'Banja Luka');

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE `racun` (
  `RacunId` int(11) NOT NULL,
  `RacunIzdao` int(11) NOT NULL,
  `KorisnikId` int(11) NOT NULL,
  `DatumRacuna` datetime NOT NULL,
  `BrojRacuna` varchar(30) DEFAULT NULL,
  `UkupniIznos` decimal(18,2) DEFAULT NULL,
  `IznosPDV` decimal(18,2) DEFAULT NULL,
  `IznosBezPDV` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `racun`
--

INSERT INTO `racun` (`RacunId`, `RacunIzdao`, `KorisnikId`, `DatumRacuna`, `BrojRacuna`, `UkupniIznos`, `IznosPDV`, `IznosBezPDV`) VALUES
(47, 5, 2, '2023-02-19 23:29:32', '604173', '702.00', '102.00', '600.00'),
(48, 5, 6, '2023-02-19 23:34:44', '943582', '59.00', '9.00', '50.00'),
(49, 5, 6, '2023-02-19 23:35:01', '206717', '2984.00', '434.00', '2550.00'),
(50, 5, 6, '2023-02-19 23:38:26', '438592', '1755.00', '255.00', '1500.00');

-- --------------------------------------------------------

--
-- Table structure for table `racunstavka`
--

CREATE TABLE `racunstavka` (
  `RacunId` int(11) NOT NULL,
  `StavkaId` int(11) NOT NULL,
  `ArtikalId` int(11) NOT NULL,
  `Kolicina` decimal(18,2) NOT NULL,
  `Cijena` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `racunstavka`
--

INSERT INTO `racunstavka` (`RacunId`, `StavkaId`, `ArtikalId`, `Kolicina`, `Cijena`) VALUES
(47, 1, 11, '1.00', '600.00'),
(48, 2, 13, '1.00', '50.00'),
(49, 3, 10, '2.00', '900.00'),
(49, 4, 12, '3.00', '1650.00'),
(50, 5, 18, '2.00', '600.00'),
(50, 6, 10, '2.00', '900.00');

-- --------------------------------------------------------

--
-- Table structure for table `radnik`
--

CREATE TABLE `radnik` (
  `RadnikId` int(11) NOT NULL,
  `Ime` varchar(50) DEFAULT NULL,
  `prezime` varchar(50) DEFAULT NULL,
  `brojTelefona` varchar(50) DEFAULT NULL,
  `Adresa` varchar(100) DEFAULT NULL,
  `Grad` varchar(50) DEFAULT NULL,
  `Email` varbinary(100) DEFAULT NULL,
  `JMBG` char(13) DEFAULT NULL,
  `KorisnikId` int(11) DEFAULT NULL,
  `RolaId` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radnik`
--

INSERT INTO `radnik` (`RadnikId`, `Ime`, `prezime`, `brojTelefona`, `Adresa`, `Grad`, `Email`, `JMBG`, `KorisnikId`, `RolaId`) VALUES
(5, 'Vladimir', 'Stojanovic', '52532', 'dsgdsgdfgdfrg', 'dsgdsgdsg', 0x7361736167616761383035407961686f6f2e636f6d, '54325431', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleId` int(11) NOT NULL,
  `NazivRole` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleId`, `NazivRole`) VALUES
(1, 'admin'),
(3, 'radnik'),
(4, 'korisnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikal`
--
ALTER TABLE `artikal`
  ADD PRIMARY KEY (`ArtikalId`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`KorisnikId`),
  ADD KEY `korisnik_role` (`RolaId`);

--
-- Indexes for table `lager`
--
ALTER TABLE `lager`
  ADD PRIMARY KEY (`LagerId`),
  ADD KEY `artikl_id` (`ArtikalId`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
  ADD PRIMARY KEY (`RacunId`),
  ADD KEY `racun-izdao` (`RacunIzdao`),
  ADD KEY `korisnik-racun-id` (`KorisnikId`);

--
-- Indexes for table `racunstavka`
--
ALTER TABLE `racunstavka`
  ADD PRIMARY KEY (`StavkaId`,`RacunId`),
  ADD KEY `artikl-id` (`ArtikalId`),
  ADD KEY `racun-id` (`RacunId`);

--
-- Indexes for table `radnik`
--
ALTER TABLE `radnik`
  ADD PRIMARY KEY (`RadnikId`),
  ADD KEY `role_id` (`RolaId`),
  ADD KEY `korisnik-id` (`KorisnikId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikal`
--
ALTER TABLE `artikal`
  MODIFY `ArtikalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `KorisnikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lager`
--
ALTER TABLE `lager`
  MODIFY `LagerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
  MODIFY `RacunId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `racunstavka`
--
ALTER TABLE `racunstavka`
  MODIFY `StavkaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `radnik`
--
ALTER TABLE `radnik`
  MODIFY `RadnikId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_role` FOREIGN KEY (`RolaId`) REFERENCES `role` (`roleId`);

--
-- Constraints for table `lager`
--
ALTER TABLE `lager`
  ADD CONSTRAINT `arikl_id` FOREIGN KEY (`ArtikalId`) REFERENCES `artikal` (`ArtikalId`);

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
  ADD CONSTRAINT `korisnik-racun-id` FOREIGN KEY (`KorisnikId`) REFERENCES `korisnik` (`KorisnikId`),
  ADD CONSTRAINT `racun-izdao` FOREIGN KEY (`RacunIzdao`) REFERENCES `radnik` (`RadnikId`);

--
-- Constraints for table `racunstavka`
--
ALTER TABLE `racunstavka`
  ADD CONSTRAINT `artikl-id` FOREIGN KEY (`ArtikalId`) REFERENCES `artikal` (`ArtikalId`),
  ADD CONSTRAINT `racun-id` FOREIGN KEY (`RacunId`) REFERENCES `racun` (`RacunId`);

--
-- Constraints for table `radnik`
--
ALTER TABLE `radnik`
  ADD CONSTRAINT `korisnik-id` FOREIGN KEY (`KorisnikId`) REFERENCES `korisnik` (`KorisnikId`),
  ADD CONSTRAINT `role_id` FOREIGN KEY (`RolaId`) REFERENCES `role` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
