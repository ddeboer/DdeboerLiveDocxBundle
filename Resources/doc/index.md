Ddeboer Symfony2 LiveDocx Bundle
================================

## Installation

1. Include the bundle in your `composer.json`:

```
"require": {
    ...
    "ddeboer/livedocx-bundle": "master-dev",
    ...
}

```

This will also fetch the Zend Framework 2 dependency. Make sure you include the
Composer autoloader in your Symfony2 project.

2. Add the bundle to your `AppKernel.php`:

```
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Ddeboer\LiveDocxBundle\DdeboerLiveDocxBundle(),
            ...
        );
    }

```

## Configuration

In your `config.yml`, add:

```
ddeboer_live_docx:
  username: [your username]
  password: [your password]
```

If you want to use another WSDL than the default, add:

```
  wsdl: [url of your WSDL]

```