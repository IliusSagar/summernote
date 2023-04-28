<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Summer Note</title>

    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>



    <div class="container mt-5">
        <div class="row">
            <h1>SummerNote</h1>

            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Text" aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3">

                    <textarea name=""  cols="30" rows="10" id="summernote"></textarea>
                  </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





    <script>
         $(document).ready(function() {
            $('#summernote').summernote({
          placeholder: 'Hello Bootstrap 5',
          tabsize: 2,
          height: 100
        });
    });

      </script>
  </body>
</html>
