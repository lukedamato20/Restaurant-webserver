-- creating the categories table
CREATE TABLE `category` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1

-- creating the food table where all the food items and info will be stored
CREATE TABLE `food` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `category` int(11) NOT NULL,
    `image` varchar(100) NOT NULL,
    `name` varchar(50) NOT NULL,
    `description` varchar(500) NOT NULL,
    `ingredients` varchar(500) NOT NULL,
    `price` float(10,2) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `food_category` (`category`),
    CONSTRAINT `food_category` FOREIGN KEY (`category`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1

