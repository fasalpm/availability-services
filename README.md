Installation Process.

    1.  Clone The Project
    2.  Install Composer Dependencies (using this command. composer install)
    3.  Create a copy of your .env file (using this command. cp .env.example .env)
    4.  Generate an app encryption key  (using this command. php artisan key:generate)
    5.  Create an empty database for this application 
    6.  In the .env file, add database information to allow Laravel to connect to the database
    7.  Migrate the database
    8.  Seed the database
    
In this Project 4 Web Interface Routes and One Api Route

Web Interface Routes 
    1. 'products' - List All Products
    2. 'product-list-a' - List Product property speed is greater than 10 
    3. 'product-list-b' - List Product color is not black
    4. 'product-list-c' - List Product price should be less than 500

Api Routes 
    1. 'product-list' - List should fulfil all the conditions (Product property speed is greater than 10, Product color is not                         black,   List Product price should be less than 500 )

