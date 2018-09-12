    <!DOCTYPE html>
    <html>
    <body>


    // declaring the method for SUBMIT button using the name attribute as identifier
    <form METHOD="GET">

        <input type="text" name="user">
        <button>SUBMIT</button>

    </form>

    </body>
    <?php
    //loaded faster
    echo "hello world ";
    print 12;

    // how to create a variable in php
    // get the method for SUBMIT button using the name attribute as identifier
    $name = $_GET['user'];

    // here is the dot notation for concating string
    echo "\n " . $name . " is a handsome fellow";
    ?>
    </html>
