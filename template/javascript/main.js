(function($) {
    $(document).ready(function () {console.log('123');
        $(".add-to-cart").click(function () {
            var id = $(this).data("id");
            $.get("/cart/addAjax/" + id, {}, function (result) {
                console.log(result);
                $("#cart-count").html(result);
            });
            return false;
        });
    });
})(jQuery);
