
# class-name-parser

PHP function for cleaner css class name parsing with conditional logic.

[![Build Status](https://travis-ci.org/bicepsdigital/class-name-parser.svg?branch=master)](https://travis-ci.org/bicepsdigital/class-name-parser)

### Example

When you call class_name_parser with this array of class names:

```php
class_name_parser(array(
    'first_class' => true,
    'second_class' => false,
    'third_class' => /* some true condition */
));
```

This function will return this ```"first_class third_class"``` string.

