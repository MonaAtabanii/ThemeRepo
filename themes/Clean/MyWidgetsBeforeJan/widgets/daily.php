<?php include 'includes/config.php'; ?>
<?php
if(isset($_GET['day'])){
    //day comes from link on page
    $day = $_GET['day'];
}
else{
    //current day of week
    $day = date('l');
}

switch($day){
    case 'Monday':
        $coffee = 'Flat White';
    break;
    case 'Tuesday':
        $coffee = 'Pumpkin Spice';
    break;
    case 'Wednesday':
        $coffee = 'Cold Brew';
    break;
    case 'Thursday':
        $coffee = 'Hot Choclate';
    break;
    case 'Friday':
        $coffee = 'Latte';
    break;
    case 'Saturday':
        $coffee = 'White Mocha';
    break;
    case 'Sunday':
        $coffee = 'Mocha';
    break;
}
                  
?>
<?php include 'includes/header.php'; ?>
              <h3>Daily Special</h3>
              <p>Bellow you can see our daily special for <?=$day?>!</p>
              <p><?=$coffee?></p>
              <p>Click below to view the specials for every weekday<p>
                  
              <p><a href="daily.php?day=Monday">Monday</a></p>
              <p><a href="daily.php?day=Tuesday">Tuesday</a> </p>
              <p><a href="daily.php?day=Wednesday">Wednesday</a></p>
              <p><a href="daily.php?day=Thursday">Thursday</a></p>
              <p><a href="daily.php?day=Friday">Friday</a></p>
              <p><a href="daily.php?day=Saturday">Saturday</a></p>
              <p><a href="daily.php?day=Sunday">Sunday</a></p>

<?php include 'includes/footer.php'; ?>