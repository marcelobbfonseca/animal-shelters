<?php

namespace App\Admin\Controllers;

use App\Animal;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class AnimalController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Animal);

        $grid->id('Id');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');
        $grid->name('Name');
        $grid->photo('Photo');
        $grid->size('Size');
        $grid->type('Type');
        $grid->breed('Breed');
        $grid->years_old('Years old');
        $grid->status('Status');
        $grid->shelter_id('Shelter id');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Animal::findOrFail($id));

        $show->id('Id');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        $show->name('Name');
        $show->photo('Photo');
        $show->size('Size');
        $show->type('Type');
        $show->breed('Breed');
        $show->years_old('Years old');
        $show->status('Status');
        $show->shelter_id('Shelter id');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Animal);

        $form->text('name', 'Name');
        $form->text('photo', 'Photo');
        $form->text('size', 'Size');
        $form->text('type', 'Type')->default('dog');
        $form->text('breed', 'Breed');
        $form->number('years_old', 'Years old');
        $form->text('status', 'Status');
        $form->number('shelter_id', 'Shelter id');

        return $form;
    }
}
