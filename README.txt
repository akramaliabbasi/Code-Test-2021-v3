Choose ONE of the following tasks.
Please do not invest more than 2-4 hours on this.
Upload your results to a Github repo, for easier sharing and reviewing.

Thank you and good luck!



Code to refactor
=================
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php

Code to write tests
=====================
3) App/Helpers/TeHelper.php method willExpireAt
4) App/Repository/UserRepository.php, method createOrUpdate


----------------------------

What I expect in your repo.

1, A readme with:   Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code. 
How would you have done it. Thoughts on formatting. Logic.. 
===============================
Ans: 
Well, I only consumed 2 to 3 hours to understand the code logic on (Code to refactor first option) but there were many functions/methods so did not check each and every thing because of not working application,
while checking the source code stuff, due to only two files (repository and controller) it is really ambiguous to understand the requirement because what I believe one of the best approaches for doctor is to diagnose the problem so
same logic is for programmer to debug the things using not only dd()/die but White box testing( Unit Testing) to check is it slow code or not and Black box Testing(Functional test to check also /CSRF token and Sql injection etc.) 
===============================

2.  Refactor it if you feel it needs refactoring. The more love you put into it. The easier for us to asses.  
===============================
Ans: 
I combine the 1st thoughts about the code: it obviously an amazing code I cannot say it is terrible or just okay :) this code is advanced based
but sometimes I feel if () conditions should be replaced with switch () to make code faster and I see that many times isset() is used so we know if we revoke the any function(methods), it takes call time(mean it goes to the call then come back with results)
therefore, it takes time too.
Abstraction Layer
So, to create a repository we first have to define an interface. This is our boundary between the persistence layer and rest of the application.
It also represents our contract for the implementations. The implements RepositoryInterface section isn’t strictly necessary 
but it adds an extra layer of structure to our code.  If we change our database engine, we only need to change the repository implementations without affecting anything else in our application.

Anyways: Apart from above to avoid in future problem of any database changes I used Interfaces instead of direct repository calls and added some code and new files with folder/dir.
1 => Code-Test-2021-v3\refactor\app\Reposity replaced with \Repositories (Because in app there can be many repositories for distinct/different models’ data) 

What is a repository?

In my view: Repositories represent a collection of entities. It does not represent the database storage or caching or any technical concerns related to that. So, to be clear,
repositories represent collections. How the data is hold in those repositories is an implementation detail. This is a very important concept when working with repositories.


2 => Code-Test-2021-v3\refactor\app\Repositories\Interfaces\BookingRepositoryInterface.php

Abstraction Layer?
So, to create a repository we first have to define an interface. This is our boundary between the persistence layer and rest of the application.
It also represents our contract for the implementations. The implements RepositoryInterface section isn’t strictly necessary 
but it adds an extra layer of structure to our code. 
If we change our database engine, we only need to change the repository implementations without affecting anything else in our application.


3 => Code-Test-2021-v3\refactor\app\Repositories\Providers\RepositoryServiceProvider.php

The RepositoryServiceProvider?

Instead of injecting the BookingRepository in the BookingController we will be injecting the BookingRepositoryInterface 
and then let the Service Container decide which repository will be used. 
This could be done in the boot method of the AppServiceProvider,
but I prefer to create a new provider for this to keep things clean.
===============================

Make two commits. First commit with original code. Second with your refactor so we can easily trace changes. 
===============================
Ans: 
I added this 2nd commit for git and also, I added some internal comments in codes inside the .php file while checking some places. 
===============================


NB: you do not need to set up the code on local and make the web app run. It will not run as its not a complete web app. 
This is purely to assess you thoughts about code, formatting, logic etc
===============================
Ans:  
it is really ambiguous to understands the requirement and we know, while requirement elicitation it is main part of the project is
understand the system functionality to run the app :) and understand each step of White box testing.

===============================



