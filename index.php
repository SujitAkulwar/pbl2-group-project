<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PBL project</title>


</head>

<body>

    <header>

        <div class="top">
            <nav class="item item1"><img src="./image/sppu.png" alt=""></nav>
            <nav class="item item2">
                <a id="name1" >PES's Modern College of Engineering, Pune</h3><a>
                <br>
                <a id="name2">BOOK MANAGEMENT SYSTEM</a>
            </nav>
            <nav class="item item3"><img src="./image/mcoe.png" alt=""></div>
        </div>

        <div class="nav_bar">
            <nav class="nava">
                <a class="navi"><img src=""></a>
                <a class="navi2" href="login.php">LOGIN</a>
                <a class="navi2" href="about.html">ABOUT</a>
                <a class="navi2" href="help.html">HELP</a>
                <a class="navi2" href="index.php">HOME</a>
            </nav>
        </div>

    </header>

    <section id="year">
        <div class="year2">

            <div class="year1">
                <div class="icon"><img src=""/></div>
                <h2>First Year</h2>
                <p></p>
            </div>

            <div class="year1">
              <div class="icon"><img src="" /></div>
              <h2>Second Year</h2>
              <p></p>
            </div>

            <div class="year1">
              <div class="icon"><img src="" /></div>
              <h2>Third Year</h2>
              <p></p>
            </div>

            <div class="year1">
              <div class="icon"><img src="" /></div>
              <h2>Fourth Year</h2>
              <p></p>
            </div>

        </div>
      </section>

    
    




</body>
<script>
    const btn = document.querySelector('#btn');
    const s1 = document.querySelector('#card_type1')
    const s2 = document.querySelector('#card_type2')
    btn.onclick = (event) => {

        if (s1.selectedIndex == 1 && s2.selectedIndex == 2) {
            window.location.href = "file:///D:/pbl2/sub/1y.html#"
        }
        else if (s1.selectedIndex == 0 || s2.selectedIndex == 0) {
            alert("Please enter correct choice!!!");
        }
        else {
            alert("books for these section are not uploaded yet, please check after some time");
        }
    };
</script>

</html>