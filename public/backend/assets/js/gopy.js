$(document).ready(function () {

    $(document.body).on('click', '.nav-link', function (res) {

        const id = res.target.dataset.id
        const type = res.target.dataset.type

        $.ajax({
            url: '/set-session',
            type: 'POST',
            data: {
                id: id,
                type: type,
            },
            success: function (res) {

            }
        })

    });

    $(document.body).on('change', '.selectOption', function (res) {

        const select = $(this).children("option:selected").val()

        $('.fieldTN').empty()

        messVT = $(`
            <div class="form-group">
                <label for="">Tên Vị Thuốc</label>
                <input type="text" name="TenVT" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Tính Vị</label>
                <select name="TinhVi" class="form-control" id="">
                    <option value=""></option>
                    <option value="1">Chua</option>
                    <option value="2">Cay</option>
                    <option value="3">Đắng</option>
                    <option value="4">Mặn</option>
                    <option value="5">Ngọt</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Quy Kinh</label>
                <select name="QuyKinh" class="form-control" id="">
                    <option value=""></option>
                    <option value="1">Can</option>
                    <option value="2">Phế</option>
                    <option value="3">Tâm</option>
                    <option value="4">Thận</option>
                    <option value="5">Tỳ</option>
                    <option value="6">Vị</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Tác Dụng</label>
                <input type="text" name="TacDung" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Ứng Dụng</label>
                <input type="text" name="UngDung" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Liều Lượng</label>
                <input type="text" name="LieuLuong" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Kiêng Kị</label>
                <input type="text" name="KiengKi" class="form-control" placeholder="">
            </div>
        `)

        messPT = $(`
            <div class="form-group">
                <label for="">Tên Phương Thang</label>
                <input type="text" name="TenPT" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Phương Pháp Bào Chế</label>
                <input type="text" name="PPBC" class="form-control" placeholder="">
            </div>
            </div>
            <div class="form-group">
                <label for="">Thành Phần</label>
                <input type="text" name="ThanhPhan" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Tác Dụng</label>
                <input type="text" name="TacDung" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Liều Lượng</label>
                <input type="text" name="LieuLuong" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Kiêng Kị</label>
                <input type="text" name="KiengKi" class="form-control" placeholder="">
            </div>
        `)

        messTN = $(`
            <div class="form-group">
                <label for="">Tên Thuật Ngữ</label>
                <input type="text" name="TenTN" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Nội Dung</label>
                <input type="text" name="NoiDung" class="form-control" placeholder="">
                </textarea>
            </div>
        `)

        messBD = $(`
            <div class="form-group">
                <label for="">Tên bệnh danh</label>
                <input type="text" name="TenBD" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Nguyên Nhân</label>
                <input type="text" name="NguyenNhan" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Thể Bệnh</label>
                <input type="text" name="TheBenh" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Pháp</label>
                <input type="text" name="Phap" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Phương Thang</label>
                <input type="text" name="PhuongThang" class="form-control" placeholder="">
            </div>
        `)

        switch (select) {
            case 'vi-thuoc':
                $('.fieldTN').append(messVT)
                break;

            case 'phuong-thang':
                $('.fieldTN').append(messPT)
                break;

            case 'thuat-ngu-khac':
                $('.fieldTN').append(messTN)
                break;

            case 'benh-danh':
                $('.fieldTN').append(messBD)
                break;

            default:
                break;
        }

    });

    $(document.body).on('click', '.empty', function (res) {

        $('#formSearch')[0].reset();

    });

    $(document.body).on('click', '.gopy', function (res) {

        let name = ""

        $.ajax({
            url: '/getname',
            type: 'GET',
            success: function (res) {
                console.log(res)
            }
        })


        const test = $('#exampleModalLabelTerms');
        TenTN = $(`
            <h5 class="modal-title">Tên Thuật Ngữ</h5>
        `)
        test.empty()
        test.append(TenTN)
        // console.log(test)

    });


});