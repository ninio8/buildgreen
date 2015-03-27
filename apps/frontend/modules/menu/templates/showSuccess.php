<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $buildgreen_category->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $buildgreen_category->getTitle() ?></td>
    </tr>
    <tr>
      <th>Is visible:</th>
      <td><?php echo $buildgreen_category->getIsVisible() ?></td>
    </tr>
    <tr>
      <th>Order n:</th>
      <td><?php echo $buildgreen_category->getOrderN() ?></td>
    </tr>
    <tr>
      <th>Img url:</th>
      <td><?php echo $buildgreen_category->getImgUrl() ?></td>
    </tr>
    <tr>
      <th>Root:</th>
      <td><?php echo $buildgreen_category->getRootId() ?></td>
    </tr>
    <tr>
      <th>Lft:</th>
      <td><?php echo $buildgreen_category->getLft() ?></td>
    </tr>
    <tr>
      <th>Rgt:</th>
      <td><?php echo $buildgreen_category->getRgt() ?></td>
    </tr>
    <tr>
      <th>Level:</th>
      <td><?php echo $buildgreen_category->getLevel() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('menu/edit?id='.$buildgreen_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('menu/index') ?>">List</a>
