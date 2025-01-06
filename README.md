### About

Simple Spoiler BBCode extension for phpBB.

[![Build Status](https://img.shields.io/github/actions/workflow/status/AlfredoRamos/phpbb-ext-simple-spoiler/ci.yml?style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/actions)
[![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-simple-spoiler.svg?label=stable&style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
[![Code Quality](https://img.shields.io/codacy/grade/d999d79cca134f189502ad84cee17a33.svg?style=flat-square)](https://app.codacy.com/manual/AlfredoRamos/phpbb-ext-simple-spoiler/dashboard)
[![Translation Progress](https://badges.crowdin.net/phpbb-ext-simple-spoiler/localized.svg)](https://crowdin.com/project/phpbb-ext-simple-spoiler)
[![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-simple-spoiler/master/license.txt)

Allows you to write `[spoiler]text[/spoiler]` or `[spoiler title=title]text[/spoiler]` and it will hide the content on anywhere that you can render BBCodes.

You can nest `[spoiler]` and write unicode titles in `[spoiler title=title]`.

### Features

- BBCodes can be nested
- Full Unicode support in title for the `[spoiler title=]` BBCode
- It's easily extensible and customizable for new styles
- HTML5 markup

### Requirements

- PHP 7.1.3 or greater
- phpBB 3.3 or greater

### Support

- [**Download page**](https://www.phpbb.com/customise/db/extension/simple_spoiler_bbcode/)
- [FAQ](https://www.phpbb.com/customise/db/extension/simple_spoiler_bbcode/faq)
- [Support area](https://www.phpbb.com/customise/db/extension/simple_spoiler_bbcode/support)
- [GitHub issues](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/issues)
- [Crowdin translations](https://crowdin.com/project/phpbb-ext-simple-spoiler)

### Donate

If you like or found my work useful and want to show some appreciation, you can consider supporting its development by giving a donation.

|    [![Donate with PayPal](https://alfredoramos.mx/images/paypal.svg)](https://alfredoramos.mx/donate/)     |    [![Donate with Stripe](https://alfredoramos.mx/images/stripe.svg)](https://alfredoramos.mx/donate/)     |
| :--------------------------------------------------------------------------------------------------------: | :--------------------------------------------------------------------------------------------------------: |
| [![Donate with PayPal](https://alfredoramos.mx/images/donate_paypal.svg)](https://alfredoramos.mx/donate/) | [![Donate with Stripe](https://alfredoramos.mx/images/donate_stripe.svg)](https://alfredoramos.mx/donate/) |

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `{PHPBB_ROOT}/ext/alfredoramos/simplespoiler/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm

### Preview

![Nested spoilers](https://i.imgur.com/5NrtAoS.png)

```
[spoiler title=Nested spoilers]First level
[spoiler title=«µǹï¢øð€»]Second level[/spoiler][/spoiler]
```

![Spoiler title with emojis](https://i.imgur.com/HXLkNm4.png)

```
[spoiler title=🇩🇪 🇲🇽 🇺🇸 Title with emojis 😁 🤗 🔱]Some text 🦏[/spoiler]
```

*(Click to view in full size)*

### Configuration

To customize the look and feel:

- Move into `{PHPBB_ROOT}/ext/alfredoramos/simplespoiler/`
- Copy the `styles/prosilver/` directory to `styles/{STYLE}/`
- Edit the following files as needed
	- `styles/{STYLE}/theme/css/style.css`
	- `styles/{STYLE}/theme/css/colors.css`

**Note:** If your style doesn't inherit from `prosilver`, you should follow the steps above even if you don't want to change any file.

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm
- Go back to `Manage extensions` > `Simple Spoiler` > `Delete data` and confirm

### Upgrade

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm
- Delete all the files inside `{PHPBB_ROOT}/ext/alfredoramos/simplespoiler/`
- Download the new version
- Upload the new files inside `{PHPBB_ROOT}/ext/alfredoramos/simplespoiler/`
- Enable the extension again

### Credits

File `eye-invisible.svg` is a modified version of `1F441.svg` from [Emoji One Legacy](https://github.com/joypixels/emojione-legacy) which is licensed under [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/).
