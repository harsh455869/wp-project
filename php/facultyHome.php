<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    .buttons {
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

    input[type="text"],
    input[type="password"],
    input[type="email"],
    select,
    textarea {
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

    input[type="submit"] {
      background-color: #060e40;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      width: 20%;
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

    .uploadNotice {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }
    .uploadNotice input[type="text"] {
      width: 500px;
    }

    .uploadNotice button {
      width: 100px;
    }

    .uploadedNotice {
      margin-top: 40px;
      width: 70%;
    }

    .dltBtn {
      background-color: red;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      text-align: center;
    }

    .branch {
      width: 150px;
    }

    .class {
      width: 150px;
    }

    .batch {
      width: 150px;
    }
    .header{
    
    flex-direction: row;
  }
/* 
  .item {
    width: 80%;
  } */

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25,
      .col-75,
      input[type="submit"] {
        width: 80%;
        margin-top: 0;
      }
      .header{
        align-items: center;
        flex-direction: column;
      }
      .buttons{
        width: 100%;
        align-items: center;
        justify-content: center;
      }

      .uploadNotice input[type="text"] {
        width: 70%;
      }
      .uploadNotice button {
      width: 70px;
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
        <button onclick="" class="loginBtn">
          <a href="/index.html">Logout</a>
        </button>
      </div>
    </nav>
    <div class="container  header">
      <button onclick="onChange(0)" class="buttons">
        Upload College Notice
      </button>
      <button onclick="onChange(1)" class="buttons">
        Upload Departmental Notice
      </button>
      <button onclick="onChange(2)" class="buttons">
        Upload Departmental Timetable
      </button>
      <button onclick="onChange(3)" class="buttons">Upload Assignment</button>
      <button onclick="onChange(4)" class="buttons">Show Profile</button>
    </div>
    <div style="display: flex; align-items: center">
      <div id="notice" class="container item">
        <h2>Upload College Notice</h2>
        <div class="uploadNotice header">
          <input type="file" name="notice" id="notice" />
          <input type="text" placeholder="Title of Document" />
          <input type="submit" value="Upload" />
        </div>
        <div class="uploadedNotice">
            <h2 style="text-align: center;">Uploaded documents</h2>
          <table border="0.5" style="width: 100%;background-color: white;padding: 10px;margin-top: 10px">
            <tr>
              <th colspan="10" style="padding-top: 5px; padding-bottom: 20px;">Uploaded Notices</th>
              <th colspan="2">Status</th>
            </tr>
            <tr">
              <td colspan="10">MRP added Notice</td>
              <td colspan="2" style="display: flex; align-items: center; justify-content: center;">
                <button class="dltBtn">
                delete
              </button>
            </td>
            </tr>
          </table>
        </div>
        <!-- <div class="card">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quasi consequuntur eum nobis aperiam non quibusdam nam temporibus qui, exercitationem a corporis ipsam enim, odio voluptates neque! Rem, quidem labore!</p>
                <span style="float: right;">16-04-2024 16:31</span>
            </div> -->
      </div>
      <div id="notice" style="display: none;" class="container item">
        <h2>Upload Departnmental Notice</h2>
        <div class="uploadNotice header">
          <input type="file" name="notice" id="notice" />
          <input type="text" placeholder="Title of Document" />
          <select id="branch" class="branch" name="branch">
            <option value="CE">CE</option>
            <option value="IT">IT</option>
            <option value="EC">EC</option>
          </select>
          <input type="submit" value="Upload" />
        </div>
        <div class="uploadedNotice">
            <h2 style="text-align: center;">Uploaded documents</h2>
          <table border="0.5" style="width: 100%;background-color: white;padding: 10px;margin-top: 10px">
            <tr>
              <th colspan="10" style="padding-top: 5px; padding-bottom: 20px;">Uploaded Notices</th>
              <th colspan="2">Status</th>
            </tr>
            <tr">
              <td colspan="10">MRP added Notice</td>
              <td colspan="2" style="display: flex; align-items: center; justify-content: center;">
                <button class="dltBtn">
                delete
              </button>
            </td>
            </tr>
          </table>
        </div>
        <!-- <div class="card">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quasi consequuntur eum nobis aperiam non quibusdam nam temporibus qui, exercitationem a corporis ipsam enim, odio voluptates neque! Rem, quidem labore!</p>
                <span style="float: right;">16-04-2024 16:31</span>
            </div> -->
      </div>
      <div id="time" style="display: none;" class="container item">
        <h2>Time table</h2>
        <div class="uploadNotice header">
          <input type="file" name="notice" id="notice" />
          <input type="text" placeholder="Title of Document" />
          <select id="branch" class="branch" name="branch">
            <option value="CE">CE</option>
            <option value="IT">IT</option>
            <option value="EC">EC</option>
          </select>
          <select id="class" class="class" name="class">
            <option value="A">A</option>
            <option value="B">B</option>
          </select>
          <input type="submit" value="Upload" />
        </div>
        <div class="uploadedNotice">
            <h2 style="text-align: center;">Uploaded documents</h2>
          <table border="0.5" style="width: 100%;background-color: white;padding: 10px;margin-top: 10px">
            <tr>
              <th colspan="10" style="padding-top: 5px; padding-bottom: 20px;">Uploaded TimeTables</th>
              <th colspan="2">Status</th>
            </tr>
            <tr">
              <td colspan="10">CE_A</td>
              <td colspan="2" style="display: flex; align-items: center; justify-content: center;">
                <button class="dltBtn">
                delete
              </button>
            </td>
            </tr>
          </table>
        </div>
      </div>
      <div id="notice" style="display: none" class="container item">
        <h2>Assignment</h2>
        <div class="uploadNotice header">
          <input type="file" name="notice" id="notice" />
          <input type="text" placeholder="Title of Document" />
          <select id="branch" class="branch" name="branch">
            <option value="CE">CE</option>
            <option value="IT">IT</option>
            <option value="EC">EC</option>
          </select>
          <select id="batch" class="batch" name="batch">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
          </select>
          <input type="submit" value="Upload" />
        </div>
        <div class="card">
          <a href="#">Assignment 1</a>
          <span style="float: right">16-04-2024 16:31</span>
        </div>
      </div>
      <div id="notice" style="display: none;width: 100%;" class="container item">
        <div
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 70%;
          "
        >
          <h1>Faculty Profile</h1>
          <div class="profileContainer" >
            <form action="/components/studentHome.html">
              <div class="row">
                <div class="col-25">
                  <label for="fname">Full Name</label>
                </div>
                <div class="col-75">
                  <input
               
                    type="text"
                    id="fname"
                    name="firstname"
                    value="Harsh Patel"
                    placeholder="Your name.."
                 disabled />
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="email">Email</label>
                </div>
                <div class="col-75">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    value="abc@gmail.com"
                    placeholder="Your email.."
                    disabled/>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="password">Password</label>
                </div>
                <div class="col-75">
                  <input
                    minlength="8"
                    type="password"
                    id="password"
                    name="password"
                    value="........."
                    placeholder="Enter Password..."
                    disabled/>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="branch">Branch</label>
                </div>
                <div class="col-75">
                  <select id="branch" name="branch" disabled>
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
                  <select id="class" name="class" disabled>
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
                  <select id="batch" name="batch" disabled>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                  </select>
                </div>
              </div>

              <!-- <div class="row" style="margin-top: 30px">
                <input type="submit" value="Save" />
              </div> -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      function onChange(index) {
        let classRef = document.getElementsByClassName("item");
        for (let i = 0; i < 5; i++) {
          classRef[i].style.display = "none";
        }
        classRef[index].style.display = "flex";
      }
    </script>
  </body>
</html>