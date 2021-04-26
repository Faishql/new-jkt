<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<body>
    <div class="container">
        <div class="container-nav">
            <ul>
                <li><a class="active" href="#home"><img src="assets/home-alt.svg" alt=""></a></li>
                <li><a href="#cart"><img src="assets/cart.svg" alt=""></a></li>
                <li><a href="#notification"><img src="assets/bell.svg" alt=""></a></li>
                <li><a href="#drying"><img src="assets/sun.svg" alt=""></a></li>
                <li><a class="add" href="add-form.html"><img src="assets/plus.svg" alt=""></a></li>
            </ul>
        </div>
    @yield('content')

</body>
</html>