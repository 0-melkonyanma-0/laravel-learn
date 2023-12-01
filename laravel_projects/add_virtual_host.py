import os


def main():

    domain = input('what top level domain do you want to have? (default is com)\n')

    if domain == '':
        domain = 'com'

    print(os.chdir("./docker/apache2/sites-available"))
    web_site = input("Enter site name: ")

    with open(f'{web_site}.{domain}.conf', 'w') as f:
        f.write(
            f"""<VirtualHost *:80>
                ServerName {web_site}.{domain}
                ServerAlias www.{web_site}.{domain}

                ServerAdmin {web_site}@gmail.{domain}
                DocumentRoot /var/www/{web_site}/public


                <Directory /var/www/{web_site}>
                    Options Indexes FollowSymLinks
                    AllowOverride All
                    Require all granted
                    Allow from all
                </Directory>



            """
            +
            """    ErrorLog ${APACHE_LOG_DIR}/error.log
                CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

# vim: syntax=apache ts=4 sw=4 sts=4 sr noet
            """
        )
    os.system(f'a2ensite {web_site}.{domain}.conf')
    os.system(f'service apache2 restart')


if __name__ == "__main__":
    main()