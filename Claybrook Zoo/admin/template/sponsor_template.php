<div>
  <div class="head-msg">
    <h1 class="head-title">Sponsors</h1>
    <?php
      if ($isArchivingSuccessful) {
        echo "<p class=\"invalid\">Sponsor archived successfully!</P>";
      } 
    ?>
  </div>
  <table class="zoo-table" >
    <thead>
      <tr>
         <th>ID</th> 
        <th>Sponsor Name</th>
        <th>Primary No.</th>
        <th>Address</th>
        <th>Payment</th>
        <th>Review Date</th>
        <th>Signed By</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach ($allSponsorsDetails as $value) { ?>
            <tr>
              <td><?php echo $value['companyID'] ?></td>
              <td><?php echo $value['name'] ?></td>
              <td><?php echo $value['primaryNumber'] ?></td>
              <td><?php echo $value['street'] . ', ' . $value['city'] . ', ' . $value['country']; ?></td>
              <td><?php echo $value['payment'] ?></td>
              <td><?php echo $value['reviewDate'] ?></td>
              <td><?php echo $value['signedDate'] ?></td>
              <td>
                <button class="tbbtn-edit" title="Edit"><a href="index.php?page=sponsor_manage.php&s_id=<?php echo $value['sponsorId']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></button>
              </td>
          <?php } ?>
    </tbody>
  </table>
</div>