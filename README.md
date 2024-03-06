# silverstripe-mobiledetect

## Requirements

- silverstripe/cms ^5
- mobiledetect/mobiledetectlib ^4.8

For a SilverStripe 4.3 compatible version of this module, please see the 1.x release line [1.x release line](https://github.com/derralf/silverstripe-mobiledetect/tree/1.0).

## Installation

Install a module via Composer
   
```
composer require derralf/silverstripe-mobiledetect
```

DataObject gets extended automatically


## Usage

```

PHP:

if $this->isMobile() ...

if $this->isTablet() ...

if $this->isPhone() ...


Templates:

<% if $isMobile %> ...

<% if $isTablet %> ...

<% if $isPhone %> ...


```
