<?php

namespace PhpToZephir\Converter\Printer\Expr;

use PhpToZephir\Converter\Dispatcher;
use PhpToZephir\Logger;
use PhpParser\Node\Expr;

class ClonePrinter
{
    /**
     * @var Dispatcher
     */
    private $dispatcher = null;
    /**
     * @var Logger
     */
    private $logger = null;

    /**
     * @param Dispatcher $dispatcher
     * @param Logger $logger
     */
    public function __construct(Dispatcher $dispatcher, Logger $logger)
    {
        $this->dispatcher = $dispatcher;
        $this->logger     = $logger;
    }

    public static function getType()
    {
        return "pExpr_Clone";
    }

    public function convert(Expr\Clone_ $node) {
        return 'clone ' . $this->dispatcher->p($node->expr);
    }
}
