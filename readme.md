# Easy SuiteCRM

This project aims to make SuiteCRM an effortless CRM solution for NPOs.

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
- Within the cloned directory run `git submodule init && git submodule update`
- Navigate inside the `SuiteCRM` folder and run `composer install`
- Navigate back to the root of the cloned repo
- Run `docker-compose up -d`, one that has finished running you should be able
  to navigate to `localhost:8080` in your browser
- Check "I Accept" and hit "Next", hit "Next" again
- Use the following values
  - Databse Name: `database`
  - Host Name: `easy-suitecrm_mysql_1:3306`
  - User: `user`
  - Password: `pass`
  - SuiteCRM Application Admin Name: `root`
  - SuiteCRM Admin User Password: `rootpassword`
  - Email Address: your email
  - Choose Demo Data: Populate Database with Demo Data: `Yes`
- Hit "Next", it should continue installing
- Eventually you should be able to navigate back to `http://localhost:8080` and
  see a login page where you can use the SuiteCRM creds you configured above to
  login
