<Ifmodule mod_rewrite.c>
   RewriteEngine on
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteCond %{REQUEST_FILENAME} !-f
   
   RewriteRule ^ index.php [L]

</Ifmodule>