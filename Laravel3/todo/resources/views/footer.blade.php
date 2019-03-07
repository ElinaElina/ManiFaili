<!-- 
  </head>
  <body> -->
 
   <link rel="stylesheet" href="css/firstpage.css"/>
   <button onclick="topFunction ()" id="myBtn" title="Go to top">Top</button>

   <footer class="container">
        Elina Silina &copy;<script type="text/javascript">
          document.write(new Date().getFullYear());
        </script>
      </footer> 

    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"
  ></script>
  </body>
  </html>