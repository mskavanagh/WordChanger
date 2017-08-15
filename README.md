# WordChanger

Notice: This is for the Qvitter GNU Social plugin, works as a word filter instance-wide. Can be used to censor slurs and what-not whenever a user posts a notice with such content (happens before it's posted).

## Install

1. ```git clone https://github.com/mitchellurgero/WordChanger WordChanger``` into your plugins directory
2. Add the following to your config.php file:
```
addPlugin('WordChanger');
$config['site']['WordChanger']['wordlist'] = array("word1" => "changedto", "word2" => "changedto", "word3" => "changedto");
```
4. Add words that you want to change using the same format above.
5. Profit.
