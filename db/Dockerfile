FROM mysql:8.0.33

# Add labels for metadata
LABEL "Project"="Ecommerce"
LABEL "Author"="Revelation69"

# Set environment variables for MySQL
ENV MYSQL_ROOT_PASSWORD="ecommerce_root_pass"
ENV MYSQL_DATABASE="ecommerce_db"
ENV MYSQL_USER="ecommerce_user"
ENV MYSQL_PASSWORD="ecommerce_user_pass"

# Add the database backup file to initialize the database
ADD ecommerceapp.sql /docker-entrypoint-initdb.d/ecommerceapp.sql