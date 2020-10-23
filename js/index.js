//console.log('zoz gg');
function showhide(card1, card2, button1, button2) {
  var x = document.getElementById(card1);
  var y = document.getElementById(card2);
  var j = document.getElementById(button1);
  var k = document.getElementById(button2);

  if (x.style.display === "none")
  {
    x.style.display = "block";
    y.style.display = "block";
    j.style.display = "block";
    k.style.display = "none";
  }
  else
  {
    x.style.display = "none";
    y.style.display = "none";
    j.style.display = "none";
    k.style.display = "block";
  }
}
