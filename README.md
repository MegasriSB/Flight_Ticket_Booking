# Flight_Ticket_Booking
A flight ticket booking website which uses PHP and MySQL as the techstack.

## Description:
The Flight Ticket Booking System is a web application that allows users to search for flights, book tickets, and manage their bookings. It also provides administrative functionalities for managing flights and viewing bookings.

## Type of Users:
    -	User
    -	Admin

## User Use Cases:
### 1.	Login:
    -	Users can log in to their account using their credentials.
    -	Email and password are required for authentication.

### 2.	Sign up:
    -	New users can create an account by providing necessary details.
    -	Data validations are performed to ensure the accuracy of the information.
    -	Validations may include checking the uniqueness of email, password strength, etc.

### 3.	Searching for Flights:
    -	Users can search for flights based on the desired date and time.
    -	The system retrieves and displays available flights matching the search criteria.

### 4.	Booking Tickets:
    -	Users can select a flight from the search results and book tickets.
    -	The system checks the availability of seats on the selected flight.
    -	If seats are available, users can proceed with the booking process.
    -	The default seat count is assumed to be 60 for each flight.

### 5.	My Booking:
    -	Users can view all their bookings.
    -	The system displays a list of bookings made by the user.
    -	Bookings include flight details, seat number, and other relevant information.

### 6.	Logout:
    -	Users can log out of their account.
    -	The session is terminated, and the user is redirected to the login page.

## Admin Use Cases:
### 1.	Login:
    -	Administrators can log in using their admin credentials.
    -	The system validates the admin's email and password for authentication.

### 2.	Add Flights:
    -	Admins can add new flights to the system.
    -	Flight details such as flight number, airline, date, time, source, destination, duration, capacity, and fare are required.
    -	The new flight is stored in the database for future reference.

### 3.	Remove Flights:
    -	Admins can remove flights from the system.
    -	The flight is identified by its flight number and time.
    -	The system deletes the corresponding flight from the database.

### 4.	View All Bookings:
    -	Admins can view all bookings based on flight number and time.
    -	The system retrieves and displays the bookings associated with the specified flight.
    -	Bookings include user details, flight information, seat numbers, and fare.

## Technologies Used:
    -	Programming Language: PHP
    -	Database: MySQL
    -	HTML, CSS, JavaScript for front-end development
    -	Frameworks and libraries: Bootstrap

