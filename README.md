<div class="filament-hidden">

![helpdeskkit](https://raw.githubusercontent.com/jeffersongoncalves/helpdeskkit/3.x/art/jeffersongoncalves-helpdeskkit.png)

</div>

# HelpDeskKit — Starter Kit for Help Desk with Laravel 12 & Filament 3

A production-ready starter kit for building help desk and customer support applications. Built on **Laravel 12**, **Filament 3**, **Livewire 3**, and **Tailwind CSS**, with multi-panel architecture and a complete ticketing system out of the box.

## Features

### Multi-Panel Architecture

Four pre-configured Filament panels, each with its own theme and authentication:

| Panel | URL | Purpose |
|-------|-----|---------|
| **Admin** | `/admin` | System administration — manage admins, operators, and users |
| **App** | `/app` | Authenticated users — create and track support tickets |
| **Operator** | `/operator` | Support staff — manage tickets, departments, and responses |
| **Guest** | `/` | Public-facing frontend for visitors |

### Help Desk System

Complete ticketing system powered by [`filament-help-desk`](https://github.com/jeffersongoncalves/filament-help-desk):

- **Ticket Management** — Create, assign, update status and priority
- **Departments & Categories** — Organize tickets by team and type
- **Comments & Attachments** — Internal notes and file uploads
- **Canned Responses** — Pre-written reply templates
- **History Tracking** — Full audit trail of ticket changes
- **Watchers** — Follow tickets for updates
- **Email Integration** — Inbound email to ticket (IMAP, Mailgun, SendGrid, Resend, Postmark)
- **Notifications** — Email alerts on ticket events

### Multi-Guard Authentication

Three independent authentication guards with separate user models and database tables:

- `admin` — Admin model for system administrators
- `web` — User model for application users
- `operator` — Operator model for support staff

Each guard has its own login, registration, password reset, and email verification.

### User Features

- Profile management with avatar upload
- Browser session management
- API tokens via Laravel Sanctum
- In-app database notifications

### Developer Tools

- `composer dev` — Run server, queue, logs, and Vite in one command
- `composer ide-helper` — Generate IDE autocompletion files
- `composer pint` — Code style fixing with Laravel Pint
- `composer phpstan` — Static analysis with Larastan
- Developer logins for quick panel access during development
- Log viewer in the admin panel

## Requirements

- PHP 8.2+
- Composer
- Node.js with PNPM
- MySQL, PostgreSQL, or SQLite

## Installation

### Using Laravel Installer

```bash
laravel new my-helpdesk --using=jeffersongoncalves/helpdeskkitv3 --database=mysql
```

### Using HelpDeskKit CLI

```bash
composer global require jeffersongoncalves/helpdeskkit-cli
helpdeskkit new my-helpdesk --kit=jeffersongoncalves/helpdeskkit
```

### Automated Setup

```bash
php install.php
```

This handles Composer dependencies, environment setup, key generation, database migrations, Node.js dependencies, and asset building.

### Manual Setup

```bash
composer install
pnpm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Installation with Docker

```bash
laravel new my-helpdesk --using=jeffersongoncalves/helpdeskkitv3 --database=mysql
cd my-helpdesk
composer install
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail shell
php artisan key:generate
pnpm install
```

Configure custom ports in `.env` if needed:

```env
APP_PORT=8080
FORWARD_DB_PORT=3306
FORWARD_REDIS_PORT=6379
FORWARD_MAILPIT_PORT=1025
```

## Development

```bash
# Run all services (server, queue, logs, vite)
composer dev

# Or run individually
php artisan serve
php artisan queue:listen --tries=1
pnpm run dev
```

## Customization

### Panel Providers

Each panel is configured through its provider in `app/Providers/Filament/`:

- `AdminPanelProvider.php`
- `AppPanelProvider.php`
- `OperatorPanelProvider.php`
- `GuestPanelProvider.php`

### Configuration

The `config/helpdeskkit.php` file centralizes panel routes, middleware, branding, and authentication guards.

The `config/help-desk.php` file configures the ticketing system including email channels, notifications, attachments, and webhooks.

### Themes

Each panel has its own Tailwind CSS theme in `resources/css/filament/`. Colors and styles can be customized per panel.

## Tech Stack

| Component | Version |
|-----------|---------|
| Laravel | 12.x |
| Filament | 3.x |
| Livewire | 3.x |
| Tailwind CSS | 3.x |
| Vite | 7.x |
| Pest | 3.x |

## License

[MIT License](LICENSE)

## Credits

Developed by [Jefferson Gonçalves](https://github.com/jeffersongoncalves).
