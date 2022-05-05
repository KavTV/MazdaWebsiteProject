
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);

  $.get(
        "https://localhost:44307/api/usercar",
        {username : "jens@mail.com"},
        function(data) {
            //Change the text to the retrieved text
            document.getElementById("kmdriven").innerHTML = `${data.kmDriven} KM KØRT`;
            document.getElementById("kmleft").innerHTML = `${data.kmLeft} KM TILBAGE I TANKEN`;
        }
    );
