(function ($) {
  "use strict";

  $(document).on("click", ".sub-content-block", function () {
    let type = $(this).data("type");
    $("body").addClass("popupOpen");
    $(".twPopup .content-block-link.submit").attr("data-type", type);

    $(".twPopup").addClass("visible");
  });

  $(document).on(
    "click",
    ".twPopup .twPopupOverlay, .twPopup .twPopupContent .close",
    function () {
      $("body").removeClass("popupOpen");
      $(".twPopup").removeClass("visible");
    }
  );

  $(document).on(
    "click",
    ".twPopup .content-block-link.submit, .send-mail-bttn",
    function () {
      let type = $(this).data("type");
      let userId = $("#currentUserId").val();
      let el = $(this);
      let isFromContentBlock = true;

      if (el.hasClass("send-mail-bttn")) {
        isFromContentBlock = false;
      }

      if (isFromContentBlock) {
        el.parent().addClass("inactive");
      }

      $.ajax({
        method: "POST",
        url: "/wp-json/talentwave/get-information",
        data: { type: type, userId: userId, key: "wNzBnWtkGF" },
      }).done(function () {
        alert(
          "Bedankt voor je aanvraag, wij komen er zo spoedig mogelijk op terug!"
        );
        $("body").removeClass("popupOpen");
        $(".twPopup").removeClass("visible");

        if (!isFromContentBlock) {
          el.addClass("inactive");
          return;
        }

        el.parent().removeClass("inactive");
        el.parent()
          .find("p")
          .html(
            '<span class="success">Aanvraag is verstuurd en op goede wijze ontvangen!</span>'
          );
        el.parent().find(".secondary-button").remove();
      });
    }
  );
})(jQuery);
