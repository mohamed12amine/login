
        function showAlert() {
          var alert = document.querySelector('.alert');
          alert.classList.add("show");
          alert.classList.remove("hide");
          alert.classList.add("showAlert");
      
          setTimeout(function() {
            hideAlert();
          }, 5000);
        }
      
        function hideAlert() {
          var alert = document.querySelector('.alert');
          alert.classList.remove("show");
          alert.classList.add("hide");
        }
      
        var button = document.querySelector('button');
        button.addEventListener("click", showAlert);
      
        var closeBtn = document.querySelector('.close-btn');
        closeBtn.addEventListener("click", hideAlert);
    