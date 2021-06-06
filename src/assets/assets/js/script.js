"use strict";

var $ = jQuery;
$(document).ready(function () {
  $(".event-click-input").on("click", function () {
    $(this).addClass("d-none");
    $(".event-change-input").removeClass("d-none");
  });
  $(".event-click-area").on("click", function () {
    $(this).addClass("d-none");
    $(".event-change-area").removeClass("d-none");
  });
});