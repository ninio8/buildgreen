<?php

/**
 * menu actions.
 *
 * @package    buildgreen
 * @subpackage menu
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class myActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->tree = Doctrine::getTable('BuildgreenCategory')->getMenuTree();

  }

}
