# strpos_array
PHP strpos function but in this implementation the needles is an array. Also allows for a string, or an array inside an array.

## Usage

```php
if (strpos_array($key, $arrayOfKey) === false) {
            return false; //Key not found
        } else {
            return true; //Key found in the array
        }
```
