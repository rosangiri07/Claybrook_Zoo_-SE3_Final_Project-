<div>
  <div class="head-msg">
    <h1 class="head-title">Animal Archives</h1>
    <?php
      if ($isunArchiveSuccessful) {
          echo "<p class=\"valid\">Animal un-archived successfully!</P>";
      } 
    ?>
  </div>
		
        <table class="zoo-table">
          <thead>
            <tr>
              <th>Animal Name</th>
              <th>Species Name</th> 
              <th>Date of Birth</th>
              <th>Date of Join</th>
              <th>Habitat</th>
              <th>Life Span(yrs)</th>
              <th>Gender</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
                foreach ($archivedAnimalDetails as $value) { ?>
                  <tr>
                    <td><?php echo $value['animalName'] ?></td>
                    <td><?php echo $value['speciesName'] ?></td>
                    <td><?php echo $value['dob'] ?></td>
                    <td><?php echo $value['doj'] ?></td>
                    <td><?php echo $value['habitat'] ?></td>
                    <td><?php echo $value['als'] ?></td>
                    <td><?php echo $value['gender'] ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td>
                      <button class="tbbtn-edit" title="Restore"><a href="index.php?page=animal_archive.php&archiveId=<?php echo $value['animalId']; ?>"><i class="fa fa-undo" aria-hidden="true"></i></a></button>
                    </td>
                <?php } ?>
          </tbody>
        </table>
</div>