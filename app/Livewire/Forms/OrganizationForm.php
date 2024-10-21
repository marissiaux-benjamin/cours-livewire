<?php

namespace App\Livewire\Forms;

use App\Models\Organization;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrganizationForm extends Form
{
    public $organization;
    #[Validate]
    public $name;
    #[Validate]
    public $email;
    #[Validate]
    public $phone;
    #[Validate]
    public $address;
    #[Validate]
    public $city;
    #[Validate]
    public $state;
    #[Validate]
    public $country;
    #[Validate]
    public $region;
    #[Validate]
    public $postal_code;

    #[Validate]
    public function setOrganization(Organization $organization)
    {
        $this->organization = $organization;

        $this->name = $organization->name;

        $this->email = $organization->email;

        $this->state = $organization->state;

        $this->phone = $organization->phone;

        $this->country = $organization->country;

        $this->city = $organization->city;

        $this->address = $organization->address;

        $this->region = $organization->region;

        $this->postal_code = $organization->postal_code;
    }

    public function rules()
    {
        return [
            "name" => ["required", "max:100"],
            "email" => ["email", "max:50"],
            "phone" => ["max:50"],
            "address" => ["max:150"],
            "city" => ["max:50"],
            "country" => ["required", "max:2"],
            "region" => ["max:50"],
            "postal_code" => ["max:25"],
        ];
    }

    public function update()
    {
        $this->validate();
        $this->organization->update($this->except('organization'));
    }

    public function create()
    {
        $this->validate();
        Organization::create($this->all());
    }

}
