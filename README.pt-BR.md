##### Este projeto de aprendizagem, usando rotas e modelos com php
| [en-US](README.MD) | pt-BR this file |
|---|---|

.htaccess necessário para as rotas;
## .htaccess
```apacheconf
RewriteEngine On
Options All -Indexes

# ROUTER WWW Redirect.
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule ^ https://www.%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# ROUTER HTTPS Redirect
RewriteCond %{HTTP:X-Forwarded-Proto} !https
RewriteCond %{HTTPS} off
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# ROUTER URL Rewrite
RewriteCond %{SCRIPT_FILENAME} !-f
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteRule ^(.*)$ index.php?route=/$1
```
## Index:

com a direção do site para o arquivo Web.php na pasta source / app.
além de fazer teste de rota para possível erro.
