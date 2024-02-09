-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Feb 08. 08:00
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `moviecorner2`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comments`
--

CREATE TABLE `comments` (
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `comments`
--

INSERT INTO `comments` (`movie_id`, `user_id`, `content`, `rating`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Officiis blanditiis commodi similique assumenda itaque in libero. Eos rerum recusandae non natus veritatis magni. Ad aut dolores neque.', 7, '2023-05-03 14:56:14', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(1, 2, 'Facere est quis voluptatem velit. Aspernatur fugit ut quia. Asperiores necessitatibus harum eos et quo nihil ab. Id amet labore corrupti mollitia.', 7, '2023-12-07 22:11:36', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(1, 4, 'Velit molestiae animi earum nemo. Quisquam voluptatum temporibus voluptas consequatur. Et aut voluptas debitis aliquid aut laboriosam. Ut incidunt molestiae doloremque eum assumenda et nostrum. Fugiat est quia sint.', 5, '2023-09-26 02:47:24', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(1, 5, 'Aut repellat amet illo ea debitis eos voluptatem. Similique repellendus animi dolor omnis repellat. Voluptas vitae quis ab veritatis enim. Ut voluptatum totam omnis excepturi sapiente.', 10, '2023-11-10 18:24:04', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(1, 7, 'Repudiandae veritatis voluptatibus quasi commodi quis eligendi. Error quod libero expedita quo repudiandae rerum accusamus. Quo rem voluptate cumque. Temporibus aliquam ad at aliquam dolore ab eum ratione.', 10, '2023-10-30 20:51:04', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 8, 'Quod sapiente et natus et non earum porro hic. Porro asperiores quo sed doloribus. Voluptas numquam tempora recusandae.', 9, '2023-09-26 00:33:16', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(1, 10, 'In dicta pariatur rerum maiores assumenda. Vel voluptate numquam sint recusandae. Et corrupti aut consequatur consequuntur sit.', 8, '2023-02-03 14:48:09', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(1, 11, 'Dolor beatae ducimus rem numquam omnis. Rem quam incidunt suscipit et. Voluptatum qui voluptatem facere tempora quia et ut. Qui molestiae dolores qui autem. Nemo vitae fugiat quas molestiae saepe.', 7, '2023-04-07 01:57:29', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(2, 3, 'Dolores repellat quidem et voluptas facere. Dicta et explicabo quasi. In ut sed praesentium soluta.', 8, '2024-01-26 16:38:49', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(2, 7, 'Veritatis accusamus rerum consequatur est ut velit. Et at nihil aut sit repudiandae voluptates. Quo voluptas quia occaecati enim molestiae.', 6, '2023-05-29 07:08:03', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(2, 8, 'Distinctio repellendus in aut ipsum iure autem culpa. Tempore minima vel perspiciatis consequatur id. Similique rem est ut qui minima. Facere explicabo fugit velit nihil.', 10, '2024-01-25 04:56:12', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(2, 9, 'Ut commodi libero sunt eligendi asperiores ut temporibus. Optio accusantium saepe unde adipisci harum praesentium numquam aut. Consectetur voluptate voluptates sint non.', 9, '2023-11-04 12:32:23', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(2, 10, 'Et quis nesciunt cumque. Rem fugiat recusandae repudiandae qui. Sit aliquam quaerat ea amet quasi vel. Laborum perspiciatis velit non nesciunt quaerat voluptatem incidunt nihil.', 7, '2023-05-08 19:26:53', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(2, 11, 'Qui et quis unde dolorem dignissimos. Tempore ratione veniam praesentium numquam. Delectus magni aspernatur non. A soluta non porro non quia dolore.', 10, '2023-08-11 08:52:24', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(3, 1, 'Odio deleniti voluptatem quia. Eos ratione odit aspernatur numquam incidunt necessitatibus autem. Fugiat autem possimus ipsa velit cumque.', 8, '2023-05-02 14:11:02', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(3, 2, 'Ea ullam quo sed fugiat. Voluptas tempora optio et voluptatum quis est corporis. Ad atque nisi alias aliquam ea ut non.', 9, '2024-01-17 11:26:16', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(3, 6, 'Quo corrupti tempora ipsum perspiciatis. Est sed dolores qui deleniti iste mollitia tempore. Odit ut accusamus sunt rerum sed earum molestiae.', 7, '2023-08-26 18:07:46', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(3, 7, 'Repellat autem enim sed quaerat et. Et omnis velit est ullam qui quisquam. Deserunt et id molestiae corrupti accusamus tenetur suscipit.', 5, '2023-08-23 07:12:45', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(3, 8, 'Quia natus natus vitae in in distinctio consequuntur. Quasi rem et sed rerum. Non sint accusantium debitis explicabo.', 10, '2023-05-19 17:00:27', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(3, 9, 'Accusamus eos et sint expedita. Porro quisquam quaerat explicabo et ab. Atque officiis omnis et cupiditate. Modi et veniam molestiae veritatis harum minus eos et.', 9, '2024-01-08 03:08:00', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(3, 10, 'Ea incidunt sunt qui et nobis. Excepturi vitae voluptatum eos quisquam. Minus a necessitatibus eos sed. Et sit sunt fugit ex.', 5, '2023-07-21 01:48:57', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(4, 2, 'Omnis commodi alias occaecati ut molestiae perspiciatis. Laboriosam quasi iste sit qui deserunt expedita pariatur. Rerum eum libero odit et cumque.', 8, '2023-12-28 19:25:48', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(4, 3, 'Sed impedit similique beatae veritatis sed officia. Alias ea nam eos magni saepe asperiores quod. Minus voluptates repellendus reiciendis deleniti autem et sint. Numquam earum aut voluptatem dolorem in voluptate in.', 7, '2023-08-24 13:48:28', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(4, 4, 'Ut cum doloremque qui minima qui. Nostrum illo nihil quas occaecati. Est autem corporis ex ea ducimus consequatur odio. Exercitationem ipsum eum numquam quibusdam quo.', 5, '2023-06-18 11:07:08', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(4, 6, 'Qui voluptatibus reiciendis rem voluptatum officia facere eaque temporibus. Recusandae veritatis aperiam dolores qui. Quo incidunt ut sed aliquid sed.', 7, '2023-06-14 12:40:30', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(4, 7, 'Rerum eos voluptatem aspernatur sapiente molestias. Et quo excepturi adipisci quam omnis. Sequi doloribus qui aperiam magnam est et. Officiis dolor facere deleniti pariatur.', 8, '2023-12-13 04:05:58', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(5, 2, 'Veritatis et ex architecto perspiciatis qui facere pariatur. Iure et minus error et ducimus quos eveniet non. Enim sit est sapiente ratione non. Provident excepturi ut sequi quis ut ipsam illum. Accusantium est nostrum vel officiis est illum sit eligendi.', 6, '2023-08-18 04:42:52', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(5, 3, 'Repudiandae et et voluptate vel totam cum aperiam. Doloribus dolorem consequatur cum culpa. Dolorem suscipit aut tempore sint ad suscipit non. Non sit qui expedita laudantium.', 8, '2023-12-16 20:41:58', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(5, 5, 'Corrupti officiis temporibus temporibus impedit sequi porro. Rem tempora necessitatibus iusto explicabo tempora laudantium aut. Accusantium veniam veritatis aut natus et ut ut.', 7, '2023-09-27 06:35:09', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(5, 7, 'Voluptatem ab quae ad cumque expedita. Et eos sapiente illo aut aut. Temporibus voluptatem maiores amet qui. Incidunt ipsum et enim qui neque illum est.', 7, '2023-11-09 12:30:22', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(5, 9, 'Deleniti praesentium officia fuga at. Eos consequatur eligendi alias quis ex accusamus. Et iste dolorem fugiat perferendis sed.', 6, '2023-12-19 06:16:35', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(6, 1, 'Occaecati et eum laborum saepe vero culpa ex. Optio delectus natus velit. Ex rerum quidem voluptatem tenetur officia. Voluptatem dolores et culpa qui.', 7, '2023-11-15 04:11:39', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(6, 2, 'Facere aut voluptatem dolores pariatur nulla molestiae. Odio soluta natus ipsam ut repellendus. Est dolore sed cupiditate amet eos temporibus soluta.', 6, '2023-08-28 09:37:25', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(6, 7, 'Amet labore praesentium aut omnis temporibus enim aut laborum. Quis ratione labore omnis ad.', 8, '2023-07-12 09:20:49', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(6, 8, 'In consequatur aperiam voluptates dolores. Deserunt dolore vel alias non. Dolorum qui eos quibusdam sequi et labore. Veritatis minus maiores sunt officia culpa corporis.', 6, '2023-08-10 02:25:50', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(6, 9, 'Praesentium voluptatem quia ut non. Suscipit repellendus beatae natus qui. Molestiae neque adipisci ullam quis architecto voluptatem. Voluptatibus molestias et quos necessitatibus.', 10, '2023-09-14 16:13:01', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(7, 1, 'Repellendus aliquid molestias et ipsum delectus. Minima assumenda unde rerum repellat totam amet repellat ut. Sint possimus dicta officia reprehenderit.', 7, '2024-01-27 20:57:21', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(7, 4, 'Dolor molestiae consequatur quasi asperiores ea. Praesentium atque natus voluptatem distinctio. Placeat quia qui repellat illo molestiae totam repellat ad.', 9, '2023-05-22 02:50:25', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(7, 5, 'Dolores adipisci atque quaerat et nisi possimus. Perferendis commodi fuga voluptatem quas dolorem. Est dicta pariatur cupiditate aliquid asperiores id.', 7, '2023-11-07 17:03:35', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(7, 6, 'Quidem sunt est enim earum sint aliquid quod. Non dolores ut cumque repellat saepe. Magnam libero alias exercitationem est ducimus. Quae aspernatur minima id saepe soluta. Non ut sapiente molestiae repudiandae laboriosam.', 9, '2023-03-08 10:33:17', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(7, 7, 'Qui maxime eveniet quam ut voluptates dicta. Atque amet minima non odit. Non sed nobis rem voluptas dolorem rem. Eveniet aut error qui dolor iusto suscipit.', 7, '2023-08-25 20:26:53', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(8, 2, 'Nobis voluptate laborum aut quae magni minus eos animi. Praesentium culpa non ut omnis ut reiciendis cum. Porro et consectetur voluptatem praesentium voluptatem nulla est tempora. Sunt dolorem nesciunt eveniet molestiae itaque sunt qui ab.', 8, '2024-01-24 12:03:29', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(8, 3, 'Illo ut fuga voluptatibus dolor dicta ullam velit. Cumque ipsum autem doloremque quam qui ratione. Voluptatibus qui ab id deserunt. In ex consequuntur laboriosam. Quaerat et et quis ipsam nostrum possimus.', 9, '2023-04-25 13:14:00', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(8, 5, 'Repudiandae consequuntur laborum expedita fugit ut. Quos optio vero error numquam neque incidunt aut. Nemo voluptatem aspernatur dignissimos laboriosam nulla rem quo. Et eum nesciunt vero nulla et.', 10, '2023-04-25 04:54:22', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(8, 6, 'Corporis nesciunt vero architecto harum assumenda. Asperiores eveniet aliquam esse atque aspernatur consequuntur totam itaque. Qui nemo ipsa eaque reprehenderit. Harum qui quia incidunt quas rerum non natus voluptas.', 7, '2023-07-27 20:15:34', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(8, 10, 'Quam sit rerum pariatur molestiae est. Nesciunt deserunt aut porro vel. Ut exercitationem rem nostrum ut occaecati et eveniet.', 9, '2023-02-22 19:23:04', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(8, 11, 'Et consequatur porro quisquam dolores. Quibusdam deserunt totam qui dolor. Optio et dolore ipsa voluptatem dolores quia officia.', 6, '2023-03-21 04:54:16', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(9, 1, 'Et odit nisi rem in explicabo modi dolores dolor. Atque reprehenderit autem est atque impedit dolor. Et est tempora voluptas ratione quia atque dolores.', 9, '2023-05-10 09:12:03', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(9, 2, 'Aut iure pariatur distinctio placeat nemo. Enim dolores rem excepturi molestiae. Et maiores et voluptatibus. Dicta nostrum et quod natus maxime.', 9, '2023-04-12 07:24:33', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(9, 5, 'Culpa iure et inventore et quia est laudantium nihil. Ut sed voluptatum veniam fuga. Blanditiis omnis enim aperiam nulla. Illum sit quasi repellat.', 5, '2023-03-10 10:28:33', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(9, 7, 'At eos molestiae aliquid autem repellat sed cumque. Omnis modi nihil sequi fuga delectus repellendus saepe. Aut enim praesentium explicabo voluptatem dolor.', 6, '2023-09-24 07:03:06', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(9, 8, 'Voluptates laboriosam aut aliquid laudantium. Et labore numquam deleniti mollitia. Molestias aperiam suscipit voluptate voluptatem est. Enim reiciendis quo doloremque sunt soluta nobis impedit.', 5, '2023-10-07 04:30:05', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(9, 10, 'Ab necessitatibus officiis odio assumenda. Et enim consequatur porro sed ex mollitia.', 9, '2023-10-15 17:35:35', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(9, 11, 'Culpa molestias repellendus modi facere aut accusantium error. Ipsum qui eos asperiores asperiores quia itaque enim.', 10, '2024-01-03 00:25:25', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(10, 1, 'Qui perspiciatis et et voluptatem molestiae commodi. Quisquam doloribus adipisci ex dolores quasi non incidunt. Et et qui in qui blanditiis consequuntur similique.', 6, '2023-08-26 21:41:50', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(10, 3, 'Doloremque dolor tenetur illum harum dolorum officia. Dignissimos corrupti assumenda quo commodi iure error. Omnis quasi sit sit ea voluptas.', 5, '2023-11-25 05:20:29', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(10, 5, 'Et veniam voluptatem repudiandae veritatis ut quo reprehenderit sed. Enim repellat voluptatem id et distinctio rerum temporibus ratione. Numquam fugit in dolores.', 9, '2023-12-17 23:36:23', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(10, 7, 'Consequatur aspernatur corrupti ducimus provident voluptatem quam. Rerum quae quo expedita dicta laudantium error dicta. Quia sint reprehenderit id fugiat quia cumque quo. Consequuntur labore exercitationem et provident quia est.', 6, '2023-02-01 00:02:22', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(10, 8, 'Voluptatum quo autem corrupti dolores. Totam ut perspiciatis incidunt vitae. Omnis quasi voluptatem provident sed voluptatem et illo. Aut non rem tempore rem laboriosam et.', 5, '2023-05-07 19:42:11', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(10, 11, 'Quasi ut nobis impedit voluptatem dolores deserunt. Porro iste voluptates inventore ut rerum. Exercitationem sit eum sit eaque deleniti. Blanditiis unde et dolorem error. Exercitationem aut et facilis neque qui vitae recusandae.', 10, '2023-03-25 06:35:56', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(11, 2, 'Praesentium corrupti ut ut incidunt voluptas. Officiis rem quod ut rerum illum consequuntur qui. Sed provident error quaerat in voluptatem eos.', 5, '2023-10-17 19:22:18', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(11, 3, 'Est unde nihil exercitationem deleniti modi. Et iure quis suscipit voluptas sapiente. Rerum dolore odio et ea quam quia. Rerum voluptatem molestiae eveniet nihil aspernatur nulla ipsum nostrum.', 7, '2023-10-10 11:08:27', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(11, 4, 'Non dolorem qui et pariatur at earum iste et. Nostrum necessitatibus odio veniam vel cum. Fugit sit deserunt aperiam excepturi sit modi.', 9, '2023-12-28 06:52:13', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(11, 5, 'Beatae consequatur ullam animi et suscipit hic quia ut. Atque ipsum maiores officiis aspernatur. Earum reiciendis occaecati omnis perspiciatis est ipsa. Distinctio consequatur in qui voluptatum nostrum consequatur asperiores recusandae.', 6, '2023-11-01 22:53:08', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(11, 6, 'Tenetur nemo vitae sint hic quas. Sapiente maiores dicta molestias aut cum ex quo. Laborum amet doloribus sit sequi.', 6, '2023-03-09 06:06:02', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(11, 7, 'Ex et quos non quibusdam incidunt sint facere. Aliquid libero ea sed sint eius. Suscipit repellat nisi qui quia.', 9, '2024-01-17 13:29:41', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(11, 10, 'Voluptatibus nostrum quia eos assumenda illo hic. Ratione culpa eveniet eum. Ipsa nisi aperiam sint incidunt quia quis. Quibusdam autem rerum repellat non exercitationem eos.', 9, '2024-01-17 18:13:43', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(11, 11, 'Est ut ut rerum esse dolore quaerat ipsa. Voluptates cupiditate aperiam impedit atque iure eum. Possimus nulla aspernatur corporis culpa quaerat. Soluta distinctio saepe eum earum qui. Accusantium eveniet sunt quas officiis voluptatum molestias.', 8, '2023-09-10 01:12:55', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(12, 2, 'Sequi vel quidem eum incidunt rem mollitia beatae. Qui aut cum ad cum. Mollitia ipsum et non ea dolorem. Aut nulla aperiam quia consequatur sint ut.', 9, '2023-04-06 12:46:58', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(12, 5, 'Doloribus totam est sunt rerum autem et. Ratione voluptatem labore voluptas magni maiores consequuntur. Numquam repellat commodi quasi omnis ut velit quia.', 6, '2023-10-29 22:04:46', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(12, 6, 'Quis ipsum ab numquam quisquam laudantium veritatis ab sed. Cumque explicabo accusamus possimus omnis. Consequatur nihil ut et. Odit in voluptatem error corporis adipisci aut.', 8, '2023-12-28 05:07:06', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(12, 8, 'Et illo maxime ut illum. Non consequatur expedita et doloribus.', 6, '2023-06-17 17:36:15', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(12, 11, 'Ut expedita dolorem molestiae recusandae ducimus velit. Tenetur qui eos excepturi iusto nulla tempore quas natus. Ea voluptas rerum voluptatem accusamus sunt eum reiciendis ut.', 7, '2023-02-25 07:54:32', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(13, 1, 'Ea quis eum sit. Eaque magnam voluptatem distinctio animi modi distinctio ut. Non rerum qui et tempore enim magni.', 7, '2023-05-07 05:40:13', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(13, 4, 'Architecto labore cupiditate voluptates omnis est consequuntur. Id labore qui ea et. Itaque architecto sunt doloremque nihil in.', 8, '2023-07-09 20:15:06', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(13, 5, 'Fuga aut id pariatur minus aliquid sit. Cumque ab ducimus aut nulla reiciendis reprehenderit optio. Voluptatem eligendi et commodi cum et est reprehenderit. Delectus quia rerum rerum itaque et ut.', 9, '2023-04-26 11:27:48', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(13, 7, 'Rerum molestiae impedit sit reprehenderit eos perspiciatis. Iusto nostrum ut quibusdam dignissimos magnam voluptates. Occaecati occaecati aliquid facilis est quibusdam et.', 6, '2023-05-01 11:44:23', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(13, 8, 'Iste facere odit ducimus dignissimos. Nihil fugit magnam non libero ducimus. Non quia veritatis quia sed aliquam cumque beatae.', 5, '2023-09-21 15:58:46', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(13, 10, 'Cupiditate placeat consequatur earum sed ab. Aliquid tenetur et labore dolorem aut eius itaque. Incidunt minus quia quisquam qui nihil sit inventore. Eius ipsa quia distinctio accusantium optio. Occaecati molestias dolorem et culpa eaque.', 6, '2023-10-29 13:00:16', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(13, 11, 'Perferendis dolores quis aspernatur asperiores harum molestiae voluptatem. Expedita et minus sed ipsa. Accusamus enim excepturi facere illum.', 8, '2023-09-17 14:15:46', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(14, 4, 'Dolor dolor sint commodi ullam repellendus quaerat. Quia delectus quo modi aliquid. Dolores labore omnis ullam ratione qui deleniti laudantium.', 5, '2023-09-05 20:49:00', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(14, 5, 'Laboriosam ipsum reiciendis magni est. Debitis a velit sequi rerum nihil est dolorum.', 7, '2023-03-20 08:39:38', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(14, 7, 'Pariatur maxime qui minima voluptatem dolorem. Voluptas ratione fugiat veniam quo quia. Sit odit accusamus voluptates eos ullam iure alias. Adipisci incidunt reprehenderit qui sed.', 8, '2023-04-01 13:05:07', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(14, 8, 'Voluptas voluptatem rerum fugiat perferendis odio doloribus accusamus. Placeat est quo quisquam aut enim quo. Praesentium error aliquid et recusandae ducimus qui. Assumenda reiciendis error molestiae mollitia.', 10, '2023-02-25 03:13:16', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(14, 9, 'Et assumenda eaque nulla esse. Et molestiae sit iusto et qui quia. Optio dolorum possimus velit illum perspiciatis reiciendis aliquid.', 10, '2023-09-03 02:58:17', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(14, 10, 'Error eaque doloribus dolores atque. Vitae vel necessitatibus voluptatibus dolorem explicabo repellendus. Consectetur eaque dicta eveniet qui. Minima nemo ullam sequi voluptates quam.', 9, '2023-02-08 15:38:47', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(15, 1, 'Voluptatem esse veritatis facilis fuga voluptatem. Quos nihil voluptatibus odio modi. Dolorum officia mollitia dolorum ratione ea itaque.', 9, '2023-10-08 16:55:34', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(15, 5, 'Ratione quae minima sit qui quibusdam. Tenetur occaecati aut et quia rerum fugiat. Dolorem dolorum quis voluptatem.', 9, '2023-12-31 05:37:34', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(15, 11, 'Dolore ut voluptates ut minima enim dignissimos eligendi. Natus blanditiis quia animi. Sequi aliquam molestiae laboriosam maxime.', 5, '2023-07-03 19:48:39', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(16, 2, 'Vel aspernatur non a ipsum corporis. Ratione praesentium doloribus cumque soluta. Expedita deleniti quia qui aut nisi. Illum architecto voluptate veritatis dolorum est fugiat rerum.', 5, '2024-01-12 09:02:56', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(16, 3, 'Corporis similique sunt debitis consequuntur omnis similique qui quasi. Sunt quaerat qui consequuntur magnam placeat. Aut error voluptates qui voluptas consectetur sit sint.', 8, '2023-02-22 20:34:11', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(16, 4, 'Quis et hic recusandae et eum tempora. Sit corrupti vel ex voluptas quis alias neque doloribus. Sit beatae aut consectetur suscipit magni. Aut explicabo quo inventore ea voluptas.', 9, '2023-11-16 20:29:30', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(16, 6, 'Architecto cumque quod facilis ipsum quis blanditiis recusandae. Hic consequatur est deserunt voluptatibus non et sapiente. Assumenda in doloremque nisi autem est saepe et ex.', 9, '2023-02-03 22:22:09', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(16, 7, 'Hic error ducimus nesciunt hic iure porro. Possimus suscipit rerum quia dolor consequuntur qui quis.', 10, '2023-05-02 22:13:23', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(16, 10, 'Saepe ea aliquam nihil itaque maiores dolores. Voluptatem dignissimos reprehenderit sed illum consequuntur.', 8, '2023-06-02 19:06:28', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(16, 11, 'Sunt ut voluptatum sit voluptatem ut harum impedit. Et et voluptatem nihil tempore laboriosam ut. Repellendus illum voluptatibus tempore est minus.', 5, '2023-04-08 16:20:24', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(17, 1, 'Aut hic qui aut possimus qui debitis. Beatae quisquam voluptas quia. Eos ut aut eum odit consequatur facere. Voluptas inventore in repellat aut.', 6, '2023-09-25 21:31:14', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(17, 2, 'Quia vitae et beatae dolor aliquid dolore maxime. Dolor et repellendus libero. Dolore similique rerum occaecati optio praesentium atque. Veritatis quis veritatis omnis quia.', 10, '2023-05-25 00:27:03', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(17, 3, 'Quam nisi aut qui ut quia quis vero. Modi ex dolorum iure officia distinctio omnis similique veniam. Odit eum voluptatem quas explicabo cum perspiciatis. Maxime quasi et animi magnam deleniti ea.', 8, '2023-12-17 01:25:58', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(17, 7, 'Sed inventore aperiam deserunt porro. Illo quo quas et itaque vel.', 9, '2023-03-16 14:30:22', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(17, 10, 'Quisquam rerum quae ratione dolorum perspiciatis ut. Doloribus et reiciendis omnis consectetur sapiente. Aperiam commodi nihil enim quasi. Qui delectus rerum est quae error pariatur. Nesciunt ut voluptatem dolorem.', 8, '2023-02-17 05:00:31', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(18, 1, 'Nemo voluptatem sit officiis mollitia sint voluptas dolor numquam. Rem dolores amet repellendus illum. Consequatur adipisci dolores blanditiis dolores distinctio consequuntur.', 9, '2023-03-31 19:02:13', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(18, 2, 'Eum tempore tempore facilis nihil neque. Adipisci earum velit similique natus fugiat dolorem vel. Animi atque voluptatem corrupti sit. In quibusdam assumenda sint deleniti earum omnis autem.', 6, '2023-10-10 15:10:13', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(18, 3, 'Omnis sit aliquam est deserunt autem ullam. Maiores sequi alias necessitatibus aut facilis. Aliquam ullam officia perferendis repudiandae in et fugit. Qui numquam neque at voluptatem.', 9, '2023-02-23 13:23:48', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(18, 5, 'Architecto corrupti officia ut rerum dolorem. Molestiae ab et accusamus hic. Alias et saepe et suscipit in fuga amet.', 8, '2023-11-20 18:12:25', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(18, 6, 'Voluptate inventore unde est non. Sint modi et mollitia eaque reprehenderit quasi similique. Et quia quasi dolorem suscipit architecto.', 8, '2023-03-26 08:55:15', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(18, 7, 'Sequi atque blanditiis eum voluptatem quia iste. Omnis non voluptas tempore aut quo quibusdam voluptas. Ab maxime fugit autem quos consectetur.', 5, '2024-01-18 02:39:12', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(18, 10, 'Hic fuga exercitationem consequatur natus eos iure accusamus. Ea doloremque voluptates dolores autem ipsa doloribus. Praesentium dolor consequatur architecto officiis enim officiis. Dolor dolorum voluptatem excepturi assumenda repellat magnam. Perspiciatis voluptatem ut quaerat sed nostrum in praesentium.', 9, '2023-02-14 18:20:35', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(18, 11, 'Nesciunt quod debitis at vel nemo expedita doloribus. Totam expedita necessitatibus ducimus. Mollitia officia omnis et. Sed et neque adipisci repellendus vitae aut earum ipsa.', 10, '2023-03-24 14:46:31', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(19, 1, 'Quos hic deserunt labore cum culpa est velit. Velit architecto doloremque autem quis voluptates et. Omnis eos quisquam vero ipsa autem magni ducimus eum.', 5, '2023-04-30 18:15:05', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(19, 2, 'Consequatur temporibus alias pariatur optio voluptatum quas. Dolor quisquam ducimus numquam consequuntur facere voluptatibus aut. Possimus non occaecati alias adipisci est ullam. Aut qui perspiciatis voluptatum minus quidem.', 10, '2023-04-04 07:50:36', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(19, 3, 'Nisi sint sunt reprehenderit nihil ut ipsam porro. Voluptatem autem voluptas error nobis autem. Magni est officia natus. Et totam quo vero.', 5, '2023-11-05 07:14:29', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(19, 5, 'Alias earum necessitatibus et debitis earum quas eveniet. At vel libero sapiente nostrum itaque necessitatibus quia. Voluptas omnis quas minima.', 9, '2023-11-06 02:00:02', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(19, 6, 'Quidem accusantium iste unde quae modi. Culpa hic enim exercitationem sit provident. Quisquam tempora ad nihil quia.', 9, '2023-04-02 16:38:21', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(19, 8, 'Deserunt autem soluta voluptate amet sequi doloribus. Voluptatibus et aspernatur nobis in cum repellat qui. Mollitia voluptatum amet quae dolores rerum fuga facilis. Quaerat asperiores quia voluptates iure.', 7, '2023-10-24 00:55:17', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(19, 11, 'Atque eaque et et est vel voluptatibus ratione quibusdam. Accusantium expedita facere vitae deleniti amet et. Et sed quaerat consectetur nostrum quia nisi.', 5, '2023-10-29 19:47:04', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(20, 3, 'Consectetur veniam distinctio assumenda incidunt exercitationem maiores voluptate. Voluptatem corrupti molestiae sit et. Eos qui quis dolorum sunt. Veritatis ipsam eaque quisquam iusto distinctio ratione.', 7, '2024-01-11 05:59:54', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(20, 5, 'Reprehenderit nostrum quam explicabo alias eligendi. Natus accusamus ut autem. Nisi expedita dignissimos nulla magni cumque est. Odio quia asperiores corrupti ut modi.', 9, '2023-12-11 21:21:49', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(20, 6, 'Exercitationem et officia veritatis laudantium alias sunt itaque eum. Impedit qui dolorum deleniti. Incidunt accusamus molestias sint eius quod sint et et. Molestias eos accusantium ad id voluptatibus recusandae repellendus.', 7, '2023-02-23 12:29:26', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(20, 7, 'Et reiciendis et asperiores. Ex quia autem dolores architecto et quia velit. Ut non voluptatem quibusdam incidunt qui et. Ea illum aut deserunt repudiandae et numquam harum. Ea doloribus laudantium culpa voluptas maiores.', 7, '2023-09-06 19:44:18', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(20, 10, 'Quo nihil ducimus soluta aperiam facere excepturi culpa. Eum accusantium aut ab voluptatem ut quia sit cum.', 7, '2023-04-28 04:26:31', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(21, 1, 'Qui expedita non qui tempora ratione minima placeat aliquam. Ut rerum in a minus eum. Nam est et sed consequatur minima.', 5, '2023-10-12 15:08:11', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(21, 2, 'Neque aliquam est beatae magnam. Quia dolores ut quo ad quaerat esse architecto. Odit repudiandae delectus id cum expedita est.', 7, '2023-07-26 17:14:35', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(21, 4, 'Deleniti quis deleniti ut dolorum. Id culpa beatae et eius dolore. Odio accusamus rerum eos soluta.', 9, '2023-08-27 21:25:20', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(21, 5, 'Vitae animi culpa ipsam est nam quidem voluptatem. Omnis nemo sed dolorem odit voluptatem rem quia. Accusantium dicta officiis maiores est adipisci id atque.', 9, '2023-12-28 03:12:40', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(21, 8, 'Blanditiis commodi ea alias. Aliquid reiciendis inventore cupiditate enim sequi. Doloremque qui perferendis autem quis asperiores. Sequi atque blanditiis error et enim at. Temporibus qui ut eos qui consequatur et.', 10, '2023-08-27 07:23:19', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(21, 9, 'Quasi est facere ducimus sed omnis possimus. Ea quisquam molestiae optio doloribus. Quam aut molestias accusantium voluptatem recusandae.', 10, '2023-03-28 06:19:08', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(21, 10, 'Vel id iure aut eos in ut voluptatem. Eveniet alias nihil possimus distinctio. Et rerum odio et officiis sunt. Distinctio consequatur et placeat ipsam nihil minus.', 10, '2023-08-06 21:00:37', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(22, 1, 'Repellat aut voluptatem ab ullam. Laudantium optio similique exercitationem sit et dolorem. Eum autem est rem. Aperiam cumque ut quod sed ab.', 6, '2023-04-21 05:34:48', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(22, 2, 'Qui perspiciatis autem voluptatum. Laborum occaecati eveniet perspiciatis repellendus rerum vel. Porro ipsam non est tempora. Id vitae laboriosam fugit nisi corrupti eos.', 10, '2023-05-27 09:46:10', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(22, 3, 'Autem repellat aut dolores corrupti. Laborum accusantium sapiente aliquam quo ipsam numquam labore. Aut illum corrupti ex id. Ut ut libero et.', 5, '2023-06-19 15:05:50', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(22, 4, 'Reprehenderit earum hic sequi et ea fugiat. Ut quis nihil ipsum et ut ea rerum animi. Dolores sint eligendi repellendus veritatis aliquam vero.', 9, '2023-10-22 12:51:44', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(22, 6, 'Est corporis quidem ut voluptate harum et quasi. Voluptas ullam rerum nihil beatae pariatur nam. Quas eveniet nihil ut corporis eos corporis. Ut qui voluptatem iusto quam.', 7, '2023-11-22 16:26:46', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(22, 7, 'Nesciunt doloremque voluptates error architecto. Voluptatem eveniet delectus et reprehenderit mollitia odit. Inventore occaecati ex neque dicta non quis corrupti.', 10, '2023-07-14 12:33:31', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(22, 8, 'Voluptatum aut possimus qui quae a. Occaecati provident et sapiente.', 7, '2023-10-14 20:13:35', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(22, 10, 'Qui eos sit ipsa eius optio natus voluptates. Magni et molestiae odio consequatur. Expedita maiores rerum corrupti soluta.', 9, '2023-09-20 05:37:06', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(23, 1, 'Id voluptatem vitae adipisci ratione. Est facilis quas delectus doloremque unde. Omnis sit et qui est deserunt.', 9, '2023-12-25 10:34:18', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(23, 2, 'Cumque incidunt autem qui suscipit. Possimus voluptas adipisci et suscipit quia occaecati omnis occaecati. Consequatur expedita quidem soluta sunt. Cum sit totam facere voluptatibus omnis temporibus.', 5, '2023-05-25 16:58:40', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(23, 3, 'Totam possimus aut qui magnam aspernatur nesciunt. Maiores atque iste repellat eum. Minima atque laborum quis aut et nobis.', 9, '2023-08-06 09:16:58', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(23, 6, 'Optio assumenda necessitatibus praesentium officia quasi accusantium ut. Incidunt repudiandae rerum non praesentium laboriosam sit. Consequatur tempore mollitia sit et. Ducimus dicta qui et voluptates consequuntur.', 7, '2023-07-31 16:58:23', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(23, 8, 'Nostrum rerum reiciendis quidem minus. Quia illo ipsum at eos inventore. Et quia vel aliquam quia.', 10, '2023-08-21 15:00:35', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(23, 10, 'Impedit facilis sint porro autem occaecati dignissimos in. Ab id eius minus quo occaecati. Et asperiores est iure est nostrum necessitatibus et et. Doloribus doloribus provident harum maxime deserunt sed voluptatem.', 5, '2023-10-24 19:53:56', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(23, 11, 'Placeat odit qui et voluptatem. Dolores sapiente perspiciatis asperiores molestiae minus non eveniet.', 10, '2023-06-03 23:33:02', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(24, 4, 'Id occaecati repudiandae ex voluptas. Molestias officia a suscipit incidunt. Eligendi voluptatem ipsam officiis temporibus aut.', 7, '2023-09-24 23:22:52', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(24, 5, 'Voluptates consequuntur suscipit neque sit. Est voluptate enim porro. Provident consequatur quo natus dolorem molestias. Quidem qui quia soluta praesentium repudiandae soluta dolores.', 5, '2023-06-06 00:28:25', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(24, 6, 'Et recusandae neque sunt sit alias fugit dicta in. Quas soluta iste neque repudiandae. Occaecati et qui impedit laboriosam.', 5, '2023-09-28 23:34:25', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(24, 7, 'Veritatis culpa tempora provident nam recusandae ipsam suscipit repellat. Facere facere ut necessitatibus tempora eaque perferendis enim. Itaque nihil porro quis cupiditate.', 10, '2023-04-12 21:02:45', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(24, 8, 'Ea voluptatem possimus iusto. Itaque cum quod quia tempore maiores.', 7, '2024-01-08 02:01:49', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(24, 10, 'Quaerat architecto et maiores soluta labore praesentium accusamus vero. Doloremque esse est excepturi et aperiam ab. Aut iste dolore cum quod reiciendis sint. Officiis rerum sunt adipisci repellendus.', 9, '2023-11-10 16:29:15', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(24, 11, 'Qui saepe assumenda similique quos. Quia impedit id quo repellendus et ut earum. Aut nostrum qui nostrum quis aliquid. Animi quasi optio nesciunt corporis dolores.', 9, '2023-03-05 16:14:19', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(25, 2, 'Autem illum quia quia voluptatem tempore et quia. Quos quasi beatae mollitia ea sint suscipit. Autem recusandae temporibus consequatur.', 7, '2023-03-03 10:46:03', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(25, 4, 'Rerum magnam consequatur est laborum ex. Voluptate est culpa ducimus illum quis est. Rerum atque et rerum minus soluta. Quod totam ut quo rerum officiis sapiente repellendus tenetur.', 9, '2023-09-08 14:49:28', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(25, 5, 'Molestiae modi quia vero ut. Ad eum qui quis dolores. Eius sit vitae quia ab at enim.', 7, '2023-05-02 08:00:36', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(25, 7, 'Voluptatem voluptate qui sunt dolorem ea. Quia qui saepe dignissimos eum libero repellendus quisquam. Nam aut magnam quo fugiat omnis earum.', 6, '2023-02-19 00:17:55', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(25, 10, 'Et in eum vitae et. Dolorem illo corporis aut sunt quis reiciendis. Dolore dolorem ab reprehenderit vitae. Quia ut iusto rerum ex quibusdam ea.', 7, '2023-03-26 10:52:09', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(26, 1, 'Esse exercitationem quas est excepturi. Mollitia sed itaque et ut qui voluptate non. Doloremque voluptas vitae consequatur non itaque maxime nemo molestiae.', 5, '2023-12-21 09:46:21', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(26, 2, 'Architecto molestiae natus illum illo corporis. Facilis minima in debitis facilis nam suscipit. Sint pariatur alias recusandae itaque. Accusantium occaecati fugit vel quo et voluptatum.', 5, '2023-03-15 10:24:54', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(26, 4, 'Atque nesciunt inventore sit. At quis quis laborum rem. Omnis iusto et rerum placeat. Saepe aspernatur a expedita est qui ex qui.', 8, '2023-03-01 12:33:17', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(26, 5, 'Sit consectetur libero enim voluptatum. Ut et optio esse voluptate voluptatibus. Sed quo fuga cum veritatis.', 7, '2023-12-12 00:00:50', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(26, 6, 'Mollitia pariatur quos quas voluptate. Porro qui omnis facere nostrum. Repellendus perspiciatis voluptatem delectus neque ea iste.', 6, '2023-09-06 17:23:35', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(26, 7, 'Alias ad pariatur exercitationem enim natus. Voluptatem molestiae inventore aliquam numquam. Assumenda iste eveniet veritatis magnam. Earum tempora veritatis provident.', 6, '2023-10-11 21:13:10', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(26, 10, 'Vel laborum magnam culpa exercitationem saepe. Consequuntur aspernatur harum blanditiis necessitatibus. Magni aut sint et hic placeat. A voluptatem eos id quas quod magni.', 10, '2023-04-03 22:18:46', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(26, 11, 'Qui voluptatem consequuntur qui ut perspiciatis non quo. Labore ratione et veniam nulla dolore repellat.', 9, '2023-12-11 03:40:19', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(27, 2, 'Necessitatibus incidunt et qui. Laborum voluptatibus vel repudiandae aut illum nemo velit. Sit facilis et qui accusamus molestiae corporis deleniti minima.', 9, '2023-03-14 03:15:33', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(27, 6, 'Vero est dolor voluptatum et illum quaerat est. Voluptate eum exercitationem illum dolore. Aliquid id iure temporibus autem sed.', 10, '2023-03-23 09:31:43', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(27, 7, 'Dolor et et similique possimus ut sint in. Quia inventore sed molestias maxime. Sunt cumque itaque impedit ad quod minus praesentium.', 5, '2023-04-09 03:08:07', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(27, 8, 'Architecto temporibus earum minima. Magni sed voluptates perferendis et est. Porro iste error sint cupiditate voluptatem amet tempora.', 6, '2023-04-22 15:25:53', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(27, 9, 'Mollitia odio odio minima amet repudiandae provident. Commodi optio est hic qui incidunt. Beatae doloremque quidem vel.', 10, '2023-05-08 01:45:44', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(27, 10, 'Et velit doloribus qui molestiae dolore. Ipsam molestiae illo culpa pariatur non aliquam ea et. Esse laudantium alias perferendis dolorum. Rerum sunt consectetur odio.', 8, '2023-04-04 18:08:08', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(27, 11, 'In vel voluptatibus aut et veritatis dolores. Aut fugiat totam ut aut. Sint magni at quis cum omnis.', 8, '2023-02-10 18:28:16', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(28, 1, 'Perferendis tempora a velit quia aliquid dicta corporis. Cum laboriosam consequatur unde rerum. Sunt et et sit recusandae totam.', 7, '2023-07-31 09:30:52', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(28, 2, 'Mollitia voluptates molestiae eveniet laboriosam. Eum cumque vel soluta eveniet quos. Nobis eum dolorem molestiae quasi quia voluptatem ea. At sequi iusto suscipit consequatur enim pariatur vel non. Aspernatur reprehenderit nulla perspiciatis et sapiente.', 5, '2023-03-09 19:53:47', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(28, 5, 'Possimus ullam debitis placeat minima sit cupiditate eum. Ut voluptatem voluptas perferendis commodi adipisci exercitationem. Natus et dolorem omnis eveniet corrupti tempore quia aut. Reprehenderit ea reprehenderit hic temporibus possimus nobis.', 6, '2023-02-25 08:55:08', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(28, 9, 'Voluptatum ut et consequatur est inventore eius sit. Distinctio deleniti amet qui autem ipsa ea. Autem est tempore impedit eligendi iste. Consectetur dicta autem natus laudantium repellat quis iusto.', 9, '2023-03-10 20:12:55', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(28, 11, 'Laudantium amet sed iste eum. Quam officiis veritatis laboriosam deleniti eos rerum quia minima. Quia sequi sed eos ipsam est soluta iure sunt.', 8, '2023-10-26 21:41:11', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(29, 1, 'Aliquam itaque quia at facere modi numquam ut non. Nobis ut quos aut. Reprehenderit qui consequatur rerum ea dolores.', 5, '2023-11-09 15:41:11', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(29, 5, 'Dignissimos occaecati nulla iste molestias expedita. Alias beatae dolorum aut quo. Voluptas aperiam nostrum cumque doloremque distinctio saepe.', 9, '2023-10-07 17:23:01', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 9, 'Est quaerat eos necessitatibus rem ut quos. In sint reprehenderit natus expedita nemo. Incidunt exercitationem velit fuga consequatur. Neque sed nobis cupiditate qui et nisi delectus.', 5, '2023-06-18 16:36:17', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(29, 11, 'Nulla saepe ex temporibus odio vel maiores natus. Repellendus sunt eligendi et. Consequatur consequatur voluptatem voluptates est sint at. Non impedit rerum ea consequuntur eligendi ducimus.', 7, '2023-12-09 02:11:38', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(30, 1, 'Ipsam sed odit natus placeat est. In perspiciatis temporibus ea quo ipsam et et. Fugiat voluptatem ut corporis sunt ullam.', 5, '2023-04-01 02:49:02', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(30, 2, 'Autem nulla non deserunt est cupiditate fugiat quaerat quis. Et ea esse nihil aliquid iure. Hic nisi et repellat qui.', 10, '2023-12-21 07:37:13', '2024-01-28 17:14:59', '2024-01-28 17:14:59'),
(30, 5, 'Fugiat non quia a quod. Maiores eius veritatis laboriosam sapiente non ut omnis. Aliquid soluta error corrupti. Itaque temporibus est quisquam qui sequi at.', 5, '2023-09-07 05:25:35', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(30, 6, 'Libero qui aut laborum voluptatem similique odit corporis. Omnis est rerum et aut voluptate eum. Quidem voluptates molestiae nisi distinctio sint expedita. Exercitationem repudiandae suscipit consectetur nostrum dolores illum.', 9, '2023-10-04 09:38:41', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(30, 7, 'Excepturi aut et velit quam. Nihil omnis pariatur iusto a sit. Illum cum iure facilis unde optio. Expedita non praesentium laudantium.', 10, '2023-12-17 05:26:59', '2024-01-28 17:14:58', '2024-01-28 17:14:58'),
(30, 9, 'Quia sed inventore iusto mollitia. Et laboriosam amet omnis quia nostrum earum illo. Et fuga aut nihil illum. Nihil velit voluptatem tempora mollitia odio corrupti ut.', 7, '2023-06-06 11:17:16', '2024-01-28 17:14:57', '2024-01-28 17:14:57'),
(30, 10, 'Est laborum voluptas debitis facere dolorem earum. Iure est nobis corporis officia beatae sint tenetur. Vitae possimus dicta odit. Unde vero animi accusantium odit numquam non.', 7, '2023-10-08 12:43:49', '2024-01-28 17:14:56', '2024-01-28 17:14:56'),
(30, 11, 'Aut molestias pariatur temporibus sed in mollitia. Ad ipsa sunt quaerat cupiditate ipsa et. Suscipit sunt vitae sit.', 8, '2024-01-07 20:55:34', '2024-01-28 17:14:59', '2024-01-28 17:14:59');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'akció', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(2, 'animációs', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(3, 'bűnügyi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(4, 'börtön', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(5, 'bűnügyi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(6, 'családi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(7, 'dokumentum', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(8, 'dráma', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(9, 'életrajzi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(10, 'erotikus', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(11, 'fantasy', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(12, 'háborús', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(13, 'harcművészet', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(14, 'holokauszt', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(15, 'horror', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(16, 'kaland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(17, 'kalózos', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(18, 'katasztrófa', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(19, 'kém', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(20, 'koncert', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(21, 'krimi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(22, 'misztikus', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(23, 'musical', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(24, 'néma', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(25, 'politikai', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(26, 'road-movie', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(27, 'romantikus', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(28, 'rövid', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(29, 'sci-fi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(30, 'sport', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(31, 'szatíra', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(32, 'szuperhős', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(33, 'vígjáték', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(34, 'thriller', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(35, 'történelmi', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(36, 'western', '2024-01-28 17:14:55', '2024-01-28 17:14:55');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `genre_movie`
--

CREATE TABLE `genre_movie` (
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `genre_movie`
--

INSERT INTO `genre_movie` (`genre_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 2, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 3, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 4, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 5, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 21, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 22, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 23, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 24, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 25, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 26, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 27, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 28, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(1, 29, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(2, 1, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(2, 5, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(4, 14, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(4, 30, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(6, 19, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(6, 20, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 9, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 10, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 11, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 12, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 13, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 14, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 15, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 16, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 17, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 18, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 30, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(9, 15, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(9, 16, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 5, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 6, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 7, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 8, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 19, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 20, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 21, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 22, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 23, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 24, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 25, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 26, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 27, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 28, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 29, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 30, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(12, 17, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(12, 18, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 1, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 6, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 7, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 8, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 10, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 19, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 20, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 21, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 22, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 23, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 24, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 25, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 26, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 27, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 28, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 29, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(21, 11, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(21, 12, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(21, 13, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(21, 30, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(22, 30, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(23, 19, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(27, 17, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(27, 18, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 10, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 21, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 22, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 23, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 24, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 25, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 26, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 27, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 28, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 29, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(30, 16, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(32, 2, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(32, 3, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(32, 4, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(34, 2, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(34, 3, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(34, 4, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(35, 15, '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(35, 18, '2024-01-28 17:15:00', '2024-01-28 17:15:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(562, '2014_10_12_000000_create_users_table', 1),
(563, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(564, '2019_08_19_000000_create_failed_jobs_table', 1),
(565, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(566, '2024_01_11_183849_create_movies_table', 1),
(567, '2024_01_11_185945_create_genres_table', 1),
(568, '2024_01_11_190626_create_genre_movie_table', 1),
(569, '2024_01_15_121223_create_roles_table', 1),
(570, '2024_01_16_114344_create_comments_table', 1),
(571, '2024_01_16_120437_create_people_table', 1),
(572, '2024_01_16_120902_create_movie_role_people_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(64) NOT NULL,
  `release_year` year(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'https://images.justwatch.com/poster/116616519/s718/default-2018.jpg',
  `ratings` decimal(3,1) NOT NULL DEFAULT 0.0,
  `length` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `movies`
--

INSERT INTO `movies` (`id`, `title`, `release_year`, `description`, `cover`, `ratings`, `length`, `created_at`, `updated_at`) VALUES
(1, 'One Piece film Red', '2022', 'Uta a világ leghíresebb énekesnője, aki megannyi rövid, Den Den Mushis közvetítést követően végre színpadra áll élőben is. A Szalmakalaposoknak természetesen ott a helye a koncerten. A dolgok akkor kezdenek bonyolódni, amikor kiderül, hogy ez a leányzó nem más, mint Shanks lánya, és a célja egy új korszak megteremtése, ahol a boldogság és a béke uralkodik.', '..\\assets\\one-piece-film-red-official.webp', 7.9, 115, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(2, 'A sötét lovag - Felemelkedés', '2012', 'Nyolc év telt el azóta, hogy egy szörnyű éjszakát követően Batman nyom nélkül eltűnt. Magára vállalta Harvey Dent államügyész minden vétkét, és a hősből üldözött bűnöző lett. Önfeláldozása azonban nem volt hiábavaló: a Dent-törvénynek köszönhetően Gotham békés várossá vált. Átmenetileg. A városban feltűnik egy macskajelmezes betörő, aki sötét titkokat rejteget; és megérkezik Bane is, a különös álarcot viselő, gátlástalan bűnöző. Bruce Wayne féltve őrzött magánya nem tarthat örökké, a városnak ismét szüksége van a Sötét Lovagra. Ám a köpönyeg és az álarc ellenére úgy tűnik, Bane legyőzhetetlen.', '..\\assets	he_dark_knight_rises.jpg', 8.3, 164, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(3, 'A sötét lovag', '2008', 'Batman (Christian Bale), Gordon felügyelő (Gary Oldman) és a megvesztegethetetlen ügyész, Harvey Dent (Aaron Eckhart) hatásos hadjáratot indítanak a bűnözők ellen. Önként vállalt feladatukat már-már siker koronázza, ám ekkor megjelenik Joker (Heath Ledger), aki a bűnözők között is rettegett, ravaszabb és veszélyesebb bárkinél. A városban újra a félelem az úr, kitör a káosz, és mindenkit megfertőz a romlottság.', '..\\assets	he_dark_knight.jpg', 7.6, 152, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(4, 'Batman: Kezdődik', '2005', 'Bruce Wayne (Christian Bale), az árva milliomos önszántából járja meg az erőszak poklát, amikor Henri Ducard (Liam Neeson), a keleti mester a harcosai közé veszi és tökéletesen kiképzi. Wayne azonban nem osztozik mestere elvakult nézeteiben és visszatér Gotham Citybe. Célja, hogy az igazságtalanság ellen harcoljon minden lehetséges eszközzel. A várost azonban megfertőzte a korrupció, csak a fiatal ügyésznő, Rachel (Katie Holmes) és James Gordon nyomozó (Gary Oldman) mernek szembeszállni Ra\'s Al Ghul embereivel.', '..\\assets\\batman_begins.jpg', 7.0, 140, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(5, 'Jujutsu Kaisen: 0', '2021', 'Yuta Okkotsut a Jujutsu Boszorkánymesterek a Tokiói Prefektúra Jujutsu Középiskolájába íratják be, hogy segítsenek neki kontrollálni az erejét, és szemmel tartsák őt.', '..\\assets\\jujutsu_kaisen_0.jpg', 6.8, 105, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(6, 'Gyűrűk ura: A király visszatér', '2003', 'Gandalf (Ian McKellen) Pipinnel (Billy Boyd) Gondorba vágtat, hogy Denethort (John Noble) felkészítse Szauron túlerejével szemben. Théoden király (Bernard Hill) összevonja seregeit Gondor segélyhívására. Aragorn (Viggo Mortensen) végül vállalja sorsát, és hű társaival harcba szólítja a hegyek közt élő holtakat. Középfölde sorsa azonban egészen máshol fog eldőlni. Frodó (Elijah Wood) és Samu (Sean Astin) a Hatalom gyűrűjével Mordor sötét útvesztőit járja. De minél közelebb kerülnek a Végzet hegyéhez, Frodót annál jobban húzza a Gyűrű szörnyű súlya. A világ sorsa egy apró hobbit kezében van, aki kétséges, hogy ellen tud állni a legnagyobbakat is legyőző kísértésnek.', '..\\assets	he_lord_of_the_rings_the_return_of_the_king.jpg', 7.4, 201, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(7, 'Gyűrűk ura: A két torony', '2002', 'Hamarosan eldől Középfölde sorsa: a gonosz ereje egyre nő, mert szövetséget kötött a két torony: Barad-dúr, Szauron, a sötét úr vára és Orthanc, amely Szarumán, az áruló mágus erődje. Frodó, a Gyűrűhordozó és hű barátja, Samu Mordor földje felé tart, hogy a tűzbe hajítsa terhét: ám egy újabb veszéllyel kell szembenézniük - felbukkan Gollam, aki magának követeli a kincset. Eközben a szövetség még élő tagjai a Kósza vezetésével újabb harcokba keverednek. Rohan lovasai mellett küzdenek és különös szövetségesekre lelnek: az Entekre. Árnyék vetül a világra. A Sötét Úr hadseregei Gondor felé vonulnak. Kezdetét veszi a Gyűrűháború.', '..\\assets	he_lord_of_the_rings_the_two_towers.jpg', 7.8, 210, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(8, 'A Gyűrűk Ura – A Gyűrű Szövetsége', '2001', 'Frodó (Elijah Wood), az ifjú hobbit egy gyűrűt kap Bilbótól, amiről kiderül, hogy az Egy Gyűrű, mellyel a Sötétség Ura rabszolgasorba taszíthatja Középfölde népeit. Gandalf (Ian McKellen) Völgyzugolyba küldi Frodót, ahol a tündék legbölcsebb vezetője, Elrond dönt a gyűrű sorsáról. Nincs más lehetőség, a gyűrűt el kell pusztítani Mordorban, a Végzet-katlanban. A szabadnépek tanácsán megújul a Szövetség, és Gandalf vezetésével Frodó és társai, a dúnadán Aragorn (Viggo Mortensen), a tünde Legolas (Orlando Bloom), Gimli, a törp (John Rhys-Davies), és Boromir, az emberek képviseletében, nekivágnak a reménytelen küldetésnek. A jövő attól függ, hogyan alakul a szövetség sorsa.', '..\\assets	he_lord_of_the_rings_the_fellowship_of_the_ring.jpg', 8.2, 178, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(9, 'The Sunset Limited', '2011', 'A két New York-i férfi egyike fehér, a másik fekete. A fehér egyetemi professzor véget akart vetni az életének, ám öngyilkossági kísérletét a másik megakadályozta. A fekete felviszi magához a lepukkant lakásába, és megpróbál a lelkére beszélni. Furcsa helyzet, hiszen gyilkosságért ült, ám amikor megérintette a halál szele, Isten megszólította őt, és új célt, értelmet adott életének. Az ateista professzor viszont kiábrándult a világból, ön- és embergyűlölő lett. Különös vita bontakozik ki kettejük között az életről, Istenről, az emberekről.', '..\\assets	he_sunset_limited.jpg', 7.6, 91, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(10, 'Csillagok között', '2014', 'A legendásan titkolózó rendező új sci-fijéről annyit már tudni, hogy csupa sztár működik közre benne és a csillagok között játszódik. Tudósok felfedeznek egy féreglyukat az űrben, és egy csapatnyi felfedező meg kalandor nekivág, hogy átlépje mindazokat a határokat, amelyeket addig áthághatatlannak hittünk: túl akarnak lépni téren és időn.', '..\\assets\\interstellar.jpg', 6.8, 169, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(11, 'A keresztapa', '1972', 'Minden idők legnagyobb gengszterfilmje azokat az embereket és azt a gépezetet mutatja be, ami az olasz maffiában gyökerezve a világ leghatalmasabb és legrettegettebb hatalmává vált az Egyesült Államokban. Figyelemmel követhetjük a kegyetlen, gyilkos módszereket, amivel a Corleone család feje dolgozik. Tanúi lehetünk a hihetetlen összetartásnak, az érdekek és a félelem összetartó erejének, ami ezt a világot jellemzi. Emberek sorsa, élet és halál kérdése dől el Don Vito Corleone dolgozószobájában. Egyesek védelemért fordulnak a nagyúrhoz, mások hadüzenettel érkeznek. A rivális maffia, a Tattaglia család ugyanis végső leszámolásra szólította fel a Corleonékat. És a hadüzenet után az egész város lángba borul...', '..\\assets	he_godfather.jpg', 7.4, 175, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(12, 'A keresztapa 2', '1974', 'Vito Corleone halála után Michael lép apja örökébe. A férfi szerteágazó kapcsolatrendszerének felhasználásával új profilt alakít ki a családja vezette maffiának. Hamarosan újabb összeütközések és árulások veszik kezdetüket, s Michael nem habozik a legveszedelmesebb fegyverekhez nyúlni, hogy hatalmát, befolyását és pénzét megtartsa, s védelmet biztosítson családjának. Közben az is kiderül, hogy néhai apja hogyan alapozta meg a Corleone család hírnevét.\n        ', '..\\assets	he_godfather_2.jpg', 7.2, 200, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(13, 'A keresztapa 3', '1990', 'Michael Corleone egyre inkább úgy érzi, hogy családja tevékenységeit ideje lenne legalizálni. A régi típusú maffiának ugyanis mára már leáldozott. Ezért dönt úgy, hogy a szerencsejáték-iparból kiszállva inkább a tőzsde és a bankvilág irányába fordul. Így kerül kapcsolatba a Vatikán egyik bankjával is. S hamarosan olyan üzletet kötnek, ami végleg eldönti a Corleone család sorsát.', '..\\assets	he_godfather_3.jpg', 7.0, 170, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(14, 'A remény rabjai', '1994', '1946-ban egy Andy Dufresne nevű bankárt - noha makacsul hangoztatja ártatlanságát - kettős gyilkosság elkövetése miatt életfogytiglani börtönbüntetésre ítélnek. Dufresne egy Maine állambeli büntetés-végrehajtó intézetbe kerül és hamar meg kell ismerkedjen a börtönélet kegyetlen mindennapjaival, a szadista börtönszemélyzettel, a szinte elállatiasodott rabokkal. Azonban Andy nem törik meg. A bankéletben szerzett tapasztalatai segítségével elnyeri az őrök kegyét és azzal, hogy elvállalja egyik rabtársa illegális akcióiból származó bevételeinek könyvelését, kivívja \"társai\" elismerését is. Cserébe viszont lehetőséget kap a börtön könyvtár fejlesztésére, ezzel némi emberi méltóságot csempészve a keserű körülmények között élő rabok mindennapjaiba.', '..\\assets	he _shawshank_redemption.jpg', 8.2, 137, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(15, 'Schindler listája ', '1993', 'Egyetlen ember is képes lehet arra, hogy a körülmények ellenére megváltoztassa a dolgok menetét. A mondás igazát mi sem bizonyítja jobban, mint Oskar Schindler története. Steven Spielberg nem sokkal a megjelenése után elolvasta az ausztrál Thomas Keneally regényét, mégis tíz évnek kellett eltelnie, hogy elég érettnek tartsa magát a Schindler listája filmre vitelére. A film főhőse, Oskar Schindler született üzletember és szerencsejátékos. A II. világháború legelején elkerül a megszállt Lengyelországba, és azonnal megérzi, milyen hatalmas üzleti lehetőségek nyílhatnak meg előtte.', '..\\assets\\schindler\'s_list.jpg', 7.7, 195, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(16, 'Dühöngő bika', '1980', 'Az ökölvívó Jake La Motta a brutális harcmodora miatt kapta a Bronxi Bika nevet. 1948-ban szerezte meg a középsúlyú világbajnoki címet. Sikerét, hírnevét azonban beárnyékolta zaklatott magánélete. Jake New York rosszhírű negyedében, Bronxban nőtt fel. Az utcán gyorsan megtanulta, hogyan kell lopni és harcolni, hogyan lehet keményebb mindenkinél. A magányos ifjú végül a bokszban találta meg célját, a szorítóban adta ki minden dühét. A sikert azonban nem tudta feldolgozni. A pénzét italra és nőkre költötte, a címét elveszítette, a családja szétesett, végül pedig börtönbe került. Szabadulása után egy mulatóban kapott munkát.', '..\\assets\raging_bull.jpg', 7.7, 129, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(17, 'Casablanca', '1942', 'Egy cinikus, külföldön élő amerikai kávézótulajdonos azzal a döntéssel küzd, hogy segítsen-e egykori szeretőjének és annak szökésben lévő férjének a nácik elől menekülni Francia Marokkóban.', '..\\assets\\casablanca.jpg', 8.2, 102, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(18, 'Elfújta a szél', '1939', 'Egy védett és manipulatív déli szépasszony és egy szélhámos haszonleső viharos románcba keveredik, miközben a rabszolgaság megszűnésével a körülöttük lévő társadalom összeomlik, majd a polgárháború és az újjáépítés időszakában újjáépül.', '..\\assets\\gone_with_the_wind.jpg', 8.0, 238, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(19, 'Óz, a csodák csodája', '1939', 'A fiatal Dorothy Gale-t és kutyáját, Totót egy tornádó elsodorja kansasi farmjukról Óz, a varázslatos országba, és három új barátjával elindulnak, hogy megkeressék a varázslót, aki visszaviheti őt hazájába, és teljesítheti a többiek kívánságait.', '..\\assets	he_wizard_of_oz.jpg', 7.1, 102, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(20, 'Óz, a hatalmas', '2013', 'Amikor Oscar Diggs (James Franco), az igencsak gyanús, piti kis cirkuszi bűvész sietve távozik a porlepte, unalmas Kansas-ből az izgalmas Óz birodalmába, úgy tűnik, megütötte a főnyereményt: hírnév és gazdagság vár reá. Egészen addig gondolja így, amíg nem találkozik a három boszorkánnyal, Theodora-val (Mila Kunis), Evanora-val (Rachel Weisz) és Glinda-val (Michelle Williams), hiszen ők hárman nem egészen biztosak abban, hogy ő lenne a várva várt nagy varázsló.', '..\\assets\\oz_the_great_and_powerful.jpg', 7.4, 127, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(21, 'Star Wars: Egy új remény', '1977', 'Réges régen, egy távoli galaxisban kezdődött a nagy kaland, amikor Leia Organa hercegnő (Carrie Fisher) két fura robottal egy alig értékelhető hologramot küldött az egyetlen Jedi lovagnak, a remeteként élő Ben Kenobinak (Alec Guinness). Az idős jedi Luke Skywalker (Mark Hamill), Han Solo (Harrison Ford) és szőrős vukija, a hatalmas Chewbacca társaságában útra kel, hogy kiszabadítsa a hercegnőt Darth Vader fogságából, és győzelemre vigye az igaz ügyet az egész Galaxisban.', '..\\assets\\star_wars_episode_iv_a_new_hope.jpg', 8.6, 121, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(22, 'Star Wars: A Birodalom visszavág', '1980', 'A felkelők maréknyi csapata a hó borította Hoth bolygó földalatti támaszpontján rejtőzködik. A szondák azonban felfedik a rejtekhelyet, és hamarosan birodalmi lépegetők lepik el a bolygót. Han Solo, Chewbacca és Leia a megbízhatatlan Lando Calrissian segítségét kérik. Nem is sejtik, hogy a birodalom rettegett ura, Darth Vader már várja őket nem kis meglepetést tartogatva Han számára. Luke Skywalker a Dagobah rendszerben az utolsó és legnagyobb Jedit, Yodát keresi, hogy felkészülhessen a végső összecsapásra az Erő sötét oldalával.', '..\\assets\\star_wars_episode_v_the_empir_strikes_back.jpg', 7.9, 124, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(23, 'Star Wars: A Jedi visszatér', '1983', 'Miután Luke megmentette barátját, Han Solót és a szépséges Leia hercegnőt a biztos haláltól, ismét csatlakozik Yodához, hiszen igazi Jedi Lovaggá kell válnia ahhoz, hogy szembeszállhasson Darth Vaderrel és az Erő sötét oldalával. Végre eljött a végső összecsapás ideje! A felkelők készen állnak arra, hogy megsemmisítő csapást mérjenek a Halálcsillagra. Arra azonban nem számítanak, hogy a bolygót elpusztíthatatlan energiapajzs védi és a Birodalom csapdába csalja őket.', '..\\assets\\star_wars_episode_vi_return_of_the_jedi.jpg', 7.9, 134, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(24, 'Star Wars: Baljós árnyak', '1999', 'Nyugtalanság uralkodik a Galaktikus Köztársaságban. A távoli csillagrendszerekbe irányuló kereskedelmi utak megadóztatásának tervét heves viták övezik. A kapzsi Kereskedelmi Szövetség felfegyverzett csatahajóival blokád alá veszi a parányi Naboo bolygót. A Főkancellár titokban útnak indít két Jedi lovagot, a béke és az igazság szerzőit, hogy oldják meg a konfliktust és védjék meg Amidala királynőt. Hamarosan azonban kényszerleszállást kell végrehajtaniuk a Tatooine-on, ahol találkoznak az ifjú Anakinnal, akiben túlárad az erő.', '..\\assets\\star_wars_episode_i_the_phantom_menace.jpg', 7.4, 136, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(25, 'Star Wars: A klónok támadása', '2002', 'A Galaktikus Köztársaság polgárháború küszöbén áll. A Padmé Amidala elleni merényletkísérlet után a tanács Anakin Skywalkert bízza meg a védelmével. A távoli bolygón olyan titkokra bukkannak, ami eldöntheti a polgárháború kimenetelét.', '..\\assets\\star_wars_episode_ii_ attack_of_the_clones.jpg', 7.2, 142, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(26, 'Star Wars: A Sith-ek bosszúja', '2005', 'A tanács Obi-Wan Kenobit (Ewan McGregor) bízza meg azzal, hogy felkutassa és a törvény színe elé hozza őket a klónháború felelőseit. Ezalatt Palpatine szenátor (Ian McDiarmid) egyre nagyobb hatalomra tesz szert, létrehozza a Galaktikus Birodalmat. A szenátor közvetlen társaságában Anakin (Hayden Christensen) egyre nehezebben tud ellenállni Palpatine befolyásának, aki mindent elkövet, hogy a fiatal jedit a sötét oldalra csábítsa.', '..\\assets\\star_wars_episode_iii_revenge_of_the_sith.jpg', 7.0, 143, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(27, 'Star Wars: Az ébredő Erő', '2015', 'A Csillagok háborúja VI: A jedi visszatér cselekménye után 30 évvel járunk (YU 34), az Új Köztársaság idejében. Az Első Rend jelent meg és háborúzott a Galaktikus Birodalom maradványaival, melynek vezetője Supreme Leader Snoke és tanítványa, Kylo Ren, aki sajátos fénykardjával a Galaxis egy részét elfoglalta a (Hux tábornokkal) Starkiller bázisról vezetve seregét.', '..\\assets\\star_wars_episode_vii_the_force_awakens.jpg', 8.0, 136, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(28, 'Star Wars: Az utolsó Jedik', '2017', 'Rey megkezdi a Jedi kiképzését Luke Skywalker tanítványaként annak a reményében, hogy ezzel változtathat az Ellenállás helyzetén és legyőzhetik Kylo Rent és az Első Rendet, eközben Leia Organa, Finn és Poe Dameron megpróbálnak elmenekülni egy Első rendi támadás elől.', '..\\assets\\star_wars_episode_viii_the_last_jedi.jpg', 7.0, 150, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(29, 'Star Wars: Skywalker kora', '2019', 'A Skywalker-saga befejezésében új legendák születnek – és a szabadságért vívott végső csata még hátravan.', '..\\assets\\star_wars_episode_ix_the_rise_of_skywalker.jpg', 6.5, 142, '2024-01-28 17:14:55', '2024-01-28 17:15:00'),
(30, 'Halálsoron', '1999', 'Paul Edgecomb börtönőrként szolgál a Cold Mountain fegyház siralomházában a múlt század harmincas éveiben. Az E blokkban halálraítéltek várják, hogy végig menjenek a halálsoron - a folyosón, amely a villamosszékhez vezet. Edgecomb úgy gondolja, már semmilyen meglepetés sem érheti. Ám minden megváltozik, amikor új rab érkezik az E blokkba. Az óriás termetű fekete férfit, John Coffeyt az esküdtszék két fehér gyermek meggyilkolásáért ítélte halálra. A férfi azonban egyáltalán nem tűnik gyilkosnak, sőt, egészen különös képességekkel rendelkezik. Stephen King regényéből.', '..\\assets	he_green_mile.jpg', 7.6, 189, '2024-01-28 17:14:55', '2024-01-28 17:15:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `movie_role_people`
--

CREATE TABLE `movie_role_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `rolename` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `movie_role_people`
--

INSERT INTO `movie_role_people` (`id`, `people_id`, `movie_id`, `role_id`, `rolename`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Sanji', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(2, 2, 1, 1, 'Monkey D. Luffy', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(3, 3, 1, 1, 'Nami', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(4, 4, 1, 1, 'Uta', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(5, 5, 1, 1, 'Gordon', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(6, 6, 1, 1, 'Usopp', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(7, 7, 1, 1, 'Franky', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(8, 8, 1, 1, 'Tony Tony Chopper', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(9, 9, 1, 1, 'Roronora Zoro', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(10, 10, 1, 1, 'Nico Robin', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(11, 11, 1, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(12, 12, 1, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(13, 13, 1, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(14, 14, 1, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(15, 15, 2, 1, 'Bruce Wayne/Batman', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(16, 16, 2, 1, 'Alfred', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(17, 17, 2, 1, 'Selina Kyle/Macskanő', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(18, 18, 2, 1, 'Bane', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(19, 19, 2, 1, 'John Blake', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(20, 20, 2, 1, 'Ra\'s Al Ghul', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(21, 21, 2, 1, 'Miranda Tate', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(22, 22, 2, 1, 'Jim Gordon', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(23, 23, 2, 1, 'Lucius Fox', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(24, 24, 2, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(25, 24, 2, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(26, 24, 2, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(27, 25, 2, 4, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(28, 26, 2, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(29, 27, 2, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(30, 28, 2, 3, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(31, 29, 2, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(32, 30, 2, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(33, 31, 2, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(34, 32, 2, 8, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(35, 15, 3, 1, 'Bruce Wayne/Batman', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(36, 33, 3, 1, 'Joker', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(37, 34, 3, 1, 'Harvey Dent', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(38, 23, 3, 1, 'Lucius Fox', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(39, 16, 3, 1, 'Alfred', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(40, 22, 3, 1, 'James Gordon', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(41, 35, 3, 1, 'Rachel Dawes', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(42, 36, 3, 1, 'Salvatore Maroni', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(43, 37, 3, 1, 'Dr. Jonathan Crane', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(44, 38, 3, 1, 'Mike Engel', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(45, 39, 3, 1, 'Gambol', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(46, 40, 3, 1, 'Mayor', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(47, 24, 3, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(48, 24, 3, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(49, 26, 3, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(50, 26, 2, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(51, 27, 3, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(52, 25, 3, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(53, 31, 3, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(54, 42, 3, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(55, 28, 3, 3, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(56, 29, 3, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(57, 30, 3, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(58, 32, 3, 8, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(59, 15, 4, 1, 'Bruce Wayne/Batman', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(60, 20, 4, 1, 'Henri Ducard', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(61, 23, 4, 1, 'Lucius Fox', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(62, 16, 4, 1, 'Alfred', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(63, 22, 4, 1, 'James Gordon', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(64, 43, 4, 1, 'Rachel', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(65, 44, 4, 1, 'Ra\'s Al Ghul', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(66, 37, 4, 1, 'Dr. Jonathan Crane', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(67, 45, 4, 1, 'Earle', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(68, 46, 4, 1, 'Carmine Falcone', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(69, 24, 4, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(70, 26, 4, 4, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(71, 24, 4, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(72, 26, 4, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(73, 25, 4, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(74, 31, 4, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(75, 42, 4, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(76, 28, 4, 3, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(77, 41, 4, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(78, 29, 4, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(79, 30, 4, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(80, 32, 4, 8, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(81, 47, 5, 1, 'Mai Zen\'in', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(82, 48, 5, 1, 'Miguel', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(83, 49, 5, 1, 'Kasumi Miwa', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(84, 50, 5, 1, 'Shoko Ieiri', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(85, 51, 5, 1, 'Rika Orimoto', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(86, 52, 5, 1, 'Raru', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(87, 53, 5, 1, 'Takuma Ino', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(88, 54, 5, 1, 'Noritoshi Kamo', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(89, 55, 5, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(90, 56, 5, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(91, 57, 5, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(92, 58, 5, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(93, 59, 5, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(94, 60, 8, 1, 'Zsákos Frodó', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(95, 61, 8, 1, 'Gandalf', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(96, 62, 8, 1, 'Aragorn', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(97, 63, 8, 1, 'Legolas', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(98, 64, 8, 1, 'Csavardi Samu', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(99, 65, 8, 1, 'Gimli', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(100, 66, 8, 1, 'Tuk Peregrin', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(101, 67, 8, 1, 'Boromir', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(102, 68, 8, 1, 'Szarumán', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(103, 69, 8, 1, 'Elrond', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(104, 70, 8, 1, 'Borbak Trufiádok', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(105, 71, 8, 1, 'Arwen', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(106, 72, 8, 1, 'Zsákos Bilbó', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(107, 73, 8, 1, 'Galadriel', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(108, 74, 8, 1, 'Haldir', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(109, 75, 8, 1, 'Celeborn', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(110, 76, 8, 1, 'Gollam/Sméagol', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(111, 77, 8, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(112, 78, 8, 4, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(113, 79, 8, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(114, 80, 8, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(115, 77, 8, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(116, 81, 8, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(117, 82, 8, 3, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(118, 83, 8, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(119, 84, 8, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(120, 85, 8, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(121, 77, 8, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(122, 85, 8, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(123, 86, 8, 8, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(124, 60, 7, 1, 'Zsákos Frodó', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(125, 61, 7, 1, 'Gandalf ', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(126, 62, 7, 1, 'Aragorn', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(127, 64, 7, 1, 'Csavardi Samu', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(128, 63, 7, 1, 'Legolas', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(129, 73, 7, 1, 'Galadriel', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(130, 65, 7, 1, 'Gimli', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(131, 71, 7, 1, 'Arwen', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(132, 66, 7, 1, 'Tuk Peregrin', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(133, 70, 7, 1, 'Borbak Trufiádok', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(134, 87, 7, 1, 'Éowyn', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(135, 68, 7, 1, 'Szarumán', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(136, 69, 7, 1, 'Elrond', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(137, 88, 7, 1, 'Kígyónyelvű', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(138, 89, 7, 1, 'Eomer', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(139, 90, 7, 1, 'Faramir', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(140, 91, 7, 1, 'Theoden', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(141, 76, 7, 1, 'Gollam/Sméagol', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(142, 77, 7, 2, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(143, 78, 7, 4, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(144, 77, 7, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(145, 80, 7, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(146, 81, 7, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(147, 79, 7, 5, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(148, 82, 7, 3, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(149, 83, 7, 7, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(150, 77, 7, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(151, 79, 7, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(152, 84, 7, 6, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00'),
(153, 92, 7, 8, '', '2024-01-28 17:15:00', '2024-01-28 17:15:00');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `people`
--

INSERT INTO `people` (`id`, `name`, `birth_date`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Hiroaki Hirata', '1963-08-07', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(2, 'Mayumi Tanaka', '1955-01-15', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(3, 'Akemi Okamura', '1969-03-12', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(4, 'Kaori Nazuka', '1985-04-24', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(5, 'Kenjirô Tsuda', '1971-06-11', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(6, 'Kappei Yamaguchi', '1965-05-23', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(7, 'Yao Kazuki', '1959-06-17', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(8, 'Ikue Ôtani', '1965-08-18', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(9, 'Kazuya Nakai', '1967-11-25', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(10, 'Yuriko Yamaguchi', '1965-11-21', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(11, 'Brooklyn El-Omar', NULL, 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(12, 'Tsutomu Kuroiwa', '1973-07-19', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(13, 'Eiichiro Oda', '1975-01-01', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(14, 'Gorô Taniguchi', '1966-10-18', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(15, 'Christian Bale', '1974-01-30', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(16, 'Michael Caine', '1933-03-14', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(17, 'Anne Hathaway', '1982-11-12', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(18, 'Tom Hardy', '1977-09-15', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(19, 'Joseph Gordon-Levitt', '1981-02-17', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(20, 'Liam Neeson', '1952-06-07', 'Észak-Írország', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(21, 'Marion Cotillard', '1975-09-30', 'Franciaország', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(22, 'Gary Oldman', '1958-03-31', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(23, 'Morgan Freeman', '1937-06-01', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(24, 'Christopher Nolan', '1970-06-30', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(25, 'Bob Kane', '1915-10-24', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(26, 'David S. Goyer', '1965-12-22', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(27, 'Jonathan Nolan', '1976-06-06', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(28, 'Wally Pfister', '1961-07-08', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(29, 'Charles Roven', '1949-08-02', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(30, 'Emma Thomas', '1971-12-09', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(31, 'Hans Zimmer', '1957-09-12', 'Németország', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(32, 'Lee Smith', '1960-06-10', 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(33, 'Heath Ledger', '1979-04-04', 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(34, 'Aaron Eckhart', '1968-03-12', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(35, 'Maggie Gyllenhaal', '1977-11-16', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(36, 'Eric Roberts', '1956-04-18', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(37, 'Cillian Murphy', '1976-05-25', 'Írország', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(38, 'Anthony Michael Hall', '1968-04-14', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(39, 'Michael Jai White', '1967-11-10', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(40, 'Nestor Carbonell', '1967-12-01', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(41, 'Larry J. Franco', '1949-04-05', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(42, 'James Newton Howard', '1951-06-09', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(43, 'Katie Holmes', '1978-12-18', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(44, 'Ken Watanabe', '1959-10-21', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(45, 'Rutger Hauer', '1944-01-23', 'Hollandia', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(46, 'Tom Wilkinson', '1948-02-05', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(47, 'Marina Inoue', '1985-01-20', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(48, 'Koichi Yamadera', '1961-06-17', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(49, 'Chinatsu Akasaki', '1987-08-10', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(50, 'Aya Endô', '1980-02-17', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(51, 'Kana Hanazawa', '1989-02-25', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(52, 'Shou Hayami', '1958-08-02', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(53, 'Yu Hayashi', '1983-04-02', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(54, 'Satoshi Hino', '1978-08-04', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(55, 'Seong-Hu Park', '2024-01-28', 'Dél-Korea', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(56, 'Gege Akutami', '1992-02-26', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(57, 'Hiroshi Seko', '2024-01-28', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(58, 'Alisa Okehazama', '1993-02-04', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(59, 'Yoshimasa Terui', '2024-01-28', 'Japán', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(60, 'Elijah Wood', '1981-01-28', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(61, 'Sir Ian McKellen', '1939-05-25', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(62, 'Viggo Mortensen', '1958-10-20', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(63, 'Orlando Bloom', '1977-01-13', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(64, 'Sean Astin', '1971-02-25', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(65, 'John Rhys-Davies', '1944-05-05', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(66, 'Billy Boyd', '1968-08-28', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(67, 'Sean Bean', '1959-04-17', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(68, 'Christopher Lee', '1922-05-27', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(69, 'Hugo Weaving', '1960-04-04', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(70, 'Dominic Monaghan', '1976-12-08', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(71, 'Liv Tyler', '1977-07-01', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(72, 'Sir Ian Holm', '1931-09-12', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(73, 'Cate Blanchett', '1969-05-14', 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(74, 'Craig Parker', '1970-11-12', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(75, 'Csókás Márton', '1966-06-30', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(76, 'Andy Serkis', '1964-04-20', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(77, 'Peter Jackson', '1961-10-31', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(78, 'John Ronald Reuel Tolkien', '1892-01-03', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(79, 'Frances Walsh', '1959-01-10', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(80, 'Philippa Boyens', '1962-01-28', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(81, 'Stephen Sinclair', '2024-01-28', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(82, 'Andrew Lesnie', '1956-01-01', 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(83, 'Howard Shore', '1946-10-18', 'Kanada', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(84, 'Barrie M. Osborne', '1944-02-07', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(85, 'Tim Sanders', '1961-11-06', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(86, 'John Gilbert', '2024-01-28', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(87, 'Miranda Otto', '1967-12-16', 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(88, 'Brad Dourif', '1950-03-18', 'USA', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(89, 'Karl Urban', '1972-06-07', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(90, 'David Wenham', '1965-09-21', 'Ausztrália', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(91, 'Bernard Hill', '1944-12-17', 'UK', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(92, 'Michael Horton', '2024-01-28', 'Új-Zéland', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(93, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(94, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(95, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(96, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(97, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(98, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(99, '', '2024-01-28', '', '2024-01-28 17:14:55', '2024-01-28 17:14:55');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'színész/színésznő', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(2, 'rendező', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(3, 'operatőr', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(4, 'író', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(5, 'forgatókönyvíró', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(6, 'producer', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(7, 'zene', '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(8, 'vágó', '2024-01-28 17:14:55', '2024-01-28 17:14:55');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', '2024-01-28 17:14:52', '$2y$12$an/JVviWGkGhP/JshfnKEe5fUgSWKb4sU1FywkdCyRcUD2P8wTtha', NULL, '2024-01-28 17:14:53', '2024-01-28 17:14:53'),
(2, 'User 1', 'user1@example.com', '2024-01-28 17:14:53', '$2y$12$B3YdP3snKbEA8HPTBGBBWOGX/LbpnPpd9qKw4YxE736P4pCUcVDbO', NULL, '2024-01-28 17:14:53', '2024-01-28 17:14:53'),
(3, 'User 2', 'user2@example.com', '2024-01-28 17:14:53', '$2y$12$em8..4n6oHaScNsNRsrYe.kqfZb2Xtdg9BNyiexnyIJ5jpTJsN.L6', NULL, '2024-01-28 17:14:53', '2024-01-28 17:14:53'),
(4, 'User 3', 'user3@example.com', '2024-01-28 17:14:53', '$2y$12$ALF.HesdmY3lz2kTCm9Y1e0SgYaY9vErvCHW3dph7.85IyFKo3c.W', NULL, '2024-01-28 17:14:53', '2024-01-28 17:14:53'),
(5, 'User 4', 'user4@example.com', '2024-01-28 17:14:53', '$2y$12$S8oXSFixf3fuC63U5jYsTuZkWG80ZE1vRMSl7uJzmXnfjVrmvtbFa', NULL, '2024-01-28 17:14:53', '2024-01-28 17:14:53'),
(6, 'User 5', 'user5@example.com', '2024-01-28 17:14:53', '$2y$12$jqKK8/.qSKsqTx3oxnwFUO8QG3K2JxrfYXC1PnPaJuE2VRH/xIbf2', NULL, '2024-01-28 17:14:54', '2024-01-28 17:14:54'),
(7, 'User 6', 'user6@example.com', '2024-01-28 17:14:54', '$2y$12$aG5WDSQIy7cM4KiIoVXBMOnaLk/q1QqojypntvL6cJmgYPfXUgDbW', NULL, '2024-01-28 17:14:54', '2024-01-28 17:14:54'),
(8, 'User 7', 'user7@example.com', '2024-01-28 17:14:54', '$2y$12$/O8V5FWpvwuE.PkX/UnhO.mjPOZj8ZQaykveUwAghuT/ZYGGm97Ue', NULL, '2024-01-28 17:14:54', '2024-01-28 17:14:54'),
(9, 'User 8', 'user8@example.com', '2024-01-28 17:14:54', '$2y$12$2EDBQ8I2wg55wb4XLoN.DuO/J/auQ0RW7R0LDCLybwPM0mtPOykMq', NULL, '2024-01-28 17:14:54', '2024-01-28 17:14:54'),
(10, 'User 9', 'user9@example.com', '2024-01-28 17:14:54', '$2y$12$3PxXlHm30p7c7BOgh7C0zu6EyNprp/xDrFDhjtpOwW.S0wxKTe8Ka', NULL, '2024-01-28 17:14:55', '2024-01-28 17:14:55'),
(11, 'User 10', 'user10@example.com', '2024-01-28 17:14:55', '$2y$12$32PAEwYJgvp2yfuzplbEie1E93nU4onTqzjPB.AhOf76nkk3HqZ2q', NULL, '2024-01-28 17:14:55', '2024-01-28 17:14:55');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`movie_id`,`user_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD PRIMARY KEY (`genre_id`,`movie_id`),
  ADD KEY `genre_movie_movie_id_foreign` (`movie_id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `movie_role_people`
--
ALTER TABLE `movie_role_people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_role_people_people_id_foreign` (`people_id`),
  ADD KEY `movie_role_people_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_role_people_role_id_foreign` (`role_id`);

--
-- A tábla indexei `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- A tábla indexei `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=573;

--
-- AUTO_INCREMENT a táblához `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT a táblához `movie_role_people`
--
ALTER TABLE `movie_role_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT a táblához `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD CONSTRAINT `genre_movie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `genre_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `movie_role_people`
--
ALTER TABLE `movie_role_people`
  ADD CONSTRAINT `movie_role_people_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movie_role_people_people_id_foreign` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movie_role_people_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
