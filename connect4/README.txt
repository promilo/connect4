
Brief Explanation of How it All Works:

To start, run the project, then navigate to the login screen at http://localhost:31120/connect4/index.php

The login screen allows the user to log in or create an account. To play Connect 4, a user must first create an account by clicking "Create Account".

The new account screen allows the user to enter their username, password, password confirmation, first name, last name, email, and captcha code. If user cannot read the captcha image they may click "Different Image" to display a different captcha. If all input fields are valid when the user clicks the "Register" button, their account will be made and added to the database, and the user will be redirected back to the login screen.

To play Connect 4, the user must then log in to their account by entering their username and password.

After logging in, they will be brought to a page displaying available users to play Connect 4 with. To start playing, the user must either invite another available user or be invited by one.

If an invitation is accepted by the receiving user, the game will start and the Connect 4 board will display along with an instant messaging chat box.

The player who sent the invitation will have the first turn and have their pieces colored red. The player who accepted the invitation will have their pieces colored yellow.

The turn-based game is won when a player connects 4 of their pieces horizontally, vertically, or diagonally. Upon game completion, an alert will display saying who won the game and players will be brought back to the Available Users screen where they can choose to play another game.
