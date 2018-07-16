$(document).ready(function () {
    ////////////////////////////////////////////////
    sessionStorage.clear();
    var quantity = 0;
    $(".plus").click(function () {
        var id = $(this).attr("id");
        // var prevValue = $('#product_quantity_' + id).val();
        // var newValue = parseInt(prevValue, 10);
        // $('#product_quantity_' + id).val(newValue);
        var img = $("#img_" + id).attr('src');
        var h6 =  $("#product_val_" + id).text();
        var price = $("#price_product_" + id).text();
        var product_quantity_val = $("#order_count_" + id).val();
        var product_quantity = parseInt(product_quantity_val,10);
        var total_price;

        if (sessionStorage.getItem(h6) === id) {
            quantity = product_quantity;
            total_price = parseInt(price,10);
            total_price = total_price * quantity;
            $(".input_" + id).val(quantity);
            $("#product_price_" + id).text(total_price + " TMT");
        }else {
            quantity = product_quantity;
            total_price = parseInt(price,10);
            total_price = total_price * quantity;
            var cart_item = "<div id='cart_item_" + id + "' class='cart-item'>" +
                "<div class='cart-item-left'>" +
                "<img src='" + img + "' alt=''>" +
                "</div>" +
                "<div class='cart-item-right'>" +
                "<h6 id='name_product'>" + h6 + "</h6>" +
                "<span id='product_price_" + id + "'>" + total_price + " TMT</span>" +
                "</div>" +
                "<span id='"+ id + "' class='delete-icon'></span>" +
                "<input data-id='"+ id +"' min='1' max='100' class='input_" + id + "' id='cart-wrap-input' type='number' value='" + quantity + "' style=''><label for='cart-wrap-input' class='input_label'>шт" + "</label>" +
                "</div>";
            sessionStorage.setItem(h6,id);
            $("#items").append(cart_item);
        }
        $.post("/cart/add/" + id, {quantity : product_quantity}, function (data) {
            var result_data = JSON.parse(data);
            $("#orders_inner").html(result_data['header']);
            $("#cart_total").html(result_data['wrap']);
            //$("#items").append(data);
            // $("#orders_inner").html(result_data['header']);
            // $("#cart_total").html(result_data['wrap']);
            // $(".cart-item-right").html(result_data['name'],result_data['price']);
            // $(".cart-item-left").html(result_data['img']);

        });
        $(".delete-icon").click(function () {
            var id = $(this).attr("id");
            $("#cart_item_" + id).remove();
            $.post("/cart/delete/" + id, {}, function (data) {
                var result_data = JSON.parse(data);
                $("#orders_inner").html(result_data['header']);
                $("#cart_total").html(result_data['wrap']);
            });
            sessionStorage.clear();
        });
        $("input[type=number]").bind('keyup', function(){
            var id = $(this).attr("data-id");
            var prevValue = $('.input_' + id).val();
            var newValue = parseInt(prevValue, 10);
            price = $("#price_product_" + id).text();
            var total_price = parseInt(price,10);
            quantity = $(".input_" + id).val();
            total_price = total_price * quantity;
            $("#product_price_" + id).text(total_price + " TMT");
            $.post("/cart/add/" + id, {quantity : newValue}, function (data) {
                var result_data = JSON.parse(data);
                $("#orders_inner").html(result_data['header']);
                $("#cart_total").html(result_data['wrap']);
            });
        });
        return false;
    });

});