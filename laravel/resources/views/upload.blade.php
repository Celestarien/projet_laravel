<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Upload File</title>
    </head>
    <body>
        <form
            action="{{URL::to('/store')}}"
            enctype="multipart/form-data"
            method="post">
            <input type="file" name="sound">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <br>
            <button type="submit" name="button">Upload File</button>
        </form>


        <?php
            $d = dir("../public/storage/upload");
            echo "Pointeur: ".$d->handle."<br>\n";
            echo "Chemin: ".$d->path."<br>\n";
            while($entry = $d->read()) {
                echo $entry."<br>\n";
            }
            $d->close();
        ?>

        <figure>
            <figcaption>Fichier existants:</figcaption>
            <audio
                controls
                src="../storage/app/upload/4X6qYsgb0mYBQ0OD75FBZGOi7cLFVE7fKZnuCXnj.mpga" type="audio/mpga">
                    La navigateur ne supporte pas <code>audio</code> element.
            </audio>
        </figure>

    </body>
</html>