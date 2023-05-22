function openForm() {
    var x = document.getElementById("myForm");
    x.style.display = "flex";
  
    var y = document.getElementById("myForm2");
    y.style.display = "none";
    
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  
  function openForm2() {
    var p  = document.getElementById("myForm2");
    p.style.display = "flex";
  
    var q  = document.getElementById("myForm");
    q.style.display = "none";
  }
  
  function closeForm2() {
    document.getElementById("myForm2").style.display = "none";
  }

    function openForm3() {
    var p  = document.getElementById("myForm3");
    p.style.display = "flex";
  }
  
  function closeForm3() {
    document.getElementById("myForm3").style.display = "none";
  }


  var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-50px";
      }
      prevScrollpos = currentScrollPos;
    }

    function redirect() {
      document.location.href="landing.php";
      
    }