# b_assign

This project is created to show how the candidate can handle his day-to-day responsibilities.


## Getting Started

Initial code has been written in php and returns 'Hello World!' for any GET request.
Next future is POST request with a name of a person in the body returns "Hello {name} World!"

### Prerequisites
php 5.6


##Continuous Integration

For the continuous integration Teamcity 2017.1.2 was used.
Under Project 'B Assign' four build configurations were defined: Dev, Test, Demo, Prod.
When there is a new commit in the GIT, builds run in the following order:

   Dev => Test => Demo

Test and Demo builds are not triggering if previous build is failed.
Running of Prod build must be initiated manually through Teamcity Web GUI.
The builds are deploying to the following environment, which is created in Microsoft Azure and using WebApp services:

http://devbassign.azurewebsites.net
http://testbassign.azurewebsites.net
http://demobassign.azurewebsites.net
http://prodbassign.azurewebsites.net

Teamcity's  projects and builds configurations are located in the tc_confs directory.
Azure Web Apps profiles also have been published and located in the azure_confs directory.

## Running the tests

For running tests, you need Phpunit (testing framework) and Guzzle (library for making a request to the API).
You can initially install composer for installing Phpunit and Guzzle:
```
    curl -sS https://getcomposer.org/installer | php
    php composer.phar require guzzlehttp/guzzle phpunit/phpunit
```
For running test you need to change url to your test environment's url in the 'test/indextest.php file ('base_uri' => '_your_url_'). Please use the following command to perform Phpunit test:
```
    php vendor/bin/phpunit tests/indextest.php
```
This test making POST request with the 'Testname' and checking for the 'Hello Testname World!' response.
