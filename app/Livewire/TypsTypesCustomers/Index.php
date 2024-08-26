<?php

namespace App\Livewire\TypsTypesCustomers;

use App\Models\TypsTypesCustomer;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $typsTypesCustomers = TypsTypesCustomer::paginate();

        return view('livewire.typs-types-customer.index', compact('typsTypesCustomers'))
            ->with('i', $this->getPage() * $typsTypesCustomers->perPage());
    }

    public function delete(TypsTypesCustomer $typsTypesCustomer)
    {
        $typsTypesCustomer->delete();

        return $this->redirectRoute('typs-types-customers.index', navigate: true);
    }
}
