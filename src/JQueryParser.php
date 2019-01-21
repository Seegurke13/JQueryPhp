<?php


namespace JQueryPhp;


use Hoa\Compiler\Llk\Llk;
use Hoa\File\Read;

class JQueryParser
{
    private const GRAMMAR = __DIR__ . '/jquery.pp';

    private $parser;

    public function __construct()
    {
        $this->parser = Llk::load(new Read(self::GRAMMAR));
    }

    public function parse(string $content)
    {
        return $this->parser->parse($content);
    }

    public function validate(string $content): bool
    {
        return (bool) $this->parser->parse($content,null, false);
    }
}