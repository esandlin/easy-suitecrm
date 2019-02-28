# Easy SuiteCRM - SuiteCRM 7.10.10

This project aims to make SuiteCRM an effortless CRM solution for NPOs.

## Setup SuiteCRM on Heroku

Note: The database plan required to run this application costs $9.99/month and
as such will require you to verify your Heroku account (add a payment method).

Click this button to get started:

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

You will be prompted for an *App name* you choose whatever you'd like, Heroku
will enforce it is unique.

Note: Initially this app name will be part of the URL used to access SuiteCRM,
it is expected that at some point you will purchase a domain name that will
point to Heroku which would make your choice here less important.

Note: There is one addon, ClearDB MySQL, and its associated cost is shown
alongside it ($9.99/month). The first and last month of their subscription plans
are _not_ pro-rated, meaning if you want to just try this out, it is going to
cost you $9.99.

Click *Deploy app*.

Your app will build and deploy and eventually you may open the two links to view
and manage your app.

TODO: Walk through getting database hostname, database name, username, and
password to provide to SuiteCRM during its own setup process.

TODO: Walk through the SuiteCRM setup process.

## Local development

### Prerequisites

- Docker
  - Must be running in order to execute `docker-compose` commands
  - [Windows](https://store.docker.com/editions/community/docker-ce-desktop-windows)
  - [Mac](https://store.docker.com/editions/community/docker-ce-desktop-mac)
- PHP 7
  - Verify output of `php --version` is >= 7

### Instructions

- Clone this repo
- Run `composer install`
- Navigate into the `dev` folder
- Run `docker-compose up -d`, once that has finished running you should be able
  to navigate to `localhost:8080` in your browser
- Check "I Accept" and hit "Next", hit "Next" again
- Use the following values
  - Databse Name: `database`
  - Host Name: `dev_mysql_1:3306`
  - User: `user`
  - Password: `pass`
  - SuiteCRM Database User: `Same as Admin User`
  - SuiteCRM Application Admin Name: `root`
  - SuiteCRM Admin User Password: `rootpassword`
  - Email Address: your email
  - Choose Demo Data: Populate Database with Demo Data: `Yes`
- Hit "Next", it should continue installing
- Eventually you should be able to navigate back to `http://localhost:8080` and
  see a login page where you can use the SuiteCRM creds you configured above to
  login
