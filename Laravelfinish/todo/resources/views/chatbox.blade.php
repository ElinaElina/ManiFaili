<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chatbox</title>
    <link rel="stylesheet" type="text/css" href="css/chatboxNov.css" />
  </head>
  <body>
   @include('header')
    <div class="chatbox">
      <div class="chatlogs">
        <div class="chat administrator">
          <div class="chatarea">
          
          </div>
        </div>
          <!-- <div class="user-photo">
            
          </div> -->
          <p class="chat-message"></p>
        <!-- </div> -->
        <!-- <div class="chat client"> -->
          <!-- <div class="user-photo">
            
           </div> -->
           <p class="chat-message"></p>
        <!-- </div>
        <div class="chat administrator">
           <div class="user-photo">
            
          </div> --> 
          <!-- <p class="chat-message"></p> -->
        <!--  </div>
        <div class="chat client">-->
          <!-- <div class="user-photo">
            
          </div> -->
          <!-- <p class="chat-message"></p> -->
        <!-- </div> -->
        <div class="chat administrator">
          <!-- <div class="user-photo">
            
          </div>   -->
           <!-- <p class="chat-message"></p> -->
        </div>
      </div>
    
      <div class="cont">
        <input id="chatname" placeholder="Your name" required></input>
      </div>
      <div class="chat-form">
        
        <textarea class="form-control" id="defintext" type="text" ></textarea>
        <button id="send" onclick="sendMessage()" type="button">Send</button>
      
      </div>
    </div>
    
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="js/chatbox.js"></script>
    @include('footer')
  </body>
</html>
