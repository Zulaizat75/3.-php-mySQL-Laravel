<?php
    echo "<h1>Day 13 Assignment</h2>";
    echo "<br>";
    echo "<br>";
    // Question 1: Create three variables: $name, $age, and $city.Assign values to these variables with your name, age, and city.Use echo or print to display a message that includes these variables
    echo "<h2>Question 1 - Variables</h2> <br>";
    $name = "King";
    $age = 25;
    $city = "Malaysia";

    echo "My name is $name. I am $age years old. I live in $city.";
    echo "<br>";
    echo "<br>";

    // Question 2: Create a variable $grade and assign it a value between 0 and 100. Use an if-else statement to check the grade.
    echo "<h2>Question 2 - Grades If Else Statement:</h2><br>";

    $grade = 80;

    if ($grade>=90) {
        echo "Excellent!";
    } elseif ($grade>=80 && $grade<=89) {
        echo "Good job!";
    } elseif ($grade>=70 && $grade<=79) {
        echo "Keep it up!";
    } else {
        echo "Needs improvement";
    }
    echo "<br>";
    echo "<br>";

    // Question 3: Use a loop to display the numbers from 1 to 10 on separate lines.Create an array of your favorite fruits.Use a foreach loop to display each fruit in the array.
    echo "<h2>Question 3 - Loops and Foreach Loops</h2> <br>";
    for($i = 1; $i <= 10; $i++){
        echo $i;
        echo "<br>";
    }
    echo "<br>";

    echo "<h2>My Favourite Fruits</h2> <br>";
    $fruits = array("Lychee","Honeydew","Watermelon","Mango");

    foreach($fruits as $value){
        echo "$value";
        echo"<br>";
    }
    echo "<br>";
    echo "<br>";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Assignment 13 PHP</title>
  </head>
  <body>
    <h2>Question 4 - Forms</h2> <br>
    <div class="container ml-1 w-50 ">
      <form action="assignment13.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="Age">Age</label>
          <input type="number" class="form-control" id="Age" name="age" placeholder="Enter your age">
        </div>
        <div class="form-group">
          <label for="City">City</label>
          <input type="text" class="form-control" id="City" name="city" placeholder="Enter the city">
        </div>
        <button type="submit" class="btn btn-success mt-4">Submit</button>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    // Question 4: Create an HTML form that takes the user's name and age as input.Submit the form to a PHP script.In the PHP script, retrieve the user input using $_POST.Display a message using the user's input, similar to Task 1.

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        
        echo "My name is $name. I am $age years old. I live in $city.";
    }
    echo "<br>";
    echo "<br>";

    // Question 5: Create a function called calculateSum that takes two parameters (numbers) and returns their sum.Call this function with different numbers and display the result.
    echo "<h2>Question 5 - Calculate Sum</h2><br>";
    function calculateSum ($x, $y){
        $z = $x + $y;
        return $z;
    }
    echo "1 + 2 = " . calculateSum(1, 2) . "<br>";
    echo "3 + 4 = " . calculateSum(3, 4) . "<br>";
    echo "<br>";
    echo "<br>";
?>


