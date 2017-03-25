<?php

namespace App\Http\Admin;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\DisplayInterface;
use SleepingOwl\Admin\Contracts\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Offer
 *
 * @property \App\Offer $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Offer extends Section implements Initializable
{

    /**
     * @var \App\Offer
     */
    protected $model;

    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        // Добавление пункта меню и счетчика кол-ва записей в разделе
        $this->addToNavigation($priority = 500, function() {
            return \App\Offer::count();
        });

        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {
        });
    }

    /**
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    public function getTitle()
    {
        return 'Предложения';
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::link('name')->setLabel('Название')->setWidth('400px'),
            //AdminColumn::text('description')->setLabel('Описание')->setAttribute('class', 'text-muted')
        ]);
        $display->paginate(15);
        return $display;
    }

    // Create And Edit
    public function onCreateAndEdit()
    {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Название')->required()->unique()
            //AdminFormElement::textarea('description', 'Описание')->setRows(2)
            //AdminFormElement::text('phone', 'Phone')
        );
        return $form;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    /*
    public function onEdit($id)
    {
        // todo: remove if unused
    }
    */

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
