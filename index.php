<!DOCTYPE html>
<?php 
  include("controller.php");
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/7b4c3ce3c9.js"></script>

  <script>
  

    $(document).ready(function() {
      var quote_text = "<?php echo $quote_text ?>";
      var quote_author = '<?php echo $quote_author ?>';

      $(".quote-text").html(quote_text);
      $(".quote-author").html(quote_author);

      $(".new-quote").on("click", function() {
          location.reload(); //till i learn ajax php :(
      });

    });

  </script>

  <title>Quote</title>

  <style media="screen" type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
    html,
    body {
      width: 100%;
      height: 100%;
      font-family: 'Raleway', sans-serif;
      font-weight: 400;
    }

    .main {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .quote-box {
      width: 70%;
      height: auto;
      position: relative;
      /*border: 1px solid black;*/
      padding: 20px;
    }

    .quote {
      font-weight: 400;
      font-size: 24px;
      text-align: center;
    }

    .quote-text {
      text-align: left;
    }

    .quote-text>p {
      display: inline;
    }

    .quote-author {
      font-style: italic;
      font-size: 18px;
      float: right;
    }

    .buttons {
      margin-top: 50px;
      /*display: flex;*/
      /*justify-content: space-between;*/
    }

    .tweet, .tweet:visited {
      color: rgb(29, 29, 29);
      display: none;
      float: left;
    }

    .tweet:hover{
      color: #cccccc;
    }

    .btn {
      background-color: rgb(29, 29, 29);
      color: white;
      float: right;
    }

    .btn:hover {
      border: 1px solid black;
      color: black !important;
      background-color: transparent;
    }

    .footer {
      margin-top: 70px;
      font-size: 12px;
    }

    @media only screen and (max-device-width: 480px) {
      html,
      body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
      }
      p,h2 {
        margin: 0;
        padding: 0;
      }
      .quote-box {
        width: 400px;
        height: auto;
        padding: 50px;
      }
      .quote {
        font-weight: 400;
        font-size: 20px;
      }
      .quote-author {
        font-size: 16px;
      }
    }
  </style>
</head>

<body>

  <div class="main container">

    <div class="quote-box">

      <div class="quote"> 

        <i class="fa fa-quote-left" style="font-size: 1.0em"> </i> 

        <span class="quote-text"></span>

      </div>

      <div class="quote-author"></div>

      <div class="buttons">
        <!-- <a href="" class="tweet" target="_blank"> <i class="fa fa-twitter-square fa-3x"></i> </a>  -->

        <a class="new-quote btn">New Quote</a> </div>

    </div>

    <div class="footer">

      <p>by Tolu Yussuff</p> <i></i> 

    </div>

  </div>
  
</body>

</html>
