<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Hero_Home;

class Hero_HomeController extends AdminController
{




    
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Hero_Home';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Hero_Home());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('sub_title', __('Sub title'));
        $grid->column('description', __('Description'));
        $grid->column('button', __('Button'));
        $grid->column('image_1')->image();
        $grid->column('image_2')->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Hero_Home::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('sub_title', __('Sub title'));
        $show->field('description', __('Description'));
        $show->field('button', __('Button'));
        $show->field('image_1', __('image_1'));
        $show->field('image_2', __('image_2'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Hero_Home());

        $form->text('title', __('Title'));
        $form->text('sub_title', __('Sub title'));
        $form->text('description', __('Description'));
        $form->text('button', __('Button'));
        $form->image('image_1', __('image_1'));
        $form->image('image_2', __('image_2'));

        return $form;
    }
}
