-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2022 pada 03.43
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iphimabrur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'Rahmaan17', 1, '2021-12-28 23:36:16', 0),
(2, '::1', 'ardrah17@gmail.com', 4, '2021-12-28 23:55:31', 1),
(3, '::1', 'ardrah17@gmail.com', 4, '2021-12-29 00:23:53', 1),
(4, '::1', 'ardrah17@gmail.com', 4, '2021-12-30 00:22:45', 1),
(5, '::1', 'ardrah17@gmail.com', 4, '2022-01-02 23:08:49', 1),
(6, '::1', 'ardrah17@gmail.com', 4, '2022-01-03 22:09:49', 1),
(7, '::1', 'ardrah17@gmail.com', 4, '2022-01-04 21:01:53', 1),
(8, '::1', 'ardrah17@gmail.com', 4, '2022-01-06 20:38:09', 1),
(9, '::1', 'ardrah17@gmail.com', 4, '2022-01-07 00:32:10', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `excerpt` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `video` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `slug`, `isi`, `excerpt`, `foto`, `video`, `penulis`, `created_at`, `updated_at`) VALUES
(1, 'optio provident saepe', 'optio-provident-saepe', 'Culpa non et numquam deserunt vero facilis ut. Ea ipsum quis nemo consectetur cumque voluptate rerum. Quas temporibus natus fugiat recusandae. Voluptas quasi aut aut suscipit iste eos modi.', '', 'default.webp', 'https://www.youtube.com/embed/tR2GgkPNWQj', 'Rahmaan17', '2013-02-20 16:24:15', '2022-01-03 22:24:40'),
(2, 'soluta est sed', 'soluta-est-sed', 'Quo totam et dolorum quos velit non. Laborum eveniet aut magnam quia et.', '', 'default.webp', 'https://www.youtube.com/embed/nsomE8KM_24', 'Rahmaan17', '2013-05-10 17:39:21', '2022-01-03 22:24:40'),
(3, 'sunt qui et', 'sunt-qui-et', 'Similique illo quia nihil sapiente possimus. Ut labore quae accusantium ab. Sit recusandae neque omnis officiis tenetur eos. Hic hic libero vel quia sit ut.', '', 'default.webp', 'https://www.youtube.com/embed/5Fh8q4gcDW1', 'Rahmaan17', '1975-07-20 02:38:10', '2022-01-03 22:24:40'),
(4, 'dolorem id tempore', 'dolorem-id-tempore', 'Aliquam error vitae eos laudantium consequatur voluptatem in. Iure rerum ex non natus. Possimus architecto possimus tempore in tempora nisi. Aut et enim ut non. Odit culpa nam qui non eaque ipsa.', '', 'default.webp', 'https://www.youtube.com/embed/nNOdPJ98GDX', 'Rahmaan17', '1970-06-02 17:03:26', '2022-01-03 22:24:40'),
(5, 'quibusdam cum enim', 'quibusdam-cum-enim', 'Et provident quam fuga. Tenetur occaecati laborum neque nobis iure omnis enim. Earum ut quo eum aspernatur. Corrupti rerum sint voluptas autem doloribus ut aut.', '', 'default.webp', 'https://www.youtube.com/embed/-H4zfe3d7Bm', 'Rahmaan17', '1983-12-28 11:22:50', '2022-01-03 22:24:40'),
(6, 'debitis molestias explicabo', 'debitis-molestias-explicabo', 'Omnis tempore et sed. Consequuntur nesciunt tempore ut ratione. Sit voluptas omnis debitis sed omnis voluptatem beatae. Ratione ut ab sapiente est nemo illum.', '', 'default.webp', 'https://www.youtube.com/embed/GZSpnCrhDMz', 'Rahmaan17', '1997-09-06 07:45:25', '2022-01-03 22:24:40'),
(7, 'qui nesciunt commodi', 'qui-nesciunt-commodi', 'Eos veniam sed enim magni vero ea culpa. Quas blanditiis mollitia exercitationem unde quod molestiae. Soluta non consequatur earum et consequatur nam. Molestias soluta magnam alias quas natus.', '', 'default.webp', 'https://www.youtube.com/embed/duVcT976-2N', 'Rahmaan17', '1999-04-14 08:31:38', '2022-01-03 22:24:40'),
(8, 'dignissimos quasi minima', 'dignissimos-quasi-minima', 'A ut voluptatem enim tenetur. Provident esse ipsa minus quo necessitatibus eos. Magni provident dolores animi iste error ut et aliquid.', '', 'default.webp', 'https://www.youtube.com/embed/47YWiTetKuc', 'Rahmaan17', '1991-10-24 07:43:03', '2022-01-03 22:24:40'),
(9, 'aut in qui', 'aut-in-qui', 'Nulla magnam sed mollitia maxime libero nostrum. Non eius est vel quasi et consequatur assumenda rerum. Sed iure debitis eos ex qui. Animi quod sit consequatur fugiat placeat eius et.', '', 'default.webp', 'https://www.youtube.com/embed/3t9Y8RGsmIi', 'Rahmaan17', '2019-05-29 08:42:21', '2022-01-03 22:24:40'),
(10, 'et quia ducimus', 'et-quia-ducimus', 'Exercitationem ut est nisi. Nihil voluptas harum nostrum quia optio. Dicta voluptatem nihil voluptas quos quam est.', '', 'default.webp', 'https://www.youtube.com/embed/amHT_BfuW5h', 'Rahmaan17', '2013-11-26 14:06:02', '2022-01-03 22:24:40'),
(11, 'nisi quia voluptate', 'nisi-quia-voluptate', 'Ducimus dolorem voluptatem pariatur accusantium omnis vero. Voluptates vel omnis illo quidem. Dolor sunt veritatis tempora voluptatem ut iusto. Vitae aut nemo vel officiis provident.', '', 'default.webp', 'https://www.youtube.com/embed/aM-oA_qNful', 'Rahmaan17', '2014-10-08 11:24:23', '2022-01-03 22:24:40'),
(12, 'itaque dicta quo', 'itaque-dicta-quo', 'Aspernatur at error error est facere enim id enim. Harum nisi voluptatem amet eum nostrum et. Occaecati qui itaque dolor iusto distinctio. Officiis quos consequuntur corporis voluptatem architecto.', '', 'default.webp', 'https://www.youtube.com/embed/vqFt4NSwA29', 'Rahmaan17', '1984-01-15 20:54:01', '2022-01-03 22:24:40'),
(13, 'tempora ea distinctio', 'tempora-ea-distinctio', 'Omnis sint et nobis aliquam qui sit occaecati. Expedita distinctio non sapiente et. Voluptas sit maiores id totam modi. Alias ut qui qui dolorem vero quisquam nisi.', '', 'default.webp', 'https://www.youtube.com/embed/rHASx0w2WCG', 'Rahmaan17', '2021-04-24 11:14:51', '2022-01-03 22:24:40'),
(14, 'quibusdam aut dignissimos', 'quibusdam-aut-dignissimos', 'Vero veritatis necessitatibus tenetur dolor. Vitae facilis tempora sit eum exercitationem. Qui hic quia adipisci sint mollitia.', '', 'default.webp', 'https://www.youtube.com/embed/b51KBjsatxD', 'Rahmaan17', '2000-08-19 09:07:13', '2022-01-03 22:24:40'),
(15, 'cumque ipsam est', 'cumque-ipsam-est', 'Dolor praesentium animi voluptatum cumque animi aut. Voluptatum porro provident at.', '', 'default.webp', 'https://www.youtube.com/embed/cTUYB56zwF0', 'Rahmaan17', '2010-09-14 22:44:12', '2022-01-03 22:24:40'),
(16, 'doloribus voluptate voluptate', 'doloribus-voluptate-voluptate', 'Velit quas aspernatur atque iste commodi aliquid. Fuga unde odio explicabo. Eaque architecto alias et quo beatae. Ipsam eligendi illo vel molestias eaque molestias.', '', 'default.webp', 'https://www.youtube.com/embed/7xLsobKrWvg', 'Rahmaan17', '2008-02-22 08:49:57', '2022-01-03 22:24:40'),
(17, 'impedit rerum cumque', 'impedit-rerum-cumque', 'Sunt molestiae possimus cum molestias voluptas. Veniam similique inventore enim tempore molestias molestias hic. Nam rerum dolores accusamus iure.', '', 'default.webp', 'https://www.youtube.com/embed/RtxUpATaO1H', 'Rahmaan17', '1996-08-11 20:36:38', '2022-01-03 22:24:40'),
(18, 'dignissimos ipsam incidunt', 'dignissimos-ipsam-incidunt', 'Et ea iure delectus quae nostrum exercitationem in. Saepe veniam iusto necessitatibus impedit hic. Est aliquam voluptatibus culpa aspernatur excepturi sunt voluptatem quasi.', '', 'default.webp', 'https://www.youtube.com/embed/i4bJO9m7js6', 'Rahmaan17', '2016-03-15 00:30:44', '2022-01-03 22:24:40'),
(19, 'qui nostrum cupiditate', 'qui-nostrum-cupiditate', 'Reprehenderit impedit facilis enim iusto mollitia fugiat. Tempore explicabo eveniet in. Ea necessitatibus nulla eum omnis autem nesciunt. Ut quo fugit dolorem repellat iste dolorem praesentium.', '', 'default.webp', 'https://www.youtube.com/embed/-B9h_Zsqgb0', 'Rahmaan17', '1975-04-23 13:28:01', '2022-01-03 22:24:40'),
(20, 'earum maxime necessitatibus', 'earum-maxime-necessitatibus', 'Qui dolorem repudiandae ut quia in. Eum ullam quisquam ut placeat magni. Consequatur omnis quis et rerum quibusdam. Commodi nemo blanditiis id sapiente.', '', 'default.webp', 'https://www.youtube.com/embed/BPxvY6UROin', 'Rahmaan17', '1971-11-26 14:21:13', '2022-01-03 22:24:40'),
(21, 'vitae numquam sit', 'vitae-numquam-sit', 'Iste deleniti non sint saepe. Sunt perferendis voluptas et velit iusto.', '', 'default.webp', 'https://www.youtube.com/embed/E0hG57DSbZw', 'Rahmaan17', '2010-12-04 05:02:00', '2022-01-03 22:24:40'),
(22, 'quis vero vitae', 'quis-vero-vitae', 'Soluta aut ut harum saepe at iusto reprehenderit. Aut ratione non facilis sed. Vel est rem dignissimos architecto tempora culpa est.', '', 'default.webp', 'https://www.youtube.com/embed/K-37YQC1zNd', 'Rahmaan17', '1971-11-28 21:07:37', '2022-01-03 22:24:40'),
(23, 'fugiat sunt corporis', 'fugiat-sunt-corporis', 'Esse fugiat qui odio. Voluptas animi occaecati animi voluptas doloremque id. Autem culpa doloribus placeat id autem cupiditate. Eum dolore quia voluptatem est earum qui explicabo omnis.', '', 'default.webp', 'https://www.youtube.com/embed/HoRXMyuvCDm', 'Rahmaan17', '1996-02-15 17:07:43', '2022-01-03 22:24:40'),
(24, 'repudiandae quos ducimus', 'repudiandae-quos-ducimus', 'Qui tempora et quam ratione. Qui dicta quae aperiam incidunt rerum sunt qui. Provident et placeat laudantium nisi repellendus.', '', 'default.webp', 'https://www.youtube.com/embed/N2Bh7kV6UpY', 'Rahmaan17', '1972-08-19 06:55:53', '2022-01-03 22:24:40'),
(25, 'minus vitae cumque', 'minus-vitae-cumque', 'Eius iusto ea doloribus provident blanditiis. Tempora omnis exercitationem molestiae nisi aut ducimus occaecati.', '', 'default.webp', 'https://www.youtube.com/embed/QOdD8AMF_Jx', 'Rahmaan17', '1975-08-14 03:26:17', '2022-01-03 22:24:40'),
(26, 'ipsum quia molestiae', 'ipsum-quia-molestiae', 'Nulla nesciunt qui tempore ut neque. Vel autem odit provident nobis sint. Ea possimus ab facere quaerat consequuntur dolore. Reprehenderit adipisci error iste perspiciatis.', '', 'default.webp', 'https://www.youtube.com/embed/NFB-92RXHWb', 'Rahmaan17', '2019-11-19 18:12:35', '2022-01-03 22:24:40'),
(27, 'error exercitationem quas', 'error-exercitationem-quas', 'Quia magnam ab ducimus eveniet sint quia. Voluptatem ipsam maxime et. Corporis eaque provident velit quam culpa iste eaque.', '', 'default.webp', 'https://www.youtube.com/embed/hSeCUFLdD_0', 'Rahmaan17', '1984-01-19 13:27:24', '2022-01-03 22:24:40'),
(28, 'pariatur sunt hic', 'pariatur-sunt-hic', 'Eius vitae eligendi rerum assumenda deleniti quam ex. Earum at cumque modi. Dignissimos natus enim qui culpa. Qui sunt ducimus sint tempore.', '', 'default.webp', 'https://www.youtube.com/embed/4Lui2oF3NUt', 'Rahmaan17', '1997-03-05 16:01:05', '2022-01-03 22:24:40'),
(29, 'omnis tempore eos', 'omnis-tempore-eos', 'Ducimus vero voluptas vel provident quidem enim odio qui. Mollitia ratione provident et pariatur enim eum. Suscipit vel dolorum aut labore at.', '', 'default.webp', 'https://www.youtube.com/embed/PlfjR39QuFi', 'Rahmaan17', '1977-04-14 04:00:53', '2022-01-03 22:24:40'),
(30, 'nulla dolores dolor', 'nulla-dolores-dolor', 'Dolores libero sed omnis porro voluptatibus minima. Officiis sunt nobis adipisci non sunt qui qui. Dignissimos quod sunt et distinctio libero qui. Praesentium omnis dignissimos doloremque quia esse.', '', 'default.webp', 'https://www.youtube.com/embed/DRk8xabYitq', 'Rahmaan17', '2005-06-16 20:47:08', '2022-01-03 22:24:40'),
(31, 'nobis porro maxime', 'nobis-porro-maxime', 'Non velit deserunt beatae natus. Necessitatibus pariatur itaque assumenda omnis eos explicabo. Veniam ipsam ipsa numquam maiores in excepturi non. Dolorum assumenda eos sunt ipsam aut.', '', 'default.webp', 'https://www.youtube.com/embed/H3KgXTli6sW', 'Rahmaan17', '1975-04-16 01:19:08', '2022-01-03 22:24:40'),
(32, 'tenetur sit dignissimos', 'tenetur-sit-dignissimos', 'Illo vero aliquam quo accusantium voluptatem. Voluptatem dolorum qui odit delectus fugit est et. Placeat et rerum et fugiat culpa.', '', 'default.webp', 'https://www.youtube.com/embed/nIAseV8LtcQ', 'Rahmaan17', '1987-06-05 16:13:08', '2022-01-03 22:24:40'),
(33, 'magni quaerat quis', 'magni-quaerat-quis', 'Repellendus incidunt voluptatem et et nobis maiores cumque. Doloremque voluptas ut illo in in. Et repellendus libero commodi exercitationem.', '', 'default.webp', 'https://www.youtube.com/embed/qmNeu0-aO5J', 'Rahmaan17', '2011-04-28 07:58:05', '2022-01-03 22:24:40'),
(34, 'quo id voluptates', 'quo-id-voluptates', 'Id et asperiores voluptatibus et non. Rerum eum voluptates sit molestiae est qui. Doloribus non odit animi consequatur.', '', 'default.webp', 'https://www.youtube.com/embed/jCTJz9fqeYZ', 'Rahmaan17', '2011-05-13 13:15:34', '2022-01-03 22:24:40'),
(35, 'nam cum officia', 'nam-cum-officia', 'Vitae cupiditate sit corporis nobis architecto. Enim dolorem blanditiis vel cum velit. Accusantium quia et quisquam magni optio dolor unde fugit. Eos possimus voluptate omnis minima.', '', 'default.webp', 'https://www.youtube.com/embed/nTxHswVOzDG', 'Rahmaan17', '2009-11-16 06:00:39', '2022-01-03 22:24:40'),
(36, 'sequi qui voluptas', 'sequi-qui-voluptas', 'Qui sit facilis accusantium qui esse eum quibusdam. Aut debitis enim ab sit placeat qui.', '', 'default.webp', 'https://www.youtube.com/embed/EKgm-Zp2ow9', 'Rahmaan17', '2011-05-08 21:21:56', '2022-01-03 22:24:40'),
(37, 'non repudiandae et', 'non-repudiandae-et', 'Quo veritatis facilis asperiores est omnis hic sunt voluptatem. Ad in suscipit qui blanditiis maxime. Quo ratione consequuntur quidem cum voluptas. Ut pariatur fuga sunt voluptatem mollitia.', '', 'default.webp', 'https://www.youtube.com/embed/dtUmwYKaEoP', 'Rahmaan17', '1990-01-13 22:58:57', '2022-01-03 22:24:40'),
(38, 'perferendis consequatur expedita', 'perferendis-consequatur-expedita', 'Voluptatum a qui dolorem sunt est. Quo quae enim temporibus odit dolor et. Sit libero odio reiciendis. Et nam et sapiente doloremque sint similique voluptatem est.', '', 'default.webp', 'https://www.youtube.com/embed/1omSAdsiRyO', 'Rahmaan17', '2005-07-04 09:40:59', '2022-01-03 22:24:40'),
(39, 'numquam qui ipsa', 'numquam-qui-ipsa', 'Rerum ducimus ad qui quam officiis eos eos. Qui aliquam illum unde cupiditate dicta hic. Laborum eum voluptatem sequi nemo consequuntur. Atque dicta et sunt iure accusantium omnis repellat laborum.', '', 'default.webp', 'https://www.youtube.com/embed/89dk0tjN1F7', 'Rahmaan17', '1979-04-24 13:31:08', '2022-01-03 22:24:40'),
(40, 'maxime qui unde', 'maxime-qui-unde', 'Cumque ut delectus aspernatur aut et incidunt et. Unde quis quisquam et similique ea. Assumenda velit voluptatum ex pariatur nobis nihil ducimus. Modi quam odio et iste.', '', 'default.webp', 'https://www.youtube.com/embed/gGdA8CeyEl6', 'Rahmaan17', '2018-05-12 05:41:21', '2022-01-03 22:24:40'),
(41, 'consequatur alias nisi', 'consequatur-alias-nisi', 'Nihil assumenda minima voluptatem totam magni. Esse placeat molestiae aliquid a ut culpa labore explicabo. Incidunt quia asperiores fugiat et et.', '', 'default.webp', 'https://www.youtube.com/embed/048CJbH2wYu', 'Rahmaan17', '1981-08-29 23:26:55', '2022-01-03 22:24:40'),
(42, 'harum officia ipsam', 'harum-officia-ipsam', 'Voluptatem corporis odio et suscipit nisi nisi dolor. Sit et dolores pariatur dolor aspernatur.', '', 'default.webp', 'https://www.youtube.com/embed/9F1RshkW0JP', 'Rahmaan17', '2017-05-15 07:06:42', '2022-01-03 22:24:40'),
(43, 'rerum voluptatibus aperiam', 'rerum-voluptatibus-aperiam', 'Et accusamus ut iusto eum ad esse repellat. Magnam harum est accusamus molestiae. Vero accusamus aut est earum praesentium nesciunt. Eius doloremque quam sapiente.', '', 'default.webp', 'https://www.youtube.com/embed/8EAldbfGC1O', 'Rahmaan17', '1975-06-22 08:35:47', '2022-01-03 22:24:40'),
(44, 'fugit nisi eveniet', 'fugit-nisi-eveniet', 'Et cupiditate fugit consequatur omnis. Sed dolorum dolore repellat aut ut. Dolorem magni expedita eos voluptatem corrupti quos. At velit ut eum quidem natus et.', '', 'default.webp', 'https://www.youtube.com/embed/wLCkpfnVe1s', 'Rahmaan17', '1992-09-07 18:32:21', '2022-01-03 22:24:40'),
(45, 'molestiae repellendus debitis', 'molestiae-repellendus-debitis', 'Qui omnis rerum exercitationem. Iusto dolorem perspiciatis eos incidunt cumque adipisci sit. Eum recusandae in doloribus dicta.', '', 'default.webp', 'https://www.youtube.com/embed/zHr-3mKykPc', 'Rahmaan17', '2006-08-07 07:40:05', '2022-01-03 22:24:40'),
(46, 'quaerat odio corrupti', 'quaerat-odio-corrupti', 'Enim ipsa repellendus consequatur rerum laboriosam nobis aut. Autem ut velit possimus. Nostrum qui rerum fugiat omnis. Voluptatem eius inventore omnis sint ullam.', '', 'default.webp', 'https://www.youtube.com/embed/dwNGzyXnV5e', 'Rahmaan17', '1974-03-16 00:51:37', '2022-01-03 22:24:40'),
(47, 'et aut et', 'et-aut-et', 'Qui porro vero cupiditate qui et officiis. Hic ut impedit quasi. Rerum recusandae voluptate sit minus nobis veritatis aspernatur.', '', 'default.webp', 'https://www.youtube.com/embed/e_Dbrq9xCNt', 'Rahmaan17', '2006-02-11 14:13:41', '2022-01-03 22:24:40'),
(48, 'ratione illo asperiores', 'ratione-illo-asperiores', 'Dolor consequatur non consequatur quibusdam occaecati assumenda. Quasi qui ut nulla magni ducimus vero.', '', 'default.webp', 'https://www.youtube.com/embed/uy7eKqi0bJs', 'Rahmaan17', '2002-09-23 06:10:33', '2022-01-03 22:24:40'),
(49, 'consequatur quia aperiam', 'consequatur-quia-aperiam', 'Molestiae unde blanditiis itaque repellendus ullam. Distinctio ipsam earum vero non ut sapiente. Veniam nobis modi dolor quod modi molestias totam.', '', 'default.webp', 'https://www.youtube.com/embed/j0KawMiuXyz', 'Rahmaan17', '2001-05-14 16:27:21', '2022-01-03 22:24:40'),
(50, 'voluptas ut eaque', 'voluptas-ut-eaque', 'Officiis minima quasi eius deleniti. Asperiores est sed et. Dolor tempora suscipit vel enim dolorem labore incidunt tempora. Omnis quasi magni quos. At et quia omnis dolore et ratione.', '', 'default.webp', 'https://www.youtube.com/embed/jTLxQ2tkiMH', 'Rahmaan17', '1997-03-16 22:44:37', '2022-01-03 22:24:40'),
(51, 'quibusdam et error', 'quibusdam-et-error', 'Quia harum eligendi atque et recusandae veritatis dolor modi. Quaerat aut eveniet omnis distinctio. Cum quis ex magnam. Rem veritatis aut laboriosam et labore deserunt.', '', 'default.webp', 'https://www.youtube.com/embed/FcRGETwl2ea', 'Rahmaan17', '1974-04-16 14:09:17', '2022-01-03 22:24:40'),
(52, 'sequi reprehenderit odit', 'sequi-reprehenderit-odit', 'Natus odit quo vitae tenetur autem autem nihil. Harum qui quis hic sunt. Deserunt sapiente possimus molestiae. Harum ut nemo accusamus non qui.', '', 'default.webp', 'https://www.youtube.com/embed/qH6_OsaRX8E', 'Rahmaan17', '2002-07-22 15:26:12', '2022-01-03 22:24:40'),
(53, 'quia dolorem et', 'quia-dolorem-et', 'Sit omnis quo voluptate in quia delectus. Quam aut pariatur ut est qui occaecati.', '', 'default.webp', 'https://www.youtube.com/embed/GX9aVByQpPs', 'Rahmaan17', '1992-08-02 11:42:03', '2022-01-03 22:24:40'),
(54, 'aperiam ex in', 'aperiam-ex-in', 'Et eos occaecati aut aliquam nisi nihil. Non repellendus ex sit inventore fugit. Ut eum ut rem aut inventore libero quasi.', '', 'default.webp', 'https://www.youtube.com/embed/XM-aHJ_UQ94', 'Rahmaan17', '2006-02-14 09:38:32', '2022-01-03 22:24:40'),
(55, 'hic hic quia', 'hic-hic-quia', 'Nemo laborum tempore officia minima. Vel voluptatem ullam ex non aut et cumque. Molestias aut repudiandae velit expedita dolor.', '', 'default.webp', 'https://www.youtube.com/embed/I_jegQALxMR', 'Rahmaan17', '1979-08-05 07:09:54', '2022-01-03 22:24:40'),
(56, 'ut incidunt repellendus', 'ut-incidunt-repellendus', 'Eligendi quia accusantium nesciunt aut sunt. Cumque et exercitationem neque et. Tempora modi quisquam iusto velit quasi eos. Pariatur non veritatis nam.', '', 'default.webp', 'https://www.youtube.com/embed/j2e6BM5LvDt', 'Rahmaan17', '1995-11-20 16:05:19', '2022-01-03 22:24:40'),
(57, 'quae dolorem suscipit', 'quae-dolorem-suscipit', 'Natus unde dolor dolorem facere eum nihil harum. Asperiores quam dolorem qui soluta cum quis rerum tenetur. Quis iusto error aut earum ut qui alias.', '', 'default.webp', 'https://www.youtube.com/embed/9DQ4NpMEUPj', 'Rahmaan17', '1989-09-29 13:10:42', '2022-01-03 22:24:40'),
(58, 'possimus quos in', 'possimus-quos-in', 'Id totam officiis nihil odio sit vitae. Beatae fugit id autem. Fuga placeat corrupti consequatur aut ea molestias. Autem ducimus quibusdam impedit quo ducimus.', '', 'default.webp', 'https://www.youtube.com/embed/WzVx2jRSulo', 'Rahmaan17', '1984-01-04 17:57:23', '2022-01-03 22:24:40'),
(59, 'fugiat sed voluptatum', 'fugiat-sed-voluptatum', 'Provident minima et illo id. Ea sit provident assumenda enim temporibus. Aut ut fugiat eos corrupti eveniet est quod. Reiciendis non repellat vel eos sed ullam.', '', 'default.webp', 'https://www.youtube.com/embed/Vi7e1knuvRz', 'Rahmaan17', '1990-09-17 05:46:13', '2022-01-03 22:24:40'),
(60, 'quae cupiditate dignissimos', 'quae-cupiditate-dignissimos', 'Voluptatum quia ea commodi magnam illum at. Non voluptas voluptas aperiam. Voluptas voluptatem assumenda corporis. Reiciendis consequatur dolor fugit esse quaerat sed.', '', 'default.webp', 'https://www.youtube.com/embed/q4PS5X1gm3H', 'Rahmaan17', '1987-06-24 20:03:29', '2022-01-03 22:24:40'),
(61, 'et sed officiis', 'et-sed-officiis', 'Quam quidem quia iste quasi adipisci et iure quas. At eum sint temporibus perspiciatis ad nulla. Ad perferendis dolorem sed veniam ipsam. Ipsa aspernatur soluta hic numquam minima numquam.', '', 'default.webp', 'https://www.youtube.com/embed/xyvkP-tJQKi', 'Rahmaan17', '1970-07-02 18:06:46', '2022-01-03 22:24:40'),
(62, 'amet iste expedita', 'amet-iste-expedita', 'Reiciendis qui delectus illum. Perferendis qui eos est qui sint odio. Voluptas pariatur rerum minus corporis ducimus aliquam ab.', '', 'default.webp', 'https://www.youtube.com/embed/9fsFQjVzUnS', 'Rahmaan17', '1970-10-20 04:39:18', '2022-01-03 22:24:40'),
(63, 'nesciunt nihil debitis', 'nesciunt-nihil-debitis', 'Ullam in esse rerum dolor. Neque magni laborum voluptatum molestiae. Aut modi explicabo consequatur. Corporis illo illum laborum sunt dignissimos voluptate sequi neque.', '', 'default.webp', 'https://www.youtube.com/embed/VUPHfDvCQYi', 'Rahmaan17', '2000-06-30 01:13:17', '2022-01-03 22:24:40'),
(64, 'nemo facilis aspernatur', 'nemo-facilis-aspernatur', 'Quas magni dolor at distinctio nihil. A numquam eos doloremque distinctio. Est ad vitae aperiam voluptas in dolor. Sint molestiae voluptas dolorem et assumenda sed.', '', 'default.webp', 'https://www.youtube.com/embed/Au3HwLTfbz1', 'Rahmaan17', '2003-04-10 02:41:27', '2022-01-03 22:24:40'),
(65, 'doloribus repellendus nihil', 'doloribus-repellendus-nihil', 'Earum temporibus aut sit aut aut et. Aspernatur omnis quasi incidunt repellendus molestiae fugit corporis. Sapiente illum inventore ullam eius ea.', '', 'default.webp', 'https://www.youtube.com/embed/0_uqZCFsUNi', 'Rahmaan17', '2000-11-24 07:58:36', '2022-01-03 22:24:40'),
(66, 'amet autem autem', 'amet-autem-autem', 'Et minima qui quod itaque sed iste veritatis. In vitae voluptates aspernatur ipsum. Ad dignissimos aspernatur culpa rerum maxime.', '', 'default.webp', 'https://www.youtube.com/embed/aepuT9Y8qOQ', 'Rahmaan17', '1973-04-21 20:56:38', '2022-01-03 22:24:40'),
(67, 'animi architecto veniam', 'animi-architecto-veniam', 'Eligendi saepe dignissimos doloribus autem quia. Eius officiis quos maiores ullam natus perspiciatis recusandae. Pariatur sed esse officiis voluptatibus nisi error.', '', 'default.webp', 'https://www.youtube.com/embed/EjbzYP_M-8S', 'Rahmaan17', '2011-04-03 09:45:38', '2022-01-03 22:24:40'),
(68, 'quia dolor quibusdam', 'quia-dolor-quibusdam', 'Labore voluptas id alias velit quasi. Temporibus quasi molestiae magnam illum fuga quia nisi. Quibusdam voluptate rem id.', '', 'default.webp', 'https://www.youtube.com/embed/ldInrzV0bB3', 'Rahmaan17', '1976-08-11 08:16:54', '2022-01-03 22:24:40'),
(69, 'et qui esse', 'et-qui-esse', 'Modi consequatur consequuntur aut nihil. Pariatur dolor possimus deleniti iusto a rerum delectus. Quis magnam facere ullam ut ab dolor suscipit. Delectus accusantium non quidem non quas pariatur.', '', 'default.webp', 'https://www.youtube.com/embed/ly3fs0_E1C9', 'Rahmaan17', '1975-07-15 00:42:41', '2022-01-03 22:24:40'),
(70, 'vel eveniet explicabo', 'vel-eveniet-explicabo', 'Inventore doloremque voluptatibus fuga laborum. Et repellendus omnis autem optio maxime esse. Error ab doloremque et aut nulla quasi.', '', 'default.webp', 'https://www.youtube.com/embed/k9r6-IFVvAN', 'Rahmaan17', '1992-03-06 00:16:21', '2022-01-03 22:24:40'),
(71, 'quas minus error', 'quas-minus-error', 'Odit dolorem ipsa eum modi omnis ex corrupti alias. Veniam natus voluptatem cupiditate earum ut aut. Sapiente quo et velit reiciendis consequatur.', '', 'default.webp', 'https://www.youtube.com/embed/2Vb5xFhSaAI', 'Rahmaan17', '2010-03-05 05:54:32', '2022-01-03 22:24:40'),
(72, 'facere rerum qui', 'facere-rerum-qui', 'Omnis minus ratione dolores rerum. Corrupti voluptatem voluptatem tempora quae. Deleniti dolorem dolor veritatis aspernatur.', '', 'default.webp', 'https://www.youtube.com/embed/A-s7GhpSmTM', 'Rahmaan17', '1990-04-01 05:49:44', '2022-01-03 22:24:40'),
(73, 'rerum commodi qui', 'rerum-commodi-qui', 'Id sint voluptas et minima fuga dolor quis accusamus. In voluptas molestiae qui autem harum at vel. Illo pariatur quis numquam est nostrum voluptatem laborum.', '', 'default.webp', 'https://www.youtube.com/embed/eSJ5XjcmVHp', 'Rahmaan17', '1997-09-11 08:15:56', '2022-01-03 22:24:40'),
(74, 'qui omnis quos', 'qui-omnis-quos', 'Non non velit ut sed dolores rem. Ut qui ab explicabo autem. Omnis libero aperiam id saepe aut eligendi similique quia. Quo ipsam tempora velit aut quo ut aperiam.', '', 'default.webp', 'https://www.youtube.com/embed/NTehIlsR4-a', 'Rahmaan17', '1994-09-11 19:03:31', '2022-01-03 22:24:40'),
(75, 'dolore consequatur sint', 'dolore-consequatur-sint', 'Necessitatibus doloribus beatae repudiandae eos ut deleniti. Qui quia omnis ex dolorum optio. Culpa est dolore distinctio perferendis molestiae. Quia repellat dolore et aut.', '', 'default.webp', 'https://www.youtube.com/embed/TCcIzVlnQrt', 'Rahmaan17', '1986-05-15 20:33:11', '2022-01-03 22:24:40'),
(76, 'minima ut ea', 'minima-ut-ea', 'Et quam excepturi atque beatae. Placeat nihil nihil qui nesciunt deleniti dolor. Sed ea animi eaque et et.', '', 'default.webp', 'https://www.youtube.com/embed/PI6E_fn02uy', 'Rahmaan17', '1985-01-28 17:30:07', '2022-01-03 22:24:40'),
(77, 'consequuntur pariatur sint', 'consequuntur-pariatur-sint', 'Et itaque nulla excepturi. Vel id omnis qui placeat dolorem ut. Modi aperiam quia at fugit at consequatur. Sint ut commodi error voluptatem.', '', 'default.webp', 'https://www.youtube.com/embed/JpLRmxn9Ptv', 'Rahmaan17', '1994-05-31 14:14:32', '2022-01-03 22:24:40'),
(78, 'quia id cum', 'quia-id-cum', 'Molestias provident et ut necessitatibus fuga fuga ad. Dolores corrupti perferendis nihil sed laborum molestias quidem. Amet maiores similique odit cupiditate aut dignissimos quis ratione.', '', 'default.webp', 'https://www.youtube.com/embed/1awd3fGARsk', 'Rahmaan17', '1991-02-08 15:52:40', '2022-01-03 22:24:40'),
(79, 'repudiandae eum nulla', 'repudiandae-eum-nulla', 'Dignissimos nostrum nostrum repudiandae atque. At ratione commodi facere et ratione expedita. Quia maiores et consequatur modi maxime.', '', 'default.webp', 'https://www.youtube.com/embed/XwOSZgx1-fc', 'Rahmaan17', '1975-12-14 11:15:19', '2022-01-03 22:24:40'),
(80, 'et maiores pariatur', 'et-maiores-pariatur', 'Porro magnam qui ex consectetur. Perspiciatis ut quae perspiciatis rem. Consectetur et similique sunt consequatur tempore expedita. Doloremque voluptas laboriosam officiis iste.', '', 'default.webp', 'https://www.youtube.com/embed/7SzndxvmIur', 'Rahmaan17', '2019-12-10 19:29:00', '2022-01-03 22:24:40'),
(81, 'aspernatur incidunt ut', 'aspernatur-incidunt-ut', 'Asperiores consequatur provident dolor quidem aspernatur tempora. Quos quia et earum natus.', '', 'default.webp', 'https://www.youtube.com/embed/fGbpMmXsveN', 'Rahmaan17', '2011-06-12 10:21:39', '2022-01-03 22:24:40'),
(82, 'harum vero inventore', 'harum-vero-inventore', 'Dolor rerum odio dicta vitae. Quibusdam vel quibusdam ut tempora omnis ut et.', '', 'default.webp', 'https://www.youtube.com/embed/tJYmZPRXjWO', 'Rahmaan17', '1977-04-08 20:55:56', '2022-01-03 22:24:40'),
(83, 'velit quas et', 'velit-quas-et', 'Qui deleniti consequatur et illum aut. Officia non vero sequi temporibus ipsam et atque et. Perspiciatis et ut rerum dolores. Nobis aut repellat modi nam minima consequuntur quia commodi.', '', 'default.webp', 'https://www.youtube.com/embed/QfOg7qzI9Bs', 'Rahmaan17', '1986-10-23 20:29:20', '2022-01-03 22:24:40'),
(84, 'error magnam ipsa', 'error-magnam-ipsa', 'Corrupti adipisci voluptatem ea rem alias. Fugiat accusamus id facere quis nisi. Blanditiis repellendus vitae id eos.', '', 'default.webp', 'https://www.youtube.com/embed/je5B4Iq1xh8', 'Rahmaan17', '1989-12-01 18:53:49', '2022-01-03 22:24:40'),
(85, 'deleniti vel officiis', 'deleniti-vel-officiis', 'Culpa ut rem iure autem esse molestias. Sint provident vel ab repellendus veniam mollitia consequatur. Aut nesciunt id et. Repellat id et ea debitis velit.', '', 'default.webp', 'https://www.youtube.com/embed/Ok6m5KL_3FI', 'Rahmaan17', '1973-03-14 12:15:34', '2022-01-03 22:24:40'),
(86, 'vel sint delectus', 'vel-sint-delectus', 'Vero soluta dolores eum sapiente nihil aut. Dolore deserunt ratione ut rerum fuga quia et. Et ipsum omnis modi temporibus.', '', 'default.webp', 'https://www.youtube.com/embed/_AOCVar3YoG', 'Rahmaan17', '1971-06-18 23:14:39', '2022-01-03 22:24:40'),
(87, 'atque natus sit', 'atque-natus-sit', 'In quidem tempore dolorem. Perferendis tenetur amet ad sapiente dolor quisquam.', '', 'default.webp', 'https://www.youtube.com/embed/I0YjcvNLM8_', 'Rahmaan17', '1987-11-26 12:05:50', '2022-01-03 22:24:40'),
(88, 'magni et qui', 'magni-et-qui', 'Maxime sit ut aut sunt veritatis. Non tempora necessitatibus ratione ab similique et. Molestiae non expedita dolores ab modi sequi. Odit ut quia ut molestiae esse. Officia quia nisi non.', '', 'default.webp', 'https://www.youtube.com/embed/BhYXQdy7sZ8', 'Rahmaan17', '1980-08-18 21:22:23', '2022-01-03 22:24:40'),
(89, 'neque esse voluptatem', 'neque-esse-voluptatem', 'Officiis et sit reprehenderit voluptas. Perspiciatis earum qui ullam dolores ut numquam natus.', '', 'default.webp', 'https://www.youtube.com/embed/Pm26KyYkobU', 'Rahmaan17', '1997-02-11 08:59:00', '2022-01-03 22:24:40'),
(90, 'nesciunt ipsa sit', 'nesciunt-ipsa-sit', 'Quia sint vel exercitationem id. Ea ad hic corporis. Ipsum minus sed tenetur nisi neque. Et eos velit sapiente eligendi voluptas.', '', 'default.webp', 'https://www.youtube.com/embed/AEthMckOsmq', 'Rahmaan17', '2016-09-18 22:00:37', '2022-01-03 22:24:40'),
(91, 'earum vel inventore', 'earum-vel-inventore', 'Quibusdam autem aut laboriosam fuga quis hic. Inventore aut eius sit dolorum odio laborum. Quod cumque exercitationem omnis sit. Asperiores in qui saepe debitis eum quae quo nisi.', '', 'default.webp', 'https://www.youtube.com/embed/4hL12zNm86-', 'Rahmaan17', '1986-09-09 22:30:37', '2022-01-03 22:24:40'),
(92, 'facere quasi modi', 'facere-quasi-modi', 'Ducimus sit sed est dolore nisi illum. Molestias velit exercitationem et velit vel quaerat aut. Mollitia exercitationem qui voluptate aliquid et tempora. Esse possimus nihil consequatur suscipit.', '', 'default.webp', 'https://www.youtube.com/embed/ObMk7QmFwtq', 'Rahmaan17', '2020-10-06 07:34:20', '2022-01-03 22:24:40'),
(93, 'nihil harum molestiae', 'nihil-harum-molestiae', 'Rerum est ea non soluta. Iusto perspiciatis illo corrupti molestias quos. Temporibus iusto corrupti provident possimus illum est. Quia et et ut voluptate necessitatibus.', '', 'default.webp', 'https://www.youtube.com/embed/UEmjTPzIuJV', 'Rahmaan17', '1992-03-13 02:36:15', '2022-01-03 22:24:40'),
(94, 'sit quo placeat', 'sit-quo-placeat', 'Molestias magnam nemo eligendi rerum dolores asperiores doloremque sint. Ducimus a aliquam mollitia. Aut qui at dolorem laudantium delectus debitis.', '', 'default.webp', 'https://www.youtube.com/embed/Vy15oXMQ823', 'Rahmaan17', '1974-07-16 00:59:00', '2022-01-03 22:24:40'),
(95, 'voluptate recusandae vitae', 'voluptate-recusandae-vitae', 'Molestiae sit quaerat minima. Quia sit saepe a atque et itaque. Qui id reprehenderit alias eos commodi consectetur. Totam porro maiores aut neque excepturi ut voluptatibus.', '', 'default.webp', 'https://www.youtube.com/embed/dg2TvU9X7EP', 'Rahmaan17', '2000-07-12 02:30:47', '2022-01-03 22:24:40'),
(96, 'occaecati at reiciendis', 'occaecati-at-reiciendis', 'Qui dolore explicabo cumque architecto quibusdam non. Aut libero officia rem odit sint harum enim. Debitis sint alias et maiores. Aut perferendis eos non. Et dolores laudantium ut est.', '', 'default.webp', 'https://www.youtube.com/embed/TnCQkuKfiMr', 'Rahmaan17', '1995-08-14 03:47:54', '2022-01-03 22:24:40'),
(97, 'aliquam fugiat quis', 'aliquam-fugiat-quis', 'Illo culpa amet voluptas corrupti. Quasi dolor necessitatibus quis omnis iure harum et. Modi aspernatur itaque ea nihil earum id recusandae. Eligendi aut officia maxime molestiae saepe excepturi.', '', 'default.webp', 'https://www.youtube.com/embed/XYtTKbUcaFA', 'Rahmaan17', '2019-06-19 10:00:29', '2022-01-03 22:24:40'),
(98, 'odio iusto laboriosam', 'odio-iusto-laboriosam', 'Veritatis dolorum est voluptates. Fuga ea qui unde sint et molestias. Non libero commodi quis consequatur explicabo.', '', 'default.webp', 'https://www.youtube.com/embed/Vl1ygWbLRZX', 'Rahmaan17', '2001-05-01 06:12:30', '2022-01-03 22:24:40'),
(99, 'id voluptate rem', 'id-voluptate-rem', 'Ea non laudantium commodi veniam nobis vitae hic. Autem cumque ea repellendus odio velit possimus commodi.', '', 'default.webp', 'https://www.youtube.com/embed/Ypf6XB7tvP5', 'Rahmaan17', '1997-10-03 14:50:41', '2022-01-03 22:24:40'),
(100, 'tenetur molestiae facilis', 'tenetur-molestiae-facilis', 'Consequatur consequatur amet optio suscipit. Et quibusdam eveniet mollitia eaque animi perferendis quas. Sed reiciendis sed architecto ipsa omnis fugit nihil.', '', 'default.webp', 'https://www.youtube.com/embed/POjB1ACv6Zg', 'Rahmaan17', '1998-09-18 16:28:06', '2022-01-03 22:24:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2021-12-10-141001', 'App\\Database\\Migrations\\Kegiatan', 'default', 'App', 1639145952, 1),
(3, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1639712069, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'ardrah17@gmail.com', 'Rahmaan17', '$2y$10$ybeW/oHRO0toy4yXX0SL2uGELaM6rmp8BdCzXEY8vuNOImlUjahjK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-12-28 23:55:28', '2021-12-28 23:55:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penulis` (`penulis`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`penulis`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
