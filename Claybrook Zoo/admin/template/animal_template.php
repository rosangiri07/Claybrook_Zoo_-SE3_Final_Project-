<div>
  <div class="head-msg">
    <h1 class="head-title">Animals</h1>
    <?php
      if ($isArchiveSuccessful) {
        echo "<p class=\"invalid\">Animal archived successfully!</P>";
      } 
    ?>
  </div>
    <div class="head-search">
      <form action="index.php?page=animal.php" method="POST" class="form-search">
        <select name="category">
          <option value="all" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == 'all') echo 'selected'; ?>>All</option>
          <option value="1" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '1') echo 'selected'; ?>>Mammal</option>
          <option value="2" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '2') echo 'selected'; ?>>Bird</option>
          <option value="3" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '3') echo 'selected'; ?>>Fish</option>
          <option value="4" <?php if (isset($criteriaSearch['category'])) if ($criteriaSearch['category'] == '4') echo 'selected'; ?>>Reptile / Amphibian</option>
        </select>
        <input type="text" name="criteria" placeholder="Enter animal name" value="<?php if (isset($criteriaSearch['criteria'])) echo $criteriaSearch['criteria']; ?>">
        <button name="search"><i class="fa fa-search" aria-hidden="true"></i> Search</button>
      </form>
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
          foreach ($unarchivedAnimals as $value) { ?>
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
                <button class="tbbtn-edit"><a href="index.php?page=animal_manage.php&a_id=<?php echo $value['animalId']; ?>&c_id=<?php echo $value['categoryId']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a></button>
                <button class="tbbtn-delete"><a href="index.php?page=animal.php&d_id=<?php echo $value['animalId']; ?>"><i class="fa fa-archive" aria-hidden="true"></i></a></button>
              </td>
          <?php } ?>
    </tbody>
</table>
</div>