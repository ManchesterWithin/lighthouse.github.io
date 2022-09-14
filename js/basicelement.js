
// jQuery скрол шапки
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});


// Поисковик
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

// Вывод почты в консоль
function sConsole(event) {
  event.preventDefault();
  var data = document.getElementById("MailPlank");
  console.log(data.value);
}

//function sConsole() {
  //var data = document.getElementById("MailPlank");
  //console.log(data.submit());
//}

$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

