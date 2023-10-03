<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Blog extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.blog');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title'),
            Wysiwyg::make()->name('text')
        ]);
    }

    public static function getBlockIcon(): string
    {
        return 'text';
    } 
    
    
    /***
     * public static function getBlockTitle(?Block $block = null): string
    {
        return Str::replace('Block', '', Str::afterLast(static::class, '\\'));
    }
    
    public static function getBlockGroup(): string
    {
        return 'app';
    }
    
    public static function getBlockIcon(): string
    {
        return 'text';
    } 
    ***/

}
