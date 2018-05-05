<?php
$servername = "asdasd";
$username = "asdasd";
$password = "asdasdasd";
$dbname = "adassad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, post_title, post_content, post_status FROM mocupacional.wordpress_posts WHERE post_type = 'product' and post_status = 'publish'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

        <div class="row">
  <div class="example-1 card">
    <div class="wrapper">

      <div class="data">
        <div class="content">
          <span class="author">Jane Doe</span>
          <h1 class="title"><a href="#"><?php echo($row["post_title"]); ?></a></h1>
          <p class="text">The highly anticipated world championship fight will take place at 10am and is the second major boxing blockbuster in the nation after 43 years.</p>
          <label for="show-menu" class="menu-button"><span></span></label>
        </div>
        <input type="checkbox" id="show-menu" />
        <ul class="menu-content">
          <li>
            <a href="#" class="fa fa-bookmark-o"></a>
          </li>
          <li><a href="#" class="fa fa-heart-o"><span>47</span></a></li>
          <li><a href="#" class="fa fa-comment-o"><span>8</span></a></li>
        </ul>
      </div>
    </div>
  </div>

      <?php
    }
} else {
    echo "0 results";
}
$conn->close();
