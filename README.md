# wabtvSite

You need to install Composer. Then go to your cloned repo and run `composer update` don't forget to have rewrite module ON.
After all of this you need to change the `config/app.default.php` in `config/app.php` and edit this file with your correct data:
`'username' => 'yourdbuser',
            'password' => 'yourdbpwd',
            'database' => 'yourDBname',
`

You need to Bower to install all the front dependencies.
Go to `webroot/css` and run `bower install` do the same in `webroot/js` You are good to go ! You should see 'WabTV on the website http://localhost/yourApp'
