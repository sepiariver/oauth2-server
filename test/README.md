# Test

1. From this directory `composer install`  
2. Copy a valid, working MODX config.core.php file from your local environment into this directory
3. OAuth2Server must be installed, or symlinked from the components folders. `ln -s /path/to/repo/core/components/oauth2server /path/to/modx/core/components/oauth2server` `ln -s /path/to/repo/assets/components/oauth2server /path/to/modx/assets/components/oauth2server`
3. Run `vendor/bin/phpunit`