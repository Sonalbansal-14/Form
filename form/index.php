<!DOCTYPE html>
<html lang="en">

<head>
          <title></title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- <link rel="stylesheet" href="style.css"> -->
          <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
          <style>
          * {
                    box-sizing: border-box;
                    font-family: "Open Sans", sans-serif;
          }

          .main-container {
                    display: flex;
                    flex-direction: column;
                    text-align: center;
                    align-items: center;
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    padding: 20px;
                    margin-right: 25px;
                    margin-left: 25px;
          }

          .form-container {
                    width: 400px;
                    height: 400px;
                    padding: 25px;
                    margin-top: 15px;
                    background-color: #46cc9bc3;
                    border-radius: 5px;

          }

          .message {
                    width: 100%;
                    height: 150px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: #f8f8f8;
                    font-size: 16px;
                    resize: none;
          }



          label {
                    display: inline;
                    font-size: 15px;
          }

          button {
                    background-color: #04aa6d;
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    float: center;
                    margin-top: 16px;
          }

          @media screen and (max-width: 600px) {}

          input {
                    border: none;
                    border-bottom: 0.125rem solid var(--omrs-color-ink-medium-contrast);
                    width: 100%;
                    height: 2rem;
                    font-size: 15px;
                    padding-left: 0.875rem;
                    line-height: 147.6%;
                    padding-top: 0.825rem;
                    padding-bottom: 0.5rem;
          }
          </style>

</head>

<body>
          <div class="main-container">
                    <div class="form-container">
                              <form method="POST" action="script.php">
                                        <div class="name">
                                                  <!-- <label>Name</label> -->
                                                  <input type="text" name="name" placeholder="Enter Your Name ">
                                        </div> <br>
                                        <div class="email">
                                                  <!-- <label>Email</label> -->
                                                  <input type="text" name="email" placeholder="Enter Your Email ">
                                        </div> <br>

                                        <div class="subject">
                                                  <!-- <label>subject</label> -->
                                                  <input type="text" name="subject" placeholder="Enter subject ">
                                        </div><br>
                                        <div class="message">
                                                  <!-- <label>Message</label> -->
                                                  <input type="text" name="message"
                                                            placeholder="Enter Your message here ">
                                        </div><br>
                                        <div class=" button">
                                                  <button type="submit">Submit</button>
                                        </div>

                              </form>
                    </div>
          </div>
</body>

</html>