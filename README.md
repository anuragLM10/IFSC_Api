#Systen Requirments
- Laravel 5.0 and Homestead installed.
- mysql, php5 installed.  
- latest version of a web browser.

#How To run
-Open terminal. Run following command:
            - homestead up
            - homestead ssh
-Go to the directory where project is cloned and run following commands:
            - php artisan migrate
            - php artisan db:seed
-Now you can check your database tables as following. 
-Enter into the virtual machine by running
            - homestead ssh
-Then, take the permission to use databases.
            - mysql -uroot -psecret
-Now, run following commands. Considered table 'ifsc_details' is stored in 'homestead' database.
            - use homestead
            - show tables ;
            - describe ifsc_details;
#How to use
-To test the API you need to install a debugger for RESTful web services like POSTMAN for chrome. 
-Using debugger you can make querries for bank details.               
   
 



