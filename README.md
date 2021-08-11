# WP-CLI: My Eyes Are Up Here

Makes the [My Eyes Are Up Here](https://wordpress.org/plugins/my-eyes-are-up-here/) plugin compatible with WP-CLI

This package implements the fix created in [Pull Request #22 of the My Eyes Are Up Here repository](https://github.com/interconnectit/my-eyes-are-up-here/pull/22#issuecomment-554555727), as the [original repository](https://github.com/interconnectit/my-eyes-are-up-here) seems to have been abandoned.

## Installation

This package is available on [Packagist](https://packagist.org/packages/mentosmenno2/wp-cli-my-eyes-are-up-here)

```sh
composer require mentosmenno2/wp-cli-my-eyes-are-up-here
```

## Usage

You can now use the [WP CLI media regenrate command](https://developer.wordpress.org/cli/commands/media/regenerate/) to regenerate your images, and have them be cropped by My Eyes Are Up Here.

```sh
wp media regenerate
```
