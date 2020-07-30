<button onclick="document.getElementById('match').innerHTML = 'mydomain@merck.com'.match(regex) + ' ' + 'tivew@mail.ru'.match(regex)">match</button>
<p>match: <span id="match"></span></p>

<script>
    var regex = /[a-z0-9а-я!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9а-я!#$%&'*+/=?^_`{|}~-]+)*@merck.com/i;

</script>
