## login
I've used Sanctum to build a token-based login system.
First, I created the register, login, and logout routes.
Then, I wrote the register, login, and logout methods in the AuthController.

When a user registers, a token is generated.
### Register
[https://booking.starnetisp.com/api/register](https://booking.starnetisp.com/api/register) POST method
<img width="1235" height="533" alt="Screenshot_10" src="https://github.com/user-attachments/assets/a294e51d-b2c3-4899-b927-702309c4c97f" />

### Login
When a user logs in again, a new token is also generated.

[https://booking.starnetisp.com/api/login](https://booking.starnetisp.com/api/login) POST method
<img width="1247" height="529" alt="Screenshot_11" src="https://github.com/user-attachments/assets/3bf0aded-dde4-40fc-9319-bb3ba37624cc" />
### Logout
When the user logout, all tokens for that user will be deleted.

[https://booking.starnetisp.com/api/logout](https://booking.starnetisp.com/api/logout) POST method
<img width="950" height="508" alt="Screenshot_12" src="https://github.com/user-attachments/assets/4ae300e9-f143-4fba-8137-c14dc4da30e0" />



## service 


While working on the service part, I created the model, controller, and migration file.
Then, I created an apiResource route.
After that, I implemented CRUD operations (add, edit, delete) in the controller.
Then, using Postman, I successfully created a service, updated it, and deleted it
### Create Service
[https://booking.starnetisp.com/api/services](https://booking.starnetisp.com/api/services) POST method
<img width="935" height="530" alt="Screenshot_13" src="https://github.com/user-attachments/assets/4b00ae83-ba53-4f23-bc0c-f3c7c72dc3ae" />

### get All service
[https://booking.starnetisp.com/api/services](https://booking.starnetisp.com/api/services) GET method
<img width="971" height="511" alt="Screenshot_14" src="https://github.com/user-attachments/assets/0a70c578-5ae0-4630-8a88-b133e7f8d0a8" />
### update service
[https://booking.starnetisp.com/api/services/1](https://booking.starnetisp.com/api/services/1) PUT Method
<img width="941" height="512" alt="Screenshot_15" src="https://github.com/user-attachments/assets/1ac08e0d-2c06-4775-ae33-d67bffd28f75" />
### Delete Service
[https://booking.starnetisp.com/api/services/3](https://booking.starnetisp.com/api/services/3) DELETE method
<img width="952" height="509" alt="Screenshot_16" src="https://github.com/user-attachments/assets/b7975848-f211-4657-ae44-a743d11bdcd6" />

## Booking 

First, I wrote a store function where I applied validation

Then, only the logged-in customer is allowed to make a booking
### Booking service
[https://booking.starnetisp.com/api/bookings](https://booking.starnetisp.com/api/bookings) POST method
<img width="960" height="551" alt="Screenshot_18" src="https://github.com/user-attachments/assets/48202006-fcfe-403e-b088-55014c423fb3" />

Finally, the admin can view all bookings.
### Get All booking
[https://booking.starnetisp.com/api/admin/bookings](https://booking.starnetisp.com/api/admin/bookings) GET method
<img width="941" height="530" alt="Screenshot_19" src="https://github.com/user-attachments/assets/845e5c5a-c3f5-4abd-aa5a-34267aa02ca7" />

## Seeder

The UserSeeder seeds the users table with one admin and five customer accounts.
Each user has a name, email, password, and an is_admin flag.
These users can be used to test login, bookings, and admin functionalities.

