<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MediaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MediaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MediaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Media::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/media');
        CRUD::setEntityNameStrings('media', 'media');
        CRUD::addField([
            'name' => 'title',
            'type' => 'text',
            'label' => "Title",
        ]);
        CRUD::addField([
            'name' => 'description',
            'type' => 'textarea',
            'label' => "Description",
        ]);
        CRUD::addField([
            'name' => 'type',
            'type' => 'text',
            'label' => "Type",
        ]);
        CRUD::addField([
            'name' => 'link',
            'type' => 'url',
            'label' => "Link",
        ]);
        CRUD::field('img_url')
            ->label('Image')
            ->type('upload')
            ->upload(true)
            ->disk('public')
            ->prefix('media_images/')
->storeAs(function () {
                return 'media_images/' . md5_file($_FILES['img_url']['tmp_name']) . '.' . pathinfo($_FILES['img_url']['name'], PATHINFO_EXTENSION);
            });


    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MediaRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
