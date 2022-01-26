# BonjourCoffee-Online-Ordering-System

### Presentation link: https://www.youtube.com/watch?v=UOXDv7B-mwE
### Group Member:

1. Yasha Adam Bin Yazid (2017701)
2. Muhammad Syafiq Bin Mohd Faizal (1913521)
3. Nur Hafni Binti Mohd Nizam (1913844)
4. Nurul Sa'adah Binti Mohammad Nor (1911510)
5. Nur Husnina Binti Patohar (1817234)

### Introduction
   - Bonjour Coffee is a fictional business created for this project with the intention of creating a web system that would help encourage the coffee shop owners that run the        business within this industry. A coffee business is a well known business in the food and beverages industry. The reason why the topic was chosen by our group is because        this industry is a necessity of the human needs which is food. In doing so, we hope that the system would be beneficial to coffee owners to increase their sales more            efficiently in order to cater to their demands.
 
     It is also to help the convenience of the customers also as users to the website in order for them to make the transaction purchase more smoothly. With a feeling of ease        when using the website yet efficiently, to give them the best experience while making the purchase.

   
### Objective
   - The aim is to create a convenient website for coffee lovers to make orders online while helping to increase the sales of coffee shop business owners. 

### Features and functionalities

The following are the features and functionalities to be implemented in our Bonjour Coffee website including:  

1. Easy account creation
   - Account registration
      - Customers have the option of creating a new account.
   - Account login
      - Customers must login before making any purchases.  
 
2. Easy products view
   - Product images
      - Displays few beverage images to attract customers when they visit the website.
   - Product descriptions
      - Displays clear descriptions for each beverage including ingredients.  
   - Product label for non-coffee
      - Display a label for coffee type. 
 
3. Easy order placement
   - Multiple order 
      - Allow customers to choose the quantity of items that they want to purchase.   
   - Payment options
      - Provide flexibility for customers to choose their preferred payment methods through online banking or cash.  
 
### Views, controllers, routes and models
1. Views
   - Registration
     - Allows user to register new account
   - Login
     - Page for existing users to log in with their credentials. Non-existing users need to register before proceeding to homepage
   - Homepage
     - Main page that displays all types of drinks available to order. It includes details about drink and "order" button
   - Payment
     - Page for users to make payment either using cash or online banking

2. Controllers 
   - Registration
     - The controller will receive user input like name, email and password and call the user model to update the table. It will call the homepage view to show the homepage interface
   - Login
     - The controller will receive user input like email and password and call the user model to authenticate the user input base on the database. If the user clicks “login” button, the controller will call the homepage view to show the homepage interface
   - Homepage
     - The controller will call the welcome view to show the welcome interface if the user click “back” button. It also will call the payment view to show the payment interface if the user click “order” button
   - Payment
     - The controller will receive user input like order details and call order model to update the table. It will call the homepage view to show the homepage interface.
3. Routes
   - Login
     - If the user clicks the “login” button, it will be routed to the homepage
     - If the user clicks the “register” button, it will be routed to the registration page
   - Registration
     - After the user successfully register, it will be routed to homepage
   - Homepage
     - From the selection of menu, if the user clicks “order” button, it will be routed to payment page
   - Payment
     - After the user selects payment method, if the user clicks "Back to homepage" button,  it will route back to homepage

4. Models
   - User
     - User model interacts with user table to retrieve data like user ID, order ID, name, email, password
   - Menu
     - Menu model interacts with menu table to retrieve data like drink ID, name of drink, drink description, price and type of drink
   - Order
     - Order model interacts with order table to retrieve data like order ID, drink ID, quantity and total price

### Entity Relationship Diagram (ERD)

![ERD BONJOUR drawio](https://user-images.githubusercontent.com/77189967/151140608-222a140d-9951-43f0-8856-0ea88d44f431.png)

### Sequence Diagram

![WebApp Sequence Diagram](https://user-images.githubusercontent.com/62057037/147048316-ddd03fc8-cfee-4f25-a785-8edeb32bf330.jpg)



### Mockup

1. Registration

![Register- Sa'adah](https://user-images.githubusercontent.com/92360027/146672867-f01f6136-9df5-496a-9302-d40dad97e135.png)

2. Login

![Login-BONJOUR](https://user-images.githubusercontent.com/77189967/146671754-1df54d1f-1c3a-4b86-9fc2-fd53e3b781aa.png)

3. Homepage

![Homepage](https://user-images.githubusercontent.com/92074138/146667627-00c0b256-c0c9-4da6-b502-4c15938810eb.png)

4. Payment

![PaymentPage](https://user-images.githubusercontent.com/91930567/146668488-c22ad045-6357-4983-86b8-cc0ad2ac87dc.jpeg)

![Redirecting](https://user-images.githubusercontent.com/62057037/146675058-58295b02-0f44-4109-942c-2a68aa1e6635.png)

![Payment Details](https://user-images.githubusercontent.com/62057037/146675068-c0eaa646-aa4b-4e4d-83f9-38533b0af5ae.png)

### Website Screenshots
1. Registration Page

-  Figure below shows registration page of Bonjour Coffee's website. Users can fill in their details including username, email and password, then click on 'register' button to submit. If the users already have an account, they can directly click on 'login' text hyperlink to sign in. 

![registrationpage](https://user-images.githubusercontent.com/92360027/151151575-ce40f7fb-f428-436d-9eb5-26f8cf85cc0c.jpeg)

2. Login Page

- Figure below shows the login page. Users can enter their email and password to login into the system. The system will authenticate their details based on the database. Users can also click the register now button at the bottom to register an account.

![loginpage](https://user-images.githubusercontent.com/77189967/151154827-7f7687ba-3759-438a-9550-8dcd16a0751d.png)

3. Homepage

- These figures shows the homepage where all menus in Bonjour Coffee were displayed. User can click on 'Back' button to go back to 'Welcome' page. Each menu have description and price. User can click 'Order' button to make an order and will bring to 'Cart' page. At footer, there are contact informations which are E-Mail and Hotline number.

![Home 1](https://user-images.githubusercontent.com/92074138/151167455-047003a7-5efb-4144-a1b4-1fda308b484e.PNG)

![Home 2](https://user-images.githubusercontent.com/92074138/151167483-7f135628-9d1e-4515-9ae6-a563584fc3eb.PNG)

![Home 3](https://user-images.githubusercontent.com/92074138/151167501-63b6cb93-0083-4477-8349-033f7709a050.PNG)



### Challenges
1. Do a connection from controllers to phpmyadmin especially when retrieving latest row inserted by user to update and insert new data to a column.
2. To do a calculation of a total price which we have to retrieve data from two tables or models.
3. Time constraints from different individual schedules challenges our progress
 



### References
1. [For registration page](https://dribbble.com/shots/16780006-Coffee-Shop-App-UI-Design/attachments/11830640?mode=media)
2. [For homepage](https://richiamocoffee.com/)
3. [For login page](https://card.sbux.com.my/login)
4. [For payment page](https://www.foodpanda.my/)








