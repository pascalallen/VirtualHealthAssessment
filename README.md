# VirtualHealth Technical Assessment

![NPM Build Status](https://github.com/pascalallen/DockerLaravel/workflows/NPM/badge.svg)
![Docker Compose Build Status](https://github.com/pascalallen/DockerLaravel/workflows/Docker%20Compose/badge.svg)
![Laravel Build Status](https://github.com/pascalallen/DockerLaravel/workflows/Laravel/badge.svg)

Technical assessment for VirtualHealth

## Prerequisites

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Development Environment Setup

### Clone Repository

$ `cd <projects-parent-directory> && git clone https://github.com/pascalallen/VirtualHealthAssessment.git`

### Create Environment file

$ `cp .env.example .env`

### Unzip Database Initialization File

$ `gzip -d db.sql.gz`

### Bring Up Environment

$ `bin/up`

### Install Composer Dependencies

$ `bin/composer install`

### Set Directory Permissions

$ `chmod -R 777 storage bootstrap/cache`

### Set Application Key

$ `bin/artisan key:generate`

### Clear Application Cache

$ `bin/artisan optimize:clear`

### Run Migrations

$ `bin/artisan migrate`

### Run Seeds

$ `bin/artisan db:seed`

### Install NPM Dependencies

$ `bin/npm install`

### Compile NPM Project

$ `bin/npm run dev`

### Watch For Frontend Changes

$ `bin/npm run watch`

### Take Down Environment

$ `bin/down`

### Run Unit Tests

$ `bin/phpunit`

### VirtualHealth Technical Assessment Setup Instructions

1. TODO
