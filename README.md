# Ratios for image manipulation in TYPO3 CMS Backend

Image manipulation is a very common feature for editors within TYPO3 CMS.

With this little Extension you can predefine ratios and their labels for the backend.

## Installation and setup

Simply install the extension via *Extension Manager* or via composer.

### Composer

Add this repository to your ```composer.json``
```
"repositories": [
    {
        "url": "https://github.com/joekolade/setimagemanipulationratios.git",
        "type": "git"
    }
],
```

Then require the extension:

```
composer require js/setimagemanipulationratios --no-update
```

and update composer dependencies (*--no-dev flag is optional*)

```
composer update --no-dev
```

**Have fun!**
