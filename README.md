## AIM
We created a registration form for college where students can fill the form for ontario trip , using html , css and php we created this project. HTML , CSS(frontend) and PHP(backend).

## STEPS
In this repository we have some basics for php and then the actual code starts

1)First we downloaded and installed xampp which is a php development environment , u will get database here.
2)Now go to C drive---->xampss---->htdocs---->"New folder".
3)Now open vscode and create index.html , index.php , style.css.
4)Firstly we will create our frontend part (you can refer our github for the code).
5)Here comes the backend part where we have used mysql and php.
6)Then navigate phpMyadmin through local host , then create a database followed by table with number of columns.
7)Do the naming of columns with its attribute as phone:varchar , email:varchar , name:text.
8)now insert some random values in phpMYadmin and we will get a sample query for the values which u have inserted , which we will be using in our index.php.
9)Connected php to mysql database using mysqli connection , using default value as:
$server = 'localhost';
$username = "root";
$password = "";
10)Implement exception handling.

## CHALLENGES and Solution
1)Faced issue while installing xampp.Error: Mysql shut down unexpectedly. Because default mysql was already running. 
A)Solution: Press windows + R and type "services.msc". 
Then go to Mysql80 , initially it will be on running mode.
Click on it and then stop it.
RESTART the computer and then the issue will be solved.
