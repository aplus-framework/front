<?php declare(strict_types=1);
namespace Framework\Front;

use ScssPhp\ScssPhp\CompilationResult;
use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;

/**
 * Class Sass.
 *
 * @package front
 */
class Sass
{
    protected Compiler $compiler;
    protected CompilationResult $result;
    public const OUTPUT_COMPRESSED = OutputStyle::COMPRESSED;
    public const OUTPUT_EXPANDED = OutputStyle::EXPANDED;

    public function __construct(array $cacheOptions = null)
    {
        $this->compiler = new Compiler($cacheOptions);
    }

    public function setOutputStyle(string $style = self::OUTPUT_COMPRESSED) : static
    {
        $this->compiler->setOutputStyle($style);
        return $this;
    }

    public function setSourceMap() : static
    {
        return $this;
    }

    public function compile(string $scss, array $importPaths = []) : string
    {
        $this->compiler->setImportPaths($importPaths);
        $this->result = $this->compiler->compileString($scss);
        return $this->result->getCss();
    }

    public function compileFile(string $filepath) : string
    {
        $realpath = realpath($filepath);
        if ($realpath === false || ! is_file($realpath)) {
            throw new \InvalidArgumentException('Invalid filepath: ' . $filepath);
        }
        $dir = dirname($realpath);
        $scss = file_get_contents($realpath);
        return $this->compile($scss, [$dir]);
    }
}
