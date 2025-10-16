# Use the official PHP image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy app files
COPY index.php .

# Expose port 8000
EXPOSE 8000

# Run PHP’s built-in web server
CMD ["php", "-S", "0.0.0.0:8000", "index.php"]
