<?php

namespace App\Livewire\Forms;

use App\Models\TypsTypesCustomer;
use Livewire\Form;

class TypsTypesCustomerForm extends Form
{
    public ?TypsTypesCustomer $typsTypesCustomerModel;
    
    public $name = '';
    public $description = '';

    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'description' => 'required',
        ];
    }

    public function setTypsTypesCustomerModel(TypsTypesCustomer $typsTypesCustomerModel): void
    {
        $this->typsTypesCustomerModel = $typsTypesCustomerModel;
        
        $this->name = $this->typsTypesCustomerModel->name;
        $this->description = $this->typsTypesCustomerModel->description;
    }

    public function store(): void
    {
        $this->typsTypesCustomerModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->typsTypesCustomerModel->update($this->validate());

        $this->reset();
    }
}
