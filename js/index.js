
function showhide()
{
  var cardone = document.getElementById("card1");
  var cardtwo = document.getElementById("card2");
  var buttonone = document.getElementById("button1");
  var buttontwo = document.getElementById("button2");

  if (buttontwo.style.display === "none")
  {
    cardone.style.display = "none";
    cardtwo.style.display = "none";
    buttonone.style.display = "none";
    buttontwo.style.display = "block";
  }
  else
  {
    cardone.style.display = "block";
    cardtwo.style.display = "block";
    buttonone.style.display = "block";
    buttontwo.style.display = "none";
  }
}

function togglenight()
{
  var x = document.getElementById("sun");
  var y = document.getElementById("moon");
  var btn1 = document.getElementById("button1");
  var btn2 = document.getElementById("button2");
  var navi = document.getElementById("nav0");
  var bo = document.getElementsByTagName("body")[0];
  var cards = document.getElementsByClassName("card");
  var lists = document.getElementsByClassName("list-group-item");
  var i = 0;
  if (x.style.display === "none")
  {
    x.style.display = "block";
    y.style.display = "none";
    button1.style.color = "black";
    button2.style.color = "black";
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
    button1.style.color = "white";
    button2.style.color = "white";
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

function randbuild()
{
  var mysql      = require('mysql');
  var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : 'cccv',
    database : 'builds'
  });

  connection.connect();

  connection.query('SELECT 1 + 1 AS solution', function (error, results, fields) {
    if (error) throw error;
    console.log('The solution is: ', results[0].solution);
  });

  connection.end();
  var output = document.getElementById("buildz");
//  rand = Math.floor(Math.random() * Math.floor(output.title)) + 1;
}

function randchamp()
{
  var output = document.getElementById("champio");
  var ritoapi = "http://ddragon.leagueoflegends.com/cdn/10.21.1/data/en_US/champion.json";
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var champion = JSON.parse(this.responseText);
    var rand = Math.floor(Math.random() * Math.floor(151));
    output.src = `http://ddragon.leagueoflegends.com/cdn/10.21.1/img/champion/${Object.keys(champion.data)[rand]}.png`;
    }
  };
  xmlhttp.open("GET", ritoapi, true);
  xmlhttp.send();
}
