# WordChanger

Changes words in user's notices before they're even posted in order to stop slurring and what-not before it happens.

## Install

1. ```git clone https://github.com/mitchellurgero/WordChanger WordChanger``` into your plugins directory
2. Add the following to your config.php file:
```
addPlugin('WordChanger');
$config['site']['WordChanger']['wordlist'] = array("word1" => "changedto", "word2" => "changedto", "word3" => "changedto");
```
4. Add words that you want to change using the same format above.
5. Profit.
