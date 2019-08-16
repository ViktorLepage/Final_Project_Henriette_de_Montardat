<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductRequest as StoreRequest;
use App\Http\Requests\ProductRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Product');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/product');
        $this->crud->setEntityNameStrings('product', 'products');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        //$this->crud->setFromDb();
        // Columns
        $this->crud->addColumn(['name' => 'product_name', 'type' => 'text', 'label' => 'Product_Name']);
        $this->crud->addColumn(['name' => 'product_type', 'type' => 'text', 'label' => 'Product_Type']);
        $this->crud->addColumn(['name' => 'price', 'type' => 'text', 'label' => 'Price']);
        $this->crud->addColumn(['name' => 'image', 'type' => 'image', 'upload' => true, 'label' => 'Image']);
        $this->crud->addColumn(['name' => 'categoryID', 'type' => 'text', 'label' => 'Category ID']);

        // Fields
        $this->crud->addField(['name' => 'product_name', 'type' => 'text', 'label' => 'Product_Name']);
        $this->crud->addField(['name' => 'product_type', 'type' => 'text', 'label' => 'Product_Type']);
        $this->crud->addField(['name' => 'price', 'type' => 'text', 'label' => 'Price']);
        $this->crud->addField(['name' => 'image', 'type' => 'image', 'upload' => true, 'label' => 'Image']);
        $this->crud->addField(['name' => 'categoryID', 'type' => 'text', 'label' => 'Category ID']);

        // add asterisk for fields that are required in ProductRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
