<?php


namespace JQueryPhp;

use DOMWrap\Document;

class JQueryManipulator
{
    private $parser;
    /**
     * @var JQueryVisitor
     */
    private $jQueryVisitor;

    public function __construct(JQueryParser $parser, JQueryVisitor $jQueryVisitor)
    {
        $this->parser = $parser;
        $this->jQueryVisitor = $jQueryVisitor;
    }

    public function manipulate(string $jqueryCode, string $text): string
    {
        $doc = new Document();
        $doc->html($text);

        $ast = $this->parser->parse($jqueryCode);
        $this->jQueryVisitor->visit($ast, $handle, $doc);

        return $doc->getHtml();
    }
}