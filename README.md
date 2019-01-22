# JQueryPhp #

Library for processing JQuery expressions in simple javascript
<br>
<br>
Depends on PHP DOM Wrapper (https://github.com/scotteh/php-dom-wrapper) and Hoa-Project(https://hoa-project.net/En/)

## Example ##
`$visitor = new JQueryVisitor();`<br>
`$parser = new JQueryParser();`<br>
`$manipulator = new JQueryManipulator($parser, $visitor);`<br>
`$manipulator->manipulate('$("body").remove()', '<html><head><title>Test</test></head><body>Delete me</body></html>');`<br>
`$parser->validate('$("body").remove()');`
