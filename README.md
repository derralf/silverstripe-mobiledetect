# silverstripe-mobiledetect

## Requirements

- silverstripe/cms ^4
- mobiledetect/mobiledetectlib ^2


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