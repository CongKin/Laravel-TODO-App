Author: Ong Cong Kin
APP: Todo-list APP

TO start the app, download the folder, and follow the step:
1. Open using terminal/command prompt, and then run the command:
    a. cd (the dowloaded folder path)
    b. php artisan serve
2. Open using Visual Studio Code
    a. open the folder
    b. create a new terminal
    c. run the command: php artisan serve

Then, visit http://127.0.0.1:8000 at your browser

Testing Account: test@example.com
Password: qwer@123

Function:
1. Create new task
2. Change the task's status
3. View the task details
4. Edit the task
5. Delete the task

Remark: 
1. the session lifetime is 120min, if want to change, please follow the steps:
    a. change the period (min) for 'SESSION_LIFETIME' in '.env' file
    b. change the period (min) for 'lifetime' in 'config/session.php' file
2. the user needs to re-login after the browser is closed, if want to change, please follow the steps:
    a. configure the 'expire_on_close' in 'config/session.php' file