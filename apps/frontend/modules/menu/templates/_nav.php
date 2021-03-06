
<div id="art-main">

<div class="art-sheet">



    <div class="art-sheet-tl"></div>

    <div class="art-sheet-tr"></div>

    <div class="art-sheet-bl"></div>

    <div class="art-sheet-br"></div>

    <div class="art-sheet-tc"></div>

    <div class="art-sheet-bc"></div>

    <div class="art-sheet-cl"></div>

    <div class="art-sheet-cr"></div>

    <div class="art-sheet-cc"></div>

    <div class="art-sheet-body">

<div class="art-nav">
	<div class="l"></div>
	<div class="r"></div>

<?php function echoNode($tree, $parent=null) { ?>
  <ul class="art-menu">
  <?php foreach ($tree as $node): ?>
    <li data-id='<?php echo "parent item". $node['id'] ?>'>
      <a class="separator" href="<?php echo url_for('menu/show?id='.$node['id']) ?>"><?php echo $node['title'] ?><span class="l"> </span><span class="r"> </span><span class="l"> </span></a>
      <?php if (count($node['__children']) > 0): ?>
        <?php echo echoNode($node['__children'], $node) ?>
      <?php endif; ?>
    </li>

  <?php endforeach; ?>       
  </ul>
<?php } ?>

<?php echo echoNode($tree) ?>


</div>
