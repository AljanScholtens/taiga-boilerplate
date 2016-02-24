
      </div>

    </main>

  </div>

  <script>
    (function () {

    myHTMLInclude();

    function myHTMLInclude() {
      var z, i, a, file, xhttp;
      z = document.getElementsByTagName("*");
      for (i = 0; i < z.length; i++) {
        if (z[i].getAttribute("include-html")) {
          a = z[i].cloneNode(false);
          file = z[i].getAttribute("include-html");
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
              a.removeAttribute("include-html");
              a.innerHTML = xhttp.responseText;
              z[i].parentNode.replaceChild(a, z[i]);
              myHTMLInclude();
            }
          }
          xhttp.open("GET", file, true);
          xhttp.send();
          return;
        }
      }
    }

    })();
  </script>

</body>

</html>
