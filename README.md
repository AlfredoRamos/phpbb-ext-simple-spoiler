### About

Simple Spoiler BBCode extension for phpBB.

[![Build Status](https://img.shields.io/travis/com/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://travis-ci.com/AlfredoRamos/phpbb-ext-simple-spoiler)
[![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-simple-spoiler.svg?label=stable&style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
[![Code Quality](https://img.shields.io/codacy/grade/d999d79cca134f189502ad84cee17a33.svg?style=flat-square)](https://app.codacy.com/manual/AlfredoRamos/phpbb-ext-simple-spoiler/dashboard)
[![Translation Progress](https://badges.crowdin.net/phpbb-ext-simple-spoiler/localized.svg)](https://crowdin.com/project/phpbb-ext-simple-spoiler)
[![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-simple-spoiler/master/license.txt)

### Dependencies

- PHP 7.1.3 or greater
- phpBB 3.3 or greater

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `{PHPBB_ROOT}/ext/alfredoramos/simplespoiler/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm

### Usage

Write `[spoiler]text[/spoiler]` or `[spoiler title=title]text[/spoiler]` and it will hide the content on anywhere that you can render BBCodes.

You can nest `[spoiler]` and write unicode titles in `[spoiler title=title]`.

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

- Uninstall the extension
- Delete all the files inside `{PHPBB_ROOT}/ext/alfredoramos/simplespoiler/`
- Download the new version
- Install the extension

### Credits

File `view-hide.svg` from [Zoondicons](https://www.zondicons.com/) by [Steve Schoger](https://twitter.com/steveschoger) is licensed under [CC BY 4.0](https://creativecommons.org/licenses/by/4.0/)
