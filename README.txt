Do at least ONE of the following tasks: refactor is mandatory. Write tests is optional, will be good bonus to see it. 
Please do not invest more than 2-4 hours on this.
Upload your results to a Github repo, for easier sharing and reviewing.

Thank you and good luck!



Code to refactor
=================
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php

Code to write tests (optional)
=====================
3) App/Helpers/TeHelper.php method willExpireAt
4) App/Repository/UserRepository.php, method createOrUpdate


----------------------------

What I expect in your repo:

X. A readme with:   Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code. How would you have done it. Thoughts on formatting, structure, logic.. The more details that you can provide about the code (what's terrible about it or/and what is good about it) the easier for us to assess your coding style, mentality etc

And 

Y.  Refactor it if you feel it needs refactoring. The more love you put into it. The easier for us to asses your thoughts, code principles etc


IMPORTANT: Make two commits. First commit with original code. Second with your refactor so we can easily trace changes. 


NB: you do not need to set up the code on local and make the web app run. It will not run as its not a complete web app. This is purely to assess you thoughts about code, formatting, logic etc


===== So expected output is a GitHub link with either =====

1. Readme described above (point X above) + refactored code 
OR
2. Readme described above (point X above) + refactored core + a unit test of the code that we have sent

Thank you!

## response
X.  There were a lot of if statement, 
    using Auth class to get authenticated user data rather than getting __authenticatedUser, 
    separate sending email by utilizing event listener and mailable class. For me if it meets
    the objective of the ticket it is ok for me then optimize it once I have free time. Better
    if there was a good code review.

Y.  For my solution: I like to maximize laravel features like form validation this will reduce ifs statement,
    use of event listener for sending email, if there were a lot of array manipulation if this is going to be 
    used throughout the app then create a service class for reusability. I like to practice solid and dry principle 
    to enhance my skills. As for the unit test I am not sure what to refactor but I rearrange the condition to check
    the large expression to smallest.


