<script type="text/javascript">

  function focusPhonePrefix(id) {
    var phone = document.getElementById(id);

    if (phone.value.length == 0) {
      phone.value = '(';
    }
  }

  function blurPhonePrefix(id) {
    var phone = document.getElementById(id);

    if (phone.value === '(') {
      phone.value = '';
    }
  }

  function keyPress(e, id) {
    var phone = document.getElementById(id);

    if (phone.value.length === 0) {
      phone.value = '(';
    } else {
      var prefix = phone.value.slice(0, 1);
      if (prefix != '(') {
        phone.value = '(' + phone.value;
      }
    }

    if (e.key !== "Backspace") {
      if (phone.value.length === 4) {
        phone.value = phone.value + ')';
      }
      if (phone.value.length === 5) {
        phone.value = phone.value + ' ';
      }
      if (phone.value.length === 9) {
        phone.value = phone.value + '-';
      }
    }
  }

</script>
