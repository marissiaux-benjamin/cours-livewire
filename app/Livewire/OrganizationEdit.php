<?php

namespace App\Livewire;

use App\Livewire\Forms\OrganizationForm;
use App\Models\Organization;
use Livewire\Component;

class OrganizationEdit extends Component
{
    public $organization;
    public OrganizationForm $form;

    public $feedback = "";

    public function mount($organization)
    {
        $this->form->setOrganization($organization);
        $this->organization = $organization;
        $this->organization->load('contacts');
    }

    public function save()
    {
        $this->form->update();
        $this->feedback = "This organization has been updated successfully!";
    }

    public function render()
    {
        return view('livewire.organization-edit');
    }
}
