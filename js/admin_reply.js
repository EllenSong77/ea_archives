jQuery(document).ready(function (b) {
  var a = "";
  if (b("#comments-form").length) {
    b.get("./?action=Ajax_data_zfunc_smiley_button", function (c) {
      a = c;
      b("#qt_replycontent_toolbar input:last").after(a)
    })
  }
});

function grin(a) {
  var d;
  a = " " + a + " ";
  if (document.getElementById("replycontent") && document.getElementById("replycontent").type == "textarea") {
    d = document.getElementById("replycontent")
  } else {
    return false
  }
  if (document.selection) {
    d.focus();
    sel = document.selection.createRange();
    sel.text = a;
    d.focus()
  } else {
    if (d.selectionStart || d.selectionStart == "0") {
      var c = d.selectionStart;
      var b = d.selectionEnd;
      var e = b;
      d.value = d.value.substring(0, c) + a + d.value.substring(b, d.value.length);
      e += a.length;
      d.focus();
      d.selectionStart = e;
      d.selectionEnd = e
    } else {
      d.value += a;
      d.focus()
    }
  }
};