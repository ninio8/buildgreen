<?php use_helper('I18N', 'Date') ?>
<?php include_partial('article/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editing Article "%%id%%"', array('%%id%%' => link_to($buildgreen_article->getId(), 'buildgreen_article_edit', $buildgreen_article)), 'messages') ?></h1>

  <?php include_partial('article/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('article/form_header', array('buildgreen_article' => $buildgreen_article, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('article/form', array('buildgreen_article' => $buildgreen_article, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('article/form_footer', array('buildgreen_article' => $buildgreen_article, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
