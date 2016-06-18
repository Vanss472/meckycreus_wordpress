# Mecky Creus WordPress Heroku Site
>staging version

This project is a template for installing and running [WordPress](http://wordpress.org/) on [Heroku](http://www.heroku.com/). The repository comes bundled with:
* [Advanced Custom Fields](https://www.advancedcustomfields.com/)
* [All in one SEO pack](https://wordpress.org/plugins/all-in-one-seo-pack/)
* [WP Google Analytics](https://wordpress.org/plugins/wp-google-analytics/) 

## Demo
[Mecky Creus WordPress Website](http://meckycreus.com/)

## Installation

Clone the repository from Github

    $ git clone git@github.com:Vanss472/meckycreus_wordpress.git

With the [Heroku gem](http://devcenter.heroku.com/articles/heroku-command), create your app

    $ cd meckycreus_wordpress
    $ heroku login
    $ heroku create

Add a database to your app

    $ heroku addons:create cleardb:ignite  
    $ heroku addons:create newrelic:wayne 

Create a new branch for any configuration/setup changes needed

    $ git checkout -b staging

Deploy to Heroku

    $ git push origin master

Open the application in a browser:

    $ heroku open

## Usage

Updates and install plugins or themes should be done locally and then pushed to Heroku.

## Updating

Updating your WordPress version is just a matter of merging the updates into
the branch created from the installation.

    $ git pull # Get the latest

Using the same branch name from our installation:

    $ git checkout staging
    $ git merge master # Merge latest
    $ git push heroku staging:master

WordPress needs to update the database. After push, navigate to:

    http://your-app-url.herokuapp.com/wp-admin

WordPress will prompt for updating the database. After that you'll be good
to go.


