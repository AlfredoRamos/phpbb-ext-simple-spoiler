### About

Simple Spoiler BBCode extension for phpBB.

[![Build Status](https://img.shields.io/travis/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://travis-ci.org/AlfredoRamos/phpbb-ext-simple-spoiler)
[![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-simple-spoiler.svg?label=stable&style=flat-square)](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
[![Code Quality](https://img.shields.io/codacy/grade/336cd95436314ad38b183572a5ce098e.svg?style=flat-square)](https://app.codacy.com/app/AlfredoRamos/phpbb-ext-simple-spoiler)
[![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-simple-spoiler/master/license.txt)

### Dependencies

- PHP 5.6 or greater
- phpBB 3.2 or greater

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
