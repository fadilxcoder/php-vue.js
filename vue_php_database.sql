-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`) VALUES
(1,	'fadilxcoder',	'403 0845 927',	'fadil@xcoder.developer',	'Axios is designed to protect against XSRF by allowing you to embed additional authentication data when making requests. This enables the server to discover requests from unauthorized locations'),
(2,	'Paul Smith',	'403 0845 927',	'fadil@xcoder.developer',	'These are the available config options for making requests.'),
(3,	'John Doe',	'403 0845 927',	'fadil@xcoder.dev',	'You will learn on how to use Vuejs to make a realtime table view'),
(4,	'Andreas Schneider',	'403 0845 927',	'team@beautifier.io',	'Online JavaScript Beautifier - All of the source code is completely free and open, available on GitHub under MIT licence, and we have a command-line version, python library and a node package as well.');

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `invoice` (`id`, `description`, `price`, `quantity`) VALUES
(1,	'Automated local solution',	948,	8),
(2,	'Multi-tiered homogeneous solution',	644,	13),
(3,	'Object-based intangible encryption',	905,	8),
(4,	'Implemented neutral interface',	577,	8),
(5,	'De-engineered grid-enabled project',	673,	14);

DROP TABLE IF EXISTS `vue_products`;
CREATE TABLE `vue_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO `vue_products` (`id`, `name`, `description`, `image`) VALUES
(1,	'Giles Cormier',	'Maxime velit quas nihil dolores rerum. Nulla earum velit esse molestiae doloremque odio nam. Est sapiente asperiores voluptas eos rem aliquam.',	'https://via.placeholder.com/750x500'),
(2,	'Mr. Max Erdman IV',	'Ut blanditiis ut qui laborum aut est error. Quia culpa alias qui quia sit. Temporibus ex ut qui porro non.',	'https://via.placeholder.com/750x500'),
(3,	'Trace Leannon',	'Rerum quaerat dolorem rerum ut ipsum quibusdam itaque. Modi et et unde. Fugiat enim sed deserunt corrupti ducimus ab velit.',	'https://via.placeholder.com/750x500'),
(4,	'Prof. Winfield Kuvalis DDS',	'Quis magnam nobis aut sed et doloremque. Asperiores quos consequatur adipisci cupiditate. Dolore aut quia sapiente et. Nemo tempore sunt est dolorem ea.',	'https://via.placeholder.com/750x500'),
(5,	'Demetris Kunze',	'Eius eius quidem praesentium libero. Architecto exercitationem magnam doloremque quis. Debitis laboriosam eos earum doloribus qui. Voluptatem non aut illum ea.',	'https://via.placeholder.com/750x500'),
(6,	'Prof. Magali Fadel III',	'Sequi fuga eum enim omnis nulla. Quis nihil aut qui blanditiis natus voluptas deserunt. Cupiditate qui ducimus et non laboriosam. Rerum perferendis officia cupiditate cumque.',	'https://via.placeholder.com/750x500'),
(7,	'Tyra Bosco',	'Facere harum accusantium eos praesentium eos. Libero ut quaerat placeat. Fugit ea asperiores non ea. Non nemo esse doloribus quod est quibusdam autem.',	'https://via.placeholder.com/750x500'),
(8,	'Melissa Mosciski',	'Voluptas omnis corporis consectetur ratione ut. Doloremque aliquam debitis nulla tempore. Quia quo neque iusto quis.',	'https://via.placeholder.com/750x500'),
(9,	'Nora Tillman',	'Dolorum cum et explicabo debitis quibusdam eaque. Accusantium est et exercitationem eos. Ut non aut ea maxime molestiae eligendi exercitationem non.',	'https://via.placeholder.com/750x500'),
(10,	'Mrs. Cortney Lehner I',	'Ullam alias ut labore dolorum aut. Quo iste possimus quas saepe vel omnis. Cumque voluptatem iusto laborum atque ut iste. Rerum eius blanditiis accusamus ut.',	'https://via.placeholder.com/750x500'),
(11,	'Chyna Watsica',	'Repudiandae facere rem quo et ratione aut dolores. Corporis vitae perferendis eveniet ratione omnis occaecati quod. Voluptatem aut id porro quae perspiciatis voluptatem. Temporibus iusto sed dolorum temporibus.',	'https://via.placeholder.com/750x500'),
(12,	'Retha Eichmann V',	'Ipsum tempore veniam similique. Mollitia fugiat aut maiores. Iusto perferendis itaque repudiandae qui ut ut temporibus. Beatae autem animi ut.',	'https://via.placeholder.com/750x500'),
(13,	'Jayme Dach',	'Esse repellat veritatis provident ut. Magnam odit voluptatibus aliquam.',	'https://via.placeholder.com/750x500'),
(14,	'Dr. Vena Corkery',	'Cumque soluta delectus in. Illum consequatur qui nostrum. Placeat quam et et mollitia dolorem aut praesentium.',	'https://via.placeholder.com/750x500'),
(15,	'Ernestine Borer',	'Ipsa autem tempore officiis ut dignissimos veritatis eveniet magnam. Natus dolor debitis consequatur excepturi aspernatur. Fugit repellat debitis ea qui quos aut.',	'https://via.placeholder.com/750x500'),
(16,	'Ms. Alvera Dach',	'Consequuntur porro ut dolorum dolores. Maiores quis consequatur culpa reprehenderit eius dolor necessitatibus. Illo et est soluta consectetur molestiae eligendi. Earum aliquam voluptatem quam dolorem autem hic dolorem.',	'https://via.placeholder.com/750x500'),
(17,	'Mr. Rocio Schowalter',	'Voluptatem rerum error sed totam. Est perferendis quia sed totam consequatur voluptas aut amet. Nihil dolore quia assumenda dolorum. Ea dolorum doloribus ipsa tempore ipsam vero.',	'https://via.placeholder.com/750x500'),
(18,	'Zita Okuneva',	'Dolores vero mollitia quidem atque alias optio. Ut ut rerum dolor assumenda nesciunt quo ipsa. Ut ducimus dolor et autem.',	'https://via.placeholder.com/750x500'),
(19,	'Dawson Beier',	'Rem nulla odit alias dolore. Quo repudiandae unde neque impedit velit. Voluptatem ipsam enim praesentium qui. Soluta tempore sit modi doloribus rerum omnis delectus.',	'https://via.placeholder.com/750x500'),
(20,	'Chance Maggio',	'Enim ipsum perspiciatis saepe rerum in reiciendis. Velit quos voluptas consequuntur at. Maiores cupiditate iure facere ducimus dicta.',	'https://via.placeholder.com/750x500'),
(21,	'Miss Maggie Hill',	'Quibusdam vitae eveniet accusantium et. Et quia adipisci qui quia aut voluptas. Aperiam accusantium et eum dolores dolorem earum. Eos nihil quam quae culpa.',	'https://via.placeholder.com/750x500'),
(22,	'Stephen Metz',	'Qui odio voluptas blanditiis corrupti ab ratione voluptates. Repellat exercitationem qui tempore explicabo recusandae et qui. Dicta adipisci dolores dolore. Sint esse dolores ratione minima expedita sit.',	'https://via.placeholder.com/750x500'),
(23,	'Mrs. Letha Botsford',	'Rerum molestiae aut laudantium odit ut. Et veritatis in et.',	'https://via.placeholder.com/750x500'),
(24,	'Amara Howell',	'Beatae aspernatur voluptas aliquam non consequatur recusandae. Id ut assumenda velit ad nobis.',	'https://via.placeholder.com/750x500'),
(25,	'Ms. Matilde Mosciski DDS',	'Molestias non laudantium ea perferendis. Debitis aperiam quis deleniti rerum. Alias illum dolor ad sequi impedit qui.',	'https://via.placeholder.com/750x500');

-- 2020-12-06 18:12:40