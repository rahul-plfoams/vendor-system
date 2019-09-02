
<form class="section is-centered" method="get" action="test">
  <div class="field is-horizontal">
    <label class="label">Name</label>
    <div class="control">
      <input class="input is-success" type="text" name="name" placeholder="Product Name" value=""/>
    </div>
  </div>
  <div class="field is-horizontal">
    <label class="label">Grade</label>
    <div class="control">
      <input class="input is-success" type="text" name="grade" placeholder="Product Grade" value=""/>
    </div>
  </div>
  <div class="field is-horizontal">
    <label class="label">Quality</label>
    <div class="control">
      <input class="input is-success" type="text" name="quality" placeholder="Product Quality" value=""/>
    </div>
  </div>
  <div class="field is-horizontal">
    <label class="label">Units</label>
    <div class="control select">
      <select name="unit">
        <option>m</option>
        <option>kg</option>
        <option>sq feet</option>
      </select>
    </div>
  </div>
  <div class="field is-horizontal">
    <label class="label">Sale Rate</label>
    <div class="control">
      <input class="input is-success" type="text" name="sale_rate" placeholder="Product Price" value=""/>
    </div>
  </div>
  <div class="field is-horizontal">
    <label class="label">GST Rate</label>
    <div class="control">
      <input class="input is-success" type="text" name="gst_rate" placeholder="GST Rate" value=""/>
    </div>
  </div>
  <div class="field is-horizontal">
    <label class="label">Remark</label>
    <div class="control">
      <input class="input is-success" type="text" name="remark" placeholder="Remark/Specification" value=""/>
    </div>
  </div>
  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link" value="submit">Submit</button>
    </div>
    <div class="control">
      <button class="button is-text">Cancel</button>
      <p class="output">
        <?php
            $test=new test();
            ?>
      </p>
    </div>
  </div>
</form>
<table class="table is-bordered is-fullwidth">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Grade</td>
      <td>Quality</td>
      <td>Unit</td>
      <td>Sale Rate</td>
      <td>GST Rate</td>
      <td>Remark</td>
    </tr>
  </thead>
<<<<<<< HEAD
  <tbody>
    <?php 
    $result=self::query("SELECT * FROM products");
    $rows=self::totalrow("SELECT * FROM products");
    for($i=0;$i<$rows;$i++){
        $j=$result[$i];
        echo "
        <tr>
        <td>".$j['id']."</td>
        <td>".$j['name']."</td>
        <td>".$j['grade']."</td>
        <td>".$j['quality']."</td>
        <td>".$j['unit']."</td>
        <td>".$j['sale_rate']."</td>
        <td>".$j['gst_rate']."</td>
        <td>".$j['remark']."</td>
        <td><a href="">edit</a></td>
        </tr>
        ";
    }
    
    ?>
  </tbody>
=======
  <tbody></tbody>
>>>>>>> 27b763b52706cbea0f4d19fb1ecdddfe07f24b9f
</table>