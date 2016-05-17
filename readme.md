# Automatic base url

#### Setting config.php like this ####
    $base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $base_url .= "://".$_SERVER['HTTP_HOST'];
    $base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
    $config['base_url'] = $base_url;

# Remove index.php

#### Setting config.php like this ####
    $config['index_page'] = '';

#### Create file .htaccess on your root project ####
    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php/$1 [L]
    </IfModule>
    
    
    #### if you get response "no input file specified", use this configuration.
    
    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?/$1 [L]
    </IfModule>
    
    
# Avoid direct access to the controller with the full controller name
    $route['404_override'] = 'errors/show_404';

    /**
    * Your all routes path here....
    * ------------------------------
    * ------------------------------
    * ------------------------------
    */
    
    /**
     * Avoid direct access to the controller with the full controller name.
     */
    $route['.*'] = 'errors/show_404';


# Change your array to object

#### array
    $data = array();
    $data['name'] = 'Ahmad Arif';
    
### change to
    $data = new StdObject();
    $data->name = 'Ahmad Arif';
    
# PHP Built-in web server
    Apa itu `PHP Built-in web server` ? [Baca di sini](http://php.net/manual/en/features.commandline.webserver.php)
    Fitur ini bisa digunakan jika kamu menggunakan automatic base url (di atas)
    Gimana cara pakainya? Biar lebih gampang ikutin cara berikut:
    
#### Buat batch file dengan nama `server.bat` (nama sih bebas, yang penting eksternsinya)
#### Tulis kode berikut di dalam file `server.bat`
```Batchfile
@echo off
start "" http://localhost:8000
php -S localhost:8000
```
