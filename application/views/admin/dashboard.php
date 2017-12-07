<?php include_once('admin_header.php') ?>


<div class="container">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-6"><br><br>
      <a href="<?= base_url('admin/add_article') ?>" class="btn btn-lg btn btn-outline-primary pull-right">Add Article</a>
    </div>
  </div>
  <table class="table">
    <thead>
      <th>Sr.No</th>
      <th>Title</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
        if(count($articles)):
          foreach($articles  as $article):
      ?>
      <tr>
        <td>1</td>
        <td><?= $article->title ?></td>
        <td>
          <a href="#" class="btn btn-default">Edit</a>
          <a href="#" class="btn btn-default">Delete</a>
        </td>
      </tr>
    <?php
          endforeach;
        else: ?>
      <tr>
        <td colspan="3"> <p>No records found.</p>
        </td>
      </tr>
    <?php endif; ?>
    </tbody>
  </table>
</div>



<?php include_once('admin_footer.php') ?>

<!-- line 7 with anchor tag, inside php tag, -->
<!-- anchor('admin/add_article', 'Add Article', ['class'=>b'tn btn-primary', ]); -->
<!-- first parameter=> controller/method, second parameter=> value inside button, third parameter=> -->
