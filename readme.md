### Devteam Custom Blocks
# A utility plug-in to provide scaffolding for custom Gutenberg blocks.


## Basic usage
1. Clone this repo
2. Spin up a new WP instance
3. Install and activate **Advanced Custom Fields Pro**
4. Inside ACF, import the `acf-export.json` config file from this folder
5. Install and activate this plugin
6. Open a page and add a block - you will find two custom blocks already made:
   - Team Member Block
   - Test Block


The blocks are both very, very rudimentary. Sorry. They're just an example.

## Build your own
1. Duplicate the `test-block` folder from this plugin.
2. Inside it has the 3 critical files you need for a new block: the `block.json`, `style.css` and `template.php`.
3. The plugin looks for any `block.json` files and registers the block automatically. **Your job is to edit the block.json and the template.php files only**
4. Look inside the json: it's pretty intuitive. You'll need to update the name of the block, its icon and, once you feel confident, also the list of **supports**.
5. If you'd like to add custom fields to your block, go to the ACF settings and add a field group - in the location rules, set to "Show this field group if `block is equal to [name-of-your-block]`"
6. Update your `template.php` to take advantage of your new ACF fields.
7. Add your styles to the css file inside your new block folder and you're set.

NB: If you change a block's code (especially the block.json) after adding it to a page, you may need to remove the block element and add it again.

Check here for more info on using ACF blocks: [https://www.advancedcustomfields.com/resources/acf-blocks-key-concepts/](https://www.advancedcustomfields.com/resources/acf-blocks-key-concepts/)
And with this, you now never need to use shortcodes again! :)