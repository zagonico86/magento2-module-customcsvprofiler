# Magento 2 csvfile profiler - one request per file

    ``zagonico/module-customcsvprofiler``

- [Mage2 Module Zagonico CustomCsvProfiler](#mage2-module-zagonico-customcsvprofiler)
  - [Main Functionalities](#main-functionalities)
  - [Installation](#installation)
    - [Type 1: Zip file](#type-1-zip-file)
    - [Type 2: Composer](#type-2-composer)
  - [Configuration](#configuration)
  - [Specifications](#specifications)
  - [Attributes](#attributes)


## Main Functionalities
Csvfile profiler that output one request per file instead of replacing var\log\profiler.log at each request.

You can enable this profiler using the command:
```
php bin\magento dev:profiler:enable "\\Zagonico\\CsvCustomProfiler\\Output\\Csvfile"
```
This class extends the standard  `csvfile` profiler type, but instead of overwriting the var/log/profiler.csv file each time, it creates a new file var/log/profiler-timestamp-random.csv.

You can read a discussion also at [https://www.zagonico.com/magento-2-csvfile-profiler-one-request-per-file/](https://www.zagonico.com/magento-2-csvfile-profiler-one-request-per-file/).

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Zagonico`
 - Enable the module by running `php bin/magento module:enable Zagonico_CustomCsvProfiler`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Compile classes by running `php bin/magento setup:di:compile`
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require zagonico/module-customcsvprofiler`
 - enable the module by running `php bin/magento module:enable Zagonico_CustomCsvProfiler`
 - apply database updates by running `php bin/magento setup:upgrade`
 - Compile classes by running `php bin/magento setup:di:compile`
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications




## Attributes



