<?php

/**
 * menu actions.
 *
 * @package    buildgreen
 * @subpackage menu
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class menuActions extends baseActions
{
   

public function executeIndex(sfWebRequest $request)
  {    

  }


  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BuildgreenCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BuildgreenCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($buildgreen_category = Doctrine_Core::getTable('BuildgreenCategory')->find(array($request->getParameter('id'))), sprintf('Object buildgreen_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new BuildgreenCategoryForm($buildgreen_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($buildgreen_category = Doctrine_Core::getTable('BuildgreenCategory')->find(array($request->getParameter('id'))), sprintf('Object buildgreen_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new BuildgreenCategoryForm($buildgreen_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($buildgreen_category = Doctrine_Core::getTable('BuildgreenCategory')->find(array($request->getParameter('id'))), sprintf('Object buildgreen_category does not exist (%s).', $request->getParameter('id')));
    $buildgreen_category->delete();

    $this->redirect('menu/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $buildgreen_category = $form->save();

      $this->redirect('menu/edit?id='.$buildgreen_category->getId());
    }
  }
public function executeFooBar(sfWebRequest $request)
{

    $this->buildgreen_article = Doctrine_Core::getTable('BuildgreenArticle')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->buildgreen_article);
}
 
}
