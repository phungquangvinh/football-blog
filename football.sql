-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2018 lúc 02:53 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `football`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `competition` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieu_de` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bai_viet` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `user`, `competition`, `tieu_de`, `bai_viet`, `image`, `ngay_tao`) VALUES
(1, 'localhost', '1', 'Man City: KhÃ³ cÃ³ sá»± thay tháº¿ hoÃ n háº£o cho Stones', 'á»ž tráº­n gáº·p Leicester trong khuÃ´n khá»• vÃ²ng 12 Ngoáº¡i háº¡ng Anh cuá»‘i tuáº§n trÆ°á»›c, Man City Ä‘Ã£ gáº·p thiá»‡t háº¡i vá» máº·t nhÃ¢n sá»± khi John Stones dÃ­nh cháº¥n thÆ°Æ¡ng gÃ¢n khoeo. NÃ³ sáº½ khiáº¿n háº­u vá»‡ ngÆ°á»i Anh pháº£i ngá»“i ngoÃ i tá»« 4-6 tuáº§n vÃ  cÃ³ nguy cÆ¡ khÃ´ng Ä‘Æ°á»£c tham dá»± tráº­n derby Manchester vá»›i M.U vÃ o thÃ¡ng sau.', 'Manchester_City_FC_badge.svg.png', '2017-11-22 07:47:47'),
(2, 'abc', '2', 'Real Madrid', 'Bale vÃ  Benzema Ä‘á» xuáº¥t loáº¡i bá» Ronaldo: Do bá»‹ treo giÃ² 4 tráº­n há»“i Ä‘áº§u mÃ¹a giáº£i nÃªn siÃªu sao Ronaldo má»›i Ä‘Ã¡ 8/12 tráº­n táº¡i La Liga 2017/18 vÃ  cÃ³ vá»n váº¹n 1 pha láº­p cÃ´ng. VÃ  Paulinho luÃ´n ngon hÆ¡n Ronaldo, báº¥t cháº¥p viá»‡c Paulinho khÃ´ng kiáº¿m bÃ n tháº¯ng tá»« viá»‡c sÃºt 11m nhÆ° RÃ´. NhÆ°ng giá» thÃ¬ RÃ´ Ä‘Ã£ khÃ´ng cÃ²n pháº¿ váº­t ná»¯a, nhá» Ä‘Æ°á»£c Ä‘á»“ng Ä‘á»™i má»›m Ä‘áº¿n táº­n rÄƒng Ä‘á»ƒ ghi bÃ n.', 'real-madrid-club-crest-new-logo-03D0B23BC4-seeklogo.com.png', '2018-03-18 02:09:01'),
(3, 'abc', '6', 'U20 Viá»‡t Nam náº±m cÃ¹ng báº£ng vá»›i PhÃ¡p á»Ÿ VCK U20 World Cup', 'ÄÃ¡nh giÃ¡ vá» cÆ¡ há»™i cá»§a U20 Viá»‡t Nam, HLV HoÃ ng Anh Tuáº¥n pháº¥n khá»Ÿi cho biáº¿t: \"ÄÃ¢y lÃ  láº§n Ä‘áº§u Viá»‡t Nam dá»± sá»± kiá»‡n bÃ³ng Ä‘Ã¡ táº§m cá»¡ nhÆ° tháº¿ nÃ y. ChÃºng ta pháº£i ná»— lá»±c thi Ä‘áº¥u tá»‘t, tÃ´i hÃ i lÃ²ng vá»›i káº¿t quáº£ bá»‘c thÄƒm nÃ y.\r\n\r\nÄá»™i tuyá»ƒn cáº§n táº­n dá»¥ng thá»i gian sáº¯p tá»›i Ä‘á»ƒ chuáº©n bá»‹ tháº­t tá»‘t. TÃ´i hy vá»ng Ä‘á»™i sáº½ táº¡o nÃªn báº¥t ngá» trong láº§n Ä‘áº§u tham dá»± U20 World Cup. Ráº¥t mong ngÆ°á»i hÃ¢m má»™ vÃ  truyá»n thÃ´ng theo dÃµi, á»§ng há»™ Ä‘á»™i tuyá»ƒn\".', '20170421163138-u19-vongloai-chau2018jpg.jpg', '2018-03-16 07:05:59'),
(4, 'tran_lap', '5', 'Man City vs Feyenoord: Bá»ƒ xanh vÃ  nÆ°Æ¡ng dÃ¢u', 'NÄƒm 1970, Feyenoord Ä‘Ã¡nh báº¡i Celtic vá»›i tá»‰ sá»‘ 2-1 trÃªn SVÄ San Siro, Milano. Há» trá»Ÿ thÃ nh Ä‘á»™i bÃ³ng HÃ  Lan Ä‘áº§u tiÃªn giÃ nh chá»©c vÃ´ Ä‘á»‹ch CÃºp C1/Champions League. CÃ¢u chuyá»‡n tiáº¿p theo thuá»™c vá» Ajax Amsterdam vá»›i 3 chá»©c vÃ´ Ä‘á»‹ch CÃºp C1 liÃªn tiáº¿p (tá»« 1971 Ä‘áº¿n 1973), vÃ  ÄTQG HÃ  Lan vá»›i hai láº§n vá» nhÃ¬ Ä‘áº§y tá»©c tÆ°á»Ÿi táº¡i World Cup 1974 vÃ  1978.', 'champions-league.jpg', '2017-11-21 07:30:50'),
(5, 'localhost', '3', 'Heynckes cÃ³ tráº­n tháº¯ng thá»© 500: Má»™t tÆ°á»£ng Ä‘Ã i tháº§m láº·ng', 'DÄ© nhiÃªn, ai cÅ©ng biáº¿t Jupp Heynckes. Ã”ng ná»•i tiáº¿ng vá»›i thÃ nh tÃ­ch â€œÄƒn 3â€ á»Ÿ Bayern Munich chá»‰ má»›i cÃ¡ch Ä‘Ã¢y vÃ i nÄƒm. TÃ­nh cáº£ thá»i ká»³ Champions League láº«n CÃºp C1, chá»‰ cÃ³ 5 HLV xÆ°a nay tá»«ng vÃ´ Ä‘á»‹ch á»Ÿ 2 Ä‘á»™i bÃ³ng khÃ¡c nhau. Heynckes chia sáº» ká»· lá»¥c nÃ y vá»›i Carlo Ancelotti, Ernst Happel, Ottmar Hitzfeld vÃ  Jose Mourinho.', '17353312_1851162671822409_6107876628662397732_n.jpg', '2018-03-16 07:04:04'),
(6, 'tran_lap', '4', 'Háº¡ Milan, Napoli xÃ¢y cháº¯c ngÃ´i Ä‘áº§u', 'Tiáº¿p Ä‘Ã³n Milan trÃªn sÃ¢n nhÃ  San Paolo, Napoli vá»›i vá»‹ tháº¿ cá»§a Ä‘á»™i Ä‘á»©ng Ä‘áº§u báº£ng chá»§ Ä‘á»™ng Ä‘áº©y cao Ä‘á»™i hÃ¬nh ngay sau tiáº¿ng cÃ²i khai cuá»™c. VÃ  sau má»™t vÃ i cÆ¡ há»™i bá» lá»¡, Ä‘oÃ n quÃ¢n cá»§a HLV Maurizio Sarri Ä‘Ã£ tÃ¬m Ä‘Æ°á»£c bÃ n phÃ¡ vá»¡ tháº¿ quÃ¢n bÃ¬nh. \r\nNhÆ° váº­y, tháº¯ng lá»£i nÃ y giÃºp Napoli tiáº¿p tá»¥c vá»¯ng vÃ ng á»Ÿ ngÃ´i Ä‘áº§u Serie A 2017/18 vá»›i 35 Ä‘iá»ƒm, hÆ¡n Ä‘á»™i xáº¿p thá»© 2 Juventus 4 Ä‘iá»ƒm nhÆ°ng Ä‘Ã¡ nhiá»u hÆ¡n 1 tráº­n.', 'morata-01.jpg', '2018-03-19 01:38:10'),
(7, 'abc', '2', 'LÃ²ng rá»™n rÃ ng biáº¿t bao Ä‘i Ä‘á»ƒ trá»Ÿ vá»', 'DÄ© nhiÃªn, ai cÅ©ng biáº¿t Jupp Heynckes. Ã”ng ná»•i tiáº¿ng vá»›i thÃ nh tÃ­ch â€œÄƒn 3â€ á»Ÿ Bayern Munich chá»‰ má»›i cÃ¡ch Ä‘Ã¢y vÃ i nÄƒm. TÃ­nh cáº£ thá»i ká»³ Champions League láº«n CÃºp C1, chá»‰ cÃ³ 5 HLV xÆ°a nay tá»«ng vÃ´ Ä‘á»‹ch á»Ÿ 2 Ä‘á»™i bÃ³ng khÃ¡c nhau. Heynckes chia sáº» ká»· lá»¥c nÃ y vá»›i Carlo Ancelotti, Ernst Happel, Ottmar Hitzfeld vÃ  Jose Mourinho. KhÃ¡c biá»‡t chá»— nÃ o? Heynckes lÃ  ngÆ°á»i duy nháº¥t trong sá»‘ nÃ y tá»«ng vÃ´ Ä‘á»‹ch EURO hoáº·c World Cup khi cÃ²n chÆ¡i bÃ³ng (má»™t cÃ¡ch chÃ­nh xÃ¡c, Heynckes Ä‘Ã£ vÃ´ Ä‘á»‹ch á»Ÿ cáº£ hai giáº£i Ä‘áº¥u lá»›n).', 'dinner_01.jpg', '2018-03-01 02:05:46'),
(8, 'caubengungo', '2', 'Messi - Ronaldo lÃªn Ä‘á»‰nh, Neymar - Mourinho xuá»‘ng vá»±c ', 'Náº¿u Lionel Messi máº·c Ã¡o mÃ u xanh thÃ¬ cÃ³ láº½ Chelsea lÃ  Ä‘á»™i tháº¯ng á»Ÿ cáº·p Ä‘áº¥u vá»›i Barca. SiÃªu sao ngÆ°á»i Argentina chÃ­nh lÃ  sá»± khÃ¡c biá»‡t lá»›n nháº¥t giá»¯a hai Ä‘á»™i bÃ³ng vá»›i ba bÃ n tháº¯ng, má»™t pha kiáº¿n táº¡o giÃºp Barca Ä‘Ã¡nh báº¡i Chelsea vá»›i tá»· sá»‘ chung cuá»™c 4-1. HLV Antonio Conte tháº­m chÃ­ pháº£i lÃªn tiáº¿ng thÃ¡n phá»¥c ngÃ´i sao cá»§a Ä‘á»‘i thá»§ vÃ  cháº¥p nháº­n tháº¥t báº¡i nhÆ° láº½ Ä‘Æ°Æ¡ng nhiÃªn.', '955b02749f9c2203db87ee996e94d04bfb3739ca.jpg', '2018-03-16 06:59:20'),
(9, 'vinh', '1', 'Harry Kane thuÃª riÃªng Ä‘áº§u báº¿p Ä‘á»ƒ duy trÃ¬ phong Ä‘á»™ hoÃ n háº£o', 'Kane vá»«a Ä‘Æ°á»£c HLV Gareth Southgate tin tÆ°á»Ÿng giao phÃ³ chiáº¿c bÄƒng thá»§ quÃ¢n tuyá»ƒn Anh trong tráº­n Ä‘áº¥u gáº·p Slovenia thuá»™c khuÃ´n khá»• vÃ²ng loáº¡i World Cup 2018 sáº½ diá»…n ra vÃ o cuá»‘i tuáº§n nÃ y. ÄÃ¢y lÃ  pháº§n thÆ°á»Ÿng xá»©ng Ä‘Ã¡ng cho tiá»n Ä‘áº¡o sá»‘ 1 nÆ°á»›c Anh.\r\n\r\nCá»¥ thá»ƒ, Kane Ä‘Ã£ ghi 6 bÃ n á»Ÿ 7 vÃ²ng Ä‘áº¥u Ä‘áº§u tiÃªn cá»§a Premier League. ThÃ nh tÃ­ch áº¥y cÃ²n áº¥n tÆ°á»£ng hÆ¡n ná»¯a khi biáº¿t ráº±ng, trong cáº£ thÃ¡ng 8, Kane Ä‘Ã£ khÃ´ng há» lÃªn tiáº¿ng vÃ  tá»« thÃ¡ng 9, chÃ¢n sÃºt sinh nÄƒm 1993 báº¯t Ä‘áº§u cho tháº¥y ná»™i lá»±c cá»§a mÃ¬nh.', '26113967_133086567488047_5442541443087006931_n.jpg', '2018-03-20 07:57:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giai_dau`
--

CREATE TABLE `giai_dau` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_giai_dau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_diem` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giai_dau`
--

INSERT INTO `giai_dau` (`id`, `ten_giai_dau`, `mo_ta`, `logo`, `dia_diem`) VALUES
(1, 'PREMIER LEAGUE', 'Giáº£i bÃ³ng Ä‘Ã¡ Ngoáº¡i háº¡ng Anh lÃ  giáº£i Ä‘áº¥u bÃ³ng Ä‘Ã¡ dÃ nh cho cÃ¡c cÃ¢u láº¡c bá»™ chuyÃªn nghiá»‡p nam cá»§a Anh. ÄÃ¢y lÃ  giáº£i Ä‘áº¥u cáº¥p cao nháº¥t trong há»‡ thá»‘ng cÃ¡c giáº£i bÃ³ng Ä‘Ã¡ Anh, vÃ  lÃ  giáº£i Ä‘áº¥u chÃ­nh trong há»‡ thá»‘ng thi Ä‘áº¥u quá»‘c gia.\r\nSá»‘ lÆ°á»£ng Ä‘á»™i: 20\r\nNhÃ  vÃ´ Ä‘á»‹ch hiá»‡n táº¡i: CLB Chelsea\r\nGiÃ¡m Ä‘á»‘c Ä‘iá»u hÃ nh: Richard Scudamore (thg 11 1999â€“)\r\nGiáº£i bÃ³ng Ä‘Ã¡ Ngoáº¡i háº¡ng Anh 2017-18 (Ä‘ang diá»…n ra)', 'new-premier-league-logo-2016-17-9.jpg', 'LuÃ¢n ÄÃ´n, VÆ°Æ¡ng quá»‘c LiÃªn hiá»‡p Anh vÃ  Báº¯c Ireland'),
(2, 'LA LIGA', 'Giáº£i bÃ³ng Ä‘Ã¡ vÃ´ Ä‘á»‹ch quá»‘c gia TÃ¢y Ban Nha (cÃ²n gá»i lÃ  La Liga, tá»« tiáº¿ng TÃ¢y Ban Nha Liga de FÃºtbol Profesional) gá»“m:\r\n\r\nCÃ¡c háº¡ng chuyÃªn nghiá»‡p\r\n\r\nHáº¡ng nháº¥t (Primera divisiÃ³n) (20 Ä‘á»™i)\r\nHáº¡ng nhÃ¬ (Segunda divisiÃ³n) (22 Ä‘á»™i)\r\nHáº¡ng nhÃ¬ B (Segunda divisiÃ³n B) (4 nhÃ³m, má»—i nhÃ³m cÃ³ 20 Ä‘á»™i)\r\nCÃ¡c giáº£i nghiá»‡p dÆ°:\r\n\r\nHáº¡ng ba (Tercera divisiÃ³n)\r\nCÃ¡c giáº£i vÃ´ Ä‘á»‹ch vÃ¹ng', 'laliga-lo.jpg', 'Madrid, Spain'),
(3, 'BUNDESLIGA', 'Giáº£i bÃ³ng Ä‘Ã¡ vÃ´ Ä‘á»‹ch quá»‘c gia Äá»©c (tiáº¿ng Äá»©c: FuÃŸball-Bundesliga) lÃ  háº¡ng thi Ä‘áº¥u cao nháº¥t cá»§a bÃ³ng Ä‘Ã¡ Äá»©c. Giáº£i Ä‘Æ°á»£c tá»• chá»©c tá»« 1903 cho Ä‘áº¿n nay ngoáº¡i trá»« thá»i gian xáº£y ra cÃ¡c cuá»™c chiáº¿n tranh tháº¿ giá»›i (thá»© nháº¥t vÃ  thá»© hai). TÃªn gá»i \"FuÃŸball-Bundesliga\" chÃ­nh thá»©c Ä‘Æ°á»£c sá»­ dá»¥ng tá»« mÃ¹a bÃ³ng 1963 - nay.\r\nÄÆ°Æ¡ng kim vÃ´ Ä‘á»‹ch: Bayern Munich (láº§n 25)(2016â€“2017).\r\nVÃ´ Ä‘á»‹ch nhiá»u nháº¥t: Bayern Munich (25 láº§n)', 'bundesliga_showtile2.png.2017-02-02T13_57_10+13_00.jpg', 'Berlin & Munich, Äá»©c'),
(4, 'SERIE A', 'Serie A cÃ²n gá»i lÃ  Serie A TIM do Ä‘Æ°á»£c tÃ i trá»£ bá»Ÿi TIM, lÃ  má»™t giáº£i Ä‘áº¥u chuyÃªn nghiá»‡p cao nháº¥t cáº¥p cÃ¢u láº¡c bá»™ trong há»‡ thá»‘ng cÃ¡c giáº£i Ä‘áº¥u bÃ³ng Ä‘Ã¡ Ã vÃ  Ä‘Ã£ hoáº¡t Ä‘á»™ng trong hÆ¡n tÃ¡m mÆ°Æ¡i nÄƒm ká»ƒ tá»« khi mÃ¹a 1929-1930. Serie A Ä‘Æ°á»£c xáº¿p vÃ o hÃ ng má»™t trong nhá»¯ng giáº£i Ä‘áº¥u bÃ³ng Ä‘Ã¡ tá»‘t nháº¥t trÃªn tháº¿ giá»›i vÃ  thÆ°á»ng Ä‘Æ°á»£c mÃ´ táº£ nhÆ° má»™t giáº£i Ä‘áº¥u vÃ´ Ä‘á»‹ch quá»‘c gia mang tÃ­nh chiáº¿n thuáº­t nháº¥t. \r\nÄÆ°Æ¡ng kim vÃ´ Ä‘á»‹ch	Juventus(2016â€“17)\r\nVÃ´ Ä‘á»‹ch nhiá»u nháº¥t	Juventus (32 láº§n)', 'serie-A_flag.jpg', 'Roma, Torino vÃ  Milan, Ã'),
(5, 'CHAMPIONS LEAGUE', 'Giáº£i vÃ´ Ä‘á»‹ch bÃ³ng Ä‘Ã¡ cÃ¡c cÃ¢u láº¡c bá»™ chÃ¢u Ã‚u (tiáº¿ng Anh: UEFA Champions League hoáº·c Ä‘Æ¡n giáº£n lÃ  Champions League; tÃªn thÆ°á»ng gá»i á»Ÿ Viá»‡t Nam: CÃºp C1) lÃ  giáº£i bÃ³ng Ä‘Ã¡ hÃ ng nÄƒm cá»§a LiÃªn Ä‘oÃ n bÃ³ng Ä‘Ã¡ chÃ¢u Ã‚u (UEFA) dÃ nh cho cÃ¡c cÃ¢u láº¡c bá»™ cÃ³ thá»© háº¡ng cao táº¡i cÃ¡c giáº£i vÃ´ Ä‘á»‹ch quá»‘c gia chÃ¢u Ã‚u. ÄÃ¢y lÃ  má»™t trong nhá»¯ng giáº£i Ä‘áº¥u danh giÃ¡ nháº¥t trÃªn tháº¿ giá»›i vÃ  lÃ  nÆ¡i tranh tÃ i cá»§a cÃ¡c cÃ¢u láº¡c bá»™ lá»›n nháº¥t chÃ¢u Ã‚u, thÆ°á»ng lÃ  cÃ¡c nhÃ  vÃ´ Ä‘á»‹ch cá»§a má»—i giáº£i quá»‘c ná»™i (vÃ , Ä‘á»‘i vá»›i má»™t vÃ i quá»‘c gia, cÃ³ thá»ƒ lÃ  má»™t hay vÃ i cÃ¢u láº¡c bá»™ xáº¿p sau).\r\nÄÆ°Æ¡ng kim vÃ´ Ä‘á»‹ch: Real Madrid (láº§n thá»© 12)\r\nCÃ¢u láº¡c bá»™ thÃ nh cÃ´ng nháº¥t: Real Madrid (vÃ´ Ä‘á»‹ch 12 láº§n)', 'champions-league.jpg', 'Nyon, Thá»¥y SÄ©'),
(6, 'V-LEAGUE', 'Giáº£i bÃ³ng Ä‘Ã¡ vÃ´ Ä‘á»‹ch quá»‘c gia, hay cÃ²n Ä‘Æ°á»£c gá»i lÃ  V.League 1 (Tiáº¿ng Anh: Vietnamese National Football Champions League), lÃ  giáº£i thi Ä‘áº¥u bÃ³ng Ä‘Ã¡ cao nháº¥t trong há»‡ thá»‘ng bÃ³ng Ä‘Ã¡ Viá»‡t Nam. Giáº£i do LiÃªn Ä‘oÃ n bÃ³ng Ä‘Ã¡ Viá»‡t Nam tá»• chá»©c tá»« nÄƒm 1980. TÃ­nh Ä‘áº¿n mÃ¹a giáº£i nÄƒm 2015 Ä‘Ã£ cÃ³ 32 giáº£i Ä‘Æ°á»£c tá»• chá»©c (giáº£i Táº­p huáº¥n nÄƒm 1999 khÃ´ng Ä‘Æ°á»£c tÃ­nh lÃ  giáº£i vÃ´ Ä‘á»‹ch quá»‘c gia). Thá»ƒ CÃ´ng (tÃªn gá»i trÆ°á»›c lÃ  CÃ¢u láº¡c bá»™ QuÃ¢n Ä‘á»™i) lÃ  Ä‘á»™i Ä‘oáº¡t chá»©c vÃ´ Ä‘á»‹ch nhiá»u láº§n nháº¥t (5 láº§n).\r\nÄÆ°Æ¡ng kim vÃ´ Ä‘á»‹ch	HÃ  Ná»™i T&T (3 láº§n)', 'lich-thi-dau-truc-tiep-v-league-2014.png', 'Viá»‡t Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `create_at`, `id_role`) VALUES
(2, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '2017-09-13 10:36:49', 1),
(5, 'localhost', 'localhost@michu.com', '421aa90e079fa326b6494f812ad13e79', '2017-09-26 07:06:44', 2),
(9, 'vinh', 'caubengungo@abc.com', '4107eaebd361f3477b630f4ed7452418', '2018-03-20 07:48:14', 2),
(10, 'tran_lap', 'tranlap@vtv.vn', '827ccb0eea8a706c4c34a16891f84e7b', '2018-03-20 08:12:21', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giai_dau`
--
ALTER TABLE `giai_dau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `giai_dau`
--
ALTER TABLE `giai_dau`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
