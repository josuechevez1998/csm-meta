<?php

namespace App\Livewire\TypsTypesCustomers;

use App\Livewire\Forms\TypsTypesCustomerForm;
use App\Models\TypsTypesCustomer;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public TypsTypesCustomerForm $form;

    public function mount(TypsTypesCustomer $typsTypesCustomer)
    {
        $this->form->setTypsTypesCustomerModel($typsTypesCustomer);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('typs-types-customers.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.typs-types-customer.create');
    }
}
