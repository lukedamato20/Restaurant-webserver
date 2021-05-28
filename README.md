# Our Web Server root files

"Database Backup" folder holds an .sql file with the most rescent backup of the website's database "RestaurantDB"

"Includes" folder holds all files and folders that the websites requires in order to function properly 
  - "css" holds all css script for styling the website.
  - "images" holds all the images used in the website.
  - "php" holds php script that holds small scripts that the website needs (add/remove button for favs page, mail() script).
  - "sql" holds all the sql script used to create and form the database.

"Templates" folder holds all .html files required for the website to be viewable. These templates are essential for any of the websites data to be viewed by users. 

"vendor" folder holds all the libraries and files required for composer, symfony and twig to function properly. 
  - composer.json
  - composer.lock

Main PHP Files: 
  - index.php (Front page)
  - booking.php (page to contact/book a table)
  - menu.php (menu page where all food items can be viewed)
    - details.php (page to view details about a chosen food item)
    - search.php (search page to view search results)
  - favs.php (the favs page that shows all the food items chose)
  - about.php (about page that shows all information, adderss, opening hours and contact information about our restaurant)

Database Files:
  - database.php (Database wrapper for MySQL)
    - Database wrapper for a MySQL with PHP tutorial
      @copyright Eran Galperin
      @license MIT License
      @see http://www.binpress.com/tutorial/using-php-with-mysql-the-right-way/17
  - bootstrap.php (loading autoloader, specifying twig template location and instantiation of twig)
  - config.ini (database info and authentication information for admin user)
