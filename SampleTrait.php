<?php


trait SampleTrait
{

    public abstract function sampleFunction(string $name): string;
}

class SampleTraitImpl
{
    use SampleTrait;

    public function sampleFunction(int $name): int
    {
        return 1;
    }
}