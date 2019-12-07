# instant_messaging_app
Encryption folder is a user-made library used for AES encryption.

Project uses:
- PHP5.6
- XAMPP VER 3.2.2
- XAMPP installer = xampp-win32-5.6.38-0-VC11-installer

User-made libraries: 
- Defuse
- phpseclib (VER 1.0.18)
Credits: 
- Defuse
    - Source: https://github.com/defuse/php-encryption 
    - Authors: Created by Taylor Hornby and Scott Arciszewski.
- phpseclib (VER 1.0.18)
    - Source: https://github.com/phpseclib/phpseclib

The folder, "database_source" is to give you an example of what the database looks like.
- No data of actual users will be present in this folder. Data that is present are used as dummy variables to give you an example of what the overall database structure looks like.

The folder, "chat" contains the chat app itself.
- Currently it is only a template for the chat.
- Have not implemented Key Exchange & Data retrieval from database yet.
- Requires Socket.io & Node.js if you would like to edit the code.
- Video Reference & Example of installing and implementing Socket.io & Node.js:
    https://www.youtube.com/watch?v=rxzOqP9YwmM
