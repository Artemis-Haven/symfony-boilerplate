# Symfony 5 Boilerplate

This is a Symfony boilerplate to quickly start a Symfony project. It includes:

**It is intended to be used in association with this other repository :** https://github.com/Artemis-Haven/symfony-docker-boilerplate but it can also be used independently.

With these two repos, **in less than one minute, you can deploy a fully working, ready-to-use, dev environment for a new Symfony project** (the see instructions below).

The other repository contains containers for:
- PHP-FPM with Composer & Symfony executables
- Nginx
- MySQL
- Adminer
- Node & Yarn to use with Webpack Encore

---

## Overview

Let's start with the basics:
- A MainController with a homepage & two other sample pages
- A basic but clean structure for the templates, with separated partial (header, footer, head) templates
- The main metadata for the social networks
- Twitter Bootstrap & Font Awesome
- The tag for Google Analytics

An Admin zone with restricted access:
- EasyAdminBundle
- CkEditor & ElFinder for a WYSIWYG text fields
- An Admin entity
- A custom AdminAuthenticator that let you create the very first admin account directly from the login form
- Two pages to fill the content of the website (see below)

Webpack Encore & Yarn for your assets:
- Ready to compile SASS and JS
- Configured for hot reloading

Some useful custom features:
- Two Twig functions: `{{ page('some block') }}` and `{{ meta('some field') }}` to fill the content of the website directly from the admin pages
  - `page()` is for the formated text zones. You can edit it with a WYSIWYG editor
  - `meta()` is for the metadata and the structural elements (title, description, copyright, etc)

Example: The template of the homepage

![The template for the homepage](https://i.imgur.com/Xhd0Nfe.png)

---

## Installation

See [these instructions](https://github.com/Artemis-Haven/symfony-docker-boilerplate/blob/master/README.md#prerequisites) to get this boilerplate running on your machine in a minute!
