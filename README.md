This repo contains Adminer plugin files for use with the [WordPress.com Studio](https://developer.wordpress.com/studio/) desktop app. It is intended to be used with an installation script which allows you to view the SQLite 3 database for your local Studio WordPress site using Adminer. The script is located in [this gist](https://gist.github.com/nickpagz/9f883ab36af94d7e382e9818e19e634e).

Part of the script includes adding an mu-plugin which creates a link in the Admin bar to open Adminer to view the site's database.

### How to use

- After creating a new site, or use an existing site in Studio, click on the "Terminal" button.
- When the terminal opens, copy and paste the following command and hit enter: ```curl -sL https://gist.githubusercontent.com/nickpagz/9f883ab36af94d7e382e9818e19e634e/raw/setup_adminer.sh | bash```
- In the Studio app, click on **Open Site** (or **WP Admin**) to view the site.
- In the admin bar click on **Open Adminer**.
- If prompted for database username and password, just click on **Login**. No credentials required.
- Don't forget to properly gitignore adminer and/or any of the files in the `/wp-content/database/` folder and mu-plugins folder as needed.

Enjoy!

