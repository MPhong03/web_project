function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        a.setAttribute("style", "border-radius: 5px");
    
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            b.setAttribute("style", "border-radius: 5px");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
        
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }
  
  /*An array containing all the country names in the world:*/
  var works =  ["lao động phổ thông", 
                "nhận hàng thủ công về nhà làm", 
                "nhân viên văn phòng", 
                "tại nhà online", 
                "nhận hàng gia công về nhà làm", 
                "bán thời gian",
                "cần tuyển lái xe gấp",
                "kế toán"];
  var locations = ["a", "b", "c", "d", "e", "f"];
  
  /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  autocomplete(document.getElementById("myInput"), works);
  autocomplete(document.getElementById("myInput1"), locations);

  


  /* scripts for content3.php */
    /* to show_hide the ul list of elements */
      const dropdowns = $(".filter-dropdown")
      const clearDropdown = (e) => {
        dropdowns.each(function (item) {
          if ($(this).hasClass("dropped") && $(this) != e) {
            $(this).removeClass("dropped")
          }
        })
      }

      const clearAllDropdown = (e) => {
        dropdowns.each(function (item) {
          if ($(this).hasClass("dropped")) {
            $(this).removeClass("dropped")
          }
        })
      }

      dropdowns.each(function (item) {
        const dropItem = $(this)
        dropItem.on("click", function (e) {
          const target = e.target
          e.stopPropagation()
          const dropList = dropItem.find(".filter-dropdownlist")
          if (dropItem.hasClass("dropped") && !$(target).is('.myInputSearch')) {
            dropItem.removeClass("dropped")
          } else {
            clearDropdown(dropItem)
            dropItem.addClass("dropped")
          }

          $(document).click(function (e) {
            // if the target of the click isn't the container nor a descendant of the container
            if (!dropItem.is(e.target) && dropItem.has(e.target).length === 0) {
              clearAllDropdown()
            }
          });
        })


      })

      // $(function() { // Dropdown toggle
      //   $('.btn-filter-dropdown').click(function() { $(this).next('.filter-dropdownlist').slideToggle("fast");
      //   });

      //   $(document).click(function(e) 
      //   { 
      //   var target = e.target; 
      //   if (!$(target).is('.btn-filter-dropdown') && !$(target).parents().is('.btn-filter-dropdown') &&!$(target).is('.myInputSearch')) 
      //     { $('.filter-dropdownlist').slideUp("fast"); }

      //   });
      // });

      /* to get suggestlistitemLink in the dropdown */
      function suggestlistitemLink(i, e) {
        i.on("keyup", function () {
          var value = $(this).val().toLowerCase();
          e.filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      };
      suggestlistitemLink($("#myInput2"), $(".filter-dropdownlist-linhvuc li"));
      suggestlistitemLink($("#myInput3"), $(".filter-dropdownlist-mucluong li"));
      suggestlistitemLink($("#myInput4"), $(".filter-dropdownlist-hinhthuc li"));
      suggestlistitemLink($("#myInput5"), $(".filter-dropdownlist-diadiem li")); 

      window.onscroll = function() {myFunction()};

      var a = document.getElementById("col-centent2-right-scroll");
      
      function myFunction() {
        if (window.pageYOffset > 300) {
          a.classList.add("sticky");
        } else {
          a.classList.remove("sticky");
        }
      }

$(document).scroll(function(){
  let heigh = $(window).height()-65
  if ($(window).scrollTop()>=heigh)
    $(".format-nav").attr("style","background-color: black !important")
  else $(".format-nav").attr("style","background-color: transparent !important")
})
function script2(){
  const dropdownUser = $(".filter-dropdown-container-user");
const clearDropdownUser = (e) => {
  dropdownUser.each(function (item) {
    if ($(this).hasClass("dropped") && $(this) != e) {
      $(this).removeClass("dropped");
    }
  });
};
const clearAllDropdownUser = (e) => {
  dropdownUser.each(function (item) {
    if ($(this).hasClass("dropped")) {
      $(this).removeClass("dropped");
    }
  });
};
dropdownUser.each(function (item) {
  const dropItemUser = $(this);
  dropItemUser.on("click", function (e) {
    const target = e.target;
    e.stopPropagation();
    const dropListUser = dropItemUser.find(".filter-dropdownlist-user");
    if (dropItemUser.hasClass("dropped")) {
      dropItemUser.removeClass("dropped");
    } else {
      clearDropdownUser(dropItemUser);
      dropItemUser.addClass("dropped");
    }

    $(document).click(function (e) {
      // if the target of the click isn't the container nor a descendant of the container
      if (
        !dropItemUser.is(e.target) &&
        dropItemUser.has(e.target).length === 0
      ) {
        clearAllDropdownUser();
      }
    });
  });
});
}
$(document).ready(function () {
  script2();
})
