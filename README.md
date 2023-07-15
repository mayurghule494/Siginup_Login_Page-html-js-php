# HTML-JavaScript-php-Signup-Login page
In this project we are Dockerizing Siginup and Login Form using HTML CSS JAVASCRIPT and PHP with MySql Database

✅ 
# Dockerizing_Signup_Login_Page

# Project Overview

🚀 In this project we are Dockerizing End to End Signup and Login Page.<br>
🚀 Here We are using **HTML and CSS** to create frontend.<br>
🚀 Here We are using **PHP and JavaScript** to create backend.<br>
🚀 And to store the users registration details we are going to use **MySql Database** as a backend.<br>

➡️ **We are going to create :-** <br>
   - Ubuntu based **EC2 Instance**. <br>
   - 3 Docker container using **docker-compose**. <br>
     - Frontend with **html and css**. <br>
     - Backend with **PHP and JavaScript** python based <br>
     - Backend for **Mysql Database** to store users information after registration. <br>     

## Getting Started

✅ Steps :-
- Launch EC2 Instance with Ubuntu OS.<br>
- Connect to the instance with SSH.<br>
- Update the packages using below command. <br>
  ##### $ sudo apt-get update -y <br>
- Now Install Docker on the server using below command. <br>
  ##### $ sudo apt-get install docker.io -y <br>
- Now use below commands to Install docker-compose as we are usining docker compose to create containers at one go.<br>
  ##### $ sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose <br>
  ##### $ sudo chmod +x /usr/local/bin/docker-compose <br>
- Use the below command to check the docker-compose version.<br>
  ##### $ docker-compose --version <br>
- clone this repo to your ubuntu machine to get the source code for this project. <br>
  ##### $ git clone https://github.com/mayurghule494/Siginup_Login_Page-html-js-php.git <br>
    You can also Fork this repo to get the code in your github repository. <br>
- Go to the Siginup_Login_Page-html-js-php directory.<br>
  ##### $ cd Siginup_Login_Page-html-js-php <br>
- Now use below command to create the all 3 containers <br>
  ##### $ sudo docker-compose up -d <br>
   You will get the output as shown in below image. <br>

     ![Signup_login1](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/b8928db4-5db2-44f0-aaa7-452f9d5827bb)



- You have to open following Ports in security group. <br>
    update 80 to access frontend webpage. <br>
    update 3306 to access Mysql Database. <br>
    update 8081 to access Mysql Database with phpmyadmin GUI interface. <br>

- Now you can access the frontend web page on your browser as shown in below screenshots. <br>
    ##### http://18.217.146.217:80/ <br>
    ##### Here 18.217.146.217 is our EC2 ubuntu public IP <br>

  ![Signup_login2](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/051d4639-0704-4873-a1db-fa9e9dd94276)

- Now if you fill the signup form and hit Signup. Your Details will be saved to Mysql db Container. <br>
  
  ![Signup_login3](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/d796dc72-f6b5-4a81-9f1f-3ebecb4b3dc1)

- Once you fill the details and hit Signup you will get below Confirmation message as shown below. <br>

  ![Signup_login4](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/3d0a6557-67d0-48e4-bbbe-6521858350bf)


- If you want to check the entry after completing Signup, You can use Mysql phpmyadmin login page as shown in below screenshots. <br>
    
    ##### http://18.217.146.217:8081/ <br>
    ##### Here we are using public-ip:8081 <br>
    ##### use user: mayur password: mayur <br>
   Note: If you want to change Mysql user and Password you can update Signup.php Login.php and docker-compose.yml file accordingly. <br>
   
  ![Signup_login5](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/8f3f245c-e502-425a-b842-8bac546bcbe3)

- Now add you Database user credential. In my case its mayur - mayur <br>

  ![Signup_login6](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/24962d28-740e-473d-8c1c-ebf4c730dfed)

- Now open "signup_login" databse and there click on "users" table to see your entry as shown in below screenshot. <br>

  ![Signup_login7](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/f876f338-6c6a-43d3-bb43-487e76568708)

- Now again go to publicip:80 and click on Login. And try to login with the credentials which you used while Signup. In my case user:mayur.ghule494@gmail.com , password:mayur <br>

  ![Signup_login8](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/148ece16-ba0e-4b4b-96c0-58d9a139dbfd)

- After Succesful Login You can see below page. <br>

  ![Signup_login11](https://github.com/mayurghule494/Siginup_Login_Page-html-js-php/assets/54388290/aca3ba62-0ea0-41df-ac0d-d1515c9f3dd4)

  
