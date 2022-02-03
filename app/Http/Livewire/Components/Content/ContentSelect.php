<?php

namespace App\Http\Livewire\Components\Content;

use GuzzleHttp\Client;
use Livewire\Component;

class ContentSelect extends Component
{
    public $selectedOption, $apiUrlName, $items, $label, $name;

    public function mount($selectedOption, $apiUrlName, $label,$name)
    {
        $this->selectedOption = $selectedOption;
        $this->name = $name;
        $this->label = $label;
        $client = new Client();
        $url = "https://perzona-dev.net/api/" . $apiUrlName;
        $response = $client->request('GET', $url);
        $responseBody = json_decode($response->getBody());

        $this->items = $responseBody;

    }


    public function create(){
dd('madres');

    }

    public function render()
    {
        return view('livewire.components.content.content-select');
    }


}
