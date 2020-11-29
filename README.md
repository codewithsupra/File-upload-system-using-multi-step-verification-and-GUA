# File-upload-system-using-multi-step-verification-and-GUA
The main aim of the proposed is to demonstrate a super secure login procedure. Based on various study, this project aim to apply combination of Multi-Step User verification with Graphical User  Authentication. Apart from multi-step user verification and graphical user authentication, and system for email verification after registration is also to be demonstrated.

In the proposed system uses will first need to sign up with email and password. This is followed by an email verification. Email verification is combined with another step of setting a GUA system. Users are required to pick a sequence of randomly arranged image. All these data are stored in database in completely hashed format.

For login users must provide their email and password. If the credentials are right, a unique login page is generated based on hashing pseudo-random number, which is sent to the email. User then needs to visit the login page from their email.
 
Next the user is required to select his chosen images in correct sequence to finish the login process. Unique session key are generated after each step, which ensure previous links cannot be used again. Users further have the ability to login requests in case of unauthorized access attempt.

Once logged in the system provides a platform for uploading and storing files securely.
