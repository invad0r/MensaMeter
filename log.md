# Log

## 2013-03-01
- something else happend today (test)

```
javascript Code Syntax
var s = 5;
```

## 2013-03-22
- worked on the parser
	- changed mysql extension from mysql to mysqli (=improved)
	- table will now be created via PHP IF NOT EXISTS with a revision

## 2013-03-23
- worked on the parser
	- tried using the PHP DOM Class instead of [SimpleHTMLDOMParser](http://simplehtmldom.sourceforge.net/) -> Buggy or at leat unsure how to use correct
	- PHP DOMDocument parses Date correctly
	
## 2013-03-25
- worked on the parser
	- can INSERT into Database now
	- trouble with quotations in String -> MySQL throws Error
		- have to purge the strings before saving in DB
		- str_replace, preg_replace should do the trick