<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [
      [
          'body'       => 'Hello Laravel Developer',
          'created_at' => '2 MIN AGO',
          'creator'    => 'Harsh Lad',
      ]
    ];

    public $newComments;

    public function addComments()
    {
        array_unshift($this->comments,[
            'body'       => $this->newComments,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator'    => 'Hanee Lad',
        ]);

        $this->newComments = "";
    }

    public function newComments()
    {

    }

    public function render()
    {
        return view('livewire.comments');
    }
}
