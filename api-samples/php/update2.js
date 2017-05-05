
  function reply_click(id) {
    console.log (id);
    console.log (id.id);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "tests.php?id=" +id.id, true);
  xhttp.send();

}


