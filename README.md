# BonjourCoffee-Online-Ordering-System

### Presentation link:
### Group Member:

1. Yasha Adam Bin Yazid (2017701)
2. Muhammad Syafiq Bin Mohd Faizal (1913521)
3. Nur Hafni Binti Mohd Nizam (1913844)
4. Nurul Sa'adah Binti Mohammad Nor (1911510)
5. Nur Husnina Binti Patohar (1817234)

### Introduction

### Objective

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
4. Models
5. Entity Relationship Diagram (ERD)

### Sequence Diagram
### References

### Mockup

1. Homepage

![Homepage](https://user-images.githubusercontent.com/92074138/146667627-00c0b256-c0c9-4da6-b502-4c15938810eb.png)
