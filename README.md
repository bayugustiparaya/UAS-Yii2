<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
-------------------
# LANGKAH KERJA
1. build yii2 dengan cara ketik 'php init' di cmd, setelah itu pilih 0 Development , dan ketik yes
    ```
    $> php init 
    Yii Application Initialization Tool v1.0

    Which environment do you want the application to be initialized in?

    [0] Development
    [1] Production

    Your choice [0-1, or "q" to quit] 0

    Initialize the application under 'Development' environment? [yes|no] yes

    Start initialization ...

    generate backend/config/codeception-local.php
    generate backend/config/main-local.php
    generate backend/config/params-local.php
    generate backend/config/test-local.php
    generate backend/web/index-test.php
    generate backend/web/index.php
    generate backend/web/robots.txt
    generate common/config/codeception-local.php
    generate common/config/main-local.php
    generate common/config/params-local.php
    generate common/config/test-local.php
    generate console/config/main-local.php
    generate console/config/params-local.php
    generate console/config/test-local.php
    generate frontend/config/codeception-local.php
    generate frontend/config/main-local.php
    generate frontend/config/params-local.php
    generate frontend/config/test-local.php
    generate frontend/web/index-test.php
    generate frontend/web/index.php
    generate frontend/web/robots.txt
    generate yii
    generate yii_test
    generate yii_test.bat
    generate cookie validation key in backend/config/main-local.php
    generate cookie validation key in common/config/codeception-local.php
    generate cookie validation key in frontend/config/main-local.php
        chmod 0777 backend/runtime
        chmod 0777 backend/web/assets
        chmod 0777 console/runtime
        chmod 0777 frontend/runtime
        chmod 0777 frontend/web/assets
        chmod 0755 yii
        chmod 0755 yii_test

    ... initialization completed.
    ```
2. 
