$(document).ready(function () {

    $(document.body).on('click', '.status', function (res) {

        const id = res.target.dataset.id
        const status = res.target.dataset.status

        $.ajax({
            url: '/feedback/update',
            type: 'POST',
            data: {
                status: status,
                id: id
            },
            success: function (res) {
                if (res.length != 2) {
                    console.log(res)
                    window.location = "/admin/feedback";
                }
            }
        })

    });
});