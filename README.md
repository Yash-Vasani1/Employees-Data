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

