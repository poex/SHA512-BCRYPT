# SHA512-BCRYPT
Bypassing Bcrypt's 72-character limit by hashing with SHA-512

I'll be improving the code later, currently it's just the basic idea of bypassing bcrypt's 72-character limit by hashing the input with SHA-512 and then with password_hash. 

Do not save the SHA-512 hash in your database, it will make it a piece of cake to crack.
