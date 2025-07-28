## login
I've used Sanctum to build a token-based login system.
First, I created the register, login, and logout routes.
Then, I wrote the register, login, and logout methods in the AuthController.

When a user registers, a token is generated.

[http://127.0.0.1:8000/api/register](http://127.0.0.1:8000/api/register)
<img width="1244" height="528" alt="Image" src="https://github.com/user-attachments/assets/0a61e0b5-bffc-43fa-970f-00ea168703a8" />
When a user logs in again, a new token is also generated.

[http://127.0.0.1:8000/api/login](http://127.0.0.1:8000/api/login)
<img width="1236" height="544" alt="Screenshot_2" src="https://github.com/user-attachments/assets/0f4fa806-65d0-4f9e-88a0-cadee3ffb720" />
When the user logout, all tokens for that user will be deleted.

[http://127.0.0.1:8000/api/logout](http://127.0.0.1:8000/api/logout)
<img width="1235" height="554" alt="Screenshot_3" src="https://github.com/user-attachments/assets/f62e11aa-14dc-421a-a4a9-570563f9aea7" />


## service 
