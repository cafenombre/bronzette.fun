
function showhide()
{
  var cardone = document.getElementById("card1");
  var cardtwo = document.getElementById("card2");
  var buttonone = document.getElementById("button1");
  var buttontwo = document.getElementById("button2");

  if (buttontwo.style.display === "block")
  {
    cardone.style.display = "block";
    cardtwo.style.display = "block";
    buttonone.style.display = "block";
    buttontwo.style.display = "none";
  }
  else
  {
    cardone.style.display = "none";
    cardtwo.style.display = "none";
    buttonone.style.display = "none";
    buttontwo.style.display = "block";
  }
}

function togglenight()
{
  var x = document.getElementById("sun");
  var y = document.getElementById("moon");
  var navi = document.getElementById("nav0");
  var bo = document.getElementsByTagName("body")[0];
  var cards = document.getElementsByClassName("card");
  var lists = document.getElementsByClassName("list-group-item");
  var i = 0;
  if (x.style.display === "none")
  {
    x.style.display = "block";
    y.style.display = "none";
    navi.classList.toggle("navbar-light");
    navi.classList.toggle("bg-light");
    navi.classList.toggle("bg-dark");
    navi.classList.toggle("navbar-dark");
    while (i < cards.length)
    {
      cards[i].classList.toggle("text-white");
      cards[i].classList.toggle("bg-dark");
      i++;
    }
    i = 0;
    while (i < lists.length)
    {
      lists[i].classList.toggle("list-group-item-dark");
      i++;
    }
    bo.classList.remove("darkest");
    bo.classList.add("lightest");
  }
  else
  {
    x.style.display = "none";
    y.style.display = "block";
    navi.classList.toggle("navbar-light");
    navi.classList.toggle("bg-light");
    navi.classList.toggle("bg-dark");
    navi.classList.toggle("navbar-dark");
    while (i < cards.length)
    {
      cards[i].classList.toggle("text-white");
      cards[i].classList.toggle("bg-dark");
      i++;
    }
    i = 0;
    while (i < lists.length)
    {
      lists[i].classList.toggle("list-group-item-dark");
      i++;
    }
    bo.classList.remove("lightest");
    bo.classList.add("darkest");
  }
}
