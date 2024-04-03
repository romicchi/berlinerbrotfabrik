<?php

namespace App\Livewire;

use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class ItemsTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
                ->showSearchInput()
                ->showToggleColumns(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Item::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('name')
            ->add('description')
            ->add('type')
            ->add('image', function ($model) {
                return "<img class='imageModalOpener hover-cursor' src='/images/{$model->image}' width='50' height='50'>";
            });
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Description', 'description')
                ->sortable()
                ->searchable(),

            Column::make('Type', 'type')
                ->sortable()
                ->searchable(),

            Column::make('Image', 'image')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->emit('openEditModal', $rowId);
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        Log::info("Delete method called with ID: $rowId");

        $item = Item::find($rowId);

        if ($item) {
            $imagePath = public_path('images/' . $item->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $item->delete();
        } else {
            Log::info("Item with ID: $rowId not found");
        }

        $this->dispatch('refresh');
    }

    public function actions(Item $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit')
                ->class('bg-gray-500 rounded-md cursor-pointer text-white px-3 py-2 m-1 text-sm')
                ->dispatch('editItem', ['item' => $row]), // Pass the entire item data instead of just the ID
    
            Button::add('delete')
                ->slot('Delete')
                ->class('bg-red-500 rounded-md cursor-pointer text-white px-3 py-2 m-1 text-sm')
                ->dispatch('showDeleteConfirmation', ['rowId' => $row->id]),
        ];
    }
   
}
