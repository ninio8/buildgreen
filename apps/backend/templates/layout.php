<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Buildgreen Admin Panel</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header" class="amped">
	<div>
		<div>
          	<a href="<?php echo url_for('homepage') ?>"><span class="title">Buildgreen Admin Panel</span></a>
		</div>
	</div>
      </div>
 <?php if ($sf_user->isAuthenticated()): ?>
      <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Articles', 'buildgreen_article') ?>
          </li>
          <li>
            <?php echo link_to('Categories', 'buildgreen_category') ?>
          </li>
          <li><?php echo link_to('Users', 'sf_guard_user') ?></li>
          <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
        </ul>
      </div>
<?php endif ?>
 
      <div id="content">
	<div class="padding">
        <?php echo $sf_content ?>
	</div>
      </div>
 
      <div id="footer">
        powered by <a href="/">
        <img src="/images/logo.png" alt="Taxar" /></a>
      </div>
    </div>
  </body>
</html>
