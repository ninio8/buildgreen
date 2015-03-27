<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($buildgreen_article->getId(), 'buildgreen_article_edit', $buildgreen_article) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $buildgreen_article->getCategoryId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_body">
  <?php echo $buildgreen_article->getBody() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_visible">
  <?php echo get_partial('article/list_field_boolean', array('value' => $buildgreen_article->getIsVisible())) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($buildgreen_article->getCreatedAt()) ? format_date($buildgreen_article->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($buildgreen_article->getUpdatedAt()) ? format_date($buildgreen_article->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
