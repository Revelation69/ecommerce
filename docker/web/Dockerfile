FROM nginx:alpine

# Copy the Nginx configuration file
COPY default.conf /etc/nginx/conf.d/default.conf

# Copy the application files (optional, if served by Nginx directly)
COPY . /var/www/html

# Expose the HTTP port
EXPOSE 80
