<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($buildgreen_category->getId(), 'buildgreen_category_edit', $buildgreen_category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $buildgreen_category->getTitle() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_visible">
  <?php echo get_partial('category/list_field_boolean', array('value' => $buildgreen_category->getIsVisible())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_order_n">
  <?php echo $buildgreen_category->getOrderN() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_img_url">
  <?php echo $buildgreen_category->getImgUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_root_id">
  <?php echo $buildgreen_category->getRootId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_lft">
  <?php echo $buildgreen_category->getLft() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rgt">
  <?php echo $buildgreen_category->getRgt() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_level">
  <?php echo $buildgreen_category->getLevel() ?>
</td>
