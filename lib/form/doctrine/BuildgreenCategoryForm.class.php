<?php

/**
 * BuildgreenCategory form.
 *
 * @package    buildgreen
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class BuildgreenCategoryForm extends BaseBuildgreenCategoryForm
{
  public function configure()
  {
    // create a new widget to represent this category's "parent"
    $this->setWidget('parent', new sfWidgetFormDoctrineChoiceNestedSet(array(
      'model'     => 'BuildgreenCategory',
      'add_empty' => true,
    )));
 
    // if the current category has a parent, make it the default choice
    if ($this->getObject()->getNode()->hasParent())
    {
      $this->setDefault('parent', $this->getObject()->getNode()->getParent()->getId());
    }
 
    // only allow the user to change the name of the category, and its parent
    $this->useFields(array(
      'title',
      'parent',
      'img_url',
      'order_n',
    ));
    // set labels of fields
    $this->widgetSchema->setLabels(array(
      'title'   => 'Category title',
      'parent' => 'Parent category',
      'img_url' => 'Image',
      'order_n' => 'Order number'
    ));
    // set a validator for parent which prevents a category being moved to one of its own descendants
    $this->setValidator('parent', new sfValidatorDoctrineChoiceNestedSet(array(
      'required' => false,
      'model'    => 'BuildgreenCategory',
      'node'     => $this->getObject(),
    )));
    $this->getValidator('parent')->setMessage('node', 'A category cannot be made a descendent of itself.');


 $this->widgetSchema['img_url'] = new sfWidgetFormInputFile();

    $this->validatorSchema['img_url'] = new sfValidatorFile(array(

        'path'       => sfConfig::get('sf_upload_dir').'/'.sfConfig::get('sf_media_upload_dir'),

        'mime_types' => 'web_images'

        )

    );


  }

public function doSave($con = null)
  {
    // save the record itself
    parent::doSave($con);
    // if a parent has been specified, add/move this node to be the child of that node
    if ($this->getValue('parent'))
    {
      $parent = Doctrine::getTable('BuildgreenCategory')->findOneById($this->getValue('parent'));
      if ($this->isNew())
      {
        $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
        $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
    }
    // if no parent was selected, add/move this node to be a new root in the tree
    else
    {
      $categoryTree = Doctrine::getTable('BuildgreenCategory')->getTree();
      if ($this->isNew())
      {
        $categoryTree->createRoot($this->getObject());
      }
      else
      {
        $this->getObject()->getNode()->makeRoot($this->getObject()->getId());
      }
    }
  }


}
