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
    
    RewriteEngine on
    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?/$1 [L]

# Change your array to object

#### array
    $data = array();
    $data['name'] = 'Ahmad Arif';
    
### change to
    $data = new StdObject();
    $data->name = 'Ahmad Arif';
