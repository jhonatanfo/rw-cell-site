 

$(document).on('ready', function () {
    $('.slide-marcas').slick({
        slidesToShow: 6,
        slidesToScroll: 3,
        dots: true,
        arrows: false,
        focusOnSelect: true,
        Infinity: true
    });

    $('#lightgallery').lightGallery();

    $(".nome").focus(function () {
      $('.icon-form-nome').addClass('ativo');
    });

    $(".nome").focusout(function () {
      $('.icon-form-nome').removeClass('ativo');
    });

    $(".telefone").focus(function () {
      $('.icon-form-tel').addClass('ativo');
    });

    $(".telefone").focusout(function () {
      $('.icon-form-tel').removeClass('ativo');
    });

    $(".email").focus(function () {
      $('.icon-form-email').addClass('ativo');
    });

    $(".email").focusout(function () {
      $('.icon-form-email').removeClass('ativo');
    });

    $(".mensagem").focus(function () {
      $('.icon-form-msg').addClass('ativo');
    });

    $(".mensagem").focusout(function () {
      $('.icon-form-msg').removeClass('ativo');
    });

    $(".mapa button").click(function () {
      $('.mapa').removeClass('ativo');
    });
});

