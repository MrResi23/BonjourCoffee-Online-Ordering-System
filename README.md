# BonjourCoffee-Online-Ordering-System

### Presentation link:
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
     - The controller will call the login view to show the login interface if the user click “logout” button. It also will call the payment view to show the payment interface if the user click “order” button
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
     - After the user selects payment method, if the user clicks "back to home" button,  it will route back to homepage

4. Models
   - User
     - User model interacts with user table to retrieve data like user ID, order ID, name, email, password
   - Menu
     - Menu model interacts with menu table to retrieve data like drink ID, name of drink and type of drink
   - Order
     - Order model interacts with order table to retrieve data like order ID, drink ID, quantity and total price

### Entity Relationship Diagram (ERD)

![ERD]()

### Sequence Diagram

![SequenceDiagram](https://user-images.githubusercontent.com/91930567/146668501-159dd66d-e3ab-46ee-a03e-decea628c321.jpeg)


### Mockup

1. Registration

2. Login



3. Homepage

![Homepage](https://user-images.githubusercontent.com/92074138/146667627-00c0b256-c0c9-4da6-b502-4c15938810eb.png)

4. Payment

![PaymentPage](https://user-images.githubusercontent.com/91930567/146668488-c22ad045-6357-4983-86b8-cc0ad2ac87dc.jpeg)


### References
1. [For registration page](https://dribbble.com/shots/16780006-Coffee-Shop-App-UI-Design/attachments/11830640?mode=media)
2. [For homepage](https://richiamocoffee.com/)
3. [For login page](https://card.sbux.com.my/login)
4. [For payment page](https://www.foodpanda.my/)





