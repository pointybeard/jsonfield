# JSON Field for Symphony CMS

-   Version: 1.0.0
-   Date: Dec 27 2019
-   [Release notes](https://github.com/pointybeard/jsonfield/blob/master/CHANGELOG.md)
-   [GitHub repository](https://github.com/pointybeard/jsonfield)

A field for Symphony CMS that validates and stores JSON data

## Installation

This is an extension for [Symphony CMS](http://getsymphony.com). Add it to the `/extensions` folder of your Symphony CMS installation, then enable it through the interface.

### Requirements

This extension requires PHP 7.3 or newer and the **[pointybeard/helpers-functions-json library](https://packagist.org/packages/pointybeard/helpers-functions-json)** (`pointybeard/helpers-functions-json`) to be installed via Composer. Either run `composer install` on the `extension/jsonfield` directory or require this package in your main composer.json file like so:

    "require": {
        "php": ">=7.3",
        "pointybeard/helpers-functions-json": "~1.0.0"
    }

## Usage

Once enabled, you can add the 'Json' field to your sections. Attempting to save an entry with invalid JSON will cause an error to be thrown and prevent saving.

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/pointybeard/jsonfield/issues),
or better yet, fork the library and submit a pull request.

## Contributing

We encourage you to contribute to this project. Please check out the [Contributing documentation](https://github.com/pointybeard/jsonfield/blob/master/CONTRIBUTING.md) for guidelines about how to get involved.

## License

"JSON Field for Symphony CMS" is released under the [MIT License](http://www.opensource.org/licenses/MIT).
