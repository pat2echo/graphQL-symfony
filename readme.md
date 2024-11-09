Here's the complete `.md` file for your GraphQL Symfony project with improved formatting and all information clearly included:

```md
# GraphQL Symfony Setup Guide

This document provides configuration details for setting up a Symfony application integrated with GraphQL, using environment variables.

## Overview

This `.env` configuration includes:
- General environment variables for Symfony setup.
- Database connection settings.
- Symfony Messenger and Mailer configuration.
- CORS policy setup for local development.

### Notes
- **Environment Files Loading Order**:
  - `.env`: Default environment variables.
  - `.env.local`: Local overrides (not committed to version control).
  - `.env.$APP_ENV`: Environment-specific defaults (e.g., `.env.dev`).
  - `.env.$APP_ENV.local`: Environment-specific local overrides (not committed).
- **Variable Precedence**: Real environment variables override `.env` values.
- **Security**: Do **NOT** store production secrets in this file. Use the [Symfony Secrets Management](https://symfony.com/doc/current/configuration/secrets.html).
- **Production Setup**: Run `composer dump-env prod` to compile `.env` files for production. For more best practices, visit [Symfony's guide](https://symfony.com/doc/current/best_practices.html#use-environment-variables-for-infrastructure-configuration).

---

## Environment Variables

### 1. Symfony Framework Configuration

```env
# Application Environment: Set to "dev" for development or "prod" for production
APP_ENV=dev

# Secret key for the application (keep it secure)
APP_SECRET=7438d6804fad014e82b1808e62d237d5
```

### 2. Database Configuration

Choose the appropriate database URL for your project. Uncomment the one you need and update credentials as necessary.

- **SQLite** (For lightweight, file-based database):
  ```env
  # DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
  ```

- **MySQL** (Most common setup):
  ```env
  DATABASE_URL="mysql://newuser:password@127.0.0.1:3306/graphql?serverVersion=8&charset=utf8mb4"
  ```

- **PostgreSQL** (Alternative setup):
  ```env
  # DATABASE_URL="postgresql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=15&charset=utf8"
  ```

> **Note**: Ensure you configure your server version either here or in `config/packages/doctrine.yaml`. See the [Doctrine DBAL configuration guide](https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url).

---

### 3. Symfony Messenger Configuration

Specify the transport for Symfony Messenger based on your preference. Uncomment the relevant line:

- **AMQP (RabbitMQ)**:
  ```env
  # MESSENGER_TRANSPORT_DSN=amqp://guest:guest@localhost:5672/%2f/messages
  ```

- **Redis** (For high-performance, in-memory data store):
  ```env
  # MESSENGER_TRANSPORT_DSN=redis://localhost:6379/messages
  ```

- **Doctrine** (Using the default Doctrine transport):
  ```env
  MESSENGER_TRANSPORT_DSN=doctrine://default?auto_setup=0
  ```

---

### 4. Symfony Mailer Configuration

Set the Mailer DSN according to your email service provider. For example:

- **Null Transport** (Disable mailing):
  ```env
  # MAILER_DSN=null://null
  ```

- **SMTP Example**:
  ```env
  # MAILER_DSN=smtp://localhost:1025
  ```

---

### 5. CORS Policy Configuration

For development, allow CORS requests from `localhost`:

```env
CORS_ALLOW_ORIGIN=^https?://127.0.0.1:?[0-9]*$
```

This regex pattern allows HTTP/HTTPS requests from any port on `127.0.0.1`.

---

## Additional Tips

- **Running Symfony Commands**: Use `php bin/console` for executing Symfony commands.
- **Clearing Cache**: Use `php bin/console cache:clear` to clear the Symfony cache during development.
- **Database Migrations**:
  - Create a migration: `php bin/console make:migration`
  - Apply migrations: `php bin/console doctrine:migrations:migrate`

---

## Resources
- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [GraphQL Documentation](https://graphql.org/learn/)
- [Doctrine DBAL Configuration Guide](https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#connecting-using-a-url)

This setup guide should provide a comprehensive starting point for configuring your GraphQL Symfony application. Adjust the environment variables as needed based on your project requirements.
```

### Summary of Changes:
1. **Sections**: Clearly divided into configuration sections (Symfony, Database, Messenger, Mailer, CORS).
2. **Inline Comments**: Added explanations for each section to help users understand the configurations.
3. **Resources Section**: Added links to relevant documentation for further reading.
4. **Consistency**: Used consistent formatting for environment variables and inline notes.
