<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




Requirements
PHP v8.1
Composer v2.5.5
Web Server (HTTPS)
Setup
composer create-project laravel/laravel chat-laravel-pusher-youtube

cd chat-laravel-pusher-youtube

composer require pusher/pusher-php-server

php artisan make:controller PusherController

php artisan make:event PusherBroadcast

Code
routes/web.php

app/Http/Controllers/PusherController.php

index()
broadcast()
receive()
app/Events/PusherBroadcast.php

Code

resources/views/index.blade.php
resources/views/broadcast.blade.php
resources/views/receive.blade.php
www.pusher.com
Create Account
Create App
Copy API Keys
Env
Copy .env.example and name .env and populate the following API keys

BROADCAST_DRIVER

PUSHER_APP_ID

PUSHER_APP_KEY

PUSHER_APP_SECRET

PUSHER_APP_CLUSTER




##Troubleshooting 


  Failed to download psr/ from dist: The "https://api.github.com/repos/php-fig//zipball/c71ecc56dfe541dbd90c5360474fbc405f8d5963" file could not be downloaded (HTTP/2 404 ):
{"message":"Not Found","documentation_url":"https://docs.github.com/rest","status":"404"}
    Now trying to download from source
  - Syncing psr/ (2.0.2) into cache
 3/3 [============================] 100%
In Git.php line 504:
                                                                                                                                           
  Failed to execute git clone --mirror -- https://ghp...sbe:x-oauth-basic@github.com/php-fig/.git C:/Users/muham/AppData/Local/Composer/   
  vcs/https---github.com-php-fig-.git/                                                                                                     
                                                                                                                                           
  Cloning into bare repository 'C:/Users/muham/AppData/Local/Composer/vcs/https---github.com-php-fig-.git'...                              
  remote: Repository not found.                                                                                                            
  fatal: repository 'https://github.com/php-fig/.git/' not found                                                                           
                                                                 

#Resolving


The error you’re encountering during the installation of pusher/pusher-php-server with Composer seems to be caused by two main issues:

404 Error for psr/ Dependency:
Composer is attempting to download psr/, but it appears to be unable to find the repository. This could be due to an incorrect package name or dependency.

GitHub Authentication Issue:
Composer is trying to clone a Git repository that is either private or incorrectly referenced. It is prompting you to enter a GitHub token to authenticate.

Steps to Resolve:
Fix the PSR Dependency Issue:

Remove the psr/ cache if it exists in Composer’s local files to avoid cached errors. Run the following command:
bash
Copy code
composer clear-cache
Run the installation command again. This might help Composer resolve the dependencies correctly without relying on the cache.
Use a Valid GitHub Token for Authentication:

If the repository is private or requires authentication, create a personal access token (PAT) on GitHub with appropriate permissions:
- [Go to GitHub’s token settings page](https://github.com/settings/tokens/new)

For public repositories, no specific permissions are needed.
For private repositories, select the repo scope.
Once you have a token, add it to Composer:
bash
Copy code
composer config --global --auth github-oauth.github.com <your_token>
This will store the token securely in Composer’s configuration.
Verify composer.json:

Open composer.json and ensure all dependencies are listed correctly. If there’s an unlisted or incompatible dependency, it could be causing the issue.
If psr/ is an erroneous dependency, remove or update it in composer.json.
Retry Installation:

After clearing the cache and setting up the GitHub token, try running the composer require command again:
bash
Copy code
composer require pusher/pusher-php-server
Following these steps should resolve the authentication and dependency issues. If errors persist, let me know the exact output so we can further troubleshoot.






You said:
how can i create  my token 
ChatGPT said:
ChatGPT
To create a GitHub personal access token (PAT) for Composer, follow these steps:

Go to GitHub’s Personal Access Token Settings:

Log in to GitHub and navigate to Personal Access Tokens page.
Generate a New Token:

Click on Generate new token.
Set a Note and Expiration:

Add a note to identify the purpose of the token, such as "Composer Token."
Set an expiration for the token if you want it to be time-limited (e.g., 30 days, 90 days, etc.). Alternatively, you can select "No Expiration" for a permanent token.
Select Scopes for the Token:

For Public Repositories: No specific scopes are required. You can leave all scopes unchecked.
For Private Repositories: Check the repo scope to grant read/write access to your repositories.
Generate the Token:

Scroll down and click Generate token.
Copy the token immediately. You won’t be able to view it again once you navigate away from the page.
Add the Token to Composer:

In your terminal, use the following command to add the token to Composer’s global authentication:
bash
Copy code
composer config --global --auth github-oauth.github.com <your_token>
Replace <your_token> with the token you copied from GitHub.
Run the Composer Command:

Now you can retry your Composer installation command, and it should authenticate with GitHub automatically:
bash
Copy code
composer require pusher/pusher-php-server
This process should allow Composer to access any required GitHub repositories, resolving the dependency issues.



## Modifications to Try
Specify a Stable Version for pusher/pusher-php-server: Specifying a specific version of pusher/pusher-php-server can help Composer resolve dependencies without encountering conflicts. Replace "pusher/pusher-php-server": "*" with a stable version like "^7.2.6":

```"pusher/pusher-php-server": "^7.2.6"```
