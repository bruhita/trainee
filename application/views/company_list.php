<?php $this->view("view_header"); ?>
    <div class="container">
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr><th>Company ID</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Contact Name</th>
                <th>Tel.</th>
                <th>Email</th>
                <th>Action</th></tr>
              </thead>
              <tbody>
                 <?php foreach($companies as $c){ ?>
                   <tr>
                   <td><?php echo $c->company_id; ?></td>
                   <td><?php echo $c->company_name; ?></td>
                   <td><?php echo $c->company_address; ?></td>
                   <td><?php echo $c->company_contact_name; ?></td>
                   <td><?php echo $c->company_contact_tel; ?></td>
                   <td><?php echo $c->company_contact_email; ?></td>
                   <td>#</td>
                  </tr>
                 <?php } ?>
              </tbody>
            </table>
          </div>
    </div> <!-- /container -->
<?php $this->view('view_footer'); ?>