# Lab 5 :

> Requirement:
 1. connection to database with table username & password only.
 2. login and signUp pages with authentication.
 3. After user sign up, will redirect to login and after authentication. he will be redirect directly to landing page :).
 2. landing page after login :) with logout button :)

> Solve:
 1. Make the structure of pages.
  - `index.php` page as in:
    ![image](img/indexPage.png)
  - `myblog.php` page as in:
    ![image](img/blogPage.png)
  - `login.php` page as in:
    ![image](img/loginPage.png)
  - `signUp.php` page as in:
    ![image](img/SignUpPage.png)
 
 2. make file `dbconnection.php` to connect with database.
 3. finish the logic of website :).
  - if user enter website, see index page as in:
    ![image](img/firstIndexPage.png)
  - if user signUp page successfuly, he will redirect to login page :) .
  - if he login successfuly, he will redirect to Blog as in:
    ![image](img/Loginblog.png)
  - and he can now see blog page, he can logout :) as in:
    ![image](img/indexPageafterSuccefullyLogin.png)
  - after he logout, he will redirect to index and change header button 'see login and signup' as in:
    ![image](img/afterlogout.png)
  - To see Demo video as in: 
