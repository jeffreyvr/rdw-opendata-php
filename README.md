# RDW Open Data

Simple library for getting vehicle data by license plate number.

Data source: https://opendata.rdw.nl

## Example usage

You call the static `get` method on the `RDW` class. You can pass two parameters: `license` and `data`.

```php
use RDWOA\RDW;

$data = RDW::get('90FPDP');

echo $data->merk;
```

```php
$data = RDW::get('90FPDP', 'brandstof');

echo $data->brandstof_omschrijving;
```

## Possible data sets

* info
* brandstof
* carrosserie
* carrosserieSpecifiek
* voertuigklasse