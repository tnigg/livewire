<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{

    public $comments = [
        [
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugit velit ipsum
            commodi quod quis laudantium sed aliquid sunt cupiditate.',
        'created_at' => '3 min ago',
        'creater' => 'me',
        ],
        [
        'body' => 'Lorem22222 ipsum dolor sit amet consectetur adipisicing elit. Aut fugit velit ipsum
            commodi quod quis laudantium sed aliquid sunt cupiditate.',
        'created_at' => '3 min ago',
        'creater' => 'me',
        ],
];

    public function addComment() {        
        $this->comments[] = [
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fugit velit ipsum
            commodi quod quis laudantium sed aliquid sunt cupiditate.',
            'created_at' => '3 min ago',
            'creater' => 'me',
        ];
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
