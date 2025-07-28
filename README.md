## login
I've used Sanctum to build a token-based login system.
First, I created the register, login, and logout routes.
Then, I wrote the register, login, and logout methods in the AuthController.

When a user registers, a token is generated.

[http://127.0.0.1:8000/api/register](http://127.0.0.1:8000/api/register) POST method
<img width="1244" height="528" alt="Image" src="https://github.com/user-attachments/assets/0a61e0b5-bffc-43fa-970f-00ea168703a8" />
When a user logs in again, a new token is also generated.

[http://127.0.0.1:8000/api/login](http://127.0.0.1:8000/api/login) POST method
<img width="1236" height="544" alt="Screenshot_2" src="https://github.com/user-attachments/assets/0f4fa806-65d0-4f9e-88a0-cadee3ffb720" />
When the user logout, all tokens for that user will be deleted.

[http://127.0.0.1:8000/api/logout](http://127.0.0.1:8000/api/logout) POST method
<img width="1235" height="554" alt="Screenshot_3" src="https://github.com/user-attachments/assets/f62e11aa-14dc-421a-a4a9-570563f9aea7" />


## service 

While working on the service part, I created the model, controller, and migration file.
Then, I created an apiResource route.
After that, I implemented CRUD operations (add, edit, delete) in the controller.
Then, using Postman, I successfully created a service, updated it, and deleted it

[http://127.0.0.1:8000/api/services](http://127.0.0.1:8000/api/services) POST method
<img width="926" height="520" alt="Screenshot_4" src="https://github.com/user-attachments/assets/43dc9653-2e77-475e-bb63-0e8dfa35c480" />
[http://127.0.0.1:8000/api/services](http://127.0.0.1:8000/api/services) GET method
<img width="944" height="517" alt="Screenshot_5" src="https://github.com/user-attachments/assets/d1133984-780e-47e8-8e10-017cff713919" />
[http://127.0.0.1:8000/api/services/1](http://127.0.0.1:8000/api/services/1) PUT Method
<img width="939" height="522" alt="Screenshot_6" src="https://github.com/user-attachments/assets/d48c278e-2d0e-4502-ae5f-ae4c3ac11620" />
[http://127.0.0.1:8000/api/services/3](http://127.0.0.1:8000/api/services/3) DELETE method
<img width="960" height="526" alt="Screenshot_7" src="https://github.com/user-attachments/assets/eb2fdabb-3f82-48a9-96e8-ecdde57537ec" />

## Booking 

First, I wrote a store function where I applied validation

Then, only the logged-in customer is allowed to make a booking

[http://127.0.0.1:8000/api/bookings](http://127.0.0.1:8000/api/bookings)
<img width="965" height="515" alt="Screenshot_8" src="https://github.com/user-attachments/assets/92acafc7-745f-412a-a953-9cdc106c604c" />

Finally, the admin can view all bookings.

[http://127.0.0.1:8000/api/admin/bookings](http://127.0.0.1:8000/api/admin/bookings) GET method
<img width="944" height="517" alt="Screenshot_9" src="https://github.com/user-attachments/assets/992c1f78-9ebf-40a1-b7d8-80806ac5989d" />

## Seeder

The UserSeeder seeds the users table with one admin and five customer accounts.
Each user has a name, email, password, and an is_admin flag.
These users can be used to test login, bookings, and admin functionalities.

