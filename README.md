<h1>JQueryPhp</h1>

Library for processing JQuery expressions in simple javascript
<br>
<br>
Depends on PHP DOM Wrapper (https://github.com/scotteh/php-dom-wrapper) and Hoa-Project(https://hoa-project.net/En/)

<h2>Example</h2>
$visitor = new JQueryVisitor();<br>
$parser = new JQueryParser();<br>
$manipulator = new JQueryManipulator($parser, $visitor);
<br>
<br>
$manipulator->manipulate('$("body").remove()')
$parser->validate('$("body").remove()')