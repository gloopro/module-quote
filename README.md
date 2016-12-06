# module-quote

This a module to provide a work around for the Magento issue where checkout fails, if there is no region.
The issue has been reported severally. Please find an example issue here: 
https://github.com/magento/magento2/issues/7387

## Installation - Composer

You can configure the repository and require the module in your composer.json this way:
```json
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/gloong/module-quote.git"
        }
    ],
    "require": {
        "gloo/module-quote": "^1.0"
    }
}
```
## Installation  - Git Clone
```git clone https://github.com/gloong/module-quote.git```
