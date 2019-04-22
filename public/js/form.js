function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validateForm() {
    var x = document.forms["form"]["name"].value;
    var y = document.forms["form"]["email"].value;
    var email = $("#email").val();

    if (x == "") {
        alert("Tên không được để trống!");
        return false;
    }
    else if (y == "") {
        alert("Email không được để trống!");
        return false;
    }
    else if (!validateEmail(email)) {        
        alert("Email "+email+" không hợp lệ!");
        return false;
    }
    else {
        var sdt = document.getElementById("phone").value;
        if (isNaN(sdt)) {
            alert('Số điện thoại chỉ được chứa số');
            return false;
        } else {}
    }
}