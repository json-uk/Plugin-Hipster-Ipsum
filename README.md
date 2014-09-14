Statamic Hipster Ipsum Plugin
================================

The Hipster Ipsum plugin will generate paragraph after paragraph of hipster-licious content for your template. This plugin uses the great []()

## Installing
1. Download the zip file (or clone via git) and unzip it or clone the repo into `/_add-ons/`.
2. Ensure the folder name is `hipster_ipsum` (Github timestamps the download folder).
3. Enjoy.

## Usage

Drop the tag in your template and get your hipster on!
    
    {{ hipster_ipsum paragraphs="5" }}

## Parameters

### Paragraphs `paragraphs`
**default: 4**

Pass in any integer between 1-99 and return some hipster paragraphs.

    paragraphs="5"

### Type `type`
**default: hipster-latin**

Choose which type of hipster tickles your fancy:

- `hipster-latin`: Hipster text mixed with miscellaneous "lorem ipsum" filler
- `hipster-centric`: The whole enchillada - turn the hipster up to 11!


### Html `html` *optional*
**default: false**

Strips html from output, replaces p tags with newlines. *Note:* The plugin does not add any markup to the output.