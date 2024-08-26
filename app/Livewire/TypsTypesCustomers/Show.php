<?php

namespace App\Livewire\TypsTypesCustomers;

use App\Livewire\Forms\TypsTypesCustomerForm;
use App\Models\TypsTypesCustomer;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public TypsTypesCustomerForm $form;

    public function mount(TypsTypesCustomer $typsTypesCustomer)
    {
        $this->form->setTypsTypesCustomerModel($typsTypesCustomer);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.typs-types-customer.show', ['typsTypesCustomer' => $this->form->typsTypesCustomerModel]);
    }
}
