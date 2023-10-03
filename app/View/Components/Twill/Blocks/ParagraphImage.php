<?php

namespace App\View\Components\Twill\Blocks;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class ParagraphImage extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.paragraph_image');
    }

    public function getForm(): Form
    {
        return Form::make([
            Medias::make()->name('image')->label('Image'),
            Select::make('type')
            ->options([
                    [
                        'value' => 'left',
                        'label' => 'Left',
                    ],
                    [
                        'value' => 'right',
                        'label' => 'Right',
                    ],
                    ])->name('type')->label('Image Position'),
            Wysiwyg::make()->name('paragraph'),
        ]);
    }
}