<?php $this->view("view_header"); ?>
    <div class="container">
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>School ID</th>
                <th>School Name</th>
                <th>Action</th></tr>
              </thead>
              <tbody>
                 <?php foreach($schools as $c){ ?>
                   <tr>
                   <td><?php echo $c->school_id; ?></td>
                   <td><?php echo $c->school_name; ?></td>
                   <td>#</td>
                  </tr>
                 <?php } ?>
              </tbody>
            </table>
          </div>
    </div> <!-- /container -->
<?php $this->view('view_footer'); ?>