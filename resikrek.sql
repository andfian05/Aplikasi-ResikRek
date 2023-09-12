-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resikrek`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` char(10) NOT NULL,
  `kec_id` char(6) NOT NULL,
  `nama` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `kec_id`, `nama`) VALUES
('3516012001', '351601', 'Tawangrejo'),
('3516012002', '351601', 'Rejosari'),
('3516012003', '351601', 'Jembul'),
('3516012004', '351601', 'Manting'),
('3516012005', '351601', 'Sumberjati'),
('3516012006', '351601', 'Lebakjabung'),
('3516012007', '351601', 'Bleberan'),
('3516012008', '351601', 'Sumberagung'),
('3516012009', '351601', 'Baureno'),
('3516012010', '351601', 'Jatirejo'),
('3516012011', '351601', 'Dukuhngarjo'),
('3516012012', '351601', 'Gading'),
('3516012013', '351601', 'Kumitir'),
('3516012014', '351601', 'Sumengko'),
('3516012015', '351601', 'Gebangsari'),
('3516012016', '351601', 'Dinoyo'),
('3516012017', '351601', 'Padangasri'),
('3516012018', '351601', 'Mojogeneng'),
('3516012019', '351601', 'Karangjeruk'),
('3516022001', '351602', 'Gumeng'),
('3516022002', '351602', 'Begaganlimo'),
('3516022003', '351602', 'Kalikatir'),
('3516022004', '351602', 'Dilem'),
('3516022005', '351602', 'Ngembat'),
('3516022006', '351602', 'Jatidukuh'),
('3516022007', '351602', 'Bening'),
('3516022008', '351602', 'Karangkuten'),
('3516022009', '351602', 'Tawar'),
('3516022010', '351602', 'Pohjejer'),
('3516022011', '351602', 'Wonoploso'),
('3516022012', '351602', 'Pugeran'),
('3516022013', '351602', 'Gondang'),
('3516022014', '351602', 'Kebontunggul'),
('3516022015', '351602', 'Kemasantani'),
('3516022016', '351602', 'Padi'),
('3516022017', '351602', 'Bakalan'),
('3516022018', '351602', 'Centong'),
('3516032001', '351603', 'Kemiri'),
('3516032002', '351603', 'Wiyu'),
('3516032003', '351603', 'Kesimantengah'),
('3516032004', '351603', 'Sajen'),
('3516032005', '351603', 'Pacet'),
('3516032006', '351603', 'Padusan'),
('3516032007', '351603', 'Cepokolimo'),
('3516032008', '351603', 'Claket'),
('3516032009', '351603', 'Cembor'),
('3516032010', '351603', 'Nogosari'),
('3516032011', '351603', 'Kembangbelor'),
('3516032012', '351603', 'Mojokembang'),
('3516032013', '351603', 'Bendunganjati'),
('3516032014', '351603', 'Petak'),
('3516032015', '351603', 'Candiwatu'),
('3516032016', '351603', 'Warugunung'),
('3516032017', '351603', 'Tanjungkenongo'),
('3516032018', '351603', 'Sumberkembar'),
('3516032019', '351603', 'Kuripansari'),
('3516032020', '351603', 'Pandanarum'),
('3516042001', '351604', 'Ketapanrame'),
('3516042002', '351604', 'Trawas'),
('3516042003', '351604', 'Selotapak'),
('3516042004', '351604', 'Tamiajeng'),
('3516042005', '351604', 'Kesiman'),
('3516042006', '351604', 'Belik'),
('3516042007', '351604', 'Duyung'),
('3516042008', '351604', 'Penanggungan'),
('3516042009', '351604', 'Kedungudi'),
('3516042010', '351604', 'Sukosari'),
('3516042011', '351604', 'Jatijejer'),
('3516042012', '351604', 'Sugeng'),
('3516042013', '351604', 'Seloliman'),
('3516052001', '351605', 'Srigading'),
('3516052002', '351605', 'Kesemen'),
('3516052003', '351605', 'Kutogirang'),
('3516052004', '351605', 'Lolawang'),
('3516052005', '351605', 'Wotanmasjedong'),
('3516052006', '351605', 'Tanjangrono'),
('3516052007', '351605', 'Kunjorowesi'),
('3516052008', '351605', 'Manduro Manggunggajah'),
('3516052009', '351605', 'Wonosari'),
('3516052010', '351605', 'Ngoro'),
('3516052011', '351605', 'Sedati'),
('3516052012', '351605', 'Purwojati'),
('3516052013', '351605', 'Jasem'),
('3516052014', '351605', 'Sukoanyar'),
('3516052015', '351605', 'Bandarasri'),
('3516052016', '351605', 'Kembangsri'),
('3516052017', '351605', 'Candiharjo'),
('3516052018', '351605', 'Watesnegoro'),
('3516052019', '351605', 'Tambakrejo'),
('3516062001', '351606', 'Purworejo'),
('3516062002', '351606', 'Mojorejo'),
('3516062003', '351606', 'Curahmojo'),
('3516062004', '351606', 'Sekargadung'),
('3516062005', '351606', 'Tempuran'),
('3516062006', '351606', 'Jatilangkung'),
('3516062007', '351606', 'Banjartanggul'),
('3516062008', '351606', 'Kalipuro'),
('3516062009', '351606', 'Randuharjo'),
('3516062010', '351606', 'Kembangringgit'),
('3516062011', '351606', 'Pungging'),
('3516062012', '351606', 'Lebaksono'),
('3516062013', '351606', 'Tunggalpager'),
('3516062014', '351606', 'Balongmasin'),
('3516062015', '351606', 'Jabontegal'),
('3516062016', '351606', 'Kedungmungal'),
('3516062017', '351606', 'Watukenongo'),
('3516062018', '351606', 'Ngrame'),
('3516062019', '351606', 'Bangun'),
('3516072001', '351607', 'Payungrejo'),
('3516072002', '351607', 'Simbaringin'),
('3516072003', '351607', 'Sampangagung'),
('3516072004', '351607', 'Jiyu'),
('3516072005', '351607', 'Pesanggrahan'),
('3516072006', '351607', 'Windurejo'),
('3516072007', '351607', 'Kertosari'),
('3516072008', '351607', 'Kepuharum'),
('3516072009', '351607', 'Gedangan'),
('3516072010', '351607', 'Kutorejo'),
('3516072011', '351607', 'Karangdiyeng'),
('3516072012', '351607', 'Sawo'),
('3516072013', '351607', 'Wonodadi'),
('3516072014', '351607', 'Singowangi'),
('3516072015', '351607', 'Kepuhpandak'),
('3516072016', '351607', 'Karangasem'),
('3516072017', '351607', 'Kaligoro'),
('3516081004', '351608', 'Kauman'),
('3516081005', '351608', 'Sarirejo'),
('3516081006', '351608', 'Sawahan'),
('3516081007', '351608', 'Mojosari'),
('3516081008', '351608', 'Wonokusumo'),
('3516082001', '351608', 'Sumbertanggul'),
('3516082002', '351608', 'Belahantengah'),
('3516082003', '351608', 'Awang-awang'),
('3516082009', '351608', 'Seduri'),
('3516082010', '351608', 'Mojosulur'),
('3516082011', '351608', 'Randubango'),
('3516082012', '351608', 'Jotangan'),
('3516082013', '351608', 'Menanggal'),
('3516082014', '351608', 'Pekukuhan'),
('3516082015', '351608', 'Modopuro'),
('3516082016', '351608', 'Kebondalem'),
('3516082017', '351608', 'Kedunggempol'),
('3516082018', '351608', 'Ngimbangan'),
('3516082019', '351608', 'Leminggir'),
('3516092001', '351609', 'Punggul'),
('3516092002', '351609', 'Kalen'),
('3516092003', '351609', 'Kedunggede'),
('3516092004', '351609', 'Mojokarang'),
('3516092005', '351609', 'Segunung'),
('3516092006', '351609', 'Talok'),
('3516092007', '351609', 'Sumbersono'),
('3516092008', '351609', 'Sambilawang'),
('3516092009', '351609', 'Jrambe'),
('3516092010', '351609', 'Randugenengan'),
('3516092011', '351609', 'Pohkecik'),
('3516092012', '351609', 'Dlanggu'),
('3516092013', '351609', 'Ngembeh'),
('3516092014', '351609', 'Sumberkarang'),
('3516092015', '351609', 'Kedunglengkong'),
('3516092016', '351609', 'Tumapel'),
('3516102001', '351610', 'Pacing'),
('3516102002', '351610', 'Sumberwono'),
('3516102003', '351610', 'Kedunguneng'),
('3516102004', '351610', 'Kutoporong'),
('3516102005', '351610', 'Ngastemi'),
('3516102006', '351610', 'Peterongan'),
('3516102007', '351610', 'Bangsal'),
('3516102008', '351610', 'Sumbertebu'),
('3516102009', '351610', 'Sidomulyo'),
('3516102010', '351610', 'Gayam'),
('3516102011', '351610', 'Tinggarbuntut'),
('3516102012', '351610', 'Pekuwon'),
('3516102013', '351610', 'Salen'),
('3516102014', '351610', 'Mejoyo'),
('3516102015', '351610', 'Ngrowo'),
('3516102016', '351610', 'Puloniti'),
('3516102017', '351610', 'Mojotamping'),
('3516112001', '351611', 'Tampungrejo'),
('3516112002', '351611', 'Plososari'),
('3516112003', '351611', 'Kintelan'),
('3516112004', '351611', 'Brayung'),
('3516112005', '351611', 'Ketemasdungus'),
('3516112006', '351611', 'Puri'),
('3516112007', '351611', 'Tangunan'),
('3516112008', '351611', 'Kebonagung'),
('3516112009', '351611', 'Sumbergirang'),
('3516112010', '351611', 'Mlaten'),
('3516112011', '351611', 'Medali'),
('3516112012', '351611', 'Balongmojo'),
('3516112013', '351611', 'Sumolawang'),
('3516112014', '351611', 'Tambakagung'),
('3516112016', '351611', 'Banjaragung'),
('3516112017', '351611', 'Kenanten'),
('3516122001', '351612', 'Jambuwok'),
('3516122002', '351612', 'Domas'),
('3516122003', '351612', 'Beloh'),
('3516122004', '351612', 'Temon'),
('3516122005', '351612', 'Pakis'),
('3516122006', '351612', 'Sentonorejo'),
('3516122007', '351612', 'Trowulan'),
('3516122008', '351612', 'Bejijong'),
('3516122009', '351612', 'Kejagan'),
('3516122010', '351612', 'Jatipasar'),
('3516122011', '351612', 'Watesumpak'),
('3516122012', '351612', 'Wonorejo'),
('3516122013', '351612', 'Panggih'),
('3516122014', '351612', 'Tawangsari'),
('3516122015', '351612', 'Bicak'),
('3516122016', '351612', 'Balongwono'),
('3516132001', '351613', 'Gemekan'),
('3516132002', '351613', 'Blimbingsari'),
('3516132003', '351613', 'Brangkal'),
('3516132004', '351613', 'Kedungmaling'),
('3516132005', '351613', 'Klinterejo'),
('3516132006', '351613', 'Modongan'),
('3516132007', '351613', 'Sambiroto'),
('3516132008', '351613', 'Jampirogo'),
('3516132009', '351613', 'Japan'),
('3516132010', '351613', 'Sooko'),
('3516132011', '351613', 'Wringinrejo'),
('3516132012', '351613', 'Karangkedawang'),
('3516132013', '351613', 'Mojoranu'),
('3516132014', '351613', 'Tempuran'),
('3516132015', '351613', 'Ngingasrembyong'),
('3516142001', '351614', 'Ngareskidul'),
('3516142002', '351614', 'Gembongan'),
('3516142003', '351614', 'Gempolkerep'),
('3516142004', '351614', 'Bandung'),
('3516142005', '351614', 'Gedeg'),
('3516142006', '351614', 'Pagerluyung'),
('3516142007', '351614', 'Kemantren'),
('3516142008', '351614', 'Terusan'),
('3516142009', '351614', 'Sidoharjo'),
('3516142010', '351614', 'Balongsari'),
('3516142011', '351614', 'Batankrajan'),
('3516142012', '351614', 'Pagerjo'),
('3516142013', '351614', 'Jerukseger'),
('3516142014', '351614', 'Beratwetan'),
('3516152001', '351615', 'Watesprojo'),
('3516152002', '351615', 'Betro'),
('3516152003', '351615', 'Kedungsari'),
('3516152004', '351615', 'Mojojajar'),
('3516152005', '351615', 'Beratkulon'),
('3516152006', '351615', 'Mojosarirejo'),
('3516152007', '351615', 'Mojowiryo'),
('3516152008', '351615', 'Mojowatesrejo'),
('3516152009', '351615', 'Mojogebang'),
('3516152010', '351615', 'Mojopilang'),
('3516152011', '351615', 'Mojokusumo'),
('3516152012', '351615', 'Japanan'),
('3516152013', '351615', 'Mojokumpul'),
('3516152014', '351615', 'Tanjungan'),
('3516152015', '351615', 'Mojorejo'),
('3516152016', '351615', 'Mojodadi'),
('3516152017', '351615', 'Kemlagi'),
('3516152018', '351615', 'Mojowono'),
('3516152019', '351615', 'Pandankrajan'),
('3516152020', '351615', 'Mojodowo'),
('3516162001', '351616', 'Mlirip'),
('3516162002', '351616', 'Penompo'),
('3516162003', '351616', 'Canggu'),
('3516162004', '351616', 'Ngabar'),
('3516162005', '351616', 'Banjarsari'),
('3516162006', '351616', 'Sawo'),
('3516162007', '351616', 'Mojorejo'),
('3516162008', '351616', 'Jolotundo'),
('3516162009', '351616', 'Kupang'),
('3516162010', '351616', 'Bendung'),
('3516162011', '351616', 'Mojolebak'),
('3516162012', '351616', 'Parengan'),
('3516162013', '351616', 'Jetis'),
('3516162014', '351616', 'Perning'),
('3516162015', '351616', 'Sidorejo'),
('3516162016', '351616', 'Lakardowo'),
('3516172001', '351617', 'Cendoro'),
('3516172002', '351617', 'Simongagrok'),
('3516172003', '351617', 'Sumberwuluh'),
('3516172004', '351617', 'Talunblandong'),
('3516172005', '351617', 'Cinandang'),
('3516172006', '351617', 'Gunungsari'),
('3516172007', '351617', 'Dawarblandong'),
('3516172008', '351617', 'Pulorejo'),
('3516172009', '351617', 'Jatirowo'),
('3516172010', '351617', 'Suru'),
('3516172011', '351617', 'Bangeran'),
('3516172012', '351617', 'Pucuk'),
('3516172013', '351617', 'Banyulegi'),
('3516172014', '351617', 'Gunungan'),
('3516172015', '351617', 'Brayublandong'),
('3516172016', '351617', 'Madureso'),
('3516172017', '351617', 'Temuireng'),
('3516172018', '351617', 'Randegan'),
('3516182001', '351618', 'Sadartengah'),
('3516182002', '351618', 'Lengkong'),
('3516182003', '351618', 'Kepuhanyar'),
('3516182004', '351618', 'Sumberjati'),
('3516182005', '351618', 'Gebangmalang'),
('3516182006', '351618', 'Jabon'),
('3516182008', '351618', 'Ngarjo'),
('3516182009', '351618', 'Wunut'),
('3516182010', '351618', 'Kwedenkembar'),
('3516182011', '351618', 'Jumeneng'),
('3516182012', '351618', 'Kwatu'),
('3516182013', '351618', 'Gayaman'),
('3517012001', '351701', 'Jantiganggong'),
('3517012002', '351701', 'Kepuhkajang'),
('3517012003', '351701', 'Sumberagung'),
('3517012004', '351701', 'Pagerwojo'),
('3517012005', '351701', 'Perak'),
('3517012006', '351701', 'Sembung'),
('3517012007', '351701', 'Glagahan'),
('3517012008', '351701', 'Kalangsemanding'),
('3517012009', '351701', 'Gadingmangu'),
('3517012010', '351701', 'Plosogenuk'),
('3517012011', '351701', 'Sukorejo'),
('3517012012', '351701', 'Temuwulan'),
('3517012013', '351701', 'Cangkringrandu'),
('3517022001', '351702', 'Pucangro'),
('3517022002', '351702', 'Kedungturi'),
('3517022003', '351702', 'Japanan'),
('3517022004', '351702', 'Blimbing'),
('3517022005', '351702', 'Mentaos'),
('3517022006', '351702', 'Sukoiber'),
('3517022007', '351702', 'Sukopinggir'),
('3517022008', '351702', 'Bugasur Kedaleman'),
('3517022009', '351702', 'Gudo'),
('3517022010', '351702', 'Pesanggrahan'),
('3517022011', '351702', 'Wangkalkepuh'),
('3517022012', '351702', 'Krembangan'),
('3517022013', '351702', 'Sepanyul'),
('3517022014', '351702', 'Godong'),
('3517022015', '351702', 'Mejoyolosari'),
('3517022016', '351702', 'Plumbon Gambang'),
('3517022017', '351702', 'Gempollegundi'),
('3517022018', '351702', 'Tanggungan'),
('3517032001', '351703', 'Jombok'),
('3517032002', '351703', 'Genukwatu'),
('3517032003', '351703', 'Rejoagung'),
('3517032004', '351703', 'Kauman'),
('3517032005', '351703', 'Ngoro'),
('3517032006', '351703', 'Badang'),
('3517032007', '351703', 'Pulorejo'),
('3517032008', '351703', 'Banyuarang'),
('3517032009', '351703', 'Sidowarek'),
('3517032010', '351703', 'Gajah'),
('3517032011', '351703', 'Kesamben'),
('3517032012', '351703', 'Kertorejo'),
('3517032013', '351703', 'Sugihwaras'),
('3517042001', '351704', 'Kebondalem'),
('3517042002', '351704', 'Mundusewu'),
('3517042003', '351704', 'Pakel'),
('3517042004', '351704', 'Karangan'),
('3517042005', '351704', 'Ngampungan'),
('3517042006', '351704', 'Jenisgelaran'),
('3517042007', '351704', 'Bareng'),
('3517042008', '351704', 'Tebel'),
('3517042009', '351704', 'Mojotengah'),
('3517042010', '351704', 'Banjaragung'),
('3517042011', '351704', 'Nglebak'),
('3517042012', '351704', 'Ngrimbi'),
('3517042013', '351704', 'Pulosari'),
('3517052001', '351705', 'Galengdowo'),
('3517052002', '351705', 'Wonomerto'),
('3517052003', '351705', 'Jarak'),
('3517052004', '351705', 'Sambirejo'),
('3517052005', '351705', 'Wonosalam'),
('3517052006', '351705', 'Carangwulung'),
('3517052007', '351705', 'Wonokerto'),
('3517052008', '351705', 'Sumberjo'),
('3517052009', '351705', 'Panglungan'),
('3517062001', '351706', 'Kedunglumpang'),
('3517062002', '351706', 'Dukuhmojo'),
('3517062003', '351706', 'Karangwinongan'),
('3517062004', '351706', 'Kademangan'),
('3517062005', '351706', 'Janti'),
('3517062006', '351706', 'Tejo'),
('3517062007', '351706', 'Gambiran'),
('3517062008', '351706', 'Kauman'),
('3517062009', '351706', 'Mojotrisno'),
('3517062010', '351706', 'Tanggalrejo'),
('3517062011', '351706', 'Dukuhdimoro'),
('3517062012', '351706', 'Miagan'),
('3517062013', '351706', 'Mancilan'),
('3517062014', '351706', 'Betek'),
('3517062015', '351706', 'Karobelah'),
('3517062016', '351706', 'Murukan'),
('3517062017', '351706', 'Johowinong'),
('3517062018', '351706', 'Seketi'),
('3517072001', '351707', 'Kedungpari'),
('3517072002', '351707', 'Karanglo'),
('3517072003', '351707', 'Latsari'),
('3517072004', '351707', 'Mojowarno'),
('3517072005', '351707', 'Penggaron'),
('3517072006', '351707', 'Mojoduwur'),
('3517072007', '351707', 'Mojowangi'),
('3517072008', '351707', 'Gondek'),
('3517072009', '351707', 'Gedangan'),
('3517072010', '351707', 'Mojojejer'),
('3517072011', '351707', 'Japanan'),
('3517072012', '351707', 'Menganto'),
('3517072013', '351707', 'Grobogan'),
('3517072014', '351707', 'Rejoslamet'),
('3517072015', '351707', 'Selorejo'),
('3517072016', '351707', 'Sidokerto'),
('3517072017', '351707', 'Sukomulyo'),
('3517072018', '351707', 'Catakgayam'),
('3517072019', '351707', 'Wringinpitu'),
('3517082001', '351708', 'Kayangan'),
('3517082002', '351708', 'Puton'),
('3517082003', '351708', 'Bendet'),
('3517082004', '351708', 'Bulurejo'),
('3517082005', '351708', 'Grogol'),
('3517082006', '351708', 'Jatirejo'),
('3517082007', '351708', 'Cukir'),
('3517082008', '351708', 'Kwaron'),
('3517082009', '351708', 'Watugaluh'),
('3517082010', '351708', 'Pundong'),
('3517082011', '351708', 'Diwek'),
('3517082012', '351708', 'Bandung'),
('3517082013', '351708', 'Kedawong'),
('3517082014', '351708', 'Ngudirejo'),
('3517082015', '351708', 'Ceweng'),
('3517082016', '351708', 'Balongbesuk'),
('3517082017', '351708', 'Pandanwangi'),
('3517082018', '351708', 'Brambang'),
('3517082019', '351708', 'Jatipelem'),
('3517082020', '351708', 'Keras'),
('3517091002', '351709', 'Jombatan'),
('3517091004', '351709', 'Kaliwungu'),
('3517091005', '351709', 'Jelakombo'),
('3517091006', '351709', 'Kepanjen'),
('3517092001', '351709', 'Mojongapit'),
('3517092003', '351709', 'Plandi'),
('3517092007', '351709', 'Kepatihan'),
('3517092008', '351709', 'Pulolor'),
('3517092009', '351709', 'Sengon'),
('3517092010', '351709', 'Tunggorono'),
('3517092011', '351709', 'Denanyar'),
('3517092012', '351709', 'Jombang'),
('3517092013', '351709', 'Candimulyo'),
('3517092014', '351709', 'Tambakrejo'),
('3517092015', '351709', 'Banjardowo'),
('3517092016', '351709', 'Sambongdukuh'),
('3517092017', '351709', 'Dapurkejambon'),
('3517092018', '351709', 'Jabon'),
('3517092019', '351709', 'Plosogeneng'),
('3517092020', '351709', 'Sumberjo'),
('3517102001', '351710', 'Peterongan'),
('3517102002', '351710', 'Keplaksari'),
('3517102003', '351710', 'Kepuhkembeng'),
('3517102004', '351710', 'Mancar'),
('3517102005', '351710', 'Tugusumberjo'),
('3517102006', '351710', 'Morosunggingan'),
('3517102007', '351710', 'Kebontemu'),
('3517102008', '351710', 'Dukuhklopo'),
('3517102009', '351710', 'Tanjunggunung'),
('3517102010', '351710', 'Bongkot'),
('3517102011', '351710', 'Senden'),
('3517102012', '351710', 'Ngrandulor'),
('3517102013', '351710', 'Tengaran'),
('3517102014', '351710', 'Sumberagung'),
('3517112001', '351711', 'Plosokerep'),
('3517112002', '351711', 'Jogoloyo'),
('3517112003', '351711', 'Palrejo'),
('3517112004', '351711', 'Plemahan'),
('3517112005', '351711', 'Brudu'),
('3517112006', '351711', 'Badas'),
('3517112007', '351711', 'Nglele'),
('3517112008', '351711', 'Trawasan'),
('3517112009', '351711', 'Sebani'),
('3517112010', '351711', 'Mlaras'),
('3517112011', '351711', 'Segodorejo'),
('3517112012', '351711', 'Kedung Papar'),
('3517112013', '351711', 'Sumobito'),
('3517112014', '351711', 'Curahmalang'),
('3517112015', '351711', 'Budugsidorejo'),
('3517112016', '351711', 'Kendalsari'),
('3517112017', '351711', 'Talunkidul'),
('3517112018', '351711', 'Madiopuro'),
('3517112019', '351711', 'Bakalan'),
('3517112020', '351711', 'Gedangan'),
('3517112021', '351711', 'Mentoro'),
('3517122001', '351712', 'Kedungbetik'),
('3517122002', '351712', 'Kedungmlati'),
('3517122003', '351712', 'Watudakon'),
('3517122004', '351712', 'Carangrejo'),
('3517122005', '351712', 'Jombok'),
('3517122006', '351712', 'Blimbing'),
('3517122007', '351712', 'Wuluh'),
('3517122008', '351712', 'Pojokrejo'),
('3517122009', '351712', 'Kesamben'),
('3517122010', '351712', 'Podoroto'),
('3517122011', '351712', 'Jombatan'),
('3517122012', '351712', 'Pojokkulon'),
('3517122013', '351712', 'Gumulan'),
('3517122014', '351712', 'Jatiduwur'),
('3517132001', '351713', 'Mojokrapak'),
('3517132002', '351713', 'Pesantren'),
('3517132003', '351713', 'Tampingmojo'),
('3517132004', '351713', 'Kalikejambon'),
('3517132005', '351713', 'Kedunglosari'),
('3517132006', '351713', 'Kedungotok'),
('3517132007', '351713', 'Tembelang'),
('3517132008', '351713', 'Sentul'),
('3517132009', '351713', 'Gabusbanaran'),
('3517132010', '351713', 'Pulorejo'),
('3517132011', '351713', 'Rejosopinggir'),
('3517132012', '351713', 'Jatiwates'),
('3517132013', '351713', 'Kepuhdoko'),
('3517132014', '351713', 'Pulogedang'),
('3517132015', '351713', 'Bedahlawak'),
('3517142001', '351714', 'Tanggungkramat'),
('3517142002', '351714', 'Rejoagung'),
('3517142003', '351714', 'Losari'),
('3517142004', '351714', 'Ploso'),
('3517142005', '351714', 'Jatigedong'),
('3517142006', '351714', 'Daditunggal'),
('3517142007', '351714', 'Gedungombo'),
('3517142008', '351714', 'Jatibanjar'),
('3517142009', '351714', 'Pagertanjung'),
('3517142010', '351714', 'Pandanblole'),
('3517142011', '351714', 'Kedungdowo'),
('3517142012', '351714', 'Kebonagung'),
('3517142013', '351714', 'Bawangan'),
('3517152001', '351715', 'Klitih'),
('3517152002', '351715', 'Plabuhan'),
('3517152003', '351715', 'Kampungbaru'),
('3517152004', '351715', 'Gebangbunder'),
('3517152005', '351715', 'Jatimlerek'),
('3517152006', '351715', 'Karangmojo'),
('3517152007', '351715', 'Plandaan'),
('3517152008', '351715', 'Bangsri'),
('3517152009', '351715', 'Purisemanding'),
('3517152010', '351715', 'Tondowulan'),
('3517152011', '351715', 'Darurejo'),
('3517152012', '351715', 'Sumberjo'),
('3517152013', '351715', 'Jiporapah'),
('3517162001', '351716', 'Marmoyo'),
('3517162002', '351716', 'Tanjungwadung'),
('3517162003', '351716', 'Mangunan'),
('3517162004', '351716', 'Kabuh'),
('3517162005', '351716', 'Kedungjati'),
('3517162006', '351716', 'Banjardowo'),
('3517162007', '351716', 'Karangpakis'),
('3517162008', '351716', 'Sumberingin'),
('3517162009', '351716', 'Sumbergondang'),
('3517162010', '351716', 'Kauman'),
('3517162011', '351716', 'Munungkerep'),
('3517162012', '351716', 'Genenganjasem'),
('3517162013', '351716', 'Manduro'),
('3517162014', '351716', 'Sukodadi'),
('3517162015', '351716', 'Pengampon'),
('3517162016', '351716', 'Sumberaji'),
('3517172001', '351717', 'Sidokaton'),
('3517172002', '351717', 'Tapen'),
('3517172003', '351717', 'Bakalanrayung'),
('3517172004', '351717', 'Randuwatang'),
('3517172005', '351717', 'Sumberteguh'),
('3517172006', '351717', 'Menturus'),
('3517172007', '351717', 'Kudubanjar'),
('3517172008', '351717', 'Made'),
('3517172009', '351717', 'Kepuhrejo'),
('3517172010', '351717', 'Bendungan'),
('3517172011', '351717', 'Katemas'),
('3517182001', '351718', 'Bandarkedungmulyo'),
('3517182002', '351718', 'Mojokambang'),
('3517182003', '351718', 'Barongsawahan'),
('3517182004', '351718', 'Kayen'),
('3517182005', '351718', 'Gondangmanis'),
('3517182006', '351718', 'Brodot'),
('3517182007', '351718', 'Pucangsimo'),
('3517182008', '351718', 'Banjarsari'),
('3517182009', '351718', 'Brangkal'),
('3517182010', '351718', 'Karangdagangan'),
('3517182011', '351718', 'Tinggar'),
('3517192001', '351719', 'Jogoroto'),
('3517192002', '351719', 'Jarakkulon'),
('3517192003', '351719', 'Alang-alang Caruban'),
('3517192004', '351719', 'Sukosari'),
('3517192005', '351719', 'Sawiji'),
('3517192006', '351719', 'Mayangan'),
('3517192007', '351719', 'Sumbermulyo'),
('3517192008', '351719', 'Ngumpul'),
('3517192009', '351719', 'Tambar'),
('3517192010', '351719', 'Janti'),
('3517192011', '351719', 'Sambirejo'),
('3517202001', '351720', 'Turipinggir'),
('3517202002', '351720', 'Gongseng'),
('3517202003', '351720', 'Megaluh'),
('3517202004', '351720', 'Sudimoro'),
('3517202005', '351720', 'Balongsari'),
('3517202006', '351720', 'Sumbersari'),
('3517202007', '351720', 'Ngogri'),
('3517202008', '351720', 'Sidomulyo'),
('3517202009', '351720', 'Balonggemek'),
('3517202010', '351720', 'Dukuharum'),
('3517202011', '351720', 'Sumberagung'),
('3517202012', '351720', 'Pacarpeluk'),
('3517202013', '351720', 'Kedungrejo'),
('3517212001', '351721', 'Ketapangkuning'),
('3517212002', '351721', 'Keboan'),
('3517212003', '351721', 'Kedungbogo'),
('3517212004', '351721', 'Ngusikan'),
('3517212005', '351721', 'Sumbernongko'),
('3517212006', '351721', 'Cupak'),
('3517212007', '351721', 'Manunggal'),
('3517212008', '351721', 'Ngampel'),
('3517212009', '351721', 'Mojodanu'),
('3517212010', '351721', 'Kromong'),
('3517212011', '351721', 'Asemgede'),
('3576011003', '357601', 'Mentikan'),
('3576011004', '357601', 'Kauman'),
('3576011005', '357601', 'Pulorejo'),
('3576011006', '357601', 'Prajuritkulon'),
('3576011007', '357601', 'Surodinawan'),
('3576011008', '357601', 'Blooto'),
('3576021001', '357602', 'Gununggedangan'),
('3576021003', '357602', 'Magersari'),
('3576021004', '357602', 'Gedongan'),
('3576021008', '357602', 'Balongsari'),
('3576021009', '357602', 'Kedundung'),
('3576021010', '357602', 'Wates'),
('3576031001', '357603', 'Kranggan'),
('3576031002', '357603', 'Miji'),
('3576031003', '357603', 'Meri'),
('3576031004', '357603', 'Jagalan'),
('3576031005', '357603', 'Sentanan'),
('3576031006', '357603', 'Purwotengah');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` char(4) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nama`) VALUES
('3516', 'KAB. MOJOKERTO'),
('3517', 'KAB. JOMBANG'),
('3576', 'KOTA MOJOKERTO');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` char(6) NOT NULL,
  `kab_id` char(4) NOT NULL,
  `nama` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `kab_id`, `nama`) VALUES
('351601', '3516', 'Jatirejo'),
('351602', '3516', 'Gondang'),
('351603', '3516', 'Pacet'),
('351604', '3516', 'Trawas'),
('351605', '3516', 'Ngoro'),
('351606', '3516', 'Pungging'),
('351607', '3516', 'Kutorejo'),
('351608', '3516', 'Mojosari'),
('351609', '3516', 'Dlanggu'),
('351610', '3516', 'Bangsal'),
('351611', '3516', 'Puri'),
('351612', '3516', 'Trowulan'),
('351613', '3516', 'Sooko'),
('351614', '3516', 'Gedeg'),
('351615', '3516', 'Kemlagi'),
('351616', '3516', 'Jetis'),
('351617', '3516', 'Dawarblandong'),
('351618', '3516', 'Mojoanyar'),
('351701', '3517', 'Perak'),
('351702', '3517', 'Gudo'),
('351703', '3517', 'Ngoro'),
('351704', '3517', 'Bareng'),
('351705', '3517', 'Wonosalam'),
('351706', '3517', 'Mojoagung'),
('351707', '3517', 'Mojowarno'),
('351708', '3517', 'Diwek'),
('351709', '3517', 'Jombang'),
('351710', '3517', 'Peterongan'),
('351711', '3517', 'Sumobito'),
('351712', '3517', 'Kesamben'),
('351713', '3517', 'Tembelang'),
('351714', '3517', 'Ploso'),
('351715', '3517', 'Plandaan'),
('351716', '3517', 'Kabuh'),
('351717', '3517', 'Kudu'),
('351718', '3517', 'Bandarkedungmulyo'),
('351719', '3517', 'Jogoroto'),
('351720', '3517', 'Megaluh'),
('351721', '3517', 'Ngusikan'),
('357601', '3576', 'Prajuritkulon'),
('357602', '3576', 'Magersari'),
('357603', '3576', 'Kranggan');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penempatan`
--

CREATE TABLE `penempatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kab_id` char(4) NOT NULL,
  `kec_id` char(6) NOT NULL,
  `desa_id` char(10) NOT NULL,
  `alamat` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penempatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `penempatan`, `foto`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin ResikRek', '', '', 'Supera_rek', '$2y$10$KFCa6kaU17/6S8.t8Q.hS.6zNGjzmRzu9CLLenkUfSQ3ZbqYrwqeS', 'Superadmin', '2023-09-10 08:00:15', '2023-09-10 08:00:15'),
(2, 'Admin ResikRek', '', '', 'Admin_rek', '$2y$10$vXMo6/MpuiQhoXjU0/gog.gbp2Fv6V3WhD2sOE8IZpl1BnML/5Noy', 'Admin', '2023-09-10 08:00:15', '2023-09-10 08:00:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penempatan`
--
ALTER TABLE `penempatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penempatan`
--
ALTER TABLE `penempatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
