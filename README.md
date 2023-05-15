# ISWC Class

The ISWC class is a PHP class that represents an International Standard Musical Work Code (ISWC). It provides methods to manipulate ISWC codes by parsing, retrieving components, and generating new codes.

## Installation

You can include the ISWC class in your project by requiring it through Composer:

```
composer require bmt/iswc
```

## Usage

Instantiate the ISWC class by providing the necessary parameters: country code, publisher code, and work code. You can then use various methods to interact with the ISWC object.

### Creating an ISWC Object

```php
use Bmt\ISRC\ISWC;

$iswc = new ISWC("123", "456", "01");
```

### Parsing an ISWC Code

You can parse an existing ISWC code to set the respective components of the ISWC object:

```php
$iswc->parse("T-123456789-01");
```

### Retrieving ISWC Components

You can retrieve individual components of the ISWC code:

```php
$countryCode = $iswc->getCountryCode(); // Returns the country code (e.g., "123")
$publisherCode = $iswc->getPublisherCode(); // Returns the publisher code (e.g., "456")
$workCode = $iswc->getWorkCode(); // Returns the work code (e.g., "01")
```

### Generating a Complete ISWC Code

Generate a complete ISWC code based on the stored components:

```php
$newIswcCode = $iswc->generateISWC(); // Returns a new ISWC code (e.g., "T-123456789-01")
```

### Converting to String

You can also convert the ISWC object to a string, which returns the generated ISWC code:

```php
$iswcString = (string)$iswc; // Returns the ISWC code as a string (e.g., "T-123456789-01")
```

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
```

Feel free to modify and customize the README file to fit your specific project needs.