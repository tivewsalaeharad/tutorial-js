<button onclick="alert('Hello!!!');">alert</button>
<button id="btn_setInterval" onclick="setInterval('foo()', 1000);">setInterval</button>

<script>
    function foo() {
        var btn = document.getElementById("btn_setInterval");
        if (btn.innerHTML == 'Интервал') btn.innerHTML = 'setInterval';
        else btn.innerHTML = 'Интервал';
    }

</script>
