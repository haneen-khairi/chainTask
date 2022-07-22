
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>WebPage</title>
</head>

<body>

    <section class="sec1">
        <div class="container">
            <div class="row">
                <div class="text-center col-md-offset-4 col-md-6 ">
                    <div class="header">
                        <h4>
                            Hello, who's this?
                        </h4>
                    </div>
                    <form action="insert.php" method="post">
                    
                        <div class="mb-3 row">
                            <label for="names" class="col-sm-2 col-form-label">First Name</label>
                            <br />
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fname"  placeholder="First Name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="lnames" class="col-sm-2 col-form-label">Last Name</label>
                            <br />

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-2 col-form-label">Mobile Number</label>
                            <br />

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                            <button type="submit" onclick="executeExample('sweetAlert')" name="submit">Submit</button>
                            <script> Swal.fire('Any fool can use a computer')</script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function executeExample(){
            swal("Good job!", "You clicked the button!", "success");
        }
      
        </script>
</body>

</html>