$('.owl-gbr-hot').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        375: {
            items: 2
        },
        767: {
            items: 3
        },
        890: {
            items: 4
        },
        1280: {
            items: 5
        }
    }
});

$('.btn-number').click(function (e) {
    e.preventDefault();
    let fieldName = $(this).attr('data-field');
    let type = $(this).attr('data-type');
    const input = $("input[name='" + fieldName + "']");
    const currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {
            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }
        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function () {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function () {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});
$(".input-number").keydown(function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        (e.keyCode == 65 && e.ctrlKey === true) ||
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        return;
    }
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});

function changeImage(data){
    const mainImage = document.getElementById("image-detail");
    mainImage.setAttribute("src", data);
}

function selectSize(data){
    const listSizeBtn = document.querySelectorAll(".size-button");
    const sizeSelected = document.querySelector("#size-selected");
    listSizeBtn.forEach(e=>e.classList.remove("select-button-size"));
    data.classList.toggle("select-button-size");
    console.log(data.children[0].children[0].textContent);
    sizeSelected.setAttribute('value', data.children[0].children[0].textContent);
}