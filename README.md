### About

Simple Spoiler Extension for phpBB 3.2.x

[![Build Status](https://img.shields.io/travis/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square&maxAge=3600)](https://travis-ci.org/AlfredoRamos/phpbb-ext-simple-spoiler) [![Latest Stable Version](https://img.shields.io/github/tag/AlfredoRamos/phpbb-ext-simple-spoiler.svg?label=stable&style=flat-square&maxAge=3600)](https://github.com/AlfredoRamos/phpbb-ext-simple-spoiler/releases) [![License](https://img.shields.io/github/license/AlfredoRamos/phpbb-ext-simple-spoiler.svg?style=flat-square)](https://raw.githubusercontent.com/AlfredoRamos/phpbb-ext-simple-spoiler/master/license.txt)

### Dependencies

- `php` 5.6 or greater
- `phpBB` 3.2 or greater

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

To add support for more styles:

- Copy the `styles/prosilver/` directory into `styles/{NEW_STYLE}/`
- Edit the following files as needed
	- `styles/{NEW_STYLE}/theme/css/style.css`
	- `styles/{NEW_STYLE}/theme/css/colors.css`

### Uninstallation

- Go to your `Administration Control Panel` > `Customize` > `Manage extensions`
- Click on `Disable` and confirm
- Go back to `Manage extensions` > `Simple Spoiler` > `Delete data` and confirm

### Upgrade

- Uninstall the extension
- Delete all the files inside `{PHPBB_ROOT}/alfredoramos/simplespoiler/`
- Download the new version
- Install the extension

### Contributors

Thanks to the following people for contributing to the extension:

- [Smayliks](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=185974) - Russian translation
- [pikachuturkey](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=289380) - Turkish translation
- [Nokorbis](https://github.com/Nokorbis) - French translation
- [manicx](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=48162) - Greek translation
- [ConeRX](https://github.com/ConeRX) - German translation
- [alhitary](https://github.com/alhitary) - Arabic translation
- [phpBBeesti](https://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=1499771) - Estonian translation
