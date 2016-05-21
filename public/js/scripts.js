var captionLength = 0;
var caption = '';
var cap = ['Annoyed? Get Fixified!','We are the best in town.', '24x7 work hours.', 'Anywhere anytime, just a click away.', 'Easy and reliable.'];
$(document).ready(function() {
    setInterval ('cursorAnimation()', 600);
    captionEl = $('#caption');
    var i = 0;
    caption = cap[i++];
    type();
    setTimeout(function() {
      testErasingEffect();
    }, 5000);
    setInterval(function() {
      caption = cap[i++];
      type();
      setTimeout(function() {
        testErasingEffect();
      }, 5000);
      if(i == 5)
        i = 0;
    }, 7000);
   $("#heroInner").carousel({
       interval : 2000,
       pause: false
   });
});
function cursorAnimation() {
    $('#cursor').animate({
        opacity: 0
    }, 'fast', 'swing').animate({
        opacity: 1
    }, 'fast', 'swing');
}
function type() {
    captionEl.html(caption.substr(0, captionLength++));
    if(captionLength < caption.length+1) {
        setTimeout('type()', 50);
    } else {
        captionLength = 0;
        caption = '';
    }
}
function testErasingEffect() {
    caption = captionEl.html();
    captionLength = caption.length;
    if (captionLength>0) {
        erase();
    } else {
        $('#caption').html("You didn't write anything to erase, but ok!");
        setTimeout('testErasingEffect()', 1000);
    }
}

function erase() {
    captionEl.html(caption.substr(0, captionLength--));
    if(captionLength >= 0) {
        setTimeout('erase()', 50);
    } else {
        captionLength = 0;
        caption = '';
    }
}

function searchClicked() {
  var select = 0;
  /* if selected among the options
  select = selected item no. */
  if(select)
    window.location.href = "complaint?selected=true&item=" + select;
  else
    window.location.href = "complaint?selected=false&item=" + $('#search input').val();
}
function autocompletesearch(str) {
  if (str.length==0) {
    document.getElementById("suggestions").innerHTML="";
    document.getElementById("suggestions").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("suggestions").innerHTML=xmlhttp.responseText;
      document.getElementById("suggestions").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search/autocomplete?q="+str,true);
  xmlhttp.send();
}
