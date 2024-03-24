<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Support\Facades\Log;

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
            ->add('category')
            ->add('type')
            ->add('image', function($model) {
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

            Column::make('Category', 'category')
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
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        // Fetch the row's data from the database based on the $rowId
        $item = Item::find($rowId);
    
        // Populate a form with the row's data for editing
        $this->dispatch('editItem', $item);
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        Log::info("Delete method called with ID: $rowId");
    
        // Fetch the row's data from the database based on the $rowId
        $item = Item::find($rowId);
    
        if ($item) {
            // Delete the image file from the public/images directory
            $imagePath = public_path('images/' . $item->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        
            // Delete the row from the database
            $item->delete();
        } else {
            Log::info("Item with ID: $rowId not found");
        }
        
        // Refresh the table to show the changes
        $this->dispatch('refresh');
    }

    public function actions(Item $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('bg-gray-500 rounded-md cursor-pointer text-white px-3 py-2 m-1 text-sm')
                ->dispatch('editItem', ['rowId' => $row->id]),

            Button::add('delete')
            ->slot('Delete')
            ->id()
            ->class('bg-red-500 rounded-md cursor-pointer text-white px-3 py-2 m-1 text-sm')
            ->dispatch('showDeleteConfirmation', ['rowId' => $row->id]),
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
