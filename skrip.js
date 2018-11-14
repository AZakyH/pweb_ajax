// var XMLHttpRequestObject=false;
// if (window.XMLHttpRequest) {
//   XMLHttpRequestObject = new XMLHttpRequest();
// } else if (window.ActiveXObject) {
//   XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHttp");
// }
// function getdata(url,divhasil) {
//   if (XMLHttpRequestObject) {
//     var obj = document.getElementById(divhasil);
//     XMLHttpRequestObject.open("GET", url);
//     XMLHttpRequestObject.onreadystatechange = function() {
//     if (XMLHttpRequestObject.readyState == 4 && 

// XMLHttpRequestObject.status == 200) {
//       obj.innerHTML = XMLHttpRequestObject.responseText;
//     }
//     }
//   XMLHttpRequestObject.send(null);
//   }
// }


$('#insertdong').click(function() {
    var val1 = $('#nama').val();
    var val2 = $('.gender:checked').val();
    var val3 = $('#ttl').val();
    var val4 = $('#alamat').val();
    var val5 = $('#schasal').val();
    $.ajax({
        type: 'POST',
        url: 'insert.php',
        data: { nama: val1, gender: val2, ttl: val3, alamat: val4, schasal: val5 },
        success: function(response) {
          alert("Data berhasil ditambahkan");
            //$('#result').html(response);
        }
    });
});


function tampil() {  
 if (window.XMLHttpRequest) {  
   xhttp = new XMLHttpRequest();  
  }  
 xhttp.onreadystatechange = function() {  
   if (this.readyState == 4 && this.status == 200){  
    document.getElementById("coba").innerHTML = this.responseText;  
   }  
 };  
xhttp.open("GET", "semua.php", true);  
xhttp.send();  
}

function male() {  
 if (window.XMLHttpRequest) {  
   xhttp = new XMLHttpRequest();  
  }  
 xhttp.onreadystatechange = function() {  
   if (this.readyState == 4 && this.status == 200){  
    document.getElementById("coba").innerHTML = this.responseText;  
   }  
 };  
xhttp.open("GET", "male.php", true);  
xhttp.send();  
}
 

function female() {  
 if (window.XMLHttpRequest) {  
   xhttp = new XMLHttpRequest();  
  }  
 xhttp.onreadystatechange = function() {  
   if (this.readyState == 4 && this.status == 200){  
    document.getElementById("coba").innerHTML = this.responseText;  
   }  
 };  
xhttp.open("GET", "female.php", true);  
xhttp.send();  
}
//test
// $('#button').click(function() {
//     var val1 = $('#nama').val();
//     var val2 = $('#gender').val();
//     $.ajax({
//         type: 'POST',
//         url: 'process.php',
//         data: { nama: val1, gender: val2 },
//         success: function(response) {
//             $('#result').html(response);
//         }
//     });
// });