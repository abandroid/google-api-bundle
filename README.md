Google API Bundle
=================

*By [endroid](http://endroid.nl/)*

[![Build Status](http://img.shields.io/travis/endroid/EndroidGoogleAPIBundle.svg)](http://travis-ci.org/endroid/EndroidGoogleAPIBundle)
[![Latest Stable Version](http://img.shields.io/packagist/v/endroid/google-api-bundle.svg)](https://packagist.org/packages/endroid/google-api-bundle)
[![Total Downloads](http://img.shields.io/packagist/dt/endroid/google-api-bundle.svg)](https://packagist.org/packages/endroid/google-api-bundle)
[![License](http://img.shields.io/packagist/l/endroid/google-api-bundle.svg)](https://packagist.org/packages/endroid/google-api-bundle)

This bundle provides easy integration with [`google/google-api-php-client`](https://github.com/google/google-api-php-client)
which allows you to access different Google API's. For more information visit the [`developer documentation`](https://developers.google.com/api-client-library/php/).

[![knpbundles.com](http://knpbundles.com/endroid/EndroidGoogleAPIBundle/badge-short)](http://knpbundles.com/endroid/EndroidGoogleAPIBundle)

## Installation

Use [Composer](https://getcomposer.org/) to install the bundle.

``` bash
$ composer require endroid/google-api-bundle
```

Then enable the bundle via the kernel.

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Endroid\Bundle\GoogleAPIBundle\EndroidGoogleAPIBundle(),
    );
}
```

## Configuration

### config.yml

```yaml
endroid_google_api:
    application_name: <application name>
    api_key: <api key>
        
```

## Usage

After installation and configuration, the Google API client can be used to
access the desired API.

``` php
$client = $this->get('endroid.google_api_client');
$service = new Google_Service_Translate($client);

$translations = $service->translations->listTranslations('Hello', 'fr');
```

## Versioning

Semantic versioning ([semver](http://semver.org/)) is applied.

## License

This bundle is under the MIT license. For the full copyright and license information, please view the LICENSE file that
was distributed with this source code.
