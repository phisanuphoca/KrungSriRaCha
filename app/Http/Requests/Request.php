{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file",
        "This file is @generated automatically"
    ],
    "hash": "5c6026b96e6fa11a641b51a6ba976f5e",
    "content-hash": "5bd58fd976f1ee3e9611bc37c006ec46",
    "packages": [
        {
            "name": "classpreloader/classpreloader",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/ClassPreloader/ClassPreloader.git",
                "reference": "9b10b913c2bdf90c3d2e0d726b454fb7f77c552a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ClassPreloader/ClassPreloader/zipball/9b10b913c2bdf90c3d2e0d726b454fb7f77c552a",
                "reference": "9b10b913c2bdf90c3d2e0d726b454fb7f77c552a",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "^1.0|^2.0",
                "php": ">=5.5.9"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8|^5.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "ClassPreloader\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com"
                },
                {
                    "name": "Graham Campbell",
                    "email": "graham@alt-three.com"
                }
            ],
            "description": "Helps class loading performance by generating a single PHP file containing all of the autoloaded files for a specific use case",
            "keywords": [
                "autoload",
                "class",
                "preload"
            ],
            "time": "2015-11-09 22:51:51"
        },
        {
            "name": "danielstjules/stringy",
            "version": "1.10.0",
            "source": {
                "type": "git",
                "url": "https://github.com/danielstjules/Stringy.git",
                "reference": "4749c205db47ee5b32e8d1adf6d9aff8db6caf3b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/danielstjules/Stringy/zipball/4749c205db47ee5b32e8d1adf6d9aff8db6caf3b",
                "reference": "4749c205db47ee5b32e8d1adf6d9aff8db6caf3b",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "php": ">=5.3.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Stringy\\": "src/"
                },
                "files": [
                    "src/Create.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Daniel St. Jules",
                    "email": "danielst.jules@gmail.com",
                    "homepage": "http://www.danielstjules.com"
                }
            ],
            "description": "A string manipulation library with multibyte support",
            "homepage": "https://github.com/danielstjules/Stringy",
            "keywords": [
                "UTF",
                "helpers",
                "manipulation",
                "methods",
                "multibyte",
                "string",
                "utf-8",
                "utility",
                "utils"
            ],
            "time": "2015-07-23 00:54:12"
        },
        {
            "name": "dnoegel/php-xdg-base-dir",
            "version": "0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/dnoegel/php-xdg-base-dir.git",
                "reference": "265b8593498b997dc2d31e75b89f053b5cc9621a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dnoegel/php-xdg-base-dir/zipball/265b8593498b997dc2d31e75b89f053b5cc9621a",
                "reference": "265b8593498b997dc2d31e75b89f053b5cc9621a",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "@stable"
            },
            "type": "project",
            "autoload": {
                "psr-4": {
                    "XdgBaseDir\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "implementation of xdg base directory specification for php",
            "time": "2014-10-24 07:27:01"
        },
        {
            "name": "doctrine/inflector",
            "version": "v1.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "90b2128806bfde671b6952ab8bea493942c1fdae"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/90b2128806bfde671b6952ab8bea493942c1fdae",
                "reference": "90b2128806bfde671b6952ab8bea493942c1fdae",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Doctrine\\Common\\Inflector\\": "lib/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Benjamin Eberlei",
                    "email": "kontakt@beberlei.de"
                },
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Jonathan Wage",
                    "email": "jonwage@gmail.com"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "Common String Manipulations with regard to casing and singular/plural rules.",
            "homepage": "http://www.doctrine-project.org",
            "keywords": [
                "inflection",
                "pluralize",
                "singularize",
                "string"
            ],
            "time": "2015-11-06 14:35:42"
        },
        {
            "name": "jakub-onderka/php-console-color",
            "version": "0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/JakubOnderka/PHP-Console-Color.git",
                "reference": "e0b393dacf7703fc36a4efc3df1435485197e6c1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/JakubOnderka/PHP-Console-Color/zipball/e0b393dacf7703fc36a4efc3df1435485197e6c1",
                "reference": "e0b393dacf7703fc36a4efc3df1435485197e6c1",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "jakub-onderka/php-code-style": "1.0",
                "jakub-onderka/php-parallel-lint": "0.*",
                "jakub-onderka/php-var-dump-check": "0.*",
                "phpunit/phpunit": "3.7.*",
                "squizlabs/php_codesniffer": "1.*"
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "JakubOnderka\\PhpConsoleColor": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-2-Clause"
            ],
            "authors": [
                {
                    "name": "Jakub Onderka",
                    "email": "jakub.onderka@gmail.com",
                    "homepage": "http://www.acci.cz"
                }
            ],
            "time": "2014-04-08 15:00:19"
        },
        {
            "name": "jakub-onderka/php-console-highlighter",
            "version": "v0.3.2",
            "source": {
                "type": "git",
                "url": "https://github.com/JakubOnderka/PHP-Console-Highlighter.git",
                "reference": "7daa75df45242c8d5b75a22c00a201e7954e4fb5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/JakubOnderka/PHP-Console-Highlighter/zipball/7daa75df45242c8d5b75a22c00a201e7954e4fb5",
                "reference": "7daa75df45242c8d5b75a22c00a201e7954e4fb5",
                "shasum": ""
            },
            "require": {
                "jakub-onderka/php-console-color": "~0.1",
                "php": ">=5.3.0"
            },
            "require-dev": {
                "jakub-onderka/php-code-style": "~1.0",
                "jakub-onderka/php-parallel-lint": "~0.5",
                "jakub-onderka/php-var-dump-check": "~0.1",
                "phpunit/phpunit": "~4.0",
                "squizlabs/php_codesniffer": "~1.5"
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "JakubOnderka\\PhpConsoleHighlighter": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jakub Onderka",
                    "email": "acci@acci.cz",
                    "homepage": "http://www.acci.cz/"
                }
            ],
            "time": "2015-04-20 18:58:01"
        },
        {
            "name": "jeremeamia/SuperClosure",
            "version": "2.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/jeremeamia/super_closure.git",
                "reference": "b712f39c671e5ead60c7ebfe662545456aade833"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/jeremeamia/super_closure/zipball/b712f39c671e5ead60c7ebfe662545456aade833",
                "reference": "b712f39c671e5ead60c7ebfe662545456aade833",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "~1.0",
                "php": ">=5.4"
            },
            "require-dev": {
                "codeclimate/php-test-reporter": "~0.1.2",
                "phpunit/phpunit": "~4.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "SuperClosure\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jeremy Lindblom",
                    "email": "jeremeamia@gmail.com",
                    "homepage": "https://github.com/jeremeamia",
                    "role": "Developer"
                }
            ],
            "description": "Serialize Closure objects, including their context and binding",
            "homepage": "https://github.com/jeremeamia/super_closure",
            "keywords": [
                "closure",
                "function",
                "lambda",
                "parser",
                "serializable",
                "serialize",
                "tokenizer"
            ],
            "time": "2015-03-11 20:06:43"
        },
        {
            "name": "laravel/framework",
            "version": "v5.1.24",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/framework.git",
                "reference": "875baf2d1645ce23e2ec0bf94fa7bb3e7fbfd6ed"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/framework/zipball/875baf2d1645ce23e2ec0bf94fa7bb3e7fbfd6ed",
                "reference": "875baf2d1645ce23e2ec0bf94fa7bb3e7fbfd6ed",
                "shasum": ""
            },
            "require": {
                "classpreloader/classpreloader": "~2.0|~3.0",
                "danielstjules/stringy": "~1.8",
                "doctrine/inflector": "~1.0",
                "ext-mbstring": "*",
                "ext-openssl": "*",
                "jeremeamia/superclosure": "~2.0",
                "league/flysystem": "~1.0",
                "monolog/monolog": "~1.11",
                "mtdowling/cron-expression": "~1.0",
                "nesbot/carbon": "~1.19",
                "paragonie/random_compat": "~1.1",
                "php": ">=5.5.9",
                "psy/psysh": "0.6.*",
                "swiftmailer/swiftmailer": "~5.1",
                "symfony/console": "2.7.*",
                "symfony/css-selector": "2.7.*",
                "symfony/debug": "2.7.*",
                "symfony/dom-crawler": "2.7.*",
                "symfony/finder": "2.7.*",
                "symfony/http-foundation": "2.7.*",
                "symfony/http-kernel": "2.7.*",
                "symfony/process": "2.7.*",
                "symfony/routing": "2.7.*",
                "symfony/translation": "2.7.*",
                "symfony/var-dumper": "2.7.*",
                "vlucas/phpdotenv": "~1.0"
            },
            "replace": {
                "illuminate/auth": "self.version",
                "illuminate/broadcasting": "self.version",
                "illuminate/bus": "self.version",
                "illuminate/cache": "self.version",
                "illuminate/config": "self.version",
                "illuminate/console": "self.version",
                "illuminate/container": "self.version",
                "illuminate/contracts": "self.version",
                "illuminate/cookie": "self.version",
                "illuminate/database": "self.version",
                "illuminate/encryption": "self.version",
                "illuminate/events": "self.version",
                "illuminate/exception": "self.version",
                "illuminate/filesystem": "self.version",
                "illuminate/foundation": "self.version",
                "illuminate/hashing": "self.version",
                "illuminate/http": "self.version",
                "illuminate/log": "self.version",
                "illuminate/mail": "self.version",
                "illuminate/pagination": "self.version",
                "illuminate/pipeline": "self.version",
                "illuminate/queue": "self.version",
                "illuminate/redis": "self.version",
                "illuminate/routing": "self.version",
                "illuminate/session": "self.version",
                "illuminate/support": "self.version",
                "illuminate/translation": "self.version",
                "illuminate/validation": "self.version",
                "illuminate/view": "self.version"
            },
            "require-dev": {
                "aws/aws-sdk-php": "~3.0",
                "iron-io/iron_mq": "~2.0",
                "mockery/mockery": "~0.9.1",
                "pda/pheanstalk": "~3.0",
                "phpunit/phpunit": "~4.0",
                "predis/predis": "~1.0"
            },
            "suggest": {
                "aws/aws-sdk-php": "Required to use the SQS queue driver and SES mail driver (~3.0).",
                "doctrine/dbal": "Required to rename columns and drop SQLite columns (~2.4).",
                "fzaninotto/faker": "Required to use the eloquent factory builder (~1.4).",
                "guzzlehttp/guzzle": "Required to use the Mailgun and Mandrill mail drivers (~5.3|~6.0).",
                "iron-io/iron_mq": "Required to use the iron queue driver (~2.0).",
                "league/flysystem-aws-s3-v3": "Required to use the Flysystem S3 driver (~1.0).",
                "league/flysystem-rackspace": "Required to use the Flysystem Rackspace driver (~1.0).",
                "pda/pheanstalk": "Required to use the beanstalk queue driver (~3.0).",
                "predis/predis": "Required to use the redis cache and queue drivers (~1.0).",
                "pusher/pusher-php-server": "Required to use the Pusher broadcast driver (~2.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/Illuminate/Queue/IlluminateQueueClosure.php"
                ],
                "files": [
                    "src/Illuminate/Foundation/helpers.php",
                    "src/Illuminate/Support/helpers.php"
                ],
                "psr-4": {
                    "Illuminate\\": "src/Illuminate/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylorotwell@gmail.com"
                }
            ],
            "description": "The Laravel Framework.",
            "homepage": "http://laravel.com",
            "keywords": [
                "framework",
                "laravel"
            ],
            "time": "2015-11-11 22:45:42"
        },
        {
            "name": "league/flysystem",
            "version": "1.0.15",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/flysystem.git",
                "reference": "31525caf9e8772683672fefd8a1ca0c0736020f4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/31525caf9e8772683672fefd8a1ca0c0736020f4",
                "reference": "31525caf9e8772683672fefd8a1ca0c0736020f4",
                "shasum": ""
            },
            "require": {
                "php": ">=5.4.0"
            },
            "conflict": {
                "league/flysystem-sftp": "<1.0.6"
            },
            "require-dev": {
                "ext-fileinfo": "*",
                "mockery/mockery": "~0.9",
                "phpspec/phpspec": "^2.2",
                "phpspec/prophecy-phpunit": "~1.0",
                "phpunit/phpunit": "~4.1"
            },
            "suggest": {
                "ext-fileinfo": "Required for MimeType",
                "league/flysystem-aws-s3-v2": "Allows you to use S3 storage with AWS SDK v2",
                "league/flysystem-aws-s3-v3": "Allows you to use S3 storage with AWS SDK v3",
                "league/flysystem-azure": "Allows you to use Windows Azure Blob storage",
                "league/flysystem-cached-adapter": "Flysystem adapter decorator for metadata caching",
                "league/flysystem-copy": "Allows you to use Copy.com storage",
                "league/flysystem-dropbox": "Allows you to use Dropbox storage",
                "league/flysystem-eventable-filesystem": "Allows you to use EventableFilesystem",
                "league/flysystem-rackspace": "Allows you to use Rackspace Cloud Files",
                "league/flysystem-sftp": "Allows you to use SFTP server storage via phpseclib",
                "league/flysystem-webdav": "Allows you to use WebDAV storage",
                "league/flysystem-ziparchive": "Allows you to use ZipArchive adapter"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\Flysystem\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frenky.net"
                }
            ],
            "description": "Filesystem abstraction: Many filesystems, one API.",
            "keywords": [
                "Cloud Files",
                "WebDAV",
                "abstraction",
                "aws",
                "cloud",
                "copy.com",
                "dropbox",
                "file systems",
                "files",
                "filesystem",
                "filesystems",
                "ftp",
                "rackspace",
                "remote",
                "s3",
                "sftp",
                "storage"
            ],
            "time": "2015-09-30 22:26:59"
        },
        {
            "name": "monolog/monolog",
            "version": "1.17.2",
            "source": {
                "type": "git",
                "url": "https://github.com/Seldaek/monolog.git",
                "reference": "bee7f0dc9c3e0b69a6039697533dca1e845c8c24"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Seldaek/monolog/zipball/bee7f0dc9c3e0b69a6039697533dca1e845c8c24",
                "reference": "bee7f0dc9c3e0b69a6039697533dca1e845c8c24",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0",
                "psr/log": "~1.0"
            },
            "provide": {
                "psr/log-implementation": "1.0.0"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^2.4.9",
                "doctrine/couchdb": "~1.0@dev",
                "graylog2/gelf-php": "~1.0",
                "jakub-onderka/php-parallel-lint": "0.9",
                "php-console/php-console": "^3.1.3",
                "phpunit/phpunit": "~4.5",
                "phpunit/phpunit-mock-objects": "2.3.0",
                "raven/raven": "^0.13",
                "ruflin/elastica": ">=0.90 <3.0",
                "swiftmailer/swiftmailer": "~5.3",
                "videlalvaro/php-amqplib": "~2.4"
            },
            "suggest": {
                "aws/aws-sdk-php": "Allow sending log messages to AWS services like DynamoDB",
                "doctrine/couchdb": "Allow sending log messages to a CouchDB server",
                "ext-amqp": "Allow sending log messages to an AMQP server (1.0+ required)",
                "ext-mongo": "Allow sending log messages to a MongoDB server",
                "graylog2/gelf-php": "Allow sending log messages to a GrayLog2 server",
                "php-console/php-console": "Allow sending log messages to Google Chrome",
                "raven/raven": "Allow sending log messages to a Sentry server",
                "rollbar/rollbar": "Allow sending log messages to Rollbar",
                "ruflin/elastica": "Allow sending log messages to an Elastic Search server",
                "videlalvaro/php-amqplib": "Allow sending log messages to an AMQP server using php-amqplib"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.16.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Monolog\\": "src/Monolog"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jordi Boggiano",
                    "email": "j.boggiano@seld.be",
                    "homepage": "http://seld.be"
                }
            ],
            "description": "Sends your logs to files, sockets, inboxes, databases and various web services",
            "homepage": "http://github.com/Seldaek/monolog",
            "keywords": [
                "log",
                "logging",
                "psr-3"
            ],
            "time": "2015-10-14 12:51:02"
        },
        {
            "name": "mtdowling/cron-expression",
            "version": "v1.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/mtdowling/cron-expression.git",
                "reference": "fd92e883195e5dfa77720b1868cf084b08be4412"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/mtdowling/cron-expression/zipball/fd92e883195e5dfa77720b1868cf084b08be4412",
                "reference": "fd92e883195e5dfa77720b1868cf084b08be4412",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*"
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "Cron": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                }
            ],
            "description": "CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due",
            "keywords": [
                "cron",
                "schedule"
            ],
            "time": "2015-01-11 23:07:46"
        },
        {
            "name": "nesbot/carbon",
            "version": "1.21.0",
            "source": {
                "type": "git",
                "url": "https://github.com/briannesbitt/Carbon.git",
                "reference": "7b08ec6f75791e130012f206e3f7b0e76e18e3d7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/briannesbitt/Carbon/zipball/7b08ec6f75791e130012f206e3f7b0e76e18e3d7",
                "reference": "7b08ec6f75791e130012f206e3f7b0e76e18e3d7",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0",
                "symfony/translation": "~2.6|~3.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.0|~5.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Carbon\\": "src/Carbon/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Brian Nesbitt",
                    "email": "brian@nesbot.com",
                    "homepage": "http://nesbot.com"
                }
            ],
            "description": "A simple API extension for DateTime.",
            "homepage": "http://carbon.nesbot.com",
            "keywords": [
                "date",
                "datetime",
                "time"
            ],
            "time": "2015-11-04 20:07:17"
        },
        {
            "name": "nikic/php-parser",
            "version": "v1.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/nikic/PHP-Parser.git",
                "reference": "f78af2c9c86107aa1a34cd1dbb5bbe9eeb0d9f51"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nikic/PHP-Parser/zipball/f78af2c9c86107aa1a34cd1dbb5bbe9eeb0d9f51",
                "reference": "f78af2c9c86107aa1a34cd1dbb5bbe9eeb0d9f51",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": ">=5.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4-dev"
                }
            },
            "autoload": {
                "files": [
                    "lib/bootstrap.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Nikita Popov"
                }
            ],
            "description": "A PHP parser written in PHP",
            "keywords": [
                "parser",
                "php"
            ],
            "time": "2015-09-19 14:15:08"
        },
        {
            "name": "paragonie/random_compat",
            "version": "1.1.0",
            "source": {
                "type": "git",
                "url": "https://github.com/paragonie/random_compat.git",
                "reference": "19f765b66c6fbb56ee3b11bc16d52e38eebdc295"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/paragonie/random_compat/zipball/19f765b66c6fbb56ee3b11bc16d52e38eebdc295",
                "reference": "19f765b66c6fbb56ee3b11bc16d52e38eebdc295",
                "shasum": ""
            },
            "require": {
                "php": ">=5.2.0"
            },
            "require-dev": {
                "phpunit/phpunit": "4.*|5.*"
            },
            "suggest": {
                "ext-libsodium": "Provides a modern crypto API that can be used to generate random bytes."
            },
            "type": "library",
            "autoload": {
                "files": [
                    "lib/random.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Paragon Initiative Enterprises",
                    "email": "security@paragonie.com",
                    "homepage": "https://paragonie.com"
                }
            ],
            "description": "PHP 5.x polyfill for random_bytes() and random_int() from PHP 7",
            "keywords": [
                "csprng",
                "pseudorandom",
                "random"
            ],
            "time": "2015-11-10 00:45:41"
        },
        {
            "name": "psr/log",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/log.git",
                "reference": "fe0936ee26643249e916849d48e3a51d5f5e278b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/log/zipball/fe0936ee26643249e916849d48e3a51d5f5e278b",
                "reference": "fe0936ee26643249e916849d48e3a51d5f5e278b",
                "shasum": ""
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "Psr\\Log\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interface for logging libraries",
            "keywords": [
                "log",
                "psr",
                "psr-3"
            ],
            "time": "2012-12-21 11:40:51"
        },
        {
            "name": "psy/psysh",
            "version": "v0.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/bobthecow/psysh.git",
                "reference": "0f04df0b23663799a8941fae13cd8e6299bde3ed"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/bobthecow/psysh/zipball/0f04df0b23663799a8941fae13cd8e6299bde3ed",
                "reference": "0f04df0b23663799a8941fae13cd8e6299bde3ed",
                "shasum": ""
            },
            "require": {
                "dnoegel/php-xdg-base-dir": "0.1",
                "jakub-onderka/php-console-highlighter": "0.3.*",
                "nikic/php-parser": "^1.2.1|~2.0",
                "php": ">=5.3.9",
                "symfony/console": "~2.3.10|^2.4.2|~3.0",
                "symfony/var-dumper": "~2.7|~3.0"
            },
            "require-dev": {
                "fabpot/php-cs-fixer": "~1.5",
                "phpunit/phpunit": "~3.7|~4.0|~5.0",
                "squizlabs/php_codesniffer": "~2.0",
                "symfony/finder": "~2.1|~3.0"
            },
            "suggest": {
                "ext-pcntl": "Enabling the PCNTL extension makes PsySH a lot happier :)",
                "ext-pdo-sqlite": "The doc command requires SQLite to work.",
                "ext-posix": "If you have PCNTL, you'll want the POSIX extension as well.",
                "ext-readline": "Enables support for arrow-key history navigation, and showing and manipulating command history."
            },
            "bin": [
                "bin/psysh"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-develop": "0.7.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Psy/functions.php"
                ],
                "psr-4": {
                    "Psy\\": "src/Psy/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Justin Hileman",
                    "email": "justin@justinhileman.info",
                    "homepage": "http://justinhileman.com"
                }
            ],
            "description": "An interactive shell for modern PHP.",
            "homepage": "http://psysh.org",
            "keywords": [
                "REPL",
                "console",
                "interactive",
                "shell"
            ],
            "time": "2015-11-12 16:18:56"
        },
        {
            "name": "swiftmailer/swiftmailer",
            "version": "v5.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/swiftmailer/swiftmailer.git",
                "reference": "0697e6aa65c83edf97bb0f23d8763f94e3f11421"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/swiftmailer/swiftmailer/zipball/0697e6aa65c83edf97bb0f23d8763f94e3f11421",
                "reference": "0697e6aa65c83edf97bb0f23d8763f94e3f11421",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "mockery/mockery": "~0.9.1,<0.9.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.4-dev"
                }
            },
            "autoload": {
                "files": [
                    "lib/swift_required.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Chris Corbyn"
                },
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                }
            ],
            "description": "Swiftmailer, free feature-rich PHP mailer",
            "homepage": "http://swiftmailer.org",
            "keywords": [
                "email",
                "mail",
                "mailer"
            ],
            "time": "2015-06-06 14:19:39"
        },
        {
            "name": "symfony/console",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/console.git",
                "reference": "16bb1cb86df43c90931df65f529e7ebd79636750"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/console/zipball/16bb1cb86df43c90931df65f529e7ebd79636750",
                "reference": "16bb1cb86df43c90931df65f529e7ebd79636750",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/event-dispatcher": "~2.1",
                "symfony/process": "~2.1"
            },
            "suggest": {
                "psr/log": "For using the console logger",
                "symfony/event-dispatcher": "",
                "symfony/process": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Console\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Console Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-18 09:54:26"
        },
        {
            "name": "symfony/css-selector",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/css-selector.git",
                "reference": "abb47717fb88aebd9437da2fc8bb01a50a36679f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/css-selector/zipball/abb47717fb88aebd9437da2fc8bb01a50a36679f",
                "reference": "abb47717fb88aebd9437da2fc8bb01a50a36679f",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\CssSelector\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jean-François Simon",
                    "email": "jeanfrancois.simon@sensiolabs.com"
                },
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony CssSelector Component",
            "homepage": "https://symfony.com",
            "time": "2015-10-30 20:10:21"
        },
        {
            "name": "symfony/debug",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/debug.git",
                "reference": "0dbc119596f4afc82d9b2eb2a7e6a4af1ee763fa"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/debug/zipball/0dbc119596f4afc82d9b2eb2a7e6a4af1ee763fa",
                "reference": "0dbc119596f4afc82d9b2eb2a7e6a4af1ee763fa",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9",
                "psr/log": "~1.0"
            },
            "conflict": {
                "symfony/http-kernel": ">=2.3,<2.3.24|~2.4.0|>=2.5,<2.5.9|>=2.6,<2.6.2"
            },
            "require-dev": {
                "symfony/class-loader": "~2.2",
                "symfony/http-kernel": "~2.3.24|~2.5.9|~2.6,>=2.6.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Debug\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Debug Component",
            "homepage": "https://symfony.com",
            "time": "2015-10-30 20:10:21"
        },
        {
            "name": "symfony/dom-crawler",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/dom-crawler.git",
                "reference": "b33593cbfe1d81b50d48353f338aca76a08658d8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/dom-crawler/zipball/b33593cbfe1d81b50d48353f338aca76a08658d8",
                "reference": "b33593cbfe1d81b50d48353f338aca76a08658d8",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "require-dev": {
                "symfony/css-selector": "~2.3"
            },
            "suggest": {
                "symfony/css-selector": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\DomCrawler\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony DomCrawler Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-02 20:20:53"
        },
        {
            "name": "symfony/event-dispatcher",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher.git",
                "reference": "7e2f9c31645680026c2372edf66f863fc7757af5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher/zipball/7e2f9c31645680026c2372edf66f863fc7757af5",
                "reference": "7e2f9c31645680026c2372edf66f863fc7757af5",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "~2.0,>=2.0.5",
                "symfony/dependency-injection": "~2.6",
                "symfony/expression-language": "~2.6",
                "symfony/stopwatch": "~2.3"
            },
            "suggest": {
                "symfony/dependency-injection": "",
                "symfony/http-kernel": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\EventDispatcher\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony EventDispatcher Component",
            "homepage": "https://symfony.com",
            "time": "2015-10-30 20:10:21"
        },
        {
            "name": "symfony/finder",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/finder.git",
                "reference": "a06a0c0ff7db3736a50d530c908cca547bf13da9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/finder/zipball/a06a0c0ff7db3736a50d530c908cca547bf13da9",
                "reference": "a06a0c0ff7db3736a50d530c908cca547bf13da9",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Finder\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Finder Component",
            "homepage": "https://symfony.com",
            "time": "2015-10-30 20:10:21"
        },
        {
            "name": "symfony/http-foundation",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-foundation.git",
                "reference": "e83a3d105ddaf5a113e803c904fdec552d1f1c35"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-foundation/zipball/e83a3d105ddaf5a113e803c904fdec552d1f1c35",
                "reference": "e83a3d105ddaf5a113e803c904fdec552d1f1c35",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "require-dev": {
                "symfony/expression-language": "~2.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpFoundation\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ],
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony HttpFoundation Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-20 17:41:18"
        },
        {
            "name": "symfony/http-kernel",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-kernel.git",
                "reference": "5570de31e8fbc03777a8c61eb24f9b626e5e5941"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-kernel/zipball/5570de31e8fbc03777a8c61eb24f9b626e5e5941",
                "reference": "5570de31e8fbc03777a8c61eb24f9b626e5e5941",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9",
                "psr/log": "~1.0",
                "symfony/debug": "~2.6,>=2.6.2",
                "symfony/event-dispatcher": "~2.6,>=2.6.7",
                "symfony/http-foundation": "~2.5,>=2.5.4"
            },
            "conflict": {
                "symfony/config": "<2.7"
            },
            "require-dev": {
                "symfony/browser-kit": "~2.3",
                "symfony/class-loader": "~2.1",
                "symfony/config": "~2.7",
                "symfony/console": "~2.3",
                "symfony/css-selector": "~2.0,>=2.0.5",
                "symfony/dependency-injection": "~2.2",
                "symfony/dom-crawler": "~2.0,>=2.0.5",
                "symfony/expression-language": "~2.4",
                "symfony/finder": "~2.0,>=2.0.5",
                "symfony/process": "~2.0,>=2.0.5",
                "symfony/routing": "~2.2",
                "symfony/stopwatch": "~2.3",
                "symfony/templating": "~2.2",
                "symfony/translation": "~2.0,>=2.0.5",
                "symfony/var-dumper": "~2.6"
            },
            "suggest": {
                "symfony/browser-kit": "",
                "symfony/class-loader": "",
                "symfony/config": "",
                "symfony/console": "",
                "symfony/dependency-injection": "",
                "symfony/finder": "",
                "symfony/var-dumper": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpKernel\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony HttpKernel Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-23 11:57:49"
        },
        {
            "name": "symfony/process",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/process.git",
                "reference": "f6290983c8725d0afa29bdc3e5295879de3e58f5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/process/zipball/f6290983c8725d0afa29bdc3e5295879de3e58f5",
                "reference": "f6290983c8725d0afa29bdc3e5295879de3e58f5",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Process\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Process Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-19 16:11:24"
        },
        {
            "name": "symfony/routing",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/routing.git",
                "reference": "7450f6196711b124fb8b04a12286d01a0401ddfe"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/routing/zipball/7450f6196711b124fb8b04a12286d01a0401ddfe",
                "reference": "7450f6196711b124fb8b04a12286d01a0401ddfe",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "conflict": {
                "symfony/config": "<2.7"
            },
            "require-dev": {
                "doctrine/annotations": "~1.0",
                "doctrine/common": "~2.2",
                "psr/log": "~1.0",
                "symfony/config": "~2.7",
                "symfony/expression-language": "~2.4",
                "symfony/http-foundation": "~2.3",
                "symfony/yaml": "~2.0,>=2.0.5"
            },
            "suggest": {
                "doctrine/annotations": "For using the annotation loader",
                "symfony/config": "For using the all-in-one router or any loader",
                "symfony/expression-language": "For using expression matching",
                "symfony/yaml": "For using the YAML loader"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Routing\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Routing Component",
            "homepage": "https://symfony.com",
            "keywords": [
                "router",
                "routing",
                "uri",
                "url"
            ],
            "time": "2015-11-18 13:41:01"
        },
        {
            "name": "symfony/translation",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation.git",
                "reference": "e4ecb9c3ba1304eaf24de15c2d7a428101c1982f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation/zipball/e4ecb9c3ba1304eaf24de15c2d7a428101c1982f",
                "reference": "e4ecb9c3ba1304eaf24de15c2d7a428101c1982f",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "conflict": {
                "symfony/config": "<2.7"
            },
            "require-dev": {
                "psr/log": "~1.0",
                "symfony/config": "~2.7",
                "symfony/intl": "~2.4",
                "symfony/yaml": "~2.2"
            },
            "suggest": {
                "psr/log": "To use logging capability in translator",
                "symfony/config": "",
                "symfony/yaml": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Translation Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-18 13:41:01"
        },
        {
            "name": "symfony/var-dumper",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/var-dumper.git",
                "reference": "72bcb27411780eaee9469729aace73c0d46fb2b8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/var-dumper/zipball/72bcb27411780eaee9469729aace73c0d46fb2b8",
                "reference": "72bcb27411780eaee9469729aace73c0d46fb2b8",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "suggest": {
                "ext-symfony_debug": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "files": [
                    "Resources/functions/dump.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\VarDumper\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony mechanism for exploring and dumping PHP variables",
            "homepage": "https://symfony.com",
            "keywords": [
                "debug",
                "dump"
            ],
            "time": "2015-11-18 13:41:01"
        },
        {
            "name": "vlucas/phpdotenv",
            "version": "v1.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/vlucas/phpdotenv.git",
                "reference": "0cac554ce06277e33ddf9f0b7ade4b8bbf2af3fa"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/0cac554ce06277e33ddf9f0b7ade4b8bbf2af3fa",
                "reference": "0cac554ce06277e33ddf9f0b7ade4b8bbf2af3fa",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.0"
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "Dotenv": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD"
            ],
            "authors": [
                {
                    "name": "Vance Lucas",
                    "email": "vance@vancelucas.com",
                    "homepage": "http://www.vancelucas.com"
                }
            ],
            "description": "Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.",
            "homepage": "http://github.com/vlucas/phpdotenv",
            "keywords": [
                "dotenv",
                "env",
                "environment"
            ],
            "time": "2015-05-30 15:59:26"
        }
    ],
    "packages-dev": [
        {
            "name": "doctrine/instantiator",
            "version": "1.0.5",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/instantiator.git",
                "reference": "8e884e78f9f0eb1329e445619e04456e64d8051d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/instantiator/zipball/8e884e78f9f0eb1329e445619e04456e64d8051d",
                "reference": "8e884e78f9f0eb1329e445619e04456e64d8051d",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3,<8.0-DEV"
            },
            "require-dev": {
                "athletic/athletic": "~0.1.8",
                "ext-pdo": "*",
                "ext-phar": "*",
                "phpunit/phpunit": "~4.0",
                "squizlabs/php_codesniffer": "~2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Doctrine\\Instantiator\\": "src/Doctrine/Instantiator/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Marco Pivetta",
                    "email": "ocramius@gmail.com",
                    "homepage": "http://ocramius.github.com/"
                }
            ],
            "description": "A small, lightweight utility to instantiate objects in PHP without invoking their constructors",
            "homepage": "https://github.com/doctrine/instantiator",
            "keywords": [
                "constructor",
                "instantiate"
            ],
            "time": "2015-06-14 21:17:01"
        },
        {
            "name": "fzaninotto/faker",
            "version": "v1.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/fzaninotto/Faker.git",
                "reference": "d0190b156bcca848d401fb80f31f504f37141c8d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fzaninotto/Faker/zipball/d0190b156bcca848d401fb80f31f504f37141c8d",
                "reference": "d0190b156bcca848d401fb80f31f504f37141c8d",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.0",
                "squizlabs/php_codesniffer": "~1.5"
            },
            "suggest": {
                "ext-intl": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Faker\\": "src/Faker/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "François Zaninotto"
                }
            ],
            "description": "Faker is a PHP library that generates fake data for you.",
            "keywords": [
                "data",
                "faker",
                "fixtures"
            ],
            "time": "2015-05-29 06:29:14"
        },
        {
            "name": "hamcrest/hamcrest-php",
            "version": "v1.2.2",
            "source": {
                "type": "git",
                "url": "https://github.com/hamcrest/hamcrest-php.git",
                "reference": "b37020aa976fa52d3de9aa904aa2522dc518f79c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/hamcrest/hamcrest-php/zipball/b37020aa976fa52d3de9aa904aa2522dc518f79c",
                "reference": "b37020aa976fa52d3de9aa904aa2522dc518f79c",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.2"
            },
            "replace": {
                "cordoval/hamcrest-php": "*",
                "davedevelopment/hamcrest-php": "*",
                "kodova/hamcrest-php": "*"
            },
            "require-dev": {
                "phpunit/php-file-iterator": "1.3.3",
                "satooshi/php-coveralls": "dev-master"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "hamcrest"
                ],
                "files": [
                    "hamcrest/Hamcrest.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD"
            ],
            "description": "This is the PHP port of Hamcrest Matchers",
            "keywords": [
                "test"
            ],
            "time": "2015-05-11 14:41:42"
        },
        {
            "name": "mockery/mockery",
            "version": "0.9.4",
            "source": {
                "type": "git",
                "url": "https://github.com/padraic/mockery.git",
                "reference": "70bba85e4aabc9449626651f48b9018ede04f86b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/padraic/mockery/zipball/70bba85e4aabc9449626651f48b9018ede04f86b",
                "reference": "70bba85e4aabc9449626651f48b9018ede04f86b",
                "shasum": ""
            },
            "require": {
                "hamcrest/hamcrest-php": "~1.1",
                "lib-pcre": ">=7.0",
                "php": ">=5.3.2"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "0.9.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Mockery": "library/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Pádraic Brady",
                    "email": "padraic.brady@gmail.com",
                    "homepage": "http://blog.astrumfutura.com"
                },
                {
                    "name": "Dave Marshall",
                    "email": "dave.marshall@atstsolutions.co.uk",
                    "homepage": "http://davedevelopment.co.uk"
                }
            ],
            "description": "Mockery is a simple yet flexible PHP mock object framework for use in unit testing with PHPUnit, PHPSpec or any other testing framework. Its core goal is to offer a test double framework with a succinct API capable of clearly defining all possible object operations and interactions using a human readable Domain Specific Language (DSL). Designed as a drop in alternative to PHPUnit's phpunit-mock-objects library, Mockery is easy to integrate with PHPUnit and can operate alongside phpunit-mock-objects without the World ending.",
            "homepage": "http://github.com/padraic/mockery",
            "keywords": [
                "BDD",
                "TDD",
                "library",
                "mock",
                "mock objects",
                "mockery",
                "stub",
                "test",
                "test double",
                "testing"
            ],
            "time": "2015-04-02 19:54:00"
        },
        {
            "name": "phpdocumentor/reflection-docblock",
            "version": "2.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionDocBlock.git",
                "reference": "d68dbdc53dc358a816f00b300704702b2eaff7b8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/d68dbdc53dc358a816f00b300704702b2eaff7b8",
                "reference": "d68dbdc53dc358a816f00b300704702b2eaff7b8",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.0"
            },
            "suggest": {
                "dflydev/markdown": "~1.0",
                "erusev/parsedown": "~1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "phpDocumentor": [
                        "src/"
                    ]
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mike van Riel",
                    "email": "mike.vanriel@naenius.com"
                }
            ],
            "time": "2015-02-03 12:10:50"
        },
        {
            "name": "phpspec/php-diff",
            "version": "v1.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/phpspec/php-diff.git",
                "reference": "30e103d19519fe678ae64a60d77884ef3d71b28a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpspec/php-diff/zipball/30e103d19519fe678ae64a60d77884ef3d71b28a",
                "reference": "30e103d19519fe678ae64a60d77884ef3d71b28a",
                "shasum": ""
            },
            "type": "library",
            "autoload": {
                "psr-0": {
                    "Diff": "lib/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Chris Boulton",
                    "homepage": "http://github.com/chrisboulton",
                    "role": "Original developer"
                }
            ],
            "description": "A comprehensive library for generating differences between two hashable objects (strings or arrays).",
            "time": "2013-11-01 13:02:21"
        },
        {
            "name": "phpspec/phpspec",
            "version": "2.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpspec/phpspec.git",
                "reference": "36635a903bdeb54899d7407bc95610501fd98559"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpspec/phpspec/zipball/36635a903bdeb54899d7407bc95610501fd98559",
                "reference": "36635a903bdeb54899d7407bc95610501fd98559",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.0.1",
                "php": ">=5.3.3",
                "phpspec/php-diff": "~1.0.0",
                "phpspec/prophecy": "~1.4",
                "sebastian/exporter": "~1.0",
                "symfony/console": "~2.3",
                "symfony/event-dispatcher": "~2.1",
                "symfony/finder": "~2.1",
                "symfony/process": "^2.6",
                "symfony/yaml": "~2.1"
            },
            "require-dev": {
                "behat/behat": "^3.0.11",
                "bossa/phpspec2-expect": "~1.0",
                "phpunit/phpunit": "~4.4",
                "symfony/filesystem": "~2.1"
            },
            "suggest": {
                "phpspec/nyan-formatters": "~1.0 – Adds Nyan formatters"
            },
            "bin": [
                "bin/phpspec"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.2.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "PhpSpec": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Konstantin Kudryashov",
                    "email": "ever.zet@gmail.com",
                    "homepage": "http://everzet.com"
                },
                {
                    "name": "Marcello Duarte",
                    "homepage": "http://marcelloduarte.net/"
                }
            ],
            "description": "Specification-oriented BDD framework for PHP 5.3+",
            "homepage": "http://phpspec.net/",
            "keywords": [
                "BDD",
                "SpecBDD",
                "TDD",
                "spec",
                "specification",
                "testing",
                "tests"
            ],
            "time": "2015-09-07 07:07:37"
        },
        {
            "name": "phpspec/prophecy",
            "version": "v1.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpspec/prophecy.git",
                "reference": "4745ded9307786b730d7a60df5cb5a6c43cf95f7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpspec/prophecy/zipball/4745ded9307786b730d7a60df5cb5a6c43cf95f7",
                "reference": "4745ded9307786b730d7a60df5cb5a6c43cf95f7",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.0.2",
                "phpdocumentor/reflection-docblock": "~2.0",
                "sebastian/comparator": "~1.1"
            },
            "require-dev": {
                "phpspec/phpspec": "~2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Prophecy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Konstantin Kudryashov",
                    "email": "ever.zet@gmail.com",
                    "homepage": "http://everzet.com"
                },
                {
                    "name": "Marcello Duarte",
                    "email": "marcello.duarte@gmail.com"
                }
            ],
            "description": "Highly opinionated mocking framework for PHP 5.3+",
            "homepage": "https://github.com/phpspec/prophecy",
            "keywords": [
                "Double",
                "Dummy",
                "fake",
                "mock",
                "spy",
                "stub"
            ],
            "time": "2015-08-13 10:07:40"
        },
        {
            "name": "phpunit/php-code-coverage",
            "version": "2.2.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-code-coverage.git",
                "reference": "eabf68b476ac7d0f73793aada060f1c1a9bf8979"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/eabf68b476ac7d0f73793aada060f1c1a9bf8979",
                "reference": "eabf68b476ac7d0f73793aada060f1c1a9bf8979",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3",
                "phpunit/php-file-iterator": "~1.3",
                "phpunit/php-text-template": "~1.2",
                "phpunit/php-token-stream": "~1.3",
                "sebastian/environment": "^1.3.2",
                "sebastian/version": "~1.0"
            },
            "require-dev": {
                "ext-xdebug": ">=2.1.4",
                "phpunit/phpunit": "~4"
            },
            "suggest": {
                "ext-dom": "*",
                "ext-xdebug": ">=2.2.1",
                "ext-xmlwriter": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.2.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sb@sebastian-bergmann.de",
                    "role": "lead"
                }
            ],
            "description": "Library that provides collection, processing, and rendering functionality for PHP code coverage information.",
            "homepage": "https://github.com/sebastianbergmann/php-code-coverage",
            "keywords": [
                "coverage",
                "testing",
                "xunit"
            ],
            "time": "2015-10-06 15:47:00"
        },
        {
            "name": "phpunit/php-file-iterator",
            "version": "1.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-file-iterator.git",
                "reference": "6150bf2c35d3fc379e50c7602b75caceaa39dbf0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/6150bf2c35d3fc379e50c7602b75caceaa39dbf0",
                "reference": "6150bf2c35d3fc379e50c7602b75caceaa39dbf0",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sb@sebastian-bergmann.de",
                    "role": "lead"
                }
            ],
            "description": "FilterIterator implementation that filters files based on a list of suffixes.",
            "homepage": "https://github.com/sebastianbergmann/php-file-iterator/",
            "keywords": [
                "filesystem",
                "iterator"
            ],
            "time": "2015-06-21 13:08:43"
        },
        {
            "name": "phpunit/php-text-template",
            "version": "1.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-text-template.git",
                "reference": "31f8b717e51d9a2afca6c9f046f5d69fc27c8686"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686",
                "reference": "31f8b717e51d9a2afca6c9f046f5d69fc27c8686",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Simple template engine.",
            "homepage": "https://github.com/sebastianbergmann/php-text-template/",
            "keywords": [
                "template"
            ],
            "time": "2015-06-21 13:50:34"
        },
        {
            "name": "phpunit/php-timer",
            "version": "1.0.7",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-timer.git",
                "reference": "3e82f4e9fc92665fafd9157568e4dcb01d014e5b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-timer/zipball/3e82f4e9fc92665fafd9157568e4dcb01d014e5b",
                "reference": "3e82f4e9fc92665fafd9157568e4dcb01d014e5b",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sb@sebastian-bergmann.de",
                    "role": "lead"
                }
            ],
            "description": "Utility class for timing",
            "homepage": "https://github.com/sebastianbergmann/php-timer/",
            "keywords": [
                "timer"
            ],
            "time": "2015-06-21 08:01:12"
        },
        {
            "name": "phpunit/php-token-stream",
            "version": "1.4.8",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-token-stream.git",
                "reference": "3144ae21711fb6cac0b1ab4cbe63b75ce3d4e8da"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/3144ae21711fb6cac0b1ab4cbe63b75ce3d4e8da",
                "reference": "3144ae21711fb6cac0b1ab4cbe63b75ce3d4e8da",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Wrapper around PHP's tokenizer extension.",
            "homepage": "https://github.com/sebastianbergmann/php-token-stream/",
            "keywords": [
                "tokenizer"
            ],
            "time": "2015-09-15 10:49:45"
        },
        {
            "name": "phpunit/phpunit",
            "version": "4.8.18",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/phpunit.git",
                "reference": "fa33d4ad96481b91df343d83e8c8aabed6b1dfd3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/phpunit/zipball/fa33d4ad96481b91df343d83e8c8aabed6b1dfd3",
                "reference": "fa33d4ad96481b91df343d83e8c8aabed6b1dfd3",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-json": "*",
                "ext-pcre": "*",
                "ext-reflection": "*",
                "ext-spl": "*",
                "php": ">=5.3.3",
                "phpspec/prophecy": "^1.3.1",
                "phpunit/php-code-coverage": "~2.1",
                "phpunit/php-file-iterator": "~1.4",
                "phpunit/php-text-template": "~1.2",
                "phpunit/php-timer": ">=1.0.6",
                "phpunit/phpunit-mock-objects": "~2.3",
                "sebastian/comparator": "~1.1",
                "sebastian/diff": "~1.2",
                "sebastian/environment": "~1.3",
                "sebastian/exporter": "~1.2",
                "sebastian/global-state": "~1.0",
                "sebastian/version": "~1.0",
                "symfony/yaml": "~2.1|~3.0"
            },
            "suggest": {
                "phpunit/php-invoker": "~1.1"
            },
            "bin": [
                "phpunit"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.8.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "The PHP Unit Testing framework.",
            "homepage": "https://phpunit.de/",
            "keywords": [
                "phpunit",
                "testing",
                "xunit"
            ],
            "time": "2015-11-11 11:32:49"
        },
        {
            "name": "phpunit/phpunit-mock-objects",
            "version": "2.3.8",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/phpunit-mock-objects.git",
                "reference": "ac8e7a3db35738d56ee9a76e78a4e03d97628983"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/phpunit-mock-objects/zipball/ac8e7a3db35738d56ee9a76e78a4e03d97628983",
                "reference": "ac8e7a3db35738d56ee9a76e78a4e03d97628983",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.0.2",
                "php": ">=5.3.3",
                "phpunit/php-text-template": "~1.2",
                "sebastian/exporter": "~1.2"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.4"
            },
            "suggest": {
                "ext-soap": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.3.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sb@sebastian-bergmann.de",
                    "role": "lead"
                }
            ],
            "description": "Mock Object library for PHPUnit",
            "homepage": "https://github.com/sebastianbergmann/phpunit-mock-objects/",
            "keywords": [
                "mock",
                "xunit"
            ],
            "time": "2015-10-02 06:51:40"
        },
        {
            "name": "sebastian/comparator",
            "version": "1.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/comparator.git",
                "reference": "937efb279bd37a375bcadf584dec0726f84dbf22"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/comparator/zipball/937efb279bd37a375bcadf584dec0726f84dbf22",
                "reference": "937efb279bd37a375bcadf584dec0726f84dbf22",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3",
                "sebastian/diff": "~1.2",
                "sebastian/exporter": "~1.2"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@2bepublished.at"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides the functionality to compare PHP values for equality",
            "homepage": "http://www.github.com/sebastianbergmann/comparator",
            "keywords": [
                "comparator",
                "compare",
                "equality"
            ],
            "time": "2015-07-26 15:48:44"
        },
        {
            "name": "sebastian/diff",
            "version": "1.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/diff.git",
                "reference": "863df9687835c62aa423a22412d26fa2ebde3fd3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/diff/zipball/863df9687835c62aa423a22412d26fa2ebde3fd3",
                "reference": "863df9687835c62aa423a22412d26fa2ebde3fd3",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.3-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Kore Nordmann",
                    "email": "mail@kore-nordmann.de"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Diff implementation",
            "homepage": "http://www.github.com/sebastianbergmann/diff",
            "keywords": [
                "diff"
            ],
            "time": "2015-02-22 15:13:53"
        },
        {
            "name": "sebastian/environment",
            "version": "1.3.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/environment.git",
                "reference": "6324c907ce7a52478eeeaede764f48733ef5ae44"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/environment/zipball/6324c907ce7a52478eeeaede764f48733ef5ae44",
                "reference": "6324c907ce7a52478eeeaede764f48733ef5ae44",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.3.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides functionality to handle HHVM/PHP environments",
            "homepage": "http://www.github.com/sebastianbergmann/environment",
            "keywords": [
                "Xdebug",
                "environment",
                "hhvm"
            ],
            "time": "2015-08-03 06:14:51"
        },
        {
            "name": "sebastian/exporter",
            "version": "1.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/exporter.git",
                "reference": "7ae5513327cb536431847bcc0c10edba2701064e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/exporter/zipball/7ae5513327cb536431847bcc0c10edba2701064e",
                "reference": "7ae5513327cb536431847bcc0c10edba2701064e",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3",
                "sebastian/recursion-context": "~1.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@2bepublished.at"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                }
            ],
            "description": "Provides the functionality to export PHP variables for visualization",
            "homepage": "http://www.github.com/sebastianbergmann/exporter",
            "keywords": [
                "export",
                "exporter"
            ],
            "time": "2015-06-21 07:55:53"
        },
        {
            "name": "sebastian/global-state",
            "version": "1.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/global-state.git",
                "reference": "bc37d50fea7d017d3d340f230811c9f1d7280af4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/global-state/zipball/bc37d50fea7d017d3d340f230811c9f1d7280af4",
                "reference": "bc37d50fea7d017d3d340f230811c9f1d7280af4",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.2"
            },
            "suggest": {
                "ext-uopz": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Snapshotting of global state",
            "homepage": "http://www.github.com/sebastianbergmann/global-state",
            "keywords": [
                "global state"
            ],
            "time": "2015-10-12 03:26:01"
        },
        {
            "name": "sebastian/recursion-context",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/recursion-context.git",
                "reference": "994d4a811bafe801fb06dccbee797863ba2792ba"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/994d4a811bafe801fb06dccbee797863ba2792ba",
                "reference": "994d4a811bafe801fb06dccbee797863ba2792ba",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.3"
            },
            "require-dev": {
                "phpunit/phpunit": "~4.4"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                }
            ],
            "description": "Provides functionality to recursively process PHP variables",
            "homepage": "http://www.github.com/sebastianbergmann/recursion-context",
            "time": "2015-06-21 08:04:50"
        },
        {
            "name": "sebastian/version",
            "version": "1.0.6",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/version.git",
                "reference": "58b3a85e7999757d6ad81c787a1fbf5ff6c628c6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/version/zipball/58b3a85e7999757d6ad81c787a1fbf5ff6c628c6",
                "reference": "58b3a85e7999757d6ad81c787a1fbf5ff6c628c6",
                "shasum": ""
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that helps with managing the version number of Git-hosted PHP projects",
            "homepage": "https://github.com/sebastianbergmann/version",
            "time": "2015-06-21 13:59:46"
        },
        {
            "name": "symfony/yaml",
            "version": "v2.7.7",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/yaml.git",
                "reference": "4cfcd7a9fceba662b3c036b7d9a91f6197af046c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/yaml/zipball/4cfcd7a9fceba662b3c036b7d9a91f6197af046c",
                "reference": "4cfcd7a9fceba662b3c036b7d9a91f6197af046c",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.9"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Yaml\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony Yaml Component",
            "homepage": "https://symfony.com",
            "time": "2015-11-18 13:41:01"
        }
    ],
    "aliases": [],
    "minimum-stability": "stable",
    "stability-flags": [],
    "prefer-stable": false,
    "prefer-lowest": false,
    "platform": {
        "php": ">=5.5.9"
    },
    "platform-dev": []
}