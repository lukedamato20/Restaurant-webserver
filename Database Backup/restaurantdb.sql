-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 03:24 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Starters'),
(2, 'Pizza'),
(3, 'Pasta'),
(4, 'Grill'),
(5, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `price` float(10,2) NOT NULL,
  `meta_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `category`, `image`, `title`, `description`, `ingredients`, `price`, `meta_tag`) VALUES
(1, 1, 'includes/images/starters/focaccia.jpg', 'Focaccia', 'Focaccia is a flat oven-baked Italian bread similar in style and texture to pizza; in some places, it is called \"pizza bianca\". Focaccia can be served as a side dish or as sandwich bread.', 'all-purpose flour, salt, white sugar, dry yeast, garlic powder, dried oregano, dried thyme, dried basil, ground black pepper, vegetable oil, olive oil, grated Parmesan cheese, mozzarella', 5.95, 'starters, focaccia'),
(2, 1, 'includes/images/starters/bruschetta.jpg', 'Bruschetta', 'Bruschetta is an antipasto from Italy consisting of grilled bread rubbed with garlic and topped with olive oil and salt. Variations may include toppings of tomato, vegetables, beans, cured meat, or cheese. A popular dish is bruschetta with tomatoes; one recipe popular outside Italy involves basil, fresh tomato, garlic and onion or mozzarella.', 'tomatoes,  dried basil, Parmesan cheese, olive oil, garlic, salt, ground black pepper', 5.95, 'starters, brushcetta'),
(3, 1, 'includes/images/starters/springroll.jpg', 'Spring Roll', 'Spring rolls are a large variety of filled, rolled appetizers or dim sum found in East Asian, South Asian, Middle Eastern and Southeast Asian cuisine. The name is a literal translation of the Chinese ch?n ju?n.', 'soy vermicelli, eggs, onion, mushrooms, small shrimp, pound lean ground pork, vegetable oil, carrot, crabmeat, bean sprouts, ground black pepper, soy sauce, fish sauce, garlic, rice wrappers, oil', 5.95, 'starters, spring roll'),
(4, 1, 'includes/images/starters/wings.jpg', 'Chicken Wings', 'The chicken, a subspecies of the red junglefowl, is a type of domesticated fowl, originally from Southeastern Asia. Rooster or cock is a term for an adult male bird. A younger male may be called a cockerel; a male that has been castrated is a capon.', 'oil for frying, chicken wings, unsalted butter, hot pepper sauce, ranch salad dressing, white vinegar', 5.95, 'starters, chicken, wings'),
(5, 1, 'includes/images/starters/platter.jpg', 'Maltese Platter', 'Mix and match from this delicious Maltese platter recipe and enjoy this tasty and easy to make dinner party spread. Try out these three healthy dips for you to dig in with maltese galletti / veggie sticks or Slabs Crisps.', 'bread, olives, cheeselets, maltese sausage, sundried tomatoes, bigilla, water buscuits.', 5.95, 'starters, maltese, platter'),
(6, 2, 'includes/images/pizza/margherita.jpg', 'Pizza Margherita', 'Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil.', 'Flour, tomatoes, mozarella, oregano', 7.50, 'pizza, margherita'),
(7, 2, 'includes/images/pizza/funghi.jpg', 'Pizza Funghi', 'Mushrooms are the stars in this kid- and vegetarian-friendly pizza. Perfect for weeknight family dinners!', 'Flour, tomatoes, mozarella, oregano, mushrooms', 8.00, 'pizza, funghi'),
(8, 2, 'includes/images/pizza/vegi.jpg', 'Pizza Vegiteriana', 'A wonderful crust layered with herbed tomato sauce and toppings encourages my family of six to dig right in to this low-fat main course.', 'Flour, tomatoes, mozarella, oregano, zucchini, mushrooms, red pepper, onions, basil', 9.50, 'pizza, vegiteriana'),
(9, 2, 'includes/images/pizza/bbqchicken.jpg', 'Pizza BBQ Chicken', 'A topping of spicy barbeque sauce, diced chicken, cilantro, peppers, and onion all covered with cheese, and baked to bubbly goodness! This is similar to a recipe I had at a popular pizza place in California. My family LOVES it!', 'Flour, tomatoes, mozarella, oregano, bacon, chicken, bbq sauce', 9.95, 'pizza, bbq, chicken'),
(10, 2, 'includes/images/pizza/meatlovers.jpg', 'Pizza Meat Lovers', 'This familiar, meaty pizza starts with the crust and is made with real cheese and tomato sauce, as it delivers a smoky, bold flavor.', 'Flour, tomatoes, mozarella, oregano, bacon, pepperoni, ham, chicken, sausage, beef', 10.95, 'pizza, meat, lovers'),
(11, 3, 'includes/images/pasta/pesto.jpg', 'Penne Pesto', 'Pesto, or pesto alla genovese, is a sauce originating in Genoa, the capital city of Liguria, Italy. It traditionally consists of crushed garlic, European pine nuts, coarse salt, basil leaves, and hard cheese such as Parmigiano-Reggiano or Pecorino Sardo, all blended with olive oil.', 'vegetable stock, garlic, packed fresh basil leaves, grated Parmesan cheese, pine nuts, penne pasta, tomatoes', 8.50, 'pasta, pesto'),
(12, 3, 'includes/images/pasta/curry.jpg', 'Chicken Curry Rice', 'Chicken curry is a dish originating from the Indian subcontinent. It is common in the Indian subcontinent, Southeast Asia, and Great Britain, as well as in the Caribbean, where it is usually referred to as curry chicken.', 'olive oil, red onion, salt, bay leaf, ground turmeric, chili powder, paprika, ground ginger, minced garlic, boneless chicken breast, tomato, white sugar, cardamom pods, lightly crushed, garlic cloves, cinnamon stick, butter, ground coriander, cilantro', 10.50, 'pasta, curry'),
(13, 3, 'includes/images/pasta/eggrice.jpg', 'Egg Fried Rice', 'Egg Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan and is usually mixed with other ingredients such as eggs, vegetables, seafood, or meat. It is often eaten by itself or as an accompaniment to another dish.', 'water, salt, soy sauce, rice, vegetable oil, onion, green beans, eggs, ground black pepper', 7.50, 'pasta, egg, fried, rice'),
(14, 3, 'includes/images/pasta/lasagna.jpg', 'Lasagna', 'Lasagne are a type of wide, flat pasta, possibly one of the oldest types of pasta. Lasagne, or the singular lasagna, is an Italian dish made of stacked layers of thin flat pasta alternating with fillings such as rag?? and other vegetables, cheese, and seasonings and spices such as garlic, oregano and basil.', 'sweet Italian sausage, ground beef, minced onion, garlic, crushed tomatoes, tomato paste, canned tomato sauce, white sugar, dried basil leaves, fennel seeds, Italian seasoning, salt, ground black pepper, fresh parsley, noodles, ricotta cheese, egg, mozzarella cheese, grated Parmesan cheese', 11.50, 'pasta, lasagna'),
(15, 3, 'includes/images/pasta/vongole.jpg', 'Spaghetti Vongole', 'Spaghetti alle vongole is my favorite Italian pasta recipe. It???s always the first thing I eat when I arrive in Tuscany to visit my family. Imagine gorgeous clams, olive oil, garlic, parsley, chili peppers and white wine tossed in freshly cooked spaghetti. It is divine! If you love easy pasta dishes, try this Roman bucatini cacio e pepe next!', 'Fresh clams, Spaghetti, Olive oil, Garlic, fresh parsley, Dried chili peppers, White wine, Salt and pepper', 5.95, 'pasta, vongole, Spaghetti'),
(16, 4, 'includes/images/grill/ribs.jpg', 'BBQ Ribs', 'Ribs of pork, beef, lamb, and venison are a cut of meat. The term ribs usually refers to the less meaty part of the chops, often cooked as a slab. Ribs of bison, goat, ostrich, crocodile, alligator, llama, alpaca, beefalo, African buffalo, water buffalo, kangaroo, and other animals are also consumed in various parts of the world. They can be roasted, grilled, fried, baked, braised, or smoked. A set of ribs served together, is known as a rack. In American cuisine, ribs usually refers to barbecue ', 'pork spare ribs, brown sugar, soy sauce, Worcestershire sauce, rum, chilli sauce, garlic, dry mustard, ground black pepper', 16.95, 'grill, bbq, ribs'),
(17, 4, 'includes/images/grill/beef.jpg', 'Beef Tagliata', 'Simple and delicious, tagliata is one of Italy\'s most popular steak dishes. Unlike Bistecca alla Fiorentina, a thick slab T-bone steak served blood rare, tagliata is a boneless piece of grilled beef, served in slices. In fact, tagliata gets its name from the Italian verb tagliare, meaning to cut.', 'New York strip steaks, pink Himalayan salt, arugula, lemon juice, extra virgin olive oil, tomatoes, , shaved Parmesan cheese, red onion, balsamic vinegar', 22.95, 'grill, beef, tagliata'),
(18, 4, 'includes/images/grill/chicken.jpg', 'Roasted Chicken', 'Roast chicken is chicken prepared as food by roasting whether in a home kitchen, over a fire, or with a rotisserie. Generally, the chicken is roasted with its own fat and juices by circulating the meat during roasting, and therefore, are usually cooked exposed to fire or heat with some type of rotary grill so that the circulation of these fats and juices is as efficient as possible. ', 'whole chicken, salt, ground black pepper, lemon, garlic, fresh thyme, bay leaf, olive oil, olive oil, creme fraiche, shallot, Aleppo pepper, lemon juice, lemon zest, chive blossoms', 16.95, 'grill, roasted, chicken'),
(19, 4, 'includes/images/grill/salmon.jpg', 'Baked Salmon', 'Salmon is a common food fish classified as an oily fish with a rich content of protein and omega-3 fatty acids. In Norway ??? a major producer of farmed and wild salmon ??? farmed and wild salmon differ only slightly in terms of food quality and safety, with farmed salmon having lower content of environmental contaminants, and wild salmon having higher content of omega-3 fatty acids.', 'maple syrup, soy sauce, garlic, garlic salt, ground black pepper, salmon', 18.95, 'grill, baked, salmon'),
(20, 4, 'includes/images/grill/burger.jpg', 'Veggie Burger', 'A veggie burger is a burger patty that does not contain meat. These burgers may be made from ingredients like beans, especially soybeans and tofu, nuts, grains, seeds or fungi such as mushrooms or mycoprotein. The patties that are the essence of a veggie burger have existed in various Eurasian cuisines for millennia, including in the form of disc-shaped grilled or fried meatballs or as koftas, a commonplace item in Indian cuisine.', 'canned black beans, green bell pepper, onion, garlic, egg, chili powder, cumin, Thai chili sauce, hot sauce, bread crumbs', 12.95, 'grill, veggie, burger'),
(21, 5, 'includes/images/desserts/icecream.jpg', 'Ice Cream', 'Ice cream is a sweetened frozen food typically eaten as a snack or dessert. It may be made from dairy milk or cream and is flavoured with a sweetener, either sugar or an alternative, and any spice, such as cocoa or vanilla. It can also be made by whisking a flavored cream base and liquid nitrogen together.', 'Strawberry, Choclate, Vanilla, Coffee, Lemon Sorbet', 3.95, 'desserts, ice cream, strawberry, vanilla, chocolate, coffee, lemon sorbet'),
(22, 5, 'includes/images/desserts/choccake.jpg', 'Chocolate Cake', 'Chocolate cake or chocolate g??teau is a cake flavored with melted chocolate, cocoa powder, or both.', 'butter, sugar, eggs, vanilla extract, flour, baking cocoa, baking soda, salt, baking powder, milk', 5.95, 'desserts, Chocolate cake, cake'),
(23, 5, 'includes/images/desserts/lemon.jpg', 'Lemon Chessecake', 'A lemon cheesecake is a cake consisting of a topping made of soft, fresh cheese, usually on a crust or base made from biscuit and with a lemon-flavoured topping. It was served at the Luchino Caffe, an all-night Italian caf?? on Tottenham Court Road in London', 'graham cracker pie crust, cream cheese, white sugar, all-purpose flour, lemon juice, egg, lemon yogurt', 5.95, 'desserts, lemon, cheesecake'),
(24, 5, 'includes/images/desserts/redvelvet.jpg', 'Red Velvet Cake', 'Red velvet cake is traditionally a red, red-brown, crimson, or scarlet-colored chocolate layer cake, layered with ermine icing. Traditional recipes do not use food coloring, with the red color due to non-Dutched, anthocyanin-rich cocoa. Common ingredients include buttermilk, butter, cocoa, vinegar, and flour. Beetroot or red food coloring may be used for the color.', 'flour, buttermilk, butter, sugar, cocoa powder, and/or cream cheese icing, beetroot, or red food coloring, natural coloring', 6.95, 'desserts, red, velvet, cake'),
(25, 5, 'includes/images/desserts/tiramisu.jpg', 'Tiramisu', 'Tiramisu is a coffee-flavoured Italian dessert. It is made of ladyfingers dipped in coffee, layered with a whipped mixture of eggs, sugar, and mascarpone cheese, flavoured with cocoa. The recipe has been adapted into many varieties of cakes and other desserts. Its origins are often disputed among Italian regions Veneto and Friuli Venezia Giulia', 'eggs, granulated sugar, mascarpone cheese, lady fingers, espresso coffee, coffee powder', 6.95, 'desserts, cake, tiramisu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
