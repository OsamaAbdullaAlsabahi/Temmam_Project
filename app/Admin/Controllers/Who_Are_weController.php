<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Who_Are_we;

class Who_Are_weController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Who_Are_we';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Who_Are_we());

        $grid->column('id', __('Id'));
        $grid->column('image_1')->image();
        $grid->column('image_2')->image();
        $grid->column('description_1', __('Description_1'));
        $grid->column('description_2', __('Description_2'));
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
        $show = new Show(Who_Are_we::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image_1', __('Image_1'));
        $show->field('image_2', __('Image_2'));
        $show->field('description_1', __('Description_1'));
        $show->field('description_2', __('Description_2'));
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
        $form = new Form(new Who_Are_we());

        $form->image('image_1', __('Image_1'));
        $form->image('image_2', __('Image_2'));
        $form->text('description_1', __('Description_1'));
        $form->text('description_2', __('Description_2'));

        return $form;
    }
}

