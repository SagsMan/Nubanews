# NubaNews

A news and magazine website powered by Botble CMS 7.6.3 with the lara-mag theme.

## Live Site

🌐 **https://nubanews.trackd.live**

## Admin Panel

- URL: https://nubanews.trackd.live/admin
- Email: mawuliorukpe@gmail.com

## Stack

- **CMS**: Botble CMS 7.6.3
- **Theme**: lara-mag
- **PHP**: 8.2
- **Database**: MySQL / MariaDB (tracsmda_nubanews)
- **Hosting**: cPanel — server304.web-hosting.com

## Branding

- Primary color: #FFD700 (Gold/Yellow)
- Secondary color: #1a1a1a (Black)
- Site name: NubaNews
- Contact: mawuliorukpe@gmail.com | trackd.live
- Copyright: © 2026 NubaNews. All rights reserved.

## Setup / Deployment

1. Upload all files to server
2. Copy `.env.github-example` to `.env` and fill in your credentials
3. Run `composer install --no-dev`
4. Run `php artisan storage:link`
5. Run `php artisan cache:clear && php artisan config:clear`
6. Import `database.sql` to your MySQL database

## Server Location

All site files are at: `/home/tracsmda/nubanews.trackd.live`
