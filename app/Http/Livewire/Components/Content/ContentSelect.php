<?php

namespace App\Http\Livewire\Components\Content;

use GuzzleHttp\Client;
use Livewire\Component;

class ContentSelect extends Component
{
    public $selectedOption, $apiUrlName, $items, $label;

    public function mount($selectedOption, $apiUrlName, $label)
    {
        $this->selectedOption = $selectedOption;
        $this->label = $label;
        $client = new Client();
        $url = "https://perzona-dev.net/api/" . $apiUrlName;
        $response = $client->request('GET', $url);
        $responseBody = json_decode($response->getBody());

        $this->items = $responseBody;

    }


    public function render()
    {
        return view('livewire.components.content.content-select');
    }


}
