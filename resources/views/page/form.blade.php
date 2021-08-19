@extends('index')
@section('form')
    <div class="mainForm">
        <div style="text-align: center">
            <p style="color:red">
                @php
                    if (isset($err)) {
                        // console.log($err);
                        echo $err;
                    }
                @endphp
            </p>
            <p class="title">thêm khách hàng</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data" id='form' onsubmit="return validate()">
            @csrf
            <div class="row eachRow">
                <div class="col">
                    <input type="text" class="form-control" id='mkh' name='mkh' placeholder="MKH">
                    <p id="mkhVali"></p>
                </div>
                <div class="col">
                    <div class="form-control flex-row justify-content-between">
                        <label for="cars">Gioi tinh:</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value=1>Nam</option>

                            <option value=0>Nu</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row eachRow">
                <div class="col">
                    <input type="text" class="form-control" id='fname' name='fname' placeholder="First name">
                    <p id="fnameVali"></p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id='lname' name='lname' placeholder="Last name">
                    <p id="lnameVali"></p>
                </div>
            </div>
            <div class="row eachRow">
                <div class="col">
                    <input class="form-control" id='email' name='email' placeholder="Email">
                    <p id="emailVali"></p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id='phone' name='phone' placeholder="Phone" value="">
                    <p id="phoneVali"></p>

                </div>
            </div>
            <div class="row eachRow">
                <div class="col">
                    <input type="file" class="form-control" id='avatar' name="avatar">
                </div>
            </div>
            <img id="imgPreview" src='' style="width: 300px; height: auto" />

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-xl-5 mt-4">Tạo</button>
            </div>
        </form>
    </div>
    <script>
        function validate() {
            const name =
                /^([A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂ ưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{1,})$/g;
            const nameLast =
                /^([A-Za-zÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂ ưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]{1,})$/g;
            const phone = /^0{1}[0-9]{9}$/g;
            const mkh = /^[A-Za-z]{1,}[0-9]{1,}$/g;
            const email =
                /[a-z0-9A-Z!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9A-Z!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9A-Z](?:[a-z0-9-A-Z]*[a-z0-9A-Z])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/g;

            if (mkh.test(document.getElementById('mkh').value)) {
                var mkhv = 0;
            } else {
                document.getElementById('mkhVali').innerHTML = "Mã khách hàng phải có dạng stringNumber:a1";
                document.getElementById('mkhVali').style.color = "red";
                document.getElementById('mkh').style.borderColor = "red";
                var mkhv = 1;
            }

            if (name.test(document.getElementById('fname').value)) {
                var fName = 0;
            } else {
                document.getElementById('fnameVali').innerHTML = "Sai định dạng tên";
                document.getElementById('fnameVali').style.color = "red";
                document.getElementById('fname').style.borderColor = "red";
                var fName = 1;
            }
            if (nameLast.test(document.getElementById('lname').value)) {
                var lName = 0;
            } else {
                document.getElementById('lnameVali').innerHTML = "Sai định dạng tên";
                document.getElementById('lnameVali').style.color = "red";
                document.getElementById('lname').style.borderColor = "red";
                var lName = 1;
            }
            if (phone.test(document.getElementById('phone').value)) {
                var phonev = 0;
            } else {
                document.getElementById('phoneVali').innerHTML = "Số đt k tồn tại";
                document.getElementById('phoneVali').style.color = "red";
                document.getElementById('phone').style.borderColor = "red";
                var phonev = 1;
            }

            if (email.test(document.getElementById('email').value)) {
                var emailv = 0;
            } else {
                document.getElementById('emailVali').innerHTML = "Không đúng dạng email";
                document.getElementById('emailVali').style.color = "red";
                document.getElementById('email').style.borderColor = "red";
                var emailv = 1;
            }
            // return false
            var check = mkhv + fName + lName + phonev + emailv;
            // console.log(fName, lName, phone, email, mkh)

            if (check == 0) {
                return true;
            } else {
                alert("Vui lòng điền đúng thông tin");
                return false;
            }
        }
    </script>
@endsection
