<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    public array $symbols = [
        'eco',
        'rocket_launch',
        'heart_broken',
        'license',
        'enable',
        'cookie',
        'face',
        'skull',
        'home',
        'mode_cool',
        'flatware',
        'single_bed',
        'settings_accessibility',
        'cards',
        'emoji_objects',
        'rocket',
        'potted_plant',
        'rainy',
        'wc',
        'dentistry',
        'egg_alt',
        'blind',
        'hand_bones',
        'raven',
        'target',
        'alarm_add'
    ];

    #[Computed(persist: true)]

    public function letters(): array
    {
        shuffle($this->symbols);

        $alfa = range('a', 'z');

        return collect($alfa)
                ->combine($this->symbols)
                ->toArray();
    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
