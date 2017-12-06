<?php include_once('admin_header.php') ?>


<div class="container">
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
