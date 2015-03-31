<?php

/**
 * menu actions.
 *
 * @package    buildgreen
 * @subpackage menu
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class baseActions extends sfActions
{
   public function preExecute()
   {
     $this->tree = Doctrine::getTable('BuildgreenCategory')->getMenuTree();

   }
  public function executeShow(sfWebRequest $request)
  {

    $this->buildgreen_category = Doctrine_Core::getTable('BuildgreenCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->buildgreen_category);
    $this->buildgreen_article = Doctrine_Core::getTable('BuildgreenArticle')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->buildgreen_article);



  }
}
