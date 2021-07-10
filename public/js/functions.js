// Ajax send
function ajaxSend(name, phone) {

    if (name === "" || phone === "") {
        Swal.fire({
            title: "Пожалуйста, заполните все поля",
            icon: "error",
            showConfirmButton: false,
            timer: 3500,
        });
    } else {
      let data = {
        name: name,
        phone: phone,
      };
  
      var request = new XMLHttpRequest();
      request.open("POST", "/requests", true);
      request.setRequestHeader(
          "X-CSRF-TOKEN",
          document.head.querySelector("[name=csrf-token]").content
      );
      request.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
      request.send(JSON.stringify(data));
      request.onreadystatechange = Swal.showLoading();
      request.onload = function () {
          // console.log(this.statusText);
  
          if (this.status >= 200 && this.status < 400) {
              // Success!
              document.getElementById("contactModalName").value = "";
              document.getElementById("contactModalPhone").value = "";
              var resp = this.response;
              Swal.fire({
                  title: "Успешно",
                  icon: "success",
                  showConfirmButton: false,
                  timer: 3500,
              });
          } else {
              // We reached our target server, but it returned an error
              console.log(this.statusText);
              Swal.fire({
                  title: "Проверьте ваше интернет-соединение",
                  icon: "error",
                  showConfirmButton: false,
                  timer: 3500,
              });
          }
      };
      request.onerror = function () {
          // There was a connection error of some sort
          console.log("asdf");
      };  
    }

    
}

export { ajaxSend };
