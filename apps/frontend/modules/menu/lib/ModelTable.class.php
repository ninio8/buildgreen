<?php    
class ModelTable extends Doctrine_Table
    {
      /**
       * Gets tree element in one query
       */
      public function getMenuTree()
      {

        $q = $this->createQuery('g')
          ->orderBy('g.root_id')
          ->addOrderBy('g.lft')
          ->where('g.root_id NOT NULL');

        return $q->execute(array(),  Doctrine_Core::HYDRATE_ARRAY_HIERARCHY);
      }
    }
