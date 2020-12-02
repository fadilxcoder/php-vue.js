-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2020 at 04:58 PM
-- Server version: 5.7.14
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `experimental_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `vue_products`
--

DROP TABLE IF EXISTS `vue_products`;
CREATE TABLE `vue_products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vue_products`
--

INSERT INTO `vue_products` (`id`, `name`, `description`, `image`) VALUES
(1, 'Giles Cormier', 'Maxime velit quas nihil dolores rerum. Nulla earum velit esse molestiae doloremque odio nam. Est sapiente asperiores voluptas eos rem aliquam.', 'http://placehold.it/750x500'),
(2, 'Mr. Max Erdman IV', 'Ut blanditiis ut qui laborum aut est error. Quia culpa alias qui quia sit. Temporibus ex ut qui porro non.', 'http://placehold.it/750x500'),
(3, 'Trace Leannon', 'Rerum quaerat dolorem rerum ut ipsum quibusdam itaque. Modi et et unde. Fugiat enim sed deserunt corrupti ducimus ab velit.', 'http://placehold.it/750x500'),
(4, 'Prof. Winfield Kuvalis DDS', 'Quis magnam nobis aut sed et doloremque. Asperiores quos consequatur adipisci cupiditate. Dolore aut quia sapiente et. Nemo tempore sunt est dolorem ea.', 'http://placehold.it/750x500'),
(5, 'Demetris Kunze', 'Eius eius quidem praesentium libero. Architecto exercitationem magnam doloremque quis. Debitis laboriosam eos earum doloribus qui. Voluptatem non aut illum ea.', 'http://placehold.it/750x500'),
(6, 'Prof. Magali Fadel III', 'Sequi fuga eum enim omnis nulla. Quis nihil aut qui blanditiis natus voluptas deserunt. Cupiditate qui ducimus et non laboriosam. Rerum perferendis officia cupiditate cumque.', 'http://placehold.it/750x500'),
(7, 'Tyra Bosco', 'Facere harum accusantium eos praesentium eos. Libero ut quaerat placeat. Fugit ea asperiores non ea. Non nemo esse doloribus quod est quibusdam autem.', 'http://placehold.it/750x500'),
(8, 'Melissa Mosciski', 'Voluptas omnis corporis consectetur ratione ut. Doloremque aliquam debitis nulla tempore. Quia quo neque iusto quis.', 'http://placehold.it/750x500'),
(9, 'Nora Tillman', 'Dolorum cum et explicabo debitis quibusdam eaque. Accusantium est et exercitationem eos. Ut non aut ea maxime molestiae eligendi exercitationem non.', 'http://placehold.it/750x500'),
(10, 'Mrs. Cortney Lehner I', 'Ullam alias ut labore dolorum aut. Quo iste possimus quas saepe vel omnis. Cumque voluptatem iusto laborum atque ut iste. Rerum eius blanditiis accusamus ut.', 'http://placehold.it/750x500'),
(11, 'Chyna Watsica', 'Repudiandae facere rem quo et ratione aut dolores. Corporis vitae perferendis eveniet ratione omnis occaecati quod. Voluptatem aut id porro quae perspiciatis voluptatem. Temporibus iusto sed dolorum temporibus.', 'http://placehold.it/750x500'),
(12, 'Retha Eichmann V', 'Ipsum tempore veniam similique. Mollitia fugiat aut maiores. Iusto perferendis itaque repudiandae qui ut ut temporibus. Beatae autem animi ut.', 'http://placehold.it/750x500'),
(13, 'Jayme Dach', 'Esse repellat veritatis provident ut. Magnam odit voluptatibus aliquam.', 'http://placehold.it/750x500'),
(14, 'Dr. Vena Corkery', 'Cumque soluta delectus in. Illum consequatur qui nostrum. Placeat quam et et mollitia dolorem aut praesentium.', 'http://placehold.it/750x500'),
(15, 'Ernestine Borer', 'Ipsa autem tempore officiis ut dignissimos veritatis eveniet magnam. Natus dolor debitis consequatur excepturi aspernatur. Fugit repellat debitis ea qui quos aut.', 'http://placehold.it/750x500'),
(16, 'Ms. Alvera Dach', 'Consequuntur porro ut dolorum dolores. Maiores quis consequatur culpa reprehenderit eius dolor necessitatibus. Illo et est soluta consectetur molestiae eligendi. Earum aliquam voluptatem quam dolorem autem hic dolorem.', 'http://placehold.it/750x500'),
(17, 'Mr. Rocio Schowalter', 'Voluptatem rerum error sed totam. Est perferendis quia sed totam consequatur voluptas aut amet. Nihil dolore quia assumenda dolorum. Ea dolorum doloribus ipsa tempore ipsam vero.', 'http://placehold.it/750x500'),
(18, 'Zita Okuneva', 'Dolores vero mollitia quidem atque alias optio. Ut ut rerum dolor assumenda nesciunt quo ipsa. Ut ducimus dolor et autem.', 'http://placehold.it/750x500'),
(19, 'Dawson Beier', 'Rem nulla odit alias dolore. Quo repudiandae unde neque impedit velit. Voluptatem ipsam enim praesentium qui. Soluta tempore sit modi doloribus rerum omnis delectus.', 'http://placehold.it/750x500'),
(20, 'Chance Maggio', 'Enim ipsum perspiciatis saepe rerum in reiciendis. Velit quos voluptas consequuntur at. Maiores cupiditate iure facere ducimus dicta.', 'http://placehold.it/750x500'),
(21, 'Miss Maggie Hill', 'Quibusdam vitae eveniet accusantium et. Et quia adipisci qui quia aut voluptas. Aperiam accusantium et eum dolores dolorem earum. Eos nihil quam quae culpa.', 'http://placehold.it/750x500'),
(22, 'Stephen Metz', 'Qui odio voluptas blanditiis corrupti ab ratione voluptates. Repellat exercitationem qui tempore explicabo recusandae et qui. Dicta adipisci dolores dolore. Sint esse dolores ratione minima expedita sit.', 'http://placehold.it/750x500'),
(23, 'Mrs. Letha Botsford', 'Rerum molestiae aut laudantium odit ut. Et veritatis in et.', 'http://placehold.it/750x500'),
(24, 'Amara Howell', 'Beatae aspernatur voluptas aliquam non consequatur recusandae. Id ut assumenda velit ad nobis.', 'http://placehold.it/750x500'),
(25, 'Ms. Matilde Mosciski DDS', 'Molestias non laudantium ea perferendis. Debitis aperiam quis deleniti rerum. Alias illum dolor ad sequi impedit qui.', 'http://placehold.it/750x500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vue_products`
--
ALTER TABLE `vue_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vue_products`
--
ALTER TABLE `vue_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

