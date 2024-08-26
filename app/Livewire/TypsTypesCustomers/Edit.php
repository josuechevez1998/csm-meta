<?php

namespace App\Livewire\TypsTypesCustomers;

use App\Livewire\Forms\TypsTypesCustomerForm;
use App\Models\TypsTypesCustomer;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public TypsTypesCustomerForm $form;

    public function mount(TypsTypesCustomer $typsTypesCustomer)
    {
        $this->form->setTypsTypesCustomerModel($typsTypesCustomer);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('types-customers.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.typs-types-customer.edit');
    }
}
