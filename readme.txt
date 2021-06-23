composer require orangehill/iseed
composer require intervention/image


https://stackoverflow.com/questions/30639174/how-to-set-up-file-permissions-for-laravel

Your user as owner

I prefer to own all the directories and files (it makes working with everything much easier), so, go to your laravel root directory:

cd /var/www/html/laravel >> assuming this is your current root directory
sudo chown -R $USER:www-data .
Then I give both myself and the webserver permissions:

sudo find . -type f -exec chmod 664 {} \;   
sudo find . -type d -exec chmod 775 {} \;
Then give the webserver the rights to read and write to storage and cache

Whichever way you set it up, then you need to give read and write permissions to the webserver for storage, cache and any other directories the webserver needs to upload or write too (depending on your situation), so run the commands from bashy above :

sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
Now, you're secure and your website works, AND you can work with the files fairly easily



https://laravelarticle.com/laravel-log-reader

Package Control
Blade Snippets
Emmet
Laravel Blade Highligther
SideBarEnhancements

Package Control: Install Package > PHP Companion
2) Menu: Sublime Text> Preferences > Key Bindings
3) Add the following lines (change f9/f10 if you want to use different keys)
{ "keys": ["f9"], "command": "expand_fqcn" },
{ "keys": ["f10"], "command": "find_use" }


https://github.com/markashleybell/ExpandTabsOnLoad

Sublime Preferences
{
   "color_scheme": "Packages/Color Scheme - Default/Monokai.tmTheme",
   "font_size": 13,
   "ignored_packages":
   [
      "Vintage",
   ],
   "theme": "Default.sublime-theme",
   "index_files": false,
   "detect_indentation": true,
   "tab_size": 3,
   "translate_tabs_to_spaces": true,
   "expand_tabs_on_save": true,
   "expand_tabs_on_load": true,
}