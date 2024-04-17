<?php include_once 'show_profile.php';?>
<?php include_once 'show_notice.php';?>
<?php include_once 'show_assignment.php';?>
<?php include_once 'show_timetable.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css" />
</head>
<style>
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 100%;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
    
    }

    .card {
        margin: 20px;
        background-color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        width: 80%;
    }
    .buttons{
        padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 8px;
    background-color: white;
    border-width: 0px;
    font-weight: 600;
    margin-right: 10px;
   padding-right: 15px;
   padding-left: 15px;
   cursor: pointer;
    }

    * {
      box-sizing: border-box;
    }
    
    input[type=text], input[type=password],input[type=email],select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    
    }
    
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }
    
    input[type=submit] {
        
      background-color: #060E40;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      width: 100%;
     
    }
    
    
    .profileContainer {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      width: 100%;
      display: flex;
    
    }

    .profileContainer form {
      width: 100%;
    }
    
    .col-25 {
      float: left;
      width: 100%;
      margin-top: 3px;
    }
    
    .col-75 {
      float: left;
      width: 100%;
      margin-top: 6px;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    .header{
    
    flex-direction: row;
  }
    
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
      .header{
    
    flex-direction: column;
  }
  .buttons{
    width: 100%;
    align-items: center;
    justify-content: center;
  }

  .profileContainer {
      padding: 5px;
     justify-content: flex-start;
    }
    }
    
</style>


<body style="overflow-y: scroll;">
    <nav>
        <div>
          <img
            class="logo"
            src="http://www.gecg28.ac.in/img/GECG_logo.png"
            alt="logo"
          />
        </div>
        <div>
          <h4 class="heading">GOVERNMENT ENGINEERING COLLEGE, GANDHINAGAR</h4>
        </div>
        <div >
          <button onclick="" class="loginBtn"><a href="/index.html">Logout</a></button>
        </div>
      </nav>
<div class="container header">
    <button onclick="onChange(0)" class="buttons">
        Notice Board
    </button>
    <button onclick="onChange(1)" class="buttons">
        Timetable
    </button>
    <button onclick="onChange(2)" class="buttons">
        Department Notices
    </button>
    <button onclick="onChange(3)" class="buttons">
        Assignment
    </button>
    <button onclick="onChange(4)" class="buttons">
      Edit Profile
  </button>
    
</div>
      <div style="display: flex; align-items: center;">
        <div id="notice" class="container item" >
            <h2>Notice Board</h2>
            <?php
            if ($notice->num_rows > 0) {
    // Output data of each row
    while($row = $notice->fetch_assoc()) {
        echo '<div class="card">';
        echo '   <p>'.$row['title'].'</p>';
        echo ' </div>';
    }
} else {
    echo "No notices found";
}?>
            
             
               
           
          </div>
          <div id="time" style="display: none;" class="container item">
            <h2>Time table</h2>
          
            <?php
            if ($tt->num_rows > 0) {
    // Output data of each row
    while($row = $tt->fetch_assoc()) {
     
        echo '<div> ';
        echo '   <img src="'.$row['file_url'].'" width="100%"/>';
        echo ' </div>';
    }
} else {
    echo "No notices found";
}?>
           
                <!-- <img
                id="img2"
             style="margin-top: 20px;"
                src="http://www.gecg28.ac.in/img/home/gecgh3.jpg"
                
                alt=""
                srcset=""
              /> -->
            </div>
          </div>
          <div id="notice" style="display: none;" class="container item" >
            <h2>Department Notices</h2>
            <div class="card">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quasi consequuntur eum nobis aperiam non quibusdam nam temporibus qui, exercitationem a corporis ipsam enim, odio voluptates neque! Rem, quidem labore!</p>
                <span style="float: right;">16-04-2024 16:31</span>
            </div>
          </div>
          <div id="notice" style="display: none;" class="container item" >
            <h2>Assignment</h2>
            <?php
            if ($ass->num_rows > 0) {
    // Output data of each row
    while($row = $ass->fetch_assoc()) {
        echo '<div class="card">';
        echo '   <a href="#">'.$row['title'].'</a> ';
        echo ' </div>';
    }
} else {
    echo "No notices found";
}?>
            
            <!-- <div class="card">
              
                <span style="float: right;">16-04-2024 16:31</span>
            </div> -->
          </div>
          <div id="notice" style="display: none;width: 100%;" class="container item" >

            <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; width: 70%;">
              <h1>Student Registration Form</h1>

              

              <?php
            

              if ($result->num_rows > 0) {
                $student = $result->fetch_assoc();
                // Display student profile form for editing
                echo "<div class='profileContainer'>";
                // echo "<h2>Edit Student Profile</h2>";
                echo "<form action='update_student_profile.php' method='post'>";

                echo "<input type='hidden' name='email' value='" . $email . "'>";
                echo "<label for='full_name'>Full Name:</label>";
                echo "<input type='text' id='full_name' name='full_name' value='" . $student['fullName'] . "'><br>";
                echo "<label for='email'>Email:</label>";
                echo "<input type='text' id='full_name' name='full_name' value='" . $student['email'] . "'><br>";
                echo "<label for='password'>Password:</label>";
                echo "<input type='password' id='password' name='password' value='" . $student['password'] . "'><br>";
                echo "<label for='branch'>Branch:</label>";
                echo "<input type='text' id='branch' name='branch' value='" . $student['branch'] . "'><br>";
                echo "<label for='class'>Class:</label>";
                echo "<input type='text' id='class' name='class' value='" . $student['class'] . "'><br>";
                echo "<label for='batch'>Batch:</label>";
                echo "<input type='text' id='batch' name='batch' value='" . $student['batch'] . "'><br>";
                echo "<input type='submit' value='Update Profile'>";
                echo "</form>";
                echo "</div>";
            } else {
                // If student profile not found
                echo "Student profile not found for the provided email.";
            }
?>

                <!-- <div class="profileContainer">
                  
                <form action="/components/studentHome.html">
                    <div class="row">
                      <div class="col-25">
                        <label for="fname">Full Name</label>
                      </div>
                      <div class="col-75">
                      
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="email">Email</label>
                      </div>
                      <div class="col-75">
                        <input type="email" id="email" name="email"  value="abc@gmail.com" placeholder="Your email..">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="password">Password</label>
                      </div>
                      <div class="col-75">
                        <input minlength=8 type="password" id="password" name="password" value="........." placeholder="Enter Password...">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="branch">Branch</label>
                      </div>
                      <div class="col-75">
                        <select id="branch" name="branch">
                          <option value="CE">CE</option>
                          <option value="IT">IT</option>
                          <option value="EC">EC</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="class">Class</label>
                      </div>
                      <div class="col-75">
                        <select id="class" name="class">
                          <option value="A">A</option>
                          <option value="B">B</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-25">
                        <label for="role">Batch</label>
                      </div>
                      <div class="col-75">
                        <select id="batch" name="batch">
                          <option value="A1">A1</option>
                          <option value="A2">A2</option>
                          <option value="A3">A3</option>
                          <option value="B1">B1</option>
                          <option value="B2">B2</option>
                          <option value="B3">B3</option>
                        </select>
                      </div>
                    </div>
                 
                    <div class="row" style="margin-top: 30px;">
                      <input type="submit" value="Save">
                    </div>
                   
                   
                  </form>
                 
                </div> -->
              </div>
          </div>
      </div>

      <script>
      
      function onChange(index){
        let classRef=document.getElementsByClassName('item')
        for (let i = 0; i < 5; i++) {
          classRef[i].style.display='none';
        }
          classRef[index].style.display='flex'
      }
        </script>
</body>

</html>
