# WP-CLI: My Eyes Are Up Here

Makes the [My Eyes Are Up Here](https://wordpress.org/plugins/my-eyes-are-up-here/) plugin compatible with WP-CLI

This package implements the fix created in [Pull Request #22 of the My Eyes Are Up Here repository](https://github.com/interconnectit/my-eyes-are-up-here/pull/22#issuecomment-554555727), as the [original repository](https://github.com/interconnectit/my-eyes-are-up-here) seems to have been abandoned.

## Installation

This package is available on [Packagist](https://packagist.org/packages/mentosmenno2/wp-cli-my-eyes-are-up-here).

### Preparation

Before installation, make sure mu-plugins required with composer are installed in the mu-plugins directory.
Please add the following to the root of your `composer.json` file. Make sure the installer path is set to the right mu-plugins path, calculated from the location of your `composer.json` file.

```json
"extra": {
    "installer-paths": {
        "../../mu-plugins/{$name}": [
            "type:wordpress-muplugin"
        ]
    }
}
```

As an alternative, you can also set the installer path for just this plugin.


```json
"extra": {
    "installer-paths": {
        "../../mu-plugins/{$name}": [
            "mentosmenno2/wp-cli-my-eyes-are-up-here"
        ]
    }
}
```

### Require the package

After making sure you're prepared for the installation, require the package using Composer.

```sh
composer require mentosmenno2/wp-cli-my-eyes-are-up-here
```

## Usage

You can now use the [WP CLI media regenrate command](https://developer.wordpress.org/cli/commands/media/regenerate/) to regenerate your images, and have them be cropped by My Eyes Are Up Here.

```sh
wp media regenerate
```
