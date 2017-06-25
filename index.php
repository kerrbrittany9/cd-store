<!DOCTYPE html>
<?php
    $person1_name = $_GET["person1_name"];
    $person2_name = $_GET["person2_name"];
    $person3_name = $_GET["person3_name"];
    $person1_hangout = $_GET["person1_hangout"];
    $person2_hangout = $_GET["person2_hangout"];
    $person3_hangout = $_GET["person3_hangout"];
    $friends[$person1_name] = $person1_hangout;
    $friends[$person2_name] = $person2_hangout;
    $friends[$person3_name] = $person3_hangout;
 ?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <div class="container">
        <h1>Let's make you an address book.</h1>
        <form action="index.php">
            <div class="form-group">
                <label for="person1_name">Name: </label>
                <input id="person1_name" name="person1_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="person1_hangout">Where you hangout: </label>
                <input id="person1_hangout" name="person1_hangout" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="person2_name">Name: </label>
                <input id="person2_name" name="person2_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="person2_hangout">Where you hangout: </label>
                <input id="person2_hangout" name="person2_hangout" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="person3_name">Name: </label>
                <input id="person3_name" name="person3_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="person3_hangout">where you hang out </label>
                <input id="person3_hangout" name="person3_hangout" class="form-control" type="text">
            </div>

            <button class="btn-info" type="submit">Create</button>
        </form>

    <ul>
        <?php
            foreach ($friends as $name => $hangout) {
                echo "<li>" . "<h1>" . "$name:" . "</h1>" . "<h3>" .  "$hangout" . "</h3>" . "</li>";
            }
        ?>
</div>
  </body>
</html>
