# Employees-Data
Employees can insert data in database with valid name and password.

Also this project have login form, where employee can ender valid user name and password for show all details that employee.


## Development Setup:
First install XAMPP(https://www.apachefriends.org/download.html).

After that Start Apache and MySql moduals from XAMPP.

Open PHPMyAdmin in browser using http://localhost/phpmyadmin.

Goto Database for creating Database(db_connect).

Than creat table(employee) with following fields:

uname(varchar, unique)

fname(varchar)

lname(varchar)

email(varchar, primery_key)

pass(varchar)

dob(date)

city(varchar)

last_login(timestamp)

Open C:\xampp\htdocs and clone this repo there.

Now you are all set to go!!

Open http://localhost/Employees-Data in browser.

Open form.php for sign-up.

Then open login.php to login and see employee details. 
we can also see our data in database (http://localhost/phpmyadmin).


## Demo images

![ss1](https://user-images.githubusercontent.com/120910669/211396323-40ce5f41-98f3-4bc8-830c-5f385f626a5c.png)

![ss2](https://user-images.githubusercontent.com/120910669/211396406-30c6fa3f-2858-4f76-8b08-bff1c1873b0b.png)
