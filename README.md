### Information

Simple Spoiler Extension for phpBB 3.2.x

[![Build Status](https://img.shields.io/travis/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square&maxAge=3600)](https://travis-ci.org/AlfredoRamos/phpbb-ext-simple-spoiler) [![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-simple-spoiler.svg?label=stable&style=flat-square&maxAge=3600)](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases) [![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-simple-spoiler/master/LICENSE)

### Dependencies

- `php` 5.6 or greater
- `phpBB` 3.2 or greater

### Installation

- Download the [latest release](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases)
- Decompress the `*.zip` or `*.tar.gz` file
- Copy the files and directories inside `<PHPBB_ROOT>/ext/alfredoramos/simplespoiler/`
- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Enable` and confirm.

### Usage

Write `[spoiler]text[/spoiler]` or `[spoiler=title]text[/spoiler]` and it will hide the content on anywhere that you can render BBCodes.

You can nest `[spoiler]` and write unicode titles in `[spoiler=title]`.

**Example:**

```
[spoiler=Nested spoilers]
First level
[spoiler=«µǹï¢øð€»]Second level
[spoiler]Third level[/spoiler][/spoiler][/spoiler]
```

**Preview:**

[![Preview](https://i.imgur.com/kg8Wtw5m.png)](https://i.imgur.com/kg8Wtw5.png)

*(Click to view in full size)*

### Configuration

To add support for more styles simply copy the content of the `styles/prosilver/theme/` directory into `styles/<NEW_STYLE>/theme/`.

To customize the look and colors, edit the following files:

- `styles/<STYLE>/theme/css/style.css`
- `styles/<STYLE>/theme/css/colors.css`

Note: By default it's hidden from the posting box, if you want to show it follow these steps:

- Go to your `Administration Control Panel` > `Posting` > `BBCodes`
- Click on the `Edit` button (green gear)
- Go to `Settings` and check the option `Display on posting`
- Click on `Submit`

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm.
- Go back to `Manage extensions` > `Simple Spoiler` > `Delete data` and confirm.

### Upgrade

- Uninstall the extension.
- Delete all the files inside `<PHPBB_ROOT>/alfredoramos/simplespoiler/`.
- Download the new version.
- Install the extension.

### Contributors

Thanks to the following people for contributing to the extension:

- [Smayliks](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=185974) - Russian translation
- [pikachuturkey](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=289380) - Turkish translation
