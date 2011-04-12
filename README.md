# JSONdir - package a directory of files into a single JSON file

## What is it for?

One inconvenient thing about JavaScript is the lack of multi-line strings. There are many ways around this, including embedding strings into your document or pulling them in via XHR. My solution is a tiny PHP script which pre-processes text and makes them directly available to JavaScript. It takes a directory as an argument and returns a JSON document with an element for each of the files in that directory.

## Usage

JSONdir is written in PHP. Run:

	php jsondir.php templates
	
Where 'templates' contains two simple HTML files:

	foo.html
	bar.html

Gives you:

	var templates = {
		foo: "<p>Foo content</p>\n<p>Next line</p>",
		bar: "<p>Bar content</p>"
	};
	
## Status

This is currently a basic works-for-me script - feel free to use it as a template for your own. Any suggestions or patches welcomed.