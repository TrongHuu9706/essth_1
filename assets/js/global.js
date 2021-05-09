$( function count() {
    if(typeof(Storage) !== "undefined") {
      if (localStorage.clickcount) {
        localStorage.clickcount = Number(localStorage.clickcount)+1;
      } else {
        localStorage.clickcount = 1;
      }
      document.getElementById("result").innerHTML = "Ghi am duoc nghe " + localStorage.clickcount + " lần.";
    } else {
      document.getElementById("result").innerHTML = "Rất tiếc, trình duyệt của bạn không hỗ trợ Local Storage...";
    }
  })